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
}
