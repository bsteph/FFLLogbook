<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Maint[]|\Cake\Collection\CollectionInterface $maint
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Maint'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maint index large-9 medium-8 columns content">
    <h3><?= __('Maint') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_MAINT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TYPE_MAINT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE_MAINT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DESCRIPTION_MAINT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOTES_MAINT') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maint as $maint): ?>
            <tr>
                <td><?= $this->Number->format($maint->ID_MAINT) ?></td>
                <td><?= h($maint->TYPE_MAINT) ?></td>
                <td><?= h($maint->DATE_MAINT) ?></td>
                <td><?= h($maint->DESCRIPTION_MAINT) ?></td>
                <td><?= h($maint->NOTES_MAINT) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $maint->ID_MAINT]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maint->ID_MAINT]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maint->ID_MAINT], ['confirm' => __('Are you sure you want to delete # {0}?', $maint->ID_MAINT)]) ?>
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
