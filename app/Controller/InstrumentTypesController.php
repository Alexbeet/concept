<?php
App::uses('AppController', 'Controller');
/**
 * InstrumentTypes Controller
 *
 * @property InstrumentType $InstrumentType
 */
class InstrumentTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InstrumentType->recursive = 0;
		$this->set('instrumentTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InstrumentType->exists($id)) {
			throw new NotFoundException(__('Invalid instrument type'));
		}
		$options = array('conditions' => array('InstrumentType.' . $this->InstrumentType->primaryKey => $id));
		$this->set('instrumentType', $this->InstrumentType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InstrumentType->create();
			if ($this->InstrumentType->save($this->request->data)) {
				$this->Session->setFlash(__('The instrument type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrument type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InstrumentType->exists($id)) {
			throw new NotFoundException(__('Invalid instrument type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InstrumentType->save($this->request->data)) {
				$this->Session->setFlash(__('The instrument type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrument type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InstrumentType.' . $this->InstrumentType->primaryKey => $id));
			$this->request->data = $this->InstrumentType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InstrumentType->id = $id;
		if (!$this->InstrumentType->exists()) {
			throw new NotFoundException(__('Invalid instrument type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InstrumentType->delete()) {
			$this->Session->setFlash(__('Instrument type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instrument type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
