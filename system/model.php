<?php

abstract class Model {

	protected $driver;

	public function __construct()
	{
		//INSTANCIA O DRIVER RESPONSAVEL PELO MODELO
		require_once 'driverModel/' . DRIVER . '.php';

		$classe = DRIVER;

		$this->driver = new $classe();
	}

	/**
    * executa uma SQL
    * @return Boolean/Numeric
    */

	public function executar($sql)
	{
		$query = $this->driver->query($sql);

        $num_rows = pg_num_rows($query);

        if($num_rows > 0)
            return $num_rows;

        return false;
	}

    /**
    * faz uma transacao uma SQL com retorno de quantas linhas foram afetadas
    * @return Boolean/Numeric
    */

	public function transacao($sql)
	{
		$query = $this->driver->query($sql);

        $affected_rows = pg_affected_rows($query);

        if(pg_affected_rows($query) > 0)
            return $affected_rows;

        return false;
	}

    /**
    * retornar colunas
    * @return Object
    */

	public function getRow()
	{
		return $this->driver->getRow();
	}

    /**
    * retornar lista de objetos
    * @return Array Object
    */

	public function getRows()
	{
		return $this->driver->getRows();
	}

}
