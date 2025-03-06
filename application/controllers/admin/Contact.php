<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Contact extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model', 'contact_model');
    }
    
    public function insert()
    {
        $csrfkey = $this->input->post($this->session->userdata('csrfkey'));
        if ($csrfkey && $csrfkey === $this->session->userdata('csrfvalue')) {
            if (valid_csrf_nonce()) {
                $this->session->set_flashdata('message', '請勿重複提交表單！');
                $check1 = $this->check_is_block_list($this->input->post('email'));
                if($check1==false){
                redirect($_SERVER['HTTP_REFERER']);
            }

            $check = $this->check_is_bad_guy($this->post('email'), $this->post('product_id'));

            if($check==true){}
            $data = array(
                'contact_name' => $this->post('contact_name'),
                'contact_email' => $this->post('contact_email'),
                'contact_phone' => $this->post('contact_phone'),
                'contact_content' => $this->post('contact_content'),
                'created_at' => date('Y-m-d H:i:s'),
            );
            $this->db->insert('contact_messages', $data);
            $this->session->set_flashdata('message', '感謝您的來信，我們將盡快回覆您！');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('message', '請勿重複提交表單！');
            redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

    public function index()
    {
        $this->data['page_title'] = '聯絡我們';
        $totalRec = $this->contact_model->getRows();

        if (!empty($this->data['contact'])) {
            foreach ($this->data['contact'] as $row) {
                echo isset($row->school) ? $row->school : '無資料';
            }
        } else {
            echo "查無資料";
        }
        $data = array();
        //total rows count
        $this->data['contact'] = $this->contact_model->getRows();
        //pagination configuration
        $config['target']      = '#datatable';
        $config['base_url']    = base_url().'admin/contact/ajaxData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination_admin->initialize($config);
        //get the contact data
        $this->data['category'] = $this->mysql_model->_select('post_category');
        $this->data[''] = $this->contact_model->getRows(array('limit'=>$this->perPage));

        $this->render('admin/contact/index');
    }

    function ajaxData()
    {
        $conditions = array();
        //calc offset number
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        } else {
            $offset = $page;
        }
        //set conditions for search
        $keywords = $this->input->get('keywords');
        $sortBy = $this->input->get('sortBy');
        $category = $this->input->get('category');
        // $status = $this->input->get('status');
        if(!empty($keywords)){
            $conditions['search']['keywords'] = $keywords;
        }
        if(!empty($sortBy)){
            $conditions['search']['sortBy'] = $sortBy;
        }
        if(!empty($category)){
            $conditions['search']['category'] = $category;
        }
        // if(!empty($status)){
        //     $conditions['search']['status'] = $status;
        // }
        //total rows count
        $this->data['contact'] = $this->contact_model->getRows();
        //pagination configuration
        $config['target']      = '#datatable';
        $config['base_url']    = base_url().'admin/contact/ajaxData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination_admin->initialize($config);
        //set start and limit
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        //get contact data
        $this->data['contact'] = $this->contact_model->getRows($conditions);
        //load the view
        $this->load->view('admin/contact/ajax-data', $this->data, false);
    }

}