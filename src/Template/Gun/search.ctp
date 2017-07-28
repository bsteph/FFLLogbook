<h2>Search on various fields</h2>
<?php
/**
 * Created by PhpStorm.
 * User: zkn1axt
 * Date: 7/5/17
 * Time: 10:08 AM
 */


echo $this->Form->create();

// You'll need to populate $authors in the template from your controller
echo $this->Form->input('SERIAL');
echo $this->Form->input('CO_ACQ',array('label'=>'Company Acquired'));
echo $this->Form->control('BEGIN_DATE', array(
    'label' => 'Acquisitioin Begin Date ',
    'type' => 'date',
    'empty' => true
));
echo $this->Form->control('Acquisition END_DATE', array(
    'label' => 'End Date',
    'type' => 'date',
    'empty' => true
));
echo $this->Form->control('MFG',['label' => 'Manufacturer']);
echo $this->Form->control('IMPORTER');
echo $this->Form->control('F4473_DISP',['label'=>'4473 Serial Number']);
echo $this->Form->control('CO_DISP',['label'=>'Disposed Company']);
echo $this->Form->control('FNAME_DISP',['label'=>'Disposed First Name']);
echo $this->Form->control('LNAME_DISP',['label'=>'Disposed Last Name']);
echo $this->Form->control('ADDR1_DISP',['label'=>'Disposed Address 1']);

// Match the search param in your table configuration
//echo $this->Form->input('q');
echo $this->Form->button('Filter', ['type' => 'submit']);
echo $this->Html->link('Reset', ['action' => 'index']);
echo $this->Form->end();
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gun[]|\Cake\Collection\CollectionInterface $gun
 */
?>
