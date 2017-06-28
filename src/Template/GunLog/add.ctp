<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gun Log'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gunLog form large-9 medium-8 columns content">
    <?= $this->Form->create($gunLog) ?>
    <fieldset>
        <legend><?= __('Add Gun Log') ?></legend>
        <?php
            echo $this->Form->control('ID_GUN');
            echo $this->Form->control('SERIAL');
            echo $this->Form->control('MFG');
            echo $this->Form->control('IMPORTER');
            echo $this->Form->control('MODEL');
            echo $this->Form->control('CALIBER');
            echo $this->Form->control('TYPE');
            echo $this->Form->control('ANT');
            echo $this->Form->control('CR');
            echo $this->Form->control('DATE_ACQ', ['empty' => true]);
            echo $this->Form->control('FNAME_ACQ');
            echo $this->Form->control('LNAME_ACQ');
            echo $this->Form->control('LIC_ACQ');
            echo $this->Form->control('ADDR1_ACQ');
            echo $this->Form->control('ADDR2_ACQ');
            echo $this->Form->control('CITY_ACQ');
            echo $this->Form->control('STATE_ACQ');
            echo $this->Form->control('ZIP_ACQ');
            echo $this->Form->control('DATE_DISP', ['empty' => true]);
            echo $this->Form->control('FNAME_DISP');
            echo $this->Form->control('LNAME_DISP');
            echo $this->Form->control('LIC_DISP');
            echo $this->Form->control('DOB_DISP', ['empty' => true]);
            echo $this->Form->control('ADDR1_DISP');
            echo $this->Form->control('ADDR2_DISP');
            echo $this->Form->control('CITY_DISP');
            echo $this->Form->control('STATE_DISP');
            echo $this->Form->control('ZIP_DISP');
            echo $this->Form->control('ID_TYPE_DISP');
            echo $this->Form->control('ID_AUTH_DISP');
            echo $this->Form->control('ID_NUM_DISP');
            echo $this->Form->control('F4473_DISP');
            echo $this->Form->control('ALIEN_DOC');
            echo $this->Form->control('EDIT_REASON');
            echo $this->Form->control('ACTION_LOG');
            echo $this->Form->control('TIME_LOG');
            echo $this->Form->control('CO_ACQ');
            echo $this->Form->control('CO_DISP');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
