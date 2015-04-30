<?php

class Mysql {

	protected $db;

	protected $result;

    /**
    * faz a conexão com o banco de dados
    */

	public function __construct()
	{
		$host = HOST;
		$user = USER;
		$pass = PASSWORD;
		$dbname = DBNAME;

		$this->db = mysqli_connect(HOST,USER,PASSWORD,DBNAME);
	}

    /**
    * executa a query
    * @return Object
    */

	public function query($sql)
	{
		return $this->result = mysqli_query($this->db, $sql);
	}

    /**
    * retorna tudo em um objeto
    * @return Object
    */

	public function getRow()
	{
		return (Object) mysqli_fetch_assoc($this->result);
	}

    /**
    * retorna array de objeto
    * @return Array Object
    */

	public function getRows()
	{
		$retorno = array();
		while($data = mysqli_fetch_object($this->result)){
			$retorno[] = $data;
		}

		return $retorno;
	}

    /**
    * fecha conexão com o banco
    */

	public function close()
	{
		mysqli_close($this->db);
	}

}
