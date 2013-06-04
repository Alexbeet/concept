<?php
App::uses('AppController', 'Controller');
/**
 * DocumentSchedules Controller
 *
 * @property DocumentSchedule $DocumentSchedule
 */
class DocumentSchedulesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DocumentSchedule->recursive = 0;
		$this->set('documentSchedules', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocumentSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid document schedule'));
		}
		$options = array('conditions' => array('DocumentSchedule.' . $this->DocumentSchedule->primaryKey => $id));
		$this->set('documentSchedule', $this->DocumentSchedule->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocumentSchedule->create();
			if ($this->DocumentSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The document schedule has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document schedule could not be saved. Please, try again.'));
			}
		}
		$instruments = $this->DocumentSchedule->Instrument->find('list');
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
		if (!$this->DocumentSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid document schedule'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DocumentSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The document schedule has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document schedule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocumentSchedule.' . $this->DocumentSchedule->primaryKey => $id));
			$this->request->data = $this->DocumentSchedule->find('first', $options);
		}
		$instruments = $this->DocumentSchedule->Instrument->find('list');
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
		$this->DocumentSchedule->id = $id;
		if (!$this->DocumentSchedule->exists()) {
			throw new NotFoundException(__('Invalid document schedule'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DocumentSchedule->delete()) {
			$this->Session->setFlash(__('Document schedule deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Document schedule was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
