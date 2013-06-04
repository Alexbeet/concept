<?php
App::uses('AppModel', 'Model');
/**
 * Instrument Model
 *
 * @property InstrumentType $InstrumentType
 * @property DocumentSchedule $DocumentSchedule
 */
class Instrument extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'InstrumentType' => array(
			'className' => 'InstrumentType',
			'foreignKey' => 'instrument_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DocumentSchedule' => array(
			'className' => 'DocumentSchedule',
			'foreignKey' => 'instrument_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
