<?php
App::uses('AppController', 'Controller');
/**
 * Foods Controller
 *
 * @property Food $Food
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class FoodsController extends AppController {

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
		$this->Food->recursive = 0;
		$this->set('foods', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Food->exists($id)) {
			throw new NotFoundException(__('Invalid food'));
		}
		$options = array('conditions' => array('Food.' . $this->Food->primaryKey => $id));
		$this->set('food', $this->Food->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Food->create();
			if ($this->Food->save($this->request->data)) {
				$this->Flash->success(__('The food has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The food could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Food->Category->find('list');
		//$orders = $this->Food->Order->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Food->exists($id)) {
			throw new NotFoundException(__('Invalid food'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Food->save($this->request->data)) {
				$this->Flash->success(__('The food has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The food could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Food.' . $this->Food->primaryKey => $id));
			$this->request->data = $this->Food->find('first', $options);
		}
		$categories = $this->Food->Category->find('list');
		$orders = $this->Food->Order->find('list');
		$this->set(compact('categories', 'orders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Food->id = $id;
		if (!$this->Food->exists()) {
			throw new NotFoundException(__('Invalid food'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Food->delete()) {
			$this->Flash->success(__('The food has been deleted.'));
		} else {
			$this->Flash->error(__('The food could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
