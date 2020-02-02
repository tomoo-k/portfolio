<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class SellsTable extends Table
{
  public function initialize(array $config):void
  {
    $this->addBehavior('Timestamp');
    $this->belongsTo('Categorys');
    $this->belongsTo('States');
    $this->belongsTo('Postages');
    $this->belongsTo('Deliverys');
    $this->belongsTo('Prefectures');
    $this->belongsTo('Days');
    $this->belongsTo('Users');
    $this->hasOne('Buys');

    // App::uses('Sells', 'Users');
    // $userModel = new Users();
    // $this->userModel->find(‘all’,$options);
  }
}
