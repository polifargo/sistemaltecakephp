<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Clientes
    <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista de') ?> Clientes</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Preencha para procurar') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filtrar') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('carros_id') ?></th>
                <th><?= $this->Paginator->sort('CPF') ?></th>
                <th><?= $this->Paginator->sort('contato') ?></th>
                <th><?= $this->Paginator->sort('cep') ?></th>
                <th><?= $this->Paginator->sort('rua') ?></th>
                <th><?= __('Ações') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($clientes as $cliente): ?>
              <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nome) ?></td>
                <td><?= $cliente->has('carro') ? $this->Html->link($cliente->carro->nome, ['controller' => 'Carros', 'action' => 'view', $cliente->carro->id]) : '' ?></td>
                <td><?= h($cliente->CPF) ?></td>
                <td><?= h($cliente->contato) ?></td>
                <td><?= h($cliente->cep) ?></td>
                <td><?= h($cliente->rua) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $cliente->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cliente->id], ['confirm' => __('Deseja mesmo deletar essa informação?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
