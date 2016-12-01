<div class="users form">

<?= $this->Flash->render('auth') ?>

<?= $this->Form->create() ?>

<fieldset>

<legend><?= __('Por favor, coloque seu ulogin e senha') ?></legend>

<?= $this->Form->input('username') ?>

<?= $this->Form->input('password') ?>

</fieldset>
<?= $this->Html->Link('Cadastre-se', ['controller' => 'Users', 'action' => 'add']) ?>

<?= $this->Form->button(__('Login')); ?>

<?= $this->Form->end() ?>


</div>