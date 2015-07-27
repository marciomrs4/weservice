<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 27/07/15
 * Time: 10:59
 */

namespace weverest\container;

class Container
{

    private $container;

    public function setContainer()
    {
        $this->container = array(
                            'auth' => new weverest\weservice\Authorization(),
                            'serviceone' => new app\ServiceOne\ServiceOne(),
                            'servicetwo' => new app\ServiceTwo\ServiceTwo(),
        );
    }

    public function getContainer($service)
    {
        return $this->container[$service];
    }
}