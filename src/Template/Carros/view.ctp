<section class="content-header">
  <h1>
    <?php echo __('Carro'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
      <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt><?= __('Nome') ?></dt>
            <dd>
              <?= h($carro->nome) ?>
            </dd>
            <dt><?= __('Categorias Carro') ?></dt>
            <dd>
              <?= $carro->has('categorias_carro') ? $carro->categorias_carro->id : '' ?>
            </dd>
            <dt><?= __('Transmissao') ?></dt>
            <dd>
              <?= h($carro->transmissao) ?>
            </dd>
            <dt><?= __('Cor') ?></dt>
            <dd>
              <?= h($carro->cor) ?>
            </dd>
            <dt><?= __('Combustivel') ?></dt>
            <dd>
              <?= h($carro->combustivel) ?>
            </dd>
            <dt><?= __('Qtd Portas') ?></dt>
            <dd>
              <?= $this->Number->format($carro->qtd_portas) ?>
            </dd>
          </dl>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- ./col -->
  </div>
  <!-- div -->

</section>
