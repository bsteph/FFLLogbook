<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\GunLog[]|\Cake\Collection\CollectionInterface $gunLog
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>

    </ul>
</nav>
<div class="gunLog index large-9 medium-8 columns content">
    <h3><?= __('Gun Log') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_LOG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ID_GUN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SERIAL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EDIT_REASON') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ACTION_LOG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TIME_LOG') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gunLog as $gunLog): ?>
            <tr>
                <td><?= $this->Number->format($gunLog->ID_LOG) ?></td>
                <td><?= $this->Number->format($gunLog->ID_GUN) ?></td>
                <td><?= h($gunLog->SERIAL) ?></td>
                <td><?= h($gunLog->DATE_ACQ) ?></td>
                <td><?= h($gunLog->DATE_DISP) ?></td>
                <td><?= h($gunLog->EDIT_REASON) ?></td>
                <td><?= h($gunLog->ACTION_LOG) ?></td>
                <td><?= h($gunLog->TIME_LOG) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gunLog->ID_LOG]) ?>

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
