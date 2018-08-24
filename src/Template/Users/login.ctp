<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        HRMS - Login
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('default.css') ?>
</head>
<body>
<?= $this->Flash->render(); 
//$this->Flash->info(sprintf('<b>%s</b> %s', h("Message"), h("New Message")), ['escape' => false]);        
?>
<div class="login-container">
    <div class="login-box animated fadeInDown">
        <div style="padding-bottom: 30px;text-align: center;"><?= $this->Html->image('mlogo.png') ?></div>
        <div class="login-body">
            <div class="login-title">Login</div>
            <?= $this->Form->create('',['class'=>'form-horizontal']) ?>
        <div class="form-group">
                <div class="col-md-12">
                <?= $this->Form->control('email',['class'=>'form-control']) ?>
                </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
            <?= $this->Form->control('password',['class'=>'form-control']) ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
            </div>
            <div class="col-md-6">
            <?= $this->Form->button('Login',['class'=>'btn btn-info btn-block']) ?>
            </div>
        </div>
            <?= $this->Form->end() ?> 
        </div>
    </div>
</div>
</body>
</html>