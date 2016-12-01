<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Requerimentos') ?></li>
        <li><?= $this->Html->link(__('Editar Requerimento'), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Requerimento'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Requerimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Requerimento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articles view large-9 medium-8 columns content">
    <h3><?= h($article->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Aluno') ?></th>
            <td><?= h($article->aluno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Turno') ?></th>
            <td><?= h($article->turno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Período') ?></th>
            <td><?= h($article->periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matrícula') ?></th>
            <td><?= h($article->matricula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($article->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RG') ?></th>
            <td><?= h($article->rg) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($article->id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($article->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($article->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Justificativa') ?></h4>
        <?= $this->Text->autoParagraph(h($article->justificativa)); ?>
    </div>
</div>
