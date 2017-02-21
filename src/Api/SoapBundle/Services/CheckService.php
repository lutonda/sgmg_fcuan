<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 19-02-2017
 * Time: 17:23
 */

namespace Api\SoapBundle\Services;


class CheckService
{

    public function __construct()
    {
        //echo '0';
    }

    /**
     * Check soap service, display name when calle
     * @param string $name
     * @return mixed
     */
    public function check($name)
    {

        return 'Hellox '.$name;
    }
    /**
     * Checki soap service, display name when calle
     * @param string $name
     * @return mixed
     */
    public function checki($name)
    {
        echo 0;
        return 'Hello '.$name;
    }
    /**
     * Hello soap service, display name when calle
     * @param string $name
     * @return mixed
     */
    public function hello($name)
    {



        return 'Hello, '.$name;
    }
}