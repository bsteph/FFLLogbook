<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Cake\ORM\Behavior;

/**
 * CakePHP newBehavior
 * @author billstephens
 */
class newBehavior extends Behavior {
    public $actsAs = array(
        'Search.Searchable'
    );

    public $filterArgs = array(
        'SERIAL' => array(
            'type' => 'like',
            'field' => 'SERIAL'
        )
    );

}
