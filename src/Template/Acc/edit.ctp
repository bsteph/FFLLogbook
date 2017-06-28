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
                ['action' => 'delete', $acc->ID_ACC],
                ['confirm' => __('Are you sure you want to delete # {0}?', $acc->ID_ACC)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Acc'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="acc form large-9 medium-8 columns content">
    <?= $this->Form->create($acc) ?>
    <fieldset>
        <legend><?= __('Edit Acc') ?></legend>
        <?php
            echo $this->Form->control('TBLNAME_ACC');
            echo $this->Form->control('QUENAME_ACC');
            echo $this->Form->control('STROFID_ACC');
            echo $this->Form->control('DESCRIPTION_ACC');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
