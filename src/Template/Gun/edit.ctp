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
                ['action' => 'delete', $gun->ID_GUN],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gun->ID_GUN)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gun'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gun form large-9 medium-8 columns content">
    <?= $this->Form->create($gun) ?>
    <fieldset>
        <legend><?= __('Edit Gun') ?></legend>
        <?php
            echo $this->Form->control('SERIAL');
            echo $this->Form->control('MFG');
            echo $this->Form->control('IMPORTER');
            echo $this->Form->control('MODEL');
            echo $this->Form->control('CALIBER');
            echo $this->Form->control('ACTION');
            echo $this->Form->control('TYPE');
            echo $this->Form->control('ANT');
            echo $this->Form->control('CR');
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
            echo $this->Form->control('FAX_ACQ');
            echo $this->Form->control('EMAIL_ACQ');
            echo $this->Form->control('WEB_ACQ');
            echo $this->Form->control('DATE_DISP', ['empty' => true]);
            echo $this->Form->control('PRICE_DISP');
            echo $this->Form->control('FNAME_DISP');
            echo $this->Form->control('LNAME_DISP');
            echo $this->Form->control('LIC_DISP');
            echo $this->Form->control('DOB_DISP', ['empty' => true]);
            echo $this->Form->control('CO_DISP');
            echo $this->Form->control('ADDR1_DISP');
            echo $this->Form->control('ADDR2_DISP');
            echo $this->Form->control('CITY_DISP');
            echo $this->Form->control('STATE_DISP');
            echo $this->Form->control('ZIP_DISP');
            echo $this->Form->control('ID_TYPE_DISP');
            echo $this->Form->control('ID_AUTH_DISP');
            echo $this->Form->control('ID_NUM_DISP');
            echo $this->Form->control('ALIEN_DOC');
            echo $this->Form->control('ROUND_COUNT');
            echo $this->Form->control('NOTES');
            echo $this->Form->control('EDIT_REASON');
            echo $this->Form->control('PERSONAL');
            echo $this->Form->control('NFA');
            echo $this->Form->control('STATUS');
            echo $this->Form->control('NICS_STATUS');
            echo $this->Form->control('NICS_TIMEAT');
            echo $this->Form->control('NICS_EXPIRE');
            echo $this->Form->control('NICS_NUMBER');
            echo $this->Form->control('CR_ELIGIBLE');
            echo $this->Form->control('EMAIL_DISP');
            echo $this->Form->control('TEL_DISP');
            echo $this->Form->control('WEB_DISP');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
