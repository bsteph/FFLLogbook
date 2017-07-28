<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Maint $maint
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Maint'), ['action' => 'edit', $maint->ID_MAINT]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Maint'), ['action' => 'delete', $maint->ID_MAINT], ['confirm' => __('Are you sure you want to delete # {0}?', $maint->ID_MAINT)]) ?> </li>
        <li><?= $this->Html->link(__('List Maint'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maint'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maint view large-9 medium-8 columns content">
    <h3><?= h($maint->ID_MAINT) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('TYPE MAINT') ?></th>
            <td><?= h($maint->TYPE_MAINT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DESCRIPTION MAINT') ?></th>
            <td><?= h($maint->DESCRIPTION_MAINT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NOTES MAINT') ?></th>
            <td><?= h($maint->NOTES_MAINT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID MAINT') ?></th>
            <td><?= $this->Number->format($maint->ID_MAINT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DATE MAINT') ?></th>
            <td><?= h($maint->DATE_MAINT) ?></td>
        </tr>
    </table>
</div>
