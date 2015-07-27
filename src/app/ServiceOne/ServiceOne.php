<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 27/07/15
 * Time: 08:50
 */

namespace app\ServiceOne;


use app\ServiceOne\model\ModelOne;
use weverest\weservice;

class ServiceOne implements weservice\IService
{

    private $model;

    private $array = array();

    public function __construct()
    {
        //Não é a melhor forma, mas um teste
        $this->model = new ModelOne();
    }

    public function setAcceptFromRoute(array $array)
    {
        //Manipula as entradas e passa para o atributo array.
        $this->array = $array;

        $user_id = $this->array['user_id'];

        $this->model->setIdUser($user_id);

        return $this;

    }

    public function getService()
    {
        try {

            return $this->model->getUser();

        }catch (\Exception $e){
            return $e->getMessage();
        }

    }

}
