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
		$this->DocumentSchedule->recursive = 1;
		$options = array('Instrument.instrument_type_id' => 2);
		$this->set('documentSchedules', $this->paginate($options));


	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocumentSchedule->Instrument->exists($id)) {
			throw new NotFoundException(__('Invalid Document Schedule'));
		}
		
		$this->DocumentSchedule->Instrument->id = $id;
				
		$insid = $this->DocumentSchedule->Instrument->field('id');
		
		$options = array(array('Instrument.id' => $id));
		$this->set('documentSchedules', $this->paginate($options));
		$this->set('instrumentTitle', $this->DocumentSchedule->Instrument->field('name'));
		$this->set('instrumentId', $this->DocumentSchedule->Instrument->field('id'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
			if (!$this->DocumentSchedule->Instrument->exists($id)) {
			throw new NotFoundException(__('Invalid Document Schedule'));
		}
		
		$this->set('instrumentId', $id);	
		if ($this->request->is('post')) {
			$this->DocumentSchedule->create();
			if ($this->DocumentSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The Document Schedule has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Document Schedule could not be saved. Please, try again.'));
			}
		}
		$instruments = $this->DocumentSchedule->Instrument->find('list');
		$this->set(compact('instruments'));
	}
	
	/**
 * detail method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function detail($id = null) {
		if (!$this->DocumentSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid Document Schedule'));
		}
		
		$this->DocumentSchedule->id = $id;
		

		$this->set('detail', $this->DocumentSchedule->find('first', array(
        'conditions' => array('DocumentSchedule.id' => $id))));
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
			throw new NotFoundException(__('Invalid Document Schedule'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DocumentSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The Document Schedule has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Document Schedule could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid Document Schedule'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DocumentSchedule->delete()) {
			$this->Session->setFlash(__('Document Schedule deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Document Schedule was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
