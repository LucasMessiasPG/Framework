<?php

class IndexController extends Controller
{
    private $vendedor;

    public function __construct()
    {
        parent::__construct();

        $this->vendedor = $this->model('vendedor');

    }

    public function listarAction()
    {
        $view = array(
           "vendedores" => $this->vendedor->listar('vendedor')
        );

        $this->view->render('vendedor/listar', $view);
    }

    public function indexAction(){

        $this->view->render('vendedor/index');
    }

    public function cadastrarAction(){

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $vendedor = $this->vendedor;

            $vendedor->setNome($_POST['nome']);
            $vendedor->setSobrenome($_POST['sobrenome']);
            $vendedor->setEndereco($_POST['endereco']);
            $vendedor->setIdade($_POST['idade']);
            $vendedor->setDataAdmissao($_POST['data_admissao']);
            $vendedor->setCpf($_POST['cpf']);


            if($this->validarPost()){
                if($this->vendedor->cadastrar())
                    $this->set_userdata('mensagem', 'Vendedor Cadastrado.');
                else
                    $this->set_userdata('error', 'Erro ao cadastrar Vendedor.');
            }

        }
        $this->view->render('vendedor/cadastrar');
    }



    public function alterarAction($id_vendedor = ''){


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $v = $this->vendedor;

            $v->setNome($_POST['nome']);
            $v->setSobrenome($_POST['sobrenome']);
            $v->setEndereco($_POST['endereco']);
            $v->setIdade($_POST['idade']);
            $v->setDataAdmissao($_POST['data_admissao']);
            $v->setCpf($_POST['cpf']);

            if($this->validarPost()){
                if($this->vendedor->alterar($id_vendedor))
                    $this->set_userdata('mensagem', 'Vendedor Alterado.');
                else
                    $this->set_userdata('error', 'Erro ao alterar Vendedor.');
            }
        }

        $vendedor = $this->validacao($id_vendedor);

        $view = array(
           "vendedor" => $vendedor
        );

        $this->view->render('vendedor/alterar', $view);
    }


    public function excluirAction($id_vendedor = '')
    {
        $vendedor = $this->validacao($id_vendedor);

        if($mensagem = $this->vendedor->excluir($id_vendedor)){
            $this->set_userdata('mensagem', $mensagem);

            $view = array('voltar' => '');

            $this->view->render('excluir', $view);
        } else {
            $this->redirect('');
        }
    }

    protected function validacao($id_vendedor = '')
    {
        $vendedor = $this->vendedor->get($id_vendedor);

        if(!$vendedor)
            $this->redirect('');

        return $vendedor;
    }

    protected function validarPost(){

            if(!$this->vendedor->validaSTR($_POST['nome'])){
                $this->set_userdata('error', 'Nome invalido.');
                return false;
            }
            elseif(!$this->vendedor->validaSTR($_POST['sobrenome'])){
                $this->set_userdata('error', 'Sobrenome  invalido.');
                return false;
            }
            elseif(!$this->vendedor->validaSTR($_POST['endereco'])){
                $this->set_userdata('error', 'Endereço  invalido.');
                return false;
            }
            elseif (!$this->vendedor->validaIdade($_POST['idade'])){
                $this->set_userdata('error', 'Idade deve ser maior ou igual que 16 e menor que 120.');
                return false;
            }
            elseif(!$this->vendedor->validaData($_POST['data_admissao'])){
                $this->set_userdata('error', 'Data  invalido.');
                return false;
            }
            elseif(!$this->vendedor->validaCPF($_POST['cpf'])){
                $this->set_userdata('error', 'CPF  invalido.');
                return false;
            }
        return true;
    }
}
