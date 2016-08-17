<?php
App::uses('AppModel', 'Model');
/**
 * Order Model
 *
 * @property Table $Table
 * @property Waiter $Waiter
 * @property Food $Food
 */
class Order extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'table_id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Table' => array(
			'className' => 'Table',
			'foreignKey' => 'table_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Waiter' => array(
			'className' => 'Waiter',
			'foreignKey' => 'waiter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Food' => array(
			'className' => 'Food',
			'joinTable' => 'foods_orders',
			'foreignKey' => 'order_id',
			'associationForeignKey' => 'food_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
