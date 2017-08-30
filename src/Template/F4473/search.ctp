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
echo $this->Form->input('lname',array('label'=>'Last Name'));
echo $this->Form->input('fname',array('label'=>'First Name'));
echo $this->Form->input('name',array('label'=>'File Name'));
echo $this->Form->control('BEGIN_DATE', array(
    'label' => '4473 Created Begin Date ',
    'type' => 'date',
    'empty' => true
));
echo $this->Form->control('4473 Created END_DATE', array(
    'label' => 'End Date',
    'type' => 'date',
    'empty' => true
));

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
