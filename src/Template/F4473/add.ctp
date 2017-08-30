<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List F4473'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="f4473 form large-9 medium-8 columns content">
    <?= $this->Form->create($f4473, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add F4473') ?></legend>
        <?php
            echo $this->Form->control('lname');
            echo $this->Form->control('fname');
            echo $this->Form->file('file');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Upload')) ?>
    <!--?php echo $this->Form->submit('Upload'); ?>
    <?= $this->Form->end() ?>
</div>
