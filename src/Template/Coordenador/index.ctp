<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coordenador'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coordenador index large-9 medium-8 columns content">
    <h3><?= __('Coordenador') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coordenador as $coordenador): ?>
            <tr>
                <td><?= $this->Number->format($coordenador->id) ?></td>
                <td><?= h($coordenador->title) ?></td>
                <td><?= h($coordenador->created) ?></td>
                <td><?= h($coordenador->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coordenador->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordenador->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coordenador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordenador->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
