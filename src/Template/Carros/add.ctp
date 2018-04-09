<section class="content-header">
  <h1>
    Carro
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
        <?= $this->Form->create($carro, array('role' => 'form')) ?>
        <div class="box-body">
          <?php
          echo $this->Form->input('nome');
          echo $this->Form->input('categorias_carro_id', ['options' => $categoriasCarros]);
          echo $this->Form->input('transmissao',
          array(
            'type'=>'select',
            'options' => array('Manual'=>'Manual','Automatico'=>'Automatico'),
            'label' =>'Transmissão'
          )
        );
        echo $this->Form->input('cor');
        echo $this->Form->input('combustivel',
        array(
          'type'=>'select',
          'options' => array('Diesel'=>'Diesel','Etanol'=>'Etanol', 'Gasolina'=>'Gasolina'),
          'label' =>'Tipo do Combustível'
        )
      );
      echo $this->Form->input('qtd_portas',
      array(
        'type'=>'select',
        'options' => array('2'=>'Duas','4'=>'Quatro'),
        'label' =>'Quantidade de Portas'
      )
    );
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
