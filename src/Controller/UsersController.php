<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\User;
use Cake\ORM\TableRegistry;
use Cake\ORM\Entity;
use Cake\ORM\Table;
use Cake\Http\ServerRequest;

class UsersController extends AppController
{

  public function initialize(): void
  {
      parent::initialize();
      $this->Auth->allow(['display', 'view', 'index' , 'add' , 'edit', 'delete', 'login', 'logout']);
  }


  public function index()
  {
    $this->viewBuilder()->setlayout('users_index_layout');

    $users = $this->paginate($this->Users);
    $this->set(compact('users'));
  }

  public function view($id = null)
  {
    $this->viewBuilder()->setlayout('users_view_layout');

    $user = $this->Users->get($id);
    $this->set(compact('user'));

    $sellslist = $this->Users->Sells->find('all')
      ->where(['Sells.user_id' => $user->id ])
      ->order(['id' => 'DESC']);
    $this->set(compact('sellslist'));
  }

  public function add()
  {
    $this->viewBuilder()->setlayout('users_add_layout');

    $user = $this->Users->newEntity(
      ['nickname' => '',
      'email' => '',
      'password' => '',
      'name' => '',
      'kana' => '',
      'birthday' => '',
      'postal' => '',
      'area' => '',
      'city' => '',
      'banchi' => '',
      'building' => '',
      'phone' => '']
    );

    if ($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->getData());
      if ($this->Users->save($user)) {
          $this->Flash->success(__('The user has been saved.'));

          return $this->redirect(['controller' => 'Sells','action' => 'index']);
      }
      $this->Flash->error(__('The user could not be saved. Please, try again.'));
    }
    $this->set(compact('user'));
  }

  public function edit($id = null)
  {
  $this->viewBuilder()->setlayout('users_edit_layout');
    $user = $this->Users->get($id);

    if ($this->request->is(['patch', 'post', 'put'])) {
        $user = $this->Users->patchEntity($user, $this->request->getData());
        if ($this->Users->save($user)) {
            $this->Flash->success(__('The user has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
    }
    $this->set(compact('user'));
  }

  public function delete($id = null)
  {
      $this->redirect($this->Auth->logout());
      $this->request->allowMethod(['post', 'delete']);
      $user = $this->Users->get($id);
      if ($this->Users->delete($user)) {
          $this->Flash->success(__('The user has been deleted.'));
      } else {
          $this->Flash->error(__('The user could not be deleted. Please, try again.'));
      }
      return $this->redirect(['controller' => 'Sells','action' => 'index']);
  }

  public function login()
  {
    $this->viewBuilder()->setlayout('users_login_layout');

      if ($this->request->is('post')) {
          $user = $this->Auth->identify();
          if ($user) {
              $this->Auth->setUser($user);
              return $this->redirect(['controller' => 'Sells','action' => 'index']);
          }
          $this->Flash->error('ユーザー名またはパスワードが不正です。');
      }
  }

  public function logout()
  {
      $this->Flash->success('ログアウトしました。');
      return $this->redirect($this->Auth->logout());
  }

  public function isAuthorized($user)
  {
      // 登録ユーザー全員がユーザを追加できます
      if ($this->request->getParam('action') === 'add') {
          return true;
      }
      // 該当ユーザは編集して削除することができます
      if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
          if ( $this->Auth->user('id') == 1 ) {
              return true;
          }
          if ( $this->Auth->user('id') == $this->request->getParam('pass.0') ) {
              return true;
          }
          return false;
      }
      return parent::isAuthorized($user);
  }

}
