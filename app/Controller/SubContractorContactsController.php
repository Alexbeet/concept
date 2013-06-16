<?php
App::uses('AppController', 'Controller');
/**
 * SubContractorContacts Controller
 *
 * @property SubContractorContact $SubContractorContact
 */
class SubContractorContactsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubContractorContact->recursive = 0;
		$this->set('subContractorContacts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubContractorContact->exists($id)) {
			throw new NotFoundException(__('Invalid sub contractor contact'));
		}
		$options = array('conditions' => array('SubContractorContact.' . $this->SubContractorContact->primaryKey => $id));
		$this->set('subContractorContact', $this->SubContractorContact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
	
	if(isset($id))
	{
		$this->set('subContractorId', $id);
	}
	
	
		if ($this->request->is('post')) {
			$this->SubContractorContact->create();
			if ($this->SubContractorContact->save($this->request->data)) {
				$this->Session->setFlash(__('The sub contractor contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub contractor contact could not be saved. Please, try again.'));
			}
		}
		$subContractors = $this->SubContractorContact->SubContractor->find('list');
		$this->set(compact('subContractors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubContractorContact->exists($id)) {
			throw new NotFoundException(__('Invalid sub contractor contact'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubContractorContact->save($this->request->data)) {
				$this->Session->setFlash(__('The sub contractor contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub contractor contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubContractorContact.' . $this->SubContractorContact->primaryKey => $id));
			$this->request->data = $this->SubContractorContact->find('first', $options);
		}
		$subContractors = $this->SubContractorContact->SubContractor->find('list');
		$this->set(compact('subContractors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubContractorContact->id = $id;
		if (!$this->SubContractorContact->exists()) {
			throw new NotFoundException(__('Invalid sub contractor contact'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubContractorContact->delete()) {
			$this->Session->setFlash(__('Sub contractor contact deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sub contractor contact was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
