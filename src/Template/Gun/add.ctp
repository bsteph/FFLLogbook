<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gun'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gun form large-9 medium-8 columns content">
    <?= $this->Form->create($gun) ?>
    <fieldset>
        <legend><?= __('Add Gun') ?></legend>
        <?php
            echo $this->Form->control('SERIAL');
            echo $this->Form->label('MFG','MANUFACTURER');
            echo $this->Form->select('MFG',$mfgs);
            echo $this->Form->control('MFG');
            echo $this->Form->control('IMPORTER');
            echo $this->Form->control('MODEL');
            echo $this->Form->label('CALIBER','CALIBER');
            echo $this->Form->select('CALIBER',$caliber);
            echo $this->Form->control('CALIBER');
            echo $this->Form->control('ACTION');
            echo $this->Form->label('TYPE','FIREARMTYPE');
            echo $this->Form->select('TYPE',$type_firearm);
            echo $this->Form->control('TYPE');
            echo $this->Form->control('STDCAP');
            echo $this->Form->control('MATERIAL');
            echo $this->Form->control('FINISH');
            echo $this->Form->control('COLOR');
            echo $this->Form->control('DATE_ACQ', ['empty' => true]);
            echo $this->Form->control('PRICE_ACQ');
            echo $this->Form->control('FNAME_ACQ');
            echo $this->Form->control('LNAME_ACQ');
            echo $this->Form->control('CO_ACQ');
            echo $this->Form->control('LIC_ACQ');
            echo $this->Form->control('ADDR1_ACQ');
            echo $this->Form->control('ADDR2_ACQ');
            echo $this->Form->control('CITY_ACQ');
            echo $this->Form->control('STATE_ACQ');
            echo $this->Form->control('ZIP_ACQ');
            echo $this->Form->control('TEL_ACQ');
            echo $this->Form->control('EMAIL_ACQ');
            echo $this->Form->control('WEB_ACQ');
            echo $this->Form->control('NOTES');
            echo $this->Form->control('PERSONAL');
            echo $this->Form->control('NFA');
            echo $this->Form->control('CR_ELIGIBLE');
            echo $this->Form->control('ANT');
            echo $this->Form->control('CR');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
