<section class="content-header">
  <h1>
    <?php echo __('Cliente'); ?>
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
                                                                                                                <dt><?= __('Nome Cliente') ?></dt>
                                        <dd>
                                            <?= h($cliente->nome_cliente) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Carro') ?></dt>
                                <dd>
                                    <?= $cliente->has('carro') ? $cliente->carro->nome_carro : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('CPF Cliente') ?></dt>
                                        <dd>
                                            <?= h($cliente->CPF_cliente) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Telefone Cliente') ?></dt>
                                        <dd>
                                            <?= h($cliente->telefone_cliente) ?>
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
