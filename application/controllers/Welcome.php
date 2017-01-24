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
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
        $this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('login');
	}

    public function dashboard()
    {
        $this->load->view('dashboard');
    }
	
	public function addregion()
	{
		$this->load->view('add_region');
	}
	
	public function adduser()
	{
		$this->load->view('add_user');
	}
	
	public function addrole()
	{
		$this->load->view('add_role');
	}
	
	public function bne()
	{
		$data['h'] = $this->db->get('region');
		
		$this->load->view('bne', $data);
	}
	
	public function regions()
	{
		$data['h'] = $this->db->get('region'); 
		
		$this->load->view('regions', $data);
	}
	
	public function branches()
	{
		$data['h'] = $this->db->get('branch');
	
		$this->load->view('branches', $data);
	}
	
	public function assignRoles()
	{	
		$this->session->set_userdata(array(
				'RegionId'      => $this->uri->segment(3),
				'status'        => TRUE
		));
		
		$data['h'] = $this->db->get('role');
		
		$this->load->view('assign_roles', $data);
	}
	
	public function editBranch()
	{
		/*$this->session->set_userdata(array(
				'BranchId'      => $this->uri->segment(3),
				'status'        => TRUE
		));
	
		$this->db->where('BranchId', $this->uri->segment(3));
		
		$q = $this->db->get('branch');
		$data['h'] = $q->result_array();
		
		
		
		echo ($data[h][0]['BranchAddress']);
		
		echo($a->result);
	
		var_dump($data);*/
		$data['a'] = $this->db->get('region');
		$this->load->view('edit_branch', $data);
	}
	
	public function assignCounter()
	{
		$this->session->set_userdata(array(
				'BranchId'      => $this->uri->segment(3),
				'cStatus'        => TRUE
		));
	
		$this->load->view('assign_counter');
	}
	
	public function submitAssignRoles()
	{
		$myArray = explode(',', $this->input->post('Roles'));
		$len = count($myArray);
		
		for($i=0; $i<$len; $i++)
		{
			$data = array(
					'RegionId' => $this->session->userdata('status'),
					'RoleId' => $myArray[$i]
			);

            $this->db->where('RegionId', $this->session->userdata('status'));
            $this->db->delete('regionrole');

            $this->db->insert('regionrole', $data);

            $result = 'Successful';

            echo json_encode( $result );
		}
	}
	
	public function loginCheck()
	{
		$query = $this->db->get('users');
		$Username =  $this->input->post('Username');
		$Password =  $this->input->post('Password');

		$result = '';

		foreach ($query->result() as $row)
		{
			if($row->Username == $Username && $row->Password == $Password)
			{
				$result = 'Successful';
                break;
			}
			else
			{
				$result = 'Failed';
			}
		}

        echo json_encode( $result );
	}
	
	public function submitUser()
	{		
		$data = array(
				'UserId' => '' ,
				'FirstName' => $this->input->post('FirstName'),
				'LastName' => $this->input->post('LastName'),
				'Username' => $this->input->post('Username'),
				'Password' => $this->input->post('Password'),
				'CreatedDate' => date('Y-m-d H:i:s'),
				'IsActive' => '1',
				'Status' => '1',
				'RoleId' => ''
		);
		
		$this->db->insert('users', $data);

        $result = 'Successful';

        echo json_encode( $result );
	}
	
	public function submitRegion()
	{
		$data = array(
				'RegionId' => '' ,
				'RegionName' => $this->input->post('Region')
		);
		
		$this->db->insert('region', $data);

        $result = 'Successful';

        echo json_encode( $result );
	}
	
	public function user_data_submit() 
	{
		$data = array(
		'username' => $this->input->post('name'),
		'pwd'=>$this->input->post('pwd')
		);
		
		//Either you can print value or you can send value to database
		echo json_encode($data);
	}
	
	public function submitRole()
	{
		$data = array(
				'RoleId' => $this->input->post('Role'),
				'CreatedBy' => '',
				'CreatedDate' => date('Y-m-d H:i:s')
		);
	
		$this->db->insert('role', $data);

        $result = 'Successful';

        echo json_encode( $result );
	}
	
	public function AddBranch()
	{
		$data = array(
				'BranchId' => '',
				'BranchName' => $this->input->post('BranchName') ,
				'BranchAddress' => $this->input->post('BranchAdd'),
				'RegionId' => $this->input->post('Region'),
				'NetworkId' => ''
		);
	
		$this->db->insert('branch', $data);

        $result = 'Successful';

        echo json_encode( $result );
	}
	
	public function AddCounter()
	{
		$data = array(
				'CounterId' => '',
				'BranchId' => $this->session->userdata('cStatus'),
				'CounterName' => $this->input->post('CounterName') ,
				'SortOrder' => $this->input->post('SortOrder')
		);
	
		$this->db->insert('BranchCounters', $data);

        $result = 'Successful';

        echo json_encode( $result );
	}
	
	public function AddNetwork()
	{
		$data = array(
				'NetworkId' => '',
				'Ip' => $this->input->post('Ip') ,
				'Port' => $this->input->post('Port'),
				'EngineId' => ''
		);
	
		$this->db->insert('network', $data);

        $result = 'Successful';

        echo json_encode( $result );
	}

    public function logout()
    {

    }
}
