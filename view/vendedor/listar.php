<?php $this->render('header') ?>
<?php if(count($vendedores) > 0): ?>
<h3>Lista de vendedores</h3>
<table class="table">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Endereco</th>
        <th>Idade</th>
        <th>Data de Admissao</th>
        <th>CPF</th>
        <th width="150px">Ações</th>
    </thead>
    <tbody>
        <?php foreach ($vendedores as $vendedor): ?>
        <tr>
            <td><?php echo $vendedor->id_vendedor ?></td>
            <td><?php echo $vendedor->nome ?></td>
            <td><?php echo $vendedor->sobrenome ?></td>
            <td><?php echo $vendedor->endereco ?></td>
            <td><?php echo $vendedor->idade ?></td>
            <td><?php echo $vendedor->data_admissao ?></td>
            <td><?php echo preg_replace("/^(\d{3})(\d{3})(\d{3})(\d{2})$/", '$1.$2.$3-$4', $vendedor->cpf) ?></td>
            <td>
                <a href="<?php echo URL ?>index/alterar/<?php echo $vendedor->id_vendedor ?>">
                    <i class="glyphicon glyphicon-edit"></i> Alterar
                </a>
                <a class="confirmar" href="<?php echo URL ?>index/excluir/<?php echo $vendedor->id_vendedor ?>">
                    <i class="glyphicon glyphicon-remove-circle confirm"></i> Excluir
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<h3>Nenhum vendedor cadastrado.</h3>
<?php endif; ?>
<div class="text-center">
    <a href="<?php echo URL?>index/cadastrar" class="btn btn-default">Cadastrar</a>
    <a href="<?php echo URL?>" class="btn btn-default">Voltar</a>
</div>
<?php $this->render('footer') ?>
