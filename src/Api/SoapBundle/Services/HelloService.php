<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 19-02-2017
 * Time: 18:04
 */

namespace Api\SoapBundle\Services;


class HelloService
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function hello($name)
    {

        $message = \Swift_Message::newInstance()
            ->setTo('me@example.com')
            ->setSubject('Hello Service')
            ->setBody($name . ' says hi!');

        $this->mailer->send($message);

        return 'Hello, '.$name;
    }
}