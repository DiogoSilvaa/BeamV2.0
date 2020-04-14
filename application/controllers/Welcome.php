<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('registration');
	}
	public function agents()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		//table name exact from database
		$crud->set_table('agents');
		
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Agent');
		
		//the columns function lists attributes you see on frontend view of the table
		$crud->columns('agent_no', 'agent_name', 'agent_family', 'contact');
	
		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('agent_name', 'agent_family', 'contact');
		
		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')

		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		
		//form validation (could match database columns set to "not null")
		$crud->required_fields('agent_no', 'agent_name', 'agent_family','contact');
		
		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		$crud->display_as('agent_no', 'agent_number');
		
		$output = $crud->render();
		$this->agents_output($output);
	}
	
	function agents_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('agents_view.php', $output);
	}

	public function bands()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('bands');
		$crud->set_subject('bands');
		$crud->columns('band_name', 'band_description', 'band_agentname');
		$crud->fields('band_name', 'band_description', 'band_agentname');
		$crud->set_relation('band_agentname','agents','{agent_name} {agent_family}');
		$crud->display_as('band_agentname','Agent name');
		$crud->required_fields('band_name', 'band_description', 'band_agentname');
		$output = $crud->render();
		$this->bands_output($output);
	}
	
	function bands_output($output = null)
	{
		$this->load->view('bands_view.php', $output);
	}
	public function members()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('members');
		$crud->set_subject('member');
		$crud->columns('member_no', 'member_title', 'member_given', 'member_family', 'member_job', 'member_band', 'status');
		$crud->fields('member_title', 'member_given', 'member_family', 'member_job', 'member_band', 'status');
		$crud->required_fields('member_no', 'member_title', 'member_given', 'member_family', 'member_job', 'member_band', 'status');
		$crud->set_relation('member_band','bands','band_name');
		$crud->display_as('member_band','Band');
		$crud->set_relation('status','status','status');
		$crud->set_relation('member_title','title','title');
		$output = $crud->render();
		$this->members_output($output);
	}
	
	function members_output($output = null)
	{
		$this->load->view('members_view.php', $output);
	}
	
	public function stages()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('stages');
		$crud->set_subject('stage');
		$crud->columns('stage_no','stage_name','stage_capacity');
		$crud->fields('stage_name','stage_capacity');
		$crud->required_fields('stage_no','stage_name','stage_capacity');
		
		$output = $crud->render();
		$this->stages_output($output);
	}
	
	function stages_output($output = null)
	{
		$this->load->view('stages_view.php', $output);
	}
	
	public function timeslots()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('performances');
		$crud->set_subject('timeslots');
		$crud->columns('performance_date');
		$crud->fields('performance_date');
		$crud->required_fields('performance_date');
		
		$output = $crud->render();
		$this->timeslots_output($output);
	}
	
	function timeslots_output($output = null)
	{
		$this->load->view('timeslots_view.php', $output);
	}
	
	public function perfmanagement()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('perfmanagement');
		$crud->set_subject('performance');
		$crud->columns('perfno','perfdate','perfstage','perfband','perfcount');
		$crud->fields('perfband','perfno','perfdate','perfstage','perfcount');
		$crud->set_relation('perfstage','stages','stage_name');
		$crud->set_relation('perfband','bands','band_name');
		$crud->set_relation('perfdate','performances','performance_date');
		$crud->required_fields('perfno','perfdate','perfstage','perfcount');
		
		$output = $crud->render();
		$this->perfmanagement_output($output);
	}
	
	function perfmanagement_output($output = null)
	{
		$this->load->view('perfmanagement_view.php', $output);
	}
	
	public function querynav()
	{	
		$this->load->view('header');
		$this->load->view('querynav_view');
	}
		
	public function query1()
	{	
		$this->load->view('header');
		$this->load->view('query1_view');
	}
	
	public function query2()
	{	
		$this->load->view('header');
		$this->load->view('query2_view');
	}
	
	public function blank()
	{	
		$this->load->view('header');
		$this->load->view('blank_view');
	}
}
