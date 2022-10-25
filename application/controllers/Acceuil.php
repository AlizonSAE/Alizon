<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceuil extends CI_Controller {

	public function index()
	{
		$this->load->library('parser');

		$this->parser->parse("global/head", array("titre" => "Acceuil"));
		$this->parser->parse("menus/internaute", array());
		$this->parser->parse("acceuil/main", array());
		$this->parser->parse("footers/internaute", array());
		$this->load->view("global/foot", array());
	}
}
