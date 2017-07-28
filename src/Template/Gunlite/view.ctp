<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Gunlite $gunlite
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gunlite'), ['action' => 'edit', $gunlite->ID_GUN]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gunlite'), ['action' => 'delete', $gunlite->ID_GUN], ['confirm' => __('Are you sure you want to delete # {0}?', $gunlite->ID_GUN)]) ?> </li>
        <li><?= $this->Html->link(__('List Gunlite'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gunlite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gunlite view large-9 medium-8 columns content">
    <h3><?= h($gunlite->ID_GUN) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Functions') ?></th>
            <td><?= h($gunlite->functions) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID GUN') ?></th>
            <td><?= $this->Number->format($gunlite->ID_GUN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID LITE') ?></th>
            <td><?= $this->Number->format($gunlite->ID_LITE) ?></td>
        </tr>
    </table>
</div>
