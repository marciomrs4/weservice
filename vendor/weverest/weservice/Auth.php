<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 18/07/15
 * Time: 19:01
 */

namespace weverest\weservice;

class Auth
{

    public function validateSecret($secret)
    {
        return $this->fazAlgumaCoisa($secret);
    }


    private function fazAlgumaCoisa($secret)
    {
        return
            array('name'=>'Nossa validacao',
                  'secret' => $secret,
                  'token' => md5($secret));
    }


}