<section class="content-header">
  <h1>
    <?php echo __('Categorias de Carro'); ?>
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
              <?= h($categoriasCarro->nome) ?>
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

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Related {0}', ['Carros']) ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">

          <?php if (!empty($categoriasCarro->carros)): ?>

            <table class="table table-hover">
              <tbody>
                <tr>

                  <th>
                    Id
                  </th>


                  <th>
                    Nome
                  </th>


                  <th>
                    Categorias Carro Id
                  </th>


                  <th>
                    Transmissao
                  </th>


                  <th>
                    Cor
                  </th>


                  <th>
                    Combustivel
                  </th>


                  <th>
                    Qtd Portas
                  </th>


                  <th>
                    <?php echo __('Ações'); ?>
                  </th>
                </tr>

                <?php foreach ($categoriasCarro->carros as $carros): ?>
                  <tr>

                    <td>
                      <?= h($carros->id) ?>
                    </td>

                    <td>
                      <?= h($carros->nome) ?>
                    </td>

                    <td>
                      <?= h($carros->categorias_carro_id) ?>
                    </td>

                    <td>
                      <?= h($carros->transmissao) ?>
                    </td>

                    <td>
                      <?= h($carros->cor) ?>
                    </td>

                    <td>
                      <?= h($carros->combustivel) ?>
                    </td>

                    <td>
                      <?= h($carros->qtd_portas) ?>
                    </td>

                    <td class="actions">
                      <?= $this->Html->link(__('Visualizar'), ['controller' => 'Carros', 'action' => 'view', $carros->id], ['class'=>'btn btn-info btn-xs']) ?>

                      <?= $this->Html->link(__('Editar'), ['controller' => 'Carros', 'action' => 'edit', $carros->id], ['class'=>'btn btn-warning btn-xs']) ?>

                      <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Carros', 'action' => 'delete', $carros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carros->id), 'class'=>'btn btn-danger btn-xs']) ?>
                    </td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>

          <?php endif; ?>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
