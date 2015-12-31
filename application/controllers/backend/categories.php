<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('Categories_model','datamodel');     
		$this->load->library('upload');
    }
	   
	public function index()
	{
		$data['title']='List Of Categories';	
		$data['array_categories'] = $this->datamodel->get_categories();
		$this->mytemplate->loadBackend('categories',$data);
	}

	public function form($mode,$id='')
	{
		$data['title']=($mode=='insert')? 'Add Categories' : 'Update Categories';				
		$data['categories'] = ($mode=='update') ? $this->datamodel->get_categories_by_id($id) : '';
		$this->mytemplate->loadBackend('frmcategories',$data);	
	}

	public function process($mode,$id='')
	{
		
		if(($mode=='insert') || ($mode=='update'))
		{
			$result = ($mode=='insert') ? $this->datamodel->insert_entry() : $this->datamodel->update_entry();
		}else if($mode=='delete'){
			$result = $this->datamodel->hapus($id);			
		}	
		if ($result) redirect(site_url('backend/categories'),'location');
	}
	
	private function dependensi($id)
	{
		return $this->datamodel->cek_dependensi($id);
	}
	
	public function do_upload()
	{
		$config['upload_path'] = 'upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload("userfile"))
		{
			echo $this->upload->display_errors(); exit;
		}
		else
		{
			$this->upload->data();
		}
	}

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

