<?php

class View {

    /**
    * funcao para incluir/renderizar uma visao
    */

	public function render($uri, $parametros = '')
	{
        if(is_array($parametros) && count($parametros)>0){
            foreach ($parametros as $key => $value){
                $$key = $value;
            }
        }
		require VIEW . '/' . $uri . '.php';
	}

    /**
    * funcao para setar uma chave e valor para uma SESSAO
    * @return String
    */

    public function userdata($chave)
    {
        $session = isset($_SESSION[$chave]) ? $_SESSION[$chave] : '';

        if(isset($_SESSION[$chave]))
            unset($_SESSION[$chave]);

        return $session;
    }

    /**
    * funcao para redirecionar para uma página
    */

    public function set_userdata($chave, $data)
    {
        return $_SESSION[$chave] = $data;
    }

}
