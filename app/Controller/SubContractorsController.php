<?php
App::uses('AppController', 'Controller');
/**
 * SubContractors Controller
 *
 * @property SubContractor $SubContractor
 */
class SubContractorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubContractor->recursive = 0;
		$this->set('subContractors', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubContractor->exists($id)) {
			throw new NotFoundException(__('Invalid sub contractor'));
		}
		$options = array('conditions' => array('SubContractor.' . $this->SubContractor->primaryKey => $id));
		$this->set('subContractor', $this->SubContractor->find('first', $options));
		
		
		$this->set('subContractorContacts', $this->SubContractor->SubContractorContact->find('all', array('conditions' => array('sub_contractor_id' => $id))));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubContractor->create();
			if ($this->SubContractor->save($this->request->data)) {
				$this->Session->setFlash(__('The sub contractor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub contractor could not be saved. Please, try again.'));
			}
		}
		$subContractorCategories = $this->SubContractor->SubContractorCategory->find('list');
		$this->set(compact('subContractorCategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubContractor->exists($id)) {
			throw new NotFoundException(__('Invalid sub contractor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubContractor->save($this->request->data)) {
				$this->Session->setFlash(__('The sub contractor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub contractor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubContractor.' . $this->SubContractor->primaryKey => $id));
			$this->request->data = $this->SubContractor->find('first', $options);
		}
		$subContractorCategories = $this->SubContractor->SubContractorCategory->find('list');
		$this->set(compact('subContractorCategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubContractor->id = $id;
		if (!$this->SubContractor->exists()) {
			throw new NotFoundException(__('Invalid sub contractor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubContractor->delete()) {
			$this->Session->setFlash(__('Sub contractor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sub contractor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
