<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('TEM CERTEZA QUE QUER DELETAR # {0}?', $article->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Requerimentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Editar Requerimentos') ?></legend>
        <?php
            // echo $this->Form->input('title');
            echo $this->Form->input('justificativa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
