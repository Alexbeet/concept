<?php
App::uses('AppModel', 'Model');
/**
 * SubContractorCategory Model
 *
 * @property SubContractor $SubContractor
 */
class SubContractorCategory extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'category';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'category' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SubContractor' => array(
			'className' => 'SubContractor',
			'foreignKey' => 'sub_contractor_category_id',
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
