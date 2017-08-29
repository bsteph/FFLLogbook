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
                ['action' => 'delete', $f4473->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $f4473->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List F4473'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="f4473 form large-9 medium-8 columns content">
    <?= $this->Form->create($f4473, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit F4473') ?></legend>
        <?php
            //echo $this->Form->control('name');
            //echo $this->Form->control('type');
            echo $this->Form->file('file');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
