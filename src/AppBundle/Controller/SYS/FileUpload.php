<?php
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

namespace AppBundle\Controller\SYS;


use AppBundle\Domain\SYS\UploadHandler;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
/*error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
$upload_handler = new UploadHandler();*/

/**
 * Upload controller.
 *
 * @Route("upload")
 */
class FileUpload extends Controller
{
    /**
     * Lists all provincium entities.
     *
     * @Route("/", name="UPLOAD_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(UploadedFile $request=null)
    {
        error_reporting(E_ALL | E_STRICT);
        $upload_handler = new UploadHandler();
        echo $upload_handler->get_full_url();

        return $this->render('io.html.twig', array(

        ));
    }
}

