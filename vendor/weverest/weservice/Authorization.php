<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 18/07/15
 * Time: 19:01
 */

namespace weverest\weservice;

class Authorization
{

    private $secret;

    private $token;

    public function validateSecret($secret)
    {
        return $this->setSecret($secret)
                    ->validate()
                    ->getToken();
    }

    private function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }

    private function getToken()
    {
        return ['token'=>$this->token,
                'client_id'=>rand(1,100),
                'expire' => 3600];
    }

    private function validate()
    {
        //instacia model e/ou repository
        //aqui podemos subtituir por outra coisa

/*        $model = $this->getModel();
          $reposiroty = $this->getRepository(); */

        if($this->secret == base64_encode(date('d-m-Y'))){

            $this->createHash();

        }else{
            $this->token = 'Not Authorized';
        }



        return $this;
    }

    private function getRepository()
    {
        //Aqui podemos chamar isolamente um repository
        return 'repository';
    }

    private function getModel()
    {
        //Aqui podemos chamar isolamente uma model
        return 'model';
    }

    private function createHash()
    {
        $salt = '654ytre';

        $this->token = md5($this->secret.$salt);
    }


}