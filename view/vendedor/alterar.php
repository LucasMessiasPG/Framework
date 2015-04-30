<?php $this->render('header') ?>
<form action="" method="post">
    <h3>Alterar Vendedor</h3>
    <p>
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control"  value="<?php echo $vendedor->nome ?>"/>
    </p>
    <p>
        <label for="nome">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control"  value="<?php echo $vendedor->sobrenome ?>"/>
    </p>
    <p>
        <label for="nome">Endereco</label>
        <input type="text" name="endereco" class="form-control"  value="<?php echo $vendedor->endereco ?>"/>
    </p>
    <p>
        <label for="nome">Idade</label>
        <input type="text" name="idade" class="form-control"  value="<?php echo $vendedor->idade ?>"/>
    </p>
    <p>
        <label for="nome">Data de Admissão</label>
        <input type="text" name="data_admissao" class="form-control"  value="<?php echo $vendedor->data_admissao ?>"/>
    </p>
    <p>
        <label for="nome">CPF</label>
        <input type="text" name="cpf" class="form-control"  value="<?php echo $vendedor->cpf ?>"/>
    </p>
    <p class="text-center">
        <input type="submit" class="btn btn-success" />
        <a href="<?php echo URL ?>index/listar" class="btn btn-default">Voltar</a>
    </p>
</form>
<?php $this->render('footer') ?>
