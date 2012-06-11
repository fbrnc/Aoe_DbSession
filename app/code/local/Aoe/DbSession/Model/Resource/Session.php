<?php

class Aoe_DbSession_Model_Resource_Session extends Mage_Core_Model_Resource_Session {

	/**
	 * Constructor
	 *
	 */
	public function __construct() {
		$resource = Mage::getSingleton('core/resource');
		$this->_sessionTable = $resource->getTableName('core/session');
		$this->_read = $resource->getConnection('session_read');
		$this->_write = $resource->getConnection('session_write');
	}
}