<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 21-02-2017
 * Time: 12:45
 */

namespace AppBundle\security;


class encry
{
    private $_time;
    public function __construct()
    {
        $this->_time=3425;
    }

    public function open($key){

        $key=$this->_fromhexa();
        $key=$this->_uloop($key);

        return $key;
    }

    public function close($key){

        $key=$this->_loop($key);
        $key=$this->_tohexa($key);

        return $key;
    }

    private function _tohexa($key){
        return dechex($key);
    }

    private function _fromhexa($key){
        return hexdec($key);
    }

    private function _loop($key){
        $hang=1;
        for($i=0;$i<$this->_times;$i++)
                $hang=$hang*$key;
        return $hang;
    }

    private function _uloop($key){
        $hang=1;
        for($i=0;$i<$this->_times;$i++)
            $hang=$key/$hang;
        return $hang;

    }

}