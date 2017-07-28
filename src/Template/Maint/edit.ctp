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
                ['action' => 'delete', $maint->ID_MAINT],
                ['confirm' => __('Are you sure you want to delete # {0}?', $maint->ID_MAINT)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Maint'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="maint form large-9 medium-8 columns content">
    <?= $this->Form->create($maint) ?>
    <fieldset>
        <legend><?= __('Edit Maint') ?></legend>
        <?php
            echo $this->Form->control('TYPE_MAINT');
            echo $this->Form->control('DATE_MAINT', ['empty' => true]);
            echo $this->Form->control('DESCRIPTION_MAINT');
            echo $this->Form->control('NOTES_MAINT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
