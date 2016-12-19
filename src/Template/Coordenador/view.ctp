<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coordenador'), ['action' => 'edit', $coordenador->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coordenador'), ['action' => 'delete', $coordenador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordenador->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coordenador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordenador'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coordenador view large-9 medium-8 columns content">
    <h3><?= h($coordenador->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($coordenador->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coordenador->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($coordenador->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($coordenador->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($coordenador->body)); ?>
    </div>
</div>
