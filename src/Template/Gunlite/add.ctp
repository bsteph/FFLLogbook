<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gunlite'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gunlite form large-9 medium-8 columns content">
    <?= $this->Form->create($gunlite) ?>
    <fieldset>
        <legend><?= __('Add Gunlite') ?></legend>
        <?php
            echo $this->Form->control('functions');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
