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
echo $this->Form->input('CO_ACQ');
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