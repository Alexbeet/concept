<?php
App::uses('AppController', 'Controller');
/**
 * Gantts Controller
 *
 * @property Gantt $Gantt
 */
class GanttsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Gantt->recursive = 2;
		$this->set('gantts', $this->paginate());
		$this->set('instrumentTitle', $this->Gantt->Instrument->field('name'));
		$this->set('instrumentId', $this->Gantt->Instrument->field('id'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Gantt->exists($id)) {
			throw new NotFoundException(__('Invalid gantt'));
		}
		$options = array('conditions' => array('Gantt.' . $this->Gantt->primaryKey => $id));
		$this->set('gantt', $this->Gantt->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Gantt->create();
			if ($this->Gantt->save($this->request->data)) {
				$this->Session->setFlash(__('The gantt has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gantt could not be saved. Please, try again.'));
			}
		}
		$instruments = $this->Gantt->Instrument->find('list');
		$this->set(compact('instruments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Gantt->exists($id)) {
			throw new NotFoundException(__('Invalid gantt'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Gantt->save($this->request->data)) {
				$this->Session->setFlash(__('The gantt has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gantt could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Gantt.' . $this->Gantt->primaryKey => $id));
			$this->request->data = $this->Gantt->find('first', $options);
		}
		$instruments = $this->Gantt->Instrument->find('list');
		$this->set(compact('instruments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Gantt->id = $id;
		if (!$this->Gantt->exists()) {
			throw new NotFoundException(__('Invalid gantt'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Gantt->delete()) {
			$this->Session->setFlash(__('Gantt deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Gantt was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
