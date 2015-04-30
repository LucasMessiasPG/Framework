<?php
class Vendedor extends Model
{
    private $nome;

    private $sobrenome;

    private $endereco;

    private $idade;

    private $data_admissao;

    private $cpf;

    public function setNome($val)
    {
        $this->nome = $val;
    }

    public function setSobrenome($val)
    {
        $this->sobrenome = $val;
    }

    public function setEndereco($val)
    {
        $this->endereco = $val;
    }

    public function setIdade($val)
    {
        $this->idade = $val;
    }

    public function setDataAdmissao($val)
    {
        $this->data_admissao = $val;
    }

    public function setCpf($val)
    {
        $this->cpf = $val;
    }

    public function listar()
    {
        $sql = "SELECT * FROM vendedor ORDER BY nome";
        $this->executar($sql);
        return $this->getRows();
    }

    public function cadastrar(){

        $sql = "INSERT INTO vendedor (
                    nome,
                    sobrenome,
                    endereco,
                    idade,
                    data_admissao,
                    cpf
                )
                VALUES (
                    '{$this->nome}',
                    '{$this->sobrenome}',
                    '{$this->endereco}',
                    {$this->idade},
                    '{$this->data_admissao}',
                    '{$this->cpf}'
                );";

        return $this->transacao($sql);
    }

    public function alterar($id_vendedor){

        $sql = "UPDATE vendedor SET
                    nome='{$this->nome}',
                    sobrenome='{$this->sobrenome}',
                    endereco='{$this->endereco}',
                    idade={$this->idade},
                    data_admissao='{$this->data_admissao}',
                    cpf='{$this->cpf}'
                WHERE id_vendedor = $id_vendedor;";

        return $this->transacao($sql);
    }

    public function excluir($id_vendedor)
    {
        $vendedores = $this->transacao("DELETE FROM vendedor WHERE id_vendedor=$id_vendedor");

        $mensagem = '';

        if($vendedores > 0)
           $mensagem .= "Vendedor deletado.";

        if($mensagem != '')
            return $mensagem;

        return false;
    }

    public function get($id_vendedor)
    {
        $sql = "SELECT * FROM vendedor WHERE id_vendedor = $id_vendedor LIMIT 1";
        if($this->executar($sql))
            return $this->getRow();
        return false;
    }

    public function validaIdade($idade){
        if(is_numeric($idade) && $idade > 0 && $idade < 120)
            return true;
        return false;
    }

    public function validaCPF($cpf){
        if(strlen(preg_replace('/[^0-9]/','',$cpf)) == 11)
            return true;
        return false;
    }

    public function validaSTR($str){
        if(is_string($str) && $str != '' && strlen($str) > 2)
            return true;
        return false;
    }

    public function validadata($data){
        if(is_string($data) && $data != '' && strlen(str_replace('/','',$data)) >= 6)
            return true;
        return false;
    }
}
