<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 27/07/15
 * Time: 10:59
 */

namespace weverest\container;

use weverest\weservice\IService;

class ServiceContainer
{

    private $service;

    public function setServiceContainer(IService $service)
    {
        if($service instanceof IService){
            $this->service = new $service;
        }else{
            throw new \Exception();
        }

        return $this;

    }

    public function delegateService()
    {
        //$this->service;
    }
}