<?php
App::uses('AppController', 'Controller');
/**
 * Trackers Controller
 *
 * @property Tracker $Tracker
 */
class TrackersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tracker->recursive = 1;
		$options = array('Instrument.instrument_type_id' => 2);
		$this->set('trackers', $this->paginate($options));


	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tracker->Instrument->exists($id)) {
			throw new NotFoundException(__('Invalid tracker'));
		}
			$this->Tracker->recursive = 2;
		
		$this->Tracker->Instrument->id = $id;
				
		$insid = $this->Tracker->Instrument->field('id');
		
		$options = array(array('Instrument.id' => $id));
		$this->set('trackers', $this->paginate($options));
		$this->set('instrumentTitle', $this->Tracker->Instrument->field('name'));
		$this->set('instrumentId', $id);
		$this->set('pageName', 'view');
	}


	public function gantt($id = null) {
		if (!$this->Tracker->Instrument->exists($id)) {
			throw new NotFoundException(__('Invalid tracker'));
		}
		
		$this->Tracker->Instrument->id = $id;
				
		$insid = $this->Tracker->Instrument->field('id');
		
		$options = array(array('Instrument.id' => $id));
		$this->set('trackers', $this->paginate($options));
		$this->set('instrumentTitle', $this->Tracker->Instrument->field('name'));
		$this->set('instrumentId', $id);
		$this->set('pageName', 'gantt');
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
	
	$this->Tracker->recursive = 2;
	
	
			if (isset($id))
		{
			$this->set('instrumentId', $id);
		}
	
		if ($this->request->is('post')) {
		
			$this->Tracker->create();
			if ($this->Tracker->saveAll($this->request->data)) {
			
			//This is what you were working on! save works now!
			//work on displaying data in both instrument(tracker) view and overall gantt view
			//Then get data displaying in html so we can create popover forms and ajax submit boyah
			
			$data = array('Gantt' => array('start_date' => $this->request->data['Gantt']['start_date'], 'end_date' => $this->request->data['Gantt']['start_date'],'instrument_id' => $id));
			if($this->Tracker->Instrument->Gantt->save($data))

			{
				$this->Session->setFlash(__('The tracker has been saved'));
				$this->redirect(array('action' => 'index'));
				}
			
			} else {
				$this->Session->setFlash(__('The tracker could not be saved. Please, try again.'));
			}
		}
		
		
		$instruments = $this->Tracker->Instrument->find('list');
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
	
		$this->Tracker->recursive = 2;
		if (!$this->Tracker->exists($id)) {
			throw new NotFoundException(__('Invalid tracker'));
		}
		
		$this->Tracker->id = $id;
		

		$this->set('detail', $this->Tracker->find('first', array(
        'conditions' => array('Tracker.id' => $id))));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tracker->exists($id)) {
			throw new NotFoundException(__('Invalid tracker'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tracker->save($this->request->data)) {
				$this->Session->setFlash(__('The tracker has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tracker could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tracker.' . $this->Tracker->primaryKey => $id));
			$this->request->data = $this->Tracker->find('first', $options);
		}
		$instruments = $this->Tracker->Instrument->find('list');
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
		$this->Tracker->id = $id;
		if (!$this->Tracker->exists()) {
			throw new NotFoundException(__('Invalid tracker'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tracker->delete()) {
			$this->Session->setFlash(__('Tracker deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tracker was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
