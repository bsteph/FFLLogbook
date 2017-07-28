<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $field->ID_F],
                ['confirm' => __('Are you sure you want to delete # {0}?', $field->ID_F)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fields'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fields form large-9 medium-8 columns content">
    <?= $this->Form->create($field) ?>
    <fieldset>
        <legend><?= __('Edit Field') ?></legend>
        <?php
            echo $this->Form->control('CALIBER_F');
            echo $this->Form->control('STATES_F');
            echo $this->Form->control('ACTION_F');
            echo $this->Form->control('TYPE_FIREARM_F');
            echo $this->Form->control('TYPE_ID_F');
            echo $this->Form->control('FINISH_F');
            echo $this->Form->control('MATERIAL_F');
            echo $this->Form->control('COLOR_F');
            echo $this->Form->control('ALIEN_DOC_F');
            echo $this->Form->control('GUN_MFG_F');
            echo $this->Form->control('GUN_IMPORTER_F');
            echo $this->Form->control('GUN_MODEL_F');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
