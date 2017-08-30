<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\F4473[]|\Cake\Collection\CollectionInterface $f4473
  */
?>
<nav class="large-2 medium-3  columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New F4473'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Search'), ['action' => 'search']) ?></li>
    </ul>
</nav>
<div class="f4473 index large-9 medium-8 columns content">
    <h3><?= __('F4473') ?></h3>
    <table style="word-wrap:break-word;cellpadding:10; cellspacing:10">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($f4473 as $f4473): ?>
            <tr>
                <td width="5"><?= $this->Number->format($f4473->id) ?></td>
                <td width="25"><?= h($f4473->name) ?></td>
                <td><?= h($f4473->lname) ?></td>
                <td><?= h($f4473->fname) ?></td>
                <td><?= $this->Number->format($f4473->size) ?></td>
                <td><?= h($f4473->created) ?></td>
                <td><?= h($f4473->modified) ?></td>
                <td class="actions">
                    <!--?//= $this->Html->link(__('View'), ['action' => 'view', $f4473->id]) ? -->
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $f4473->id]) ?>
                    <?= $this->Html->link(__('Download'), ['action' => 'download', $f4473->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $f4473->id], ['confirm' => __('Are you sure you want to delete # {0}?', $f4473->id)]) ?>
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
