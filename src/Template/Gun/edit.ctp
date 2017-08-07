<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Search'), ['action' => 'search']) ?></li>
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
            echo $this->Form->label('MFG','MANUFACTURER');
            echo $this->Form->select('MFG',$mfgs);
            echo $this->Form->control('IMPORTER');
            echo $this->Form->label('CALIBER','CALIBER');
            echo $this->Form->select('CALIBER',$caliber);
            echo $this->Form->label('ACTION','ACTION');
            echo $this->Form->select('ACTION',$action);
            echo $this->Form->label('TYPE','FIREARM TYPE');
            echo $this->Form->select('TYPE',$type_firearm);
            echo $this->Form->control('STDCAP',["label"=>"Standard Capacity"]);
            echo $this->Form->control('MATERIAL');
            echo $this->Form->control('FINISH');
            echo $this->Form->control('COLOR');
            echo $this->Form->control('DATE_ACQ', array(
                'label' => 'Date Acquired',
                'selected' => array(
                    'day' => '',
                    'month' => '',
                    'year' => '',
                    'hour' => '',
                    'minute' => '',
                    'second' => ''
                )
            ));
            echo $this->Form->control('PRICE_ACQ',['label'=>'Purchase Price']);
            echo $this->Form->control('FNAME_ACQ',['label'=>'Acquired First Name']);
            echo $this->Form->control('LNAME_ACQ',['label'=>'Acquired Last Name']);
            echo $this->Form->control('CO_ACQ',['label'=>'Acquired Company']);
            echo $this->Form->control('LIC_ACQ',['label'=>'Acquired License Number']);
            echo $this->Form->control('ADDR1_ACQ',['label'=>'Acquired Address 1']);
            echo $this->Form->control('ADDR2_ACQ',['label'=>'Acquired Address 2']);
            echo $this->Form->control('CITY_ACQ',['label'=>'Acquired City']);
            echo $this->Form->label('STATE_ACQ','State Acquired');
            echo $this->Form->select('STATE_ACQ',$states);
            echo $this->Form->control('ZIP_ACQ',['label'=>'Acquired Zipcode']);
            echo $this->Form->control('TEL_ACQ',['label'=>'Acquired Telephone']);
            echo $this->Form->control('EMAIL_ACQ',['label'=>'Acquired Email']);
            echo $this->Form->control('WEB_ACQ',['label'=>'Acquired Web URL']);
            echo $this->Form->control('NOTES',['label'=>'Notes']);
            echo $this->Form->control('PERSONAL',['label'=>'Personal ']);
            echo $this->Form->control('NFA');
            echo $this->Form->control('CR_ELIGIBLE',['label'=>'Curio & Relic Eligible']);
            echo $this->Form->control('ANT',['label'=>'Antique']);
            echo $this->Form->control('CR',['label'=>'Curio & Relic']);
            echo $this->Form->control('DATE_DISP', array(
                'label' => 'Date Disposed',
                'empty' => true,
                'selected' => array(
                    'day' => '',
                    'month' => '',
                    'year' => '',
                    'hour' => '',
                    'minute' => '',
                    'second' => ''

                )
            ));
            echo $this->Form->control('F4473_DISP',['label'=>'4473 Serial Number']);
            echo $this->Form->control('PRICE_DISP',['label'=>'Disposed Price']);
            echo $this->Form->control('FNAME_DISP',['label'=>'Disposed First Name']);
            echo $this->Form->control('LNAME_DISP',['label'=>'Disposed Last Name']);
            echo $this->Form->control('LIC_DISP',['label'=>'Disposed License Number']);
            echo $this->Form->control('CO_DISP',['label'=>'Disposed Company']);
            echo $this->Form->control('ADDR1_DISP',['label'=>'Disposed Address 1']);
            echo $this->Form->control('ADDR2_DISP',['label'=>'Disposed Address 2']);
            echo $this->Form->control('CITY_DISP',['label'=>'Disposed City']);
            echo $this->Form->label('STATE_DISP','Disposed State');

            echo $this->Form->select('STATE_DISP',$states);
            echo $this->Form->control('ZIP_DISP',['label'=>'Disposed Zip Code']);
            echo $this->Form->control('EDIT_REASON',['required' => true]);
            echo $this->Form->control('STATUS');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
