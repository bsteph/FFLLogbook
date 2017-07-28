<?php
/**
 * Created by PhpStorm.
 * User: zkn1axt
 * Date: 7/25/17
 * Time: 1:18 PM
 */
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gun $gun

 */
echo $header . "\n";


foreach ($gun as $gun):
    echo $gun->SERIAL.",".$mfg[$gun->MFG].",". $gun->IMPORTER.",". $gun->MODEL.",". $caliber[$gun->CALIBER].",". $type_firearm[$gun->TYPE].",".$gun->DATE_ACQ.",".
        $gun->FNAME_ACQ.",".$gun->LNAME_ACQ.",".$gun->CO_ACQ.",".$gun->LIC_ACQ.",".$gun->ADDR1_ACQ.",".$gun->ADDR2_ACQ.",".$gun->DATE_DISP.",".$gun->FNAME_DISP.",".$gun->LNAME_DISP.",".$gun->CO_DISP.",".$gun->F4473_DISP."\n";
endforeach;