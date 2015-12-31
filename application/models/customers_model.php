<?php
class Customers_model extends CI_Model {

    /*var $CategoryName  = '';
    var $Description = '';
    */

    function __construct()
    {        
        parent::__construct();
    }
    
    function get_categories()
    {
        $query = $this->db->get('customers');
        return $query->result();
    }

    function get_categories_by_id($id)
    {
        $this->db->where('CustomerID',$id);
        $query = $this->db->get('customers');
        return $query->row();
    }

    function insert_entry()
    {
        $this->CustomerID  = $this->input->post('CustomerID',true); 
        $this->CompanyName   = $this->input->post('CompanyName',true);         
        $this->ContactName   = $this->input->post('ContactName',true);         
        $this->ContactTitle   = $this->input->post('ContactTitle',true);         
        $this->Address   = $this->input->post('Address',true);         
        $this->City   = $this->input->post('City',true);         
        $this->Region   = $this->input->post('Region',true);         
        $this->PostalCode   = $this->input->post('PostalCode',true);         
        $this->Country   = $this->input->post('Country',true);         
        $this->Phone   = $this->input->post('Phone',true);         
        $this->Fax   = $this->input->post('Fax',true);         
        return $this->db->insert('customers', $this);
    }

    function update_entry()
    {
        $this->CompanyName  = $this->input->post('CompanyName',true); 
        $this->Description   = $this->input->post('Description',true);         
        return $this->db->update('customers', $this, array('CustomerID' => $this->input->post('id',true)));
    }

    function hapus($id)
    {
        $this->db->where('CustomerID',$id);
        return $this->db->delete('customers');
    }

    function cek_dependensi($id)
    {
        $this->db->where('CustomerID',$id);
        $query = $this->db->count_all('customers');
        return ($query==0) ? true : false;
    }
}