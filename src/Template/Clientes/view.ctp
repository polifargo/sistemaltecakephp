<section class="content-header">
  <h1>
    <?php echo __('Cliente'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
      <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false])?>
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
          <h3 class="box-title"><?php echo __('Informações'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt><?= __('Nome') ?></dt>
            <dd>
              <?= h($cliente->nome) ?>
            </dd>
            <dt><?= __('Carro') ?></dt>
            <dd>
              <?= $cliente->has('carro') ? $cliente->carro->id : '' ?>
            </dd>
            <dt><?= __('CPF') ?></dt>
            <dd>
              <?= h($cliente->CPF) ?>
            </dd>
            <dt><?= __('Contato') ?></dt>
            <dd>
              <?= h($cliente->contato) ?>
            </dd>
            <dt><?= __('Cep') ?></dt>
            <dd>
              <?= h($cliente->cep) ?>
            </dd>
            <dt><?= __('Rua') ?></dt>
            <dd>
              <?= h($cliente->rua) ?>
            </dd>
            <dt><?= __('Numero') ?></dt>
            <dd>
              <?= h($cliente->numero) ?>
            </dd>
            <dt><?= __('Complemento') ?></dt>
            <dd>
              <?= h($cliente->complemento) ?>
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
