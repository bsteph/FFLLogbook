<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Field $field
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Field'), ['action' => 'edit', $field->ID_F]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Field'), ['action' => 'delete', $field->ID_F], ['confirm' => __('Are you sure you want to delete # {0}?', $field->ID_F)]) ?> </li>
        <li><?= $this->Html->link(__('List Fields'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Field'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fields view large-9 medium-8 columns content">
    <h3><?= h($field->ID_F) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CALIBER F') ?></th>
            <td><?= h($field->CALIBER_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('STATES F') ?></th>
            <td><?= h($field->STATES_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ACTION F') ?></th>
            <td><?= h($field->ACTION_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TYPE FIREARM F') ?></th>
            <td><?= h($field->TYPE_FIREARM_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TYPE ID F') ?></th>
            <td><?= h($field->TYPE_ID_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FINISH F') ?></th>
            <td><?= h($field->FINISH_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MATERIAL F') ?></th>
            <td><?= h($field->MATERIAL_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COLOR F') ?></th>
            <td><?= h($field->COLOR_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ALIEN DOC F') ?></th>
            <td><?= h($field->ALIEN_DOC_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GUN MFG F') ?></th>
            <td><?= h($field->GUN_MFG_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GUN IMPORTER F') ?></th>
            <td><?= h($field->GUN_IMPORTER_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GUN MODEL F') ?></th>
            <td><?= h($field->GUN_MODEL_F) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID F') ?></th>
            <td><?= $this->Number->format($field->ID_F) ?></td>
        </tr>
    </table>
</div>
