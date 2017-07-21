<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gun[]|\Cake\Collection\CollectionInterface $gun
 */

?>

<h3><?= __('Gun') ?></h3>
<table cellpadding="0" cellspacing="0">
    <thead>
    <tr>

        <th scope="col">'ID_GUN'</th>
        <th scope="col">'SERIAL') ?></th>
        <th scope="col">'MFG') ?></th>
        <th scope="col">'MODEL') ?></th>
        <th scope="col">'CALIBER') ?></th>

        <th scope="col">'DATE_ACQ') ?></th>
        <th scope="col">'FNAME_ACQ') ?></th>
        <th scope="col">'LNAME_ACQ') ?></th>
        <th scope="col">'CO_ACQ') ?></th>
        <th scope="col">'DATE_DISP') ?></th>
        <th scope="col">'FNAME_DISP') ?></th>
        <th scope="col">'LNAME_DISP') ?></th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($gun as $gun): ?>
        <tr>
            <td><?= $this->Number->format($gun->ID_GUN) ?></td>
            <td><?= h($gun->SERIAL) ?></td>
            <td><?= h($mfg[$gun->MFG]) ?></td>
            <td><?= h($gun->MODEL) ?></td>
            <td><?= h($caliber[$gun->CALIBER]) ?></td>

            <td><?= h($gun->DATE_ACQ) ?></td>
            <td><?= h($gun->FNAME_ACQ) ?></td>
            <td><?= h($gun->LNAME_ACQ) ?></td>
            <td><?= h($gun->CO_ACQ) ?></td>
            <td><?= h($gun->DATE_DISP) ?></td>
            <td><?= h($gun->FNAME_DISP) ?></td>
            <td><?= h($gun->LNAME_DISP) ?></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>