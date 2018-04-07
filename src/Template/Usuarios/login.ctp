<?php $this->layout = 'AdminLTE.login'; ?>

<form action="<?php echo $this->Url->build(array('controller' => 'Usuarios', 'action' => 'login')); ?>" method="post">
  <div class="form-group has-feedback">
    <?= $this->Form->control('usuario') ?>

    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <?= $this->Form->control('password') ?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
  </div>
  <div class="row">
    <!-- /.col -->
    <div class="col-xs-4">
      <?= $this->Form->button(__('Login')); ?>
    </div>
    <!-- /.col -->
  </div>
</form>
