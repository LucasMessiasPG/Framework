<?php

require 'view.php';
require 'model.php';

abstract class Controller {

	protected $view;

	public function __construct()
	{
		$this->view = new View();
	}

    /**
    * carrega model
    */

	public function model($model)
	{
		require MODEL . '/' . $model . '.php';

		$classe = ucwords($model);

		return new $classe();
	}

    /**
    * funcao para retornar SESSAO
    * @return String
    */

    public function userdata($chave)
    {
        $mensagem = $_SESSION[$chave];

        unset($_SESSION[$chave]);

        return $mensagem;
    }

    /**
    * funcao para setar uma chave e valor para uma SESSAO
    * @return String
    */

    public function set_userdata($chave, $data)
    {
        return $_SESSION[$chave] = $data;
    }

    /**
    * funcao para redirecionar para uma página
    */

    public function redirect($path = '')
    {
        header('Location: ' . URL . $path);
    }
}
