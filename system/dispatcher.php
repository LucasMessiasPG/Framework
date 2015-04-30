<?php

class Dispatcher {

	protected $controller;

	protected $action;

    /**
    * faz a rota para direcionar para o controller e action
    */

	public function route()
	{
        //constroi url para direcionar para controller e sua acao
		$queryString = !empty($_GET['url']) ? $_GET['url'] : 'index/index';

		$queryString = explode('/', $queryString);

		$this->controller = (!empty($queryString[0]) ? ucwords($queryString[0]) : 'Index') . 'Controller';

		$this->action = (!empty($queryString[1]) ? $queryString[1] : 'index') . 'Action';

		require CONTROLLER . '/' . $this->controller . '.php';

        $controller = new $this->controller();

        if(!method_exists($controller, $this->action)){
            echo "O método {$this->action} não existe.";

            return false;
        }

        //Se tiver parametros executa a listagem de todos os parametros
		if(count($queryString) > 2){
			$parametros = [];

			for ($i=2; $i < count($queryString); $i++) {
				$parametros[] = $queryString[$i];
			}

			call_user_func_array(array($controller, $this->action), $parametros);
		} else {
            //Executa acao sem parametros
			$action = $this->action;

			$controller->$action();
		}
	}

}
