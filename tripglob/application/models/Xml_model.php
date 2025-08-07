<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xml_model extends CI_Model {
	
	public function insert_xml_log($xml_log){
    	$this->db->insert('xml_logs', $xml_log);
    }
}

