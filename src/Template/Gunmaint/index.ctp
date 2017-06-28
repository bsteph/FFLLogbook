<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Gunmaint[]|\Cake\Collection\CollectionInterface $gunmaint
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gunmaint'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gunmaint index large-9 medium-8 columns content">
    <h3><?= __('Gunmaint') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_GUN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ID_MAINT') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gunmaint as $gunmaint): ?>
            <tr>
                <td><?= $this->Number->format($gunmaint->ID_GUN) ?></td>
                <td><?= $this->Number->format($gunmaint->ID_MAINT) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gunmaint->ID_GUN]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gunmaint->ID_GUN]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gunmaint->ID_GUN], ['confirm' => __('Are you sure you want to delete # {0}?', $gunmaint->ID_GUN)]) ?>
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
