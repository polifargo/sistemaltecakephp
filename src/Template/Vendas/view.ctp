<section class="content-header">
  <h1>
    <?php echo __('Venda'); ?>
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
                                                                                                        <dt><?= __('Cliente') ?></dt>
                                <dd>
                                    <?= $venda->has('cliente') ? $venda->cliente->nome_cliente : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Valor Total') ?></dt>
                                <dd>
                                    <?= $this->Number->format($venda->valor_total) ?>
                                </dd>
                                                                                                                <dt><?= __('Valor Pago') ?></dt>
                                <dd>
                                    <?= $this->Number->format($venda->valor_pago) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Data Vencimento') ?></dt>
                                <dd>
                                    <?= h($venda->data_vencimento) ?>
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
