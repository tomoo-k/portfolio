<?php


namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\User;
use Cake\ORM\TableRegistry;
use Cake\ORM\Entity;
use Cake\ORM\Table;
use Cake\Http\ServerRequest;

class SellsController extends AppController
{

  public function initialize(): void
  {
      parent::initialize();
      $this->Auth->allow(['display', 'view', 'index' , 'add' , 'edit', 'delete', 'login', 'logout', 'buy', 'buy2']);
  }

  public function index()
  {
    $this->viewBuilder()->setlayout('sells_index_layout');
    $sells = $this->Sells->find('all')
      ->where(['deleted' => 0 ])
      ->order(['id' => 'DESC'])
      ->limit(10);
    $this->set(compact('sells'));
    $sells2 = $this->Sells->find('all')
      ->where(['deleted' => 0 ])
      ->order(['id' => 'DESC'])
      ->limit(9);
    $this->set(compact('sells2'));

    $loginuser = $this->Auth->user();
    $this->set(compact('loginuser'));
  }

  public function view($id = null)
  {
    $this->viewBuilder()->setlayout('sells_view_layout');

    $loginuser = $this->Auth->user();
    $this->set(compact('loginuser'));

    $sell = $this->Sells->get($id);
    $this->set(compact('sell'));

    $selluser = $this->Sells->Users->get($sell->user_id);
    $this->set(compact('selluser'));


    $category = $this->Sells->get($id, [
        'contain' => ['Categorys']
    ]);
    $this->set('category', $category);

    $state = $this->Sells->get($id, [
        'contain' => ['States']
    ]);
    $this->set('state', $state);

    $postage = $this->Sells->get($id, [
        'contain' => ['Postages']
    ]);
    $this->set('postage', $postage);

    $delivery = $this->Sells->get($id, [
        'contain' => ['Deliverys']
    ]);
    $this->set('delivery', $delivery);

    $prefecture = $this->Sells->get($id, [
        'contain' => ['Prefectures']
    ]);
    $this->set('prefecture', $prefecture);

    $day = $this->Sells->get($id, [
        'contain' => ['Days']
    ]);
    $this->set('day', $day);
  }

  public function add()
  {
    $this->viewBuilder()->setlayout('sells_add_layout');

    if(!empty($this->Auth->user('id')))
    {
      $sell = $this->Sells->newEntity(
        [
          'id' => '',
          'user_id' => $this->Auth->user('id'),
          'name' => '',
          'detail' => '',
          'category_id' => '',
          'brand' => '',
          'state_id' => '',
          'postage_id' => '',
          'delivery_id' => '',
          'prefecture_id' => '',
          'day_id' => '',
          'price' => ''
        ]
      );
    }else {
      return $this->redirect(['controller' => 'Users','action' => 'login']);
    }

    if ($this->request->is('post')) {

      $sell = $this->Sells->patchEntity($sell, $this->request->getData());
      if ($this->Sells->save($sell)) {

          if(!file_exists('/var/www/html/cakephp/karicari/webroot/img/sells/'.$sell->id)){
            mkdir('/var/www/html/cakephp/karicari/webroot/img/sells/'.$sell->id, 0777);
          }
          for($i=0 ; $i < 10 ; $i++){
            if(isset($_FILES['image'.$i]['tmp_name'])){
              move_uploaded_file($_FILES['image'.$i]['tmp_name'], '/var/www/html/cakephp/karicari/webroot/img/sells/'.$sell->id.'/'.$i.'.jpg'); //
            }
          }

          $file = $_FILES;
          $this->set(compact('file'));

          $this->Flash->success(__('The sell has been saved.'));
          // return $this->redirect(['controller' => 'Sells','action' => 'index']);
      }
      $this->Flash->error(__('The sell could not be saved. Please, try again.'));
    }
    $this->set(compact('sell'));
  }

  public function delete($id)
  {
      // $this->request->allowMethod(['post', 'delete']);
      $sell = $this->Sells->get($id);
      if ($this->Sells->delete($sell)) {
          $this->Flash->success(__('The {0} sell has been deleted.', $sell->name));
          return $this->redirect(['action' => 'index']);
      }
  }

  public function buy($id = null)
  {
    $this->viewBuilder()->setlayout('sells_buy_layout');
    $sell = $this->Sells->get($id);
    $this->set(compact('sell'));
  }

  public function buy2($id = null)
  {
    if(!empty($this->Auth->user('id')))
    {
      $buy2 = $this->Sells->Buys->newEntity(
        [
          'id' => '',
          'user_id' => $this->Auth->user('id'),
          'sell_id' => $id,
        ]
      );


      $sells = TableRegistry::getTableLocator()->get('Sells');
      $sell = $sells->find('all')->where(['id' => $id])->first();
      $sell->deleted = true;


    } else {
      return $this->redirect(['controller' => 'Users','action' => 'login']);
    }

    if ($this->request->is('post')) {
      if ($this->Sells->Buys->save($buy2) && $sells->save($sell)) {
          $this->Flash->success(__('The buy has been saved.'));
          return $this->redirect(['controller' => 'Sells','action' => 'index']);
      }
      $this->Flash->error(__('The sell could not be saved. Please, try again.'));
    }
    $this->set(compact('buy2'));
  }

}
