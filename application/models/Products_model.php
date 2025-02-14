<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getRowsCount($params = array()){
        $this->db->select('*');
        $this->db->from('products');
        //filter data by searched keywords
        if(!empty($params['search']['keywords'])){
            $this->db->like('product_title',$params['search']['keywords']);
        }
        if(!empty($params['search']['category'])){
            $this->db->where('product_category',$params['search']['category']);
        }
        // if(!empty($params['search']['status'])){
        //     $this->db->where('post_status',$params['search']['status']);
        // } else {
        //     $this->db->where('post_status', '1');
        // }
        if(!empty($params['search']['sortBy'])){
            $this->db->order_by('product_id',$params['search']['sortBy']);
        } else {
            $this->db->order_by('product_id','desc');
        }
        //set start and limit
        // if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
        //     $this->db->limit($params['limit'],$params['start']);
        // }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
        //     $this->db->limit($params['limit']);
        // }
        //get posts
        $query = $this->db->get();
        //return fetched data
        return $query->num_rows();
    }

    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('products');
        //filter data by searched keywords
        if(!empty($params['search']['keywords'])){
            $this->db->like('product_title',$params['search']['keywords']);
        }
        if(!empty($params['search']['category'])){
            $this->db->where('product_category',$params['search']['category']);
        }
        // if(!empty($params['search']['status'])){
        //     $this->db->where('post_status',$params['search']['status']);
        // } else {
        //     $this->db->where('post_status', '1');
        // }
        if(!empty($params['search']['sortBy'])){
            $this->db->order_by('product_id',$params['search']['sortBy']);
        } else {
            $this->db->order_by('product_id','desc');
        }
        //set start and limit
        // if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
        //     $this->db->limit($params['limit'],$params['start']);
        // }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
        //     $this->db->limit($params['limit']);
        // }
        //get posts
        $query = $this->db->get();
        //return fetched data
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }

    function getPosts($params = array()){
        $this->db->select('*');
        $this->db->from('posts');
        //filter data by searched keywords
        // if(!empty($params['search']['keywords'])){
        //     $this->db->like('post_title',$params['search']['keywords']);
        // }
        if(!empty($params['search']['category'])){
            $this->db->where('product_category',$params['search']['category']);
        }
        // if(!empty($params['search']['status'])){
        //     $this->db->where('post_status',$params['search']['status']);
        // } else {
        //     $this->db->where('post_status', '1');
        // }
        // if(!empty($params['search']['sortBy'])){
        //     $this->db->order_by('post_id',$params['search']['sortBy']);
        // } else {
        //     $this->db->order_by('post_id','desc');
        // }
        $this->db->where('product_on_the_shelf <=', date('Y-m-d H:i:s'));
        $this->db->where('product_off_the_shelf >=', date('Y-m-d H:i:s'));
        $this->db->where('product_status', '1');
        $this->db->order_by('product_topping','desc');
        $this->db->order_by('product_id','desc');
        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        //get posts
        $query = $this->db->get();
        //return fetched data
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }

    public function getTopCategory()
    
    {

        $query = $this->db->get('top_category');

        return $query->result_array();

    }

    public function getSubCategory()

    {

        $query = $this->db->get('sub_category');

        return $query->result_array();

    }

    public function getTotalRows()

    {
        return $this->db->count_all('products');
    }

        public function getLimitedRows($limit = null, $offset = null)
    {
        if($limit && $offset){
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->get('products');
        return $query->result();
    }
}
