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
                ['action' => 'delete', $gunmaint->ID_GUN],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gunmaint->ID_GUN)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gunmaint'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gunmaint form large-9 medium-8 columns content">
    <?= $this->Form->create($gunmaint) ?>
    <fieldset>
        <legend><?= __('Edit Gunmaint') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
