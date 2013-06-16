<?php
App::uses('AppModel', 'Model');
/**
 * SubContractor Model
 *
 * @property SubContractorCategory $SubContractorCategory
 * @property SubContractorContact $SubContractorContact
 */
class SubContractor extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'company_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'company_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SubContractorCategory' => array(
			'className' => 'SubContractorCategory',
			'foreignKey' => 'sub_contractor_category_id',
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
		'SubContractorContact' => array(
			'className' => 'SubContractorContact',
			'foreignKey' => 'sub_contractor_id',
			'dependent' => true,
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
