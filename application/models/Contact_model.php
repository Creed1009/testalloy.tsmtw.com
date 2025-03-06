<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('contact_messages');

        // 搜尋條件
        if (!empty($params['search']['keywords'])) {
            $this->db->like('contact_title', $params['search']['keywords']);
        }
        if (!empty($params['search']['category'])) {
            $this->db->where('contact_category', $params['search']['category']);
        }
        if (!empty($params['search']['sortBy'])) {
            $this->db->order_by('id', $params['search']['sortBy']);
        } else {
            $this->db->order_by('id', 'desc');
        }

        // // 限制權限：非管理員過濾 `contact_school`
        // if (!$this->ion_auth->is_admin()) {
        //     $user = $this->ion_auth->user()->row(); // 先取得 user 物件
        //     if ($user) {
        //         $school = $user->school;
        //         $this->db->where('contact_school', $school);
        //     } else {
        //         log_message('error', 'User object is NULL in Contact_model');
        //     }
        // }

        // 查詢
        $query = $this->db->get();

        // 確保回傳空陣列，而不是 FALSE
        return ($query->num_rows() > 0) ? $query->result_array() : [];
    }
}