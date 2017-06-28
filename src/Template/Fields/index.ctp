<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Field[]|\Cake\Collection\CollectionInterface $fields
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Field'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fields index large-9 medium-8 columns content">
    <h3><?= __('Fields') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CALIBER_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('STATES_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ACTION_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TYPE_FIREARM_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TYPE_ID_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FINISH_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MATERIAL_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COLOR_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ALIEN_DOC_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('GUN_MFG_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('GUN_IMPORTER_F') ?></th>
                <th scope="col"><?= $this->Paginator->sort('GUN_MODEL_F') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fields as $field): ?>
            <tr>
                <td><?= $this->Number->format($field->ID_F) ?></td>
                <td><?= h($field->CALIBER_F) ?></td>
                <td><?= h($field->STATES_F) ?></td>
                <td><?= h($field->ACTION_F) ?></td>
                <td><?= h($field->TYPE_FIREARM_F) ?></td>
                <td><?= h($field->TYPE_ID_F) ?></td>
                <td><?= h($field->FINISH_F) ?></td>
                <td><?= h($field->MATERIAL_F) ?></td>
                <td><?= h($field->COLOR_F) ?></td>
                <td><?= h($field->ALIEN_DOC_F) ?></td>
                <td><?= h($field->GUN_MFG_F) ?></td>
                <td><?= h($field->GUN_IMPORTER_F) ?></td>
                <td><?= h($field->GUN_MODEL_F) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $field->ID_F]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $field->ID_F]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $field->ID_F], ['confirm' => __('Are you sure you want to delete # {0}?', $field->ID_F)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
