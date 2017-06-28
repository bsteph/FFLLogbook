<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Gunmaint $gunmaint
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gunmaint'), ['action' => 'edit', $gunmaint->ID_GUN]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gunmaint'), ['action' => 'delete', $gunmaint->ID_GUN], ['confirm' => __('Are you sure you want to delete # {0}?', $gunmaint->ID_GUN)]) ?> </li>
        <li><?= $this->Html->link(__('List Gunmaint'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gunmaint'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gunmaint view large-9 medium-8 columns content">
    <h3><?= h($gunmaint->ID_GUN) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID GUN') ?></th>
            <td><?= $this->Number->format($gunmaint->ID_GUN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID MAINT') ?></th>
            <td><?= $this->Number->format($gunmaint->ID_MAINT) ?></td>
        </tr>
    </table>
</div>
