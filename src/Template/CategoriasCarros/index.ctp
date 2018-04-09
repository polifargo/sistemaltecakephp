<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Categorias de Carros
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Categorias de Carros</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input id="myInput" type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="categoria-carros-table" class="table table-hover">
            <thead>
              <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categoriasCarros as $categoriasCarro): ?>
                <tr>
                  <td><?= $this->Number->format($categoriasCarro->id) ?></td>
                  <td><?= h($categoriasCarro->nome) ?></td>
                  <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoriasCarro->id], ['class'=>'btn btn-info btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriasCarro->id], ['class'=>'btn btn-warning btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriasCarro->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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

<script>
window.onload = function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#categoria-carros-table tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
}
</script>
