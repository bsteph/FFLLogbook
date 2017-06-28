<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Acc[]|\Cake\Collection\CollectionInterface $acc
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Acc'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="acc index large-9 medium-8 columns content">
    <h3><?= __('Acc') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_ACC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TBLNAME_ACC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QUENAME_ACC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('STROFID_ACC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DESCRIPTION_ACC') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($acc as $acc): ?>
            <tr>
                <td><?= $this->Number->format($acc->ID_ACC) ?></td>
                <td><?= h($acc->TBLNAME_ACC) ?></td>
                <td><?= h($acc->QUENAME_ACC) ?></td>
                <td><?= h($acc->STROFID_ACC) ?></td>
                <td><?= h($acc->DESCRIPTION_ACC) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $acc->ID_ACC]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $acc->ID_ACC]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $acc->ID_ACC], ['confirm' => __('Are you sure you want to delete # {0}?', $acc->ID_ACC)]) ?>
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
