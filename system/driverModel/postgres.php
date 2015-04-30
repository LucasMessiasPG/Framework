<?php

class Postgres {

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

		$this->db = pg_connect("host=$host user=$user password=$pass dbname=$dbname");
	}

    /**
    * executa a query
    * @return Object
    */

	public function query($sql)
	{
		return $this->result = pg_query($this->db, $sql);
	}

    /**
    * retorna tudo em um objeto
    * @return Object
    */

	public function getRow()
	{
		return (Object) pg_fetch_assoc($this->result);
	}

    /**
    * retorna array de objeto
    * @return Array Object
    */

	public function getRows()
	{
		$retorno = array();
		while($data = pg_fetch_object($this->result)){
			$retorno[] = $data;
		}

		return $retorno;
	}

    /**
    * fecha conexão com o banco
    */

	public function close()
	{
		pg_close($this->db);
	}
}
