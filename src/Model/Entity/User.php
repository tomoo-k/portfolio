<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        'nickname' => true,
        'email' => true,
        'password' => true,
        'name' => true,
        'kana' => true,
        'birthday' => true,
        'postal' => true,
        'area' => true,
        'city' => true,
        'banchi' => true,
        'building' => true,
        'phone' => true,
        'created_at' => true,
        'updated_at' => true,
        'delete' => true
    ];

    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
