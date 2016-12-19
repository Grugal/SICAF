<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listar Requerimentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Adicionar Requerimento') ?></legend>
        <?php
            echo $this->Form->create($article);
            // just added the categories input
            echo $this->Form->input('category_id');
            echo $this->Form->input('aluno');
            echo $this->Form->input('turno');
            echo $this->Form->input('campus');
            echo $this->Form->input('periodo');
            echo $this->Form->input('matricula');
            echo $this->Form->input('cpf');
            echo $this->Form->input('rg');
            echo $this->Form->input('justificativa', ['rows' => '3']);
            echo $this->Form->file('arquivo');
            echo $this->Form->button(__('Salvar Requerimento'));
            echo $this->Form->end();
        ?>
    </fieldset>
    <!-- <?= $this->Form->button(__('Submit')) ?> -->
    <?= $this->Form->end() ?>
</div>