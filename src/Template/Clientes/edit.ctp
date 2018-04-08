<section class="content-header">
  <h1>
    Cliente
    <small><?= __('Edit') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($cliente, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('carros_id', ['options' => $carros]);
            echo $this->Form->input('CPF');
            echo $this->Form->input('contato');
            echo $this->Form->input('cep');
            echo $this->Form->input('rua');
            echo $this->Form->input('numero');
            echo $this->Form->input('complemento');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

