<?php
class CandidatsAppSchema extends CakeSchema {

    public $file = 'schema.php';

    public function before($event = array()) {
        return true;
    }

    public function after($event = array()) {}

	public $candidats__candidate_lists = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 255, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'url' => array('type' => 'string', 'null' => false, 'length' => 255, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => false, 'length' => 255, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rank' => array('type' => 'string', 'null' => false, 'length' => 255, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1')
	);
	
	public $candidats__candidate_results = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'candidate_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'message' => array('type' => 'string', 'null' => false, 'length' => 255, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1')
	);
}