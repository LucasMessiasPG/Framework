<?php $this->render('header') ?>
<form action="" method="post">
    <h3>Cadastro de Vendedor</h3>
    <p>
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" />
    </p>
    <p>
        <label for="nome">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" />
    </p>
    <p>
        <label for="nome">Endereco</label>
        <input type="text" name="endereco" class="form-control" />
    </p>
    <p>
        <label for="nome">Idade</label>
        <input type="text" name="idade" class="form-control" />
    </p>
    <p>
        <label for="nome">Data de Admissão</label>
        <input type="text" name="data_admissao" class="form-control" />
    </p>
    <p>
        <label for="nome">CPF</label>
        <input type="text" name="cpf" class="form-control" />
    </p>
    <p class="text-center">
        <input type="submit" class="btn btn-success" />
        <a href="<?php echo URL ?>" class="btn btn-default">Voltar</a>
    </p>
</form>
<?php $this->render('footer') ?>
