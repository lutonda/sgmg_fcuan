<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 23-01-2017
 * Time: 19:19
 */

namespace AppBundle\Handler;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler;
use Symfony\Component\Security\Http\HttpUtils;
use Symfony\Component\Validator\Constraints\DateTime;

class AuthenticationSucessHandler extends DefaultAuthenticationSuccessHandler
{
    protected $container;

    public function __construct(HttpUtils $httpUtils,ContainerInterface $cont, array $options = array())
    {
        parent::__construct($httpUtils, $options);
        $this->container=$cont;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        $user=$token->getUser();
        $user->setLogged(new DateTime());

        $em=$this->container->get('doctrine.orm.entity_manager');

        $em->persist($user);
        $em->flush();

        return $this->httpUtils->createRedirectResponse($request, $this->determineTargetUrl($request));
    }
    protected function determineTargetUrl(Request $request)
    {

        if($this->options['always_use_default_target_path']){
            return $this->options['default_target_path'];
        }

        if($targetUrl = $request->get($this->options['target_path_parameter'],null,true)){
            return $targetUrl;
        }

        if(null!==$this->providerKey && $targetUrl=$request->getSession()->get('_security.'.$this->providerKey.'.target_path')){
            $request->getSession()->remove('_security.'.$this->providerKey.'.target_path');

            return $targetUrl;
        }

        if($this->options['use_referer']&&($targetUrl=$request->headers->get('Referer'))&& $targetUrl !==$this->httpUtils->generateUri($request,$this->options['login_path'])){
            return $targetUrl;
        }
         return $this->options['default_target_path'];
    }

}