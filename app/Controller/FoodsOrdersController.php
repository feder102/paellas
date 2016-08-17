<?php
App::uses('AppController', 'Controller');
/**
 * FoodsOrders Controller
 *
 * @property FoodsOrder $FoodsOrder
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class FoodsOrdersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FoodsOrder->recursive = 0;
		$this->set('foodsOrders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FoodsOrder->exists($id)) {
			throw new NotFoundException(__('Invalid foods order'));
		}
		$options = array('conditions' => array('FoodsOrder.' . $this->FoodsOrder->primaryKey => $id));
		$this->set('foodsOrder', $this->FoodsOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FoodsOrder->create();
			if ($this->FoodsOrder->save($this->request->data)) {
				$this->Flash->success(__('The foods order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The foods order could not be saved. Please, try again.'));
			}
		}
		$foods = $this->FoodsOrder->Food->find('list');
		$orders = $this->FoodsOrder->Order->find('list');
		$this->set(compact('foods', 'orders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FoodsOrder->exists($id)) {
			throw new NotFoundException(__('Invalid foods order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FoodsOrder->save($this->request->data)) {
				$this->Flash->success(__('The foods order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The foods order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FoodsOrder.' . $this->FoodsOrder->primaryKey => $id));
			$this->request->data = $this->FoodsOrder->find('first', $options);
		}
		$foods = $this->FoodsOrder->Food->find('list');
		$orders = $this->FoodsOrder->Order->find('list');
		$this->set(compact('foods', 'orders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FoodsOrder->id = $id;
		if (!$this->FoodsOrder->exists()) {
			throw new NotFoundException(__('Invalid foods order'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FoodsOrder->delete()) {
			$this->Flash->success(__('The foods order has been deleted.'));
		} else {
			$this->Flash->error(__('The foods order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
