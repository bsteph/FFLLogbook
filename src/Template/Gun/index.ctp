<?php

/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Gun[]|\Cake\Collection\CollectionInterface $gun
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gun'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Search'), ['action' => 'search']) ?></li>
        <li><?= $this->Html->link(
                'Save as PDF',
                [
                    'action' => 'pdfview',
                    '_ext' => 'pdf'
                ] + $this->request->query, // there it goes
                [
                    'class' => 'create-pdf-link',
                    'target' => 'blank'
                ]
            ); ?></li>
        <li><?= $this->Html->link('Save As CSV', array(
                'controller' => 'Gun',
                'action' => 'export',
                'ext' => 'csv'
            )); ?></li>
        <li><?= $this->Html->link('Export DB As CSV', array(
                'controller' => 'Gun',
                'action' => 'exportAll',
                'ext' => 'csv'
            )); ?></li>

    </ul>
</nav>
<div class="gun index large-9 medium-12 columns content  ">
    <h3><?= __('Bound Book') ?></h3>
    <table style="cellpadding:20; cellspacing:20">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID_GUN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SERIAL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MFG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IMPORTER',"Importer") ?></th>
                <th scope="col"><?= $this->Paginator->sort('MODEL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CALIBER') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TYPE','Firearm Type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE_ACQ', "Date Acquired") ?></th>
                <th scope="col"><?= $this->Paginator->sort('FNAME_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LNAME_ACQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CO_ACQ',"Company Acquired") ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE_DISP', "Date Disposed") ?></th>
                <th scope="col"><?= $this->Paginator->sort('FNAME_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LNAME_DISP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('F4473_DISP', '4473 Serial No.') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gun as $gun): ?>
            <tr>
                <td><?= $this->Number->format($gun->ID_GUN) ?></td>
                <td><?= h($gun->SERIAL) ?></td>
                <td><?= h($mfg[$gun->MFG]) ?></td>
                <td><?= h($gun->IMPORTER) ?></td>
                <td><?= h($gun->MODEL) ?></td>
                <td><?= h($caliber[$gun->CALIBER]) ?></td>
                <td><?= h($type_firearm[$gun->TYPE]) ?></td>
                <td><?= h($gun->DATE_ACQ) ?></td>
                <td><?= h($gun->FNAME_ACQ) ?></td>
                <td><?= h($gun->LNAME_ACQ) ?></td>
                <td><?= h($gun->CO_ACQ) ?></td>
                <td><?= h($gun->DATE_DISP) ?></td>
                <td><?= h($gun->FNAME_DISP) ?></td>
                <td><?= h($gun->LNAME_DISP) ?></td>
                <td><?= h($gun->F4473_DISP) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gun->ID_GUN]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gun->ID_GUN]) ?>
                    <?= $this->Html->link(
                        'PDF',
                        [
                            'action' => 'view',
                            '_ext' => 'pdf',
                            $gun->ID_GUN
                        ] + $this->request->query, // there it goes
                        [
                            'class' => 'create-pdf-link',
                            'target' => 'pdf'
                        ]
                    ); ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gun->ID_GUN], ['confirm' => __('Are you sure you want to delete # {0}?', $gun->ID_GUN)]) ?>
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
