



<section class="content-header">
  <h1>
    Cliente
    <small><?= __('Add') ?></small>
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
          echo $this->Form->input('CPF', ['id' => 'cpf']);
          echo $this->Form->input('contato', ['id' => 'contato']);
          echo $this->Form->input('cep', ['id' => 'cep']);
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

<script>
window.onload = function(){
  $("#cpf").mask("999.999.999-99");

  $("#contato").mask("(99) 9999-9999?9")
  .focusout(function (event) {
    var target, phone, element;
    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
    phone = target.value.replace(/\D/g, '');
    element = $(target);
    element.unmask();
    if(phone.length > 10) {
      element.mask("(99) 99999-999?9");
    } else {
      element.mask("(99) 9999-9999?9");
    }
  });

  $("#cep").mask("99999-999");
}
</script>
