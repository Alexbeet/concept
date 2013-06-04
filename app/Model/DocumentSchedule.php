<?php
App::uses('AppModel', 'Model');
/**
 * DocumentSchedule Model
 *
 * @property Instrument $Instrument
 */
class DocumentSchedule extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'document_schedule';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'document_name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Instrument' => array(
			'className' => 'Instrument',
			'foreignKey' => 'instrument_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
