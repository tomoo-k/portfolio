<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PrefecturesTable extends Table
{
  public function initialize(array $config):void
  {
    $this->addBehavior('Timestamp');
  }
}
