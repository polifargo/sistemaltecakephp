<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Carros
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Carros</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
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
                <th><?= $this->Paginator->sort('categorias_carro_id') ?></th>
                <th><?= $this->Paginator->sort('transmissao') ?></th>
                <th><?= $this->Paginator->sort('cor') ?></th>
                <th><?= $this->Paginator->sort('combustivel') ?></th>
                <th><?= $this->Paginator->sort('qtd_portas') ?></th>
                <th><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($carros as $carro): ?>
              <tr>
                <td><?= $this->Number->format($carro->id) ?></td>
                <td><?= h($carro->nome) ?></td>
                <td><?= $carro->has('categorias_carro') ? $this->Html->link($carro->categorias_carro->id, ['controller' => 'CategoriasCarros', 'action' => 'view', $carro->categorias_carro->id]) : '' ?></td>
                <td><?= h($carro->transmissao) ?></td>
                <td><?= h($carro->cor) ?></td>
                <td><?= h($carro->combustivel) ?></td>
                <td><?= $this->Number->format($carro->qtd_portas) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $carro->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carro->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carro->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
