<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\GunLog $gunLog
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gun Log'), ['action' => 'edit', $gunLog->ID_LOG]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gun Log'), ['action' => 'delete', $gunLog->ID_LOG], ['confirm' => __('Are you sure you want to delete # {0}?', $gunLog->ID_LOG)]) ?> </li>
        <li><?= $this->Html->link(__('List Gun Log'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gun Log'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gunLog view large-9 medium-8 columns content">
    <h3><?= h($gunLog->ID_LOG) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('OLD SERIAL') ?></th>
            <td><?= h($gunLog->OLD_SERIAL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SERIAL') ?></th>
            <td><?= h($gunLog->SERIAL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD MFG') ?></th>
            <td><?= h($gunLog->OLD_MFG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MFG') ?></th>
            <td><?= h($gunLog->MFG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD IMPORTER') ?></th>
            <td><?= h($gunLog->OLD_IMPORTER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IMPORTER') ?></th>
            <td><?= h($gunLog->IMPORTER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD MODEL') ?></th>
            <td><?= h($gunLog->OLD_MODEL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MODEL') ?></th>
            <td><?= h($gunLog->MODEL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD CALIBER') ?></th>
            <td><?= h($gunLog->OLD_CALIBER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CALIBER') ?></th>
            <td><?= h($gunLog->CALIBER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD TYPE') ?></th>
            <td><?= h($gunLog->OLD_TYPE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TYPE') ?></th>
            <td><?= h($gunLog->TYPE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD FNAME ACQ') ?></th>
            <td><?= h($gunLog->OLD_FNAME_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FNAME ACQ') ?></th>
            <td><?= h($gunLog->FNAME_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD LNAME ACQ') ?></th>
            <td><?= h($gunLog->OLD_LNAME_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LNAME ACQ') ?></th>
            <td><?= h($gunLog->LNAME_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD LIC ACQ') ?></th>
            <td><?= h($gunLog->OLD_LIC_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LIC ACQ') ?></th>
            <td><?= h($gunLog->LIC_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD ADDR1 ACQ') ?></th>
            <td><?= h($gunLog->OLD_ADDR1_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADDR1 ACQ') ?></th>
            <td><?= h($gunLog->ADDR1_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD ADDR2 ACQ') ?></th>
            <td><?= h($gunLog->OLD_ADDR2_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADDR2 ACQ') ?></th>
            <td><?= h($gunLog->ADDR2_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD CITY ACQ') ?></th>
            <td><?= h($gunLog->OLD_CITY_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CITY ACQ') ?></th>
            <td><?= h($gunLog->CITY_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD STATE ACQ') ?></th>
            <td><?= h($gunLog->OLD_STATE_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('STATE ACQ') ?></th>
            <td><?= h($gunLog->STATE_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD ZIP ACQ') ?></th>
            <td><?= h($gunLog->OLD_ZIP_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ZIP ACQ') ?></th>
            <td><?= h($gunLog->ZIP_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD FNAME DISP') ?></th>
            <td><?= h($gunLog->OLD_FNAME_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FNAME DISP') ?></th>
            <td><?= h($gunLog->FNAME_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD LNAME DISP') ?></th>
            <td><?= h($gunLog->OLD_LNAME_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LNAME DISP') ?></th>
            <td><?= h($gunLog->LNAME_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD LIC DISP') ?></th>
            <td><?= h($gunLog->OLD_LIC_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LIC DISP') ?></th>
            <td><?= h($gunLog->LIC_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD ADDR1 DISP') ?></th>
            <td><?= h($gunLog->OLD_ADDR1_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADDR1 DISP') ?></th>
            <td><?= h($gunLog->ADDR1_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD ADDR2 DISP') ?></th>
            <td><?= h($gunLog->OLD_ADDR2_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADDR2 DISP') ?></th>
            <td><?= h($gunLog->ADDR2_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD CITY DISP') ?></th>
            <td><?= h($gunLog->OLD_CITY_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CITY DISP') ?></th>
            <td><?= h($gunLog->CITY_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD STATE DISP') ?></th>
            <td><?= h($gunLog->OLD_STATE_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('STATE DISP') ?></th>
            <td><?= h($gunLog->STATE_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD ZIP DISP') ?></th>
            <td><?= h($gunLog->OLD_ZIP_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ZIP DISP') ?></th>
            <td><?= h($gunLog->ZIP_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EDIT REASON') ?></th>
            <td><?= h($gunLog->EDIT_REASON) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ACTION LOG') ?></th>
            <td><?= h($gunLog->ACTION_LOG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD CO ACQ') ?></th>
            <td><?= h($gunLog->OLD_CO_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CO ACQ') ?></th>
            <td><?= h($gunLog->CO_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD CO DISP') ?></th>
            <td><?= h($gunLog->OLD_CO_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CO DISP') ?></th>
            <td><?= h($gunLog->CO_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID LOG') ?></th>
            <td><?= $this->Number->format($gunLog->ID_LOG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID GUN') ?></th>
            <td><?= $this->Number->format($gunLog->ID_GUN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD DATE ACQ') ?></th>
            <td><?= h($gunLog->OLD_DATE_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DATE ACQ') ?></th>
            <td><?= h($gunLog->DATE_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD DATE DISP') ?></th>
            <td><?= h($gunLog->OLD_DATE_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DATE DISP') ?></th>
            <td><?= h($gunLog->DATE_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TIME LOG') ?></th>
            <td><?= h($gunLog->TIME_LOG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD ANT') ?></th>
            <td><?= $gunLog->OLD_ANT ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ANT') ?></th>
            <td><?= $gunLog->ANT ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OLD CR') ?></th>
            <td><?= $gunLog->OLD_CR ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CR') ?></th>
            <td><?= $gunLog->CR ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
