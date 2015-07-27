<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 27/07/15
 * Time: 08:50
 */

namespace app\ServiceOne\repository;

use weverest\weservice;

class RepositoryOne implements weservice\IRepository
{

    private $pdo;

    public function __construct()
    {
        //Recebe de um config, os parametros do
        //$this->pdo = new \PDO()
    }

    public function getUserById($id)
    {
        //Retorna um Array de Exemplo, como se fosse do banco
        return [
            ['name' => 'Diogo Brito',
                'email'=>'brito@weverest.com.br']
        ];
    }


}