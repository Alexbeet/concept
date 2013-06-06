<?php
App::uses('AppController', 'Controller');
/**
 * Instruments Controller
 *
 * @property Instrument $Instrument
 */
class InstrumentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Instrument->recursive = 0;
		$this->set('instruments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Instrument->exists($id)) {
			throw new NotFoundException(__('Invalid instrument'));
		}
		$options = array('conditions' => array('Instrument.' . $this->Instrument->primaryKey => $id));
		$this->set('instrument', $this->Instrument->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instrument->create();
			if ($this->Instrument->save($this->request->data)) {
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrument could not be saved. Please, try again.'));
			}
		}
		$instrumentTypes = $this->Instrument->InstrumentType->find('list');
		$this->set(compact('instrumentTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Instrument->exists($id)) {
			throw new NotFoundException(__('Invalid instrument'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Instrument->save($this->request->data)) {
				$this->Session->setFlash(__('The instrument has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrument could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Instrument.' . $this->Instrument->primaryKey => $id));
			$this->request->data = $this->Instrument->find('first', $options);
		}
		$instrumentTypes = $this->Instrument->InstrumentType->find('list');
		$this->set(compact('instrumentTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Instrument->id = $id;
		if (!$this->Instrument->exists()) {
			throw new NotFoundException(__('Invalid instrument'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Instrument->delete()) {
			$this->Session->setFlash(__('Instrument deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instrument was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
