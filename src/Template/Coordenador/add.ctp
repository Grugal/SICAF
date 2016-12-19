<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Coordenador'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coordenador form large-9 medium-8 columns content">
    <?= $this->Form->create($coordenador) ?>
    <fieldset>
        <legend><?= __('Add Coordenador') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('body');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
