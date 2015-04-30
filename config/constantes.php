<?php

//CONSTANTE DE CONTROLADOR PARA O SISTEMA
define('CONTROLLER', 'controller');

//CONSTANTE DE VIEW PARA O SISTEMA
define('VIEW', 'view');

//CONSTANTE DE VIEW PARA O SISTEMA
define('MODEL', 'model');

define('URL', 'http://localhost/framework/');
define('PUBLICO', 'http://localhost/framework/public/');

//DEFINICOES PARA O BANCO DE DADOS
define('DRIVER', 'postgres');
define('HOST', 'localhost');
define('USER', 'postgres');
define('PASSWORD', 'postgres');
define('DBNAME', 'funcionarios');


/*
CREATE TABLE vendedor
(
  id_vendedor serial,
  nome VARCHAR(255),
  sobrenome VARCHAR(255),
  endereco VARCHAR(255),
  idade INT,
  data_admissao VARCHAR(255),
  cpf VARCHAR(255),
  PRIMARY KEY (id_vendedor)
);
*/
