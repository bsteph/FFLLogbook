<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\GunLog[]|\Cake\Collection\CollectionInterface $gunLog
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gun Log'), ['action' => 'add']) ?></li>
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
                <th scope="col"><?= $this->Paginator->sort('MFG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IMPORTER') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MODEL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CALIBER') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TYPE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ANT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CR') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FNAME_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LNAME_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LIC_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADDR1_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADDR2_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CITY_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('STATE_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ZIP_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FNAME_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LNAME_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LIC_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DOB_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADDR1_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADDR2_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CITY_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('STATE_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ZIP_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ID_TYPE_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ID_AUTH_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ID_NUM_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('F4473_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ALIEN_DOC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EDIT_REASON') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ACTION_LOG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TIME_LOG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CO_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CO_DISP') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gunLog as $gunLog): ?>
            <tr>
                <td><?= $this->Number->format($gunLog->ID_LOG) ?></td>
                <td><?= $this->Number->format($gunLog->ID_GUN) ?></td>
                <td><?= h($gunLog->SERIAL) ?></td>
                <td><?= h($gunLog->MFG) ?></td>
                <td><?= h($gunLog->IMPORTER) ?></td>
                <td><?= h($gunLog->MODEL) ?></td>
                <td><?= h($gunLog->CALIBER) ?></td>
                <td><?= h($gunLog->TYPE) ?></td>
                <td><?= h($gunLog->ANT) ?></td>
                <td><?= h($gunLog->CR) ?></td>
                <td><?= h($gunLog->DATE_ACQ) ?></td>
                <td><?= h($gunLog->FNAME_ACQ) ?></td>
                <td><?= h($gunLog->LNAME_ACQ) ?></td>
                <td><?= h($gunLog->LIC_ACQ) ?></td>
                <td><?= h($gunLog->ADDR1_ACQ) ?></td>
                <td><?= h($gunLog->ADDR2_ACQ) ?></td>
                <td><?= h($gunLog->CITY_ACQ) ?></td>
                <td><?= h($gunLog->STATE_ACQ) ?></td>
                <td><?= h($gunLog->ZIP_ACQ) ?></td>
                <td><?= h($gunLog->DATE_DISP) ?></td>
                <td><?= h($gunLog->FNAME_DISP) ?></td>
                <td><?= h($gunLog->LNAME_DISP) ?></td>
                <td><?= h($gunLog->LIC_DISP) ?></td>
                <td><?= h($gunLog->DOB_DISP) ?></td>
                <td><?= h($gunLog->ADDR1_DISP) ?></td>
                <td><?= h($gunLog->ADDR2_DISP) ?></td>
                <td><?= h($gunLog->CITY_DISP) ?></td>
                <td><?= h($gunLog->STATE_DISP) ?></td>
                <td><?= h($gunLog->ZIP_DISP) ?></td>
                <td><?= h($gunLog->ID_TYPE_DISP) ?></td>
                <td><?= h($gunLog->ID_AUTH_DISP) ?></td>
                <td><?= h($gunLog->ID_NUM_DISP) ?></td>
                <td><?= h($gunLog->F4473_DISP) ?></td>
                <td><?= h($gunLog->ALIEN_DOC) ?></td>
                <td><?= h($gunLog->EDIT_REASON) ?></td>
                <td><?= h($gunLog->ACTION_LOG) ?></td>
                <td><?= h($gunLog->TIME_LOG) ?></td>
                <td><?= h($gunLog->CO_ACQ) ?></td>
                <td><?= h($gunLog->CO_DISP) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gunLog->ID_LOG]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gunLog->ID_LOG]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gunLog->ID_LOG], ['confirm' => __('Are you sure you want to delete # {0}?', $gunLog->ID_LOG)]) ?>
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
