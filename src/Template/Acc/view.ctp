<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Acc $acc
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Acc'), ['action' => 'edit', $acc->ID_ACC]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Acc'), ['action' => 'delete', $acc->ID_ACC], ['confirm' => __('Are you sure you want to delete # {0}?', $acc->ID_ACC)]) ?> </li>
        <li><?= $this->Html->link(__('List Acc'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Acc'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="acc view large-9 medium-8 columns content">
    <h3><?= h($acc->ID_ACC) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('TBLNAME ACC') ?></th>
            <td><?= h($acc->TBLNAME_ACC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QUENAME ACC') ?></th>
            <td><?= h($acc->QUENAME_ACC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('STROFID ACC') ?></th>
            <td><?= h($acc->STROFID_ACC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DESCRIPTION ACC') ?></th>
            <td><?= h($acc->DESCRIPTION_ACC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID ACC') ?></th>
            <td><?= $this->Number->format($acc->ID_ACC) ?></td>
        </tr>
    </table>
</div>
