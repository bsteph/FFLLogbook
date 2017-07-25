<?php
$CakePdf = new \CakePdf\Pdf\CakePdf();
$CakePdf->template('view', 'default');
$CakePdf->viewVars($this->viewVars);
// Get the PDF string returned
$pdf = $CakePdf->output();
// Or write it to file directly
$pdf = $CakePdf->write(APP . 'files' . DS . 'gun.pdf');
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Gun $gun
  */
?>

<div class="gun view large-9 medium-8 columns content">
    <h3><?= h($gun->ID_GUN) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('SERIAL') ?></th>
            <td><?= h($gun->SERIAL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MFG') ?></th>
            <td><?= h($gun->MFG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IMPORTER') ?></th>
            <td><?= h($gun->IMPORTER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MODEL') ?></th>
            <td><?= h($gun->MODEL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CALIBER') ?></th>
            <td><?= h($gun->CALIBER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ACTION') ?></th>
            <td><?= h($gun->ACTION) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TYPE') ?></th>
            <td><?= h($gun->TYPE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MATERIAL') ?></th>
            <td><?= h($gun->MATERIAL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FINISH') ?></th>
            <td><?= h($gun->FINISH) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COLOR') ?></th>
            <td><?= h($gun->COLOR) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FNAME ACQ') ?></th>
            <td><?= h($gun->FNAME_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LNAME ACQ') ?></th>
            <td><?= h($gun->LNAME_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CO ACQ') ?></th>
            <td><?= h($gun->CO_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LIC ACQ') ?></th>
            <td><?= h($gun->LIC_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADDR1 ACQ') ?></th>
            <td><?= h($gun->ADDR1_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADDR2 ACQ') ?></th>
            <td><?= h($gun->ADDR2_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CITY ACQ') ?></th>
            <td><?= h($gun->CITY_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('STATE ACQ') ?></th>
            <td><?= h($gun->STATE_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ZIP ACQ') ?></th>
            <td><?= h($gun->ZIP_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TEL ACQ') ?></th>
            <td><?= h($gun->TEL_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FAX ACQ') ?></th>
            <td><?= h($gun->FAX_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EMAIL ACQ') ?></th>
            <td><?= h($gun->EMAIL_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('WEB ACQ') ?></th>
            <td><?= h($gun->WEB_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FNAME DISP') ?></th>
            <td><?= h($gun->FNAME_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LNAME DISP') ?></th>
            <td><?= h($gun->LNAME_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LIC DISP') ?></th>
            <td><?= h($gun->LIC_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CO DISP') ?></th>
            <td><?= h($gun->CO_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADDR1 DISP') ?></th>
            <td><?= h($gun->ADDR1_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADDR2 DISP') ?></th>
            <td><?= h($gun->ADDR2_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CITY DISP') ?></th>
            <td><?= h($gun->CITY_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('STATE DISP') ?></th>
            <td><?= h($gun->STATE_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ZIP DISP') ?></th>
            <td><?= h($gun->ZIP_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID TYPE DISP') ?></th>
            <td><?= h($gun->ID_TYPE_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID AUTH DISP') ?></th>
            <td><?= h($gun->ID_AUTH_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID NUM DISP') ?></th>
            <td><?= h($gun->ID_NUM_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ALIEN DOC') ?></th>
            <td><?= h($gun->ALIEN_DOC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NOTES') ?></th>
            <td><?= h($gun->NOTES) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EDIT REASON') ?></th>
            <td><?= h($gun->EDIT_REASON) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PERSONAL') ?></th>
            <td><?= h($gun->PERSONAL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('STATUS') ?></th>
            <td><?= h($gun->STATUS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NICS STATUS') ?></th>
            <td><?= h($gun->NICS_STATUS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NICS NUMBER') ?></th>
            <td><?= h($gun->NICS_NUMBER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EMAIL DISP') ?></th>
            <td><?= h($gun->EMAIL_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TEL DISP') ?></th>
            <td><?= h($gun->TEL_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('WEB DISP') ?></th>
            <td><?= h($gun->WEB_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID GUN') ?></th>
            <td><?= $this->Number->format($gun->ID_GUN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('STDCAP') ?></th>
            <td><?= $this->Number->format($gun->STDCAP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PRICE ACQ') ?></th>
            <td><?= $this->Number->format($gun->PRICE_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PRICE DISP') ?></th>
            <td><?= $this->Number->format($gun->PRICE_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ROUND COUNT') ?></th>
            <td><?= $this->Number->format($gun->ROUND_COUNT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DATE ACQ') ?></th>
            <td><?= h($gun->DATE_ACQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DATE DISP') ?></th>
            <td><?= h($gun->DATE_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DOB DISP') ?></th>
            <td><?= h($gun->DOB_DISP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NICS TIMEAT') ?></th>
            <td><?= h($gun->NICS_TIMEAT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NICS EXPIRE') ?></th>
            <td><?= h($gun->NICS_EXPIRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ANT') ?></th>
            <td><?= $gun->ANT ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CR') ?></th>
            <td><?= $gun->CR ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NFA') ?></th>
            <td><?= $gun->NFA ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CR ELIGIBLE') ?></th>
            <td><?= $gun->CR_ELIGIBLE ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
