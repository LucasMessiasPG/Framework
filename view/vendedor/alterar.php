<?php $this->render('header') ?>
<form action="" method="post">
    <h3>Alterar Vendedor</h3>
    <div>
        <label for="nome">Nome</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" name="nome" class="form-control"  value="<?php echo $vendedor->nome ?>"/>
        </div>
    </div>
    <div>
        <label for="nome">Sobrenome</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" name="sobrenome" class="form-control"  value="<?php echo $vendedor->sobrenome ?>"/>
        </div>
    </div>
    <div>
        <label for="nome">Endereco</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
            <input type="text" name="endereco" class="form-control"  value="<?php echo $vendedor->endereco ?>"/>
        </div>
    </div>
    <div>
        <label for="nome">Idade</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
            <input type="text" name="idade" class="form-control"  value="<?php echo $vendedor->idade ?>"/>
        </div>
    </div>
    <div>
        <label for="nome">Data de Admissão</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input type="text" name="data_admissao" class="form-control"  value="<?php echo $vendedor->data_admissao ?>"/>
        </div>
    </div>
    <div>
        <label for="nome">CPF</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
            <input type="text" name="cpf" class="form-control"  value="<?php echo $vendedor->cpf ?>"/>
        </div>
    </div>
    <br />
    <div class="text-center">
        <input type="submit" class="btn btn-success" value="Alterar" />
        <a href="<?php echo URL ?>index/listar" class="btn btn-default">Voltar</a>
    </div>
</form>
<?php $this->render('footer') ?>
