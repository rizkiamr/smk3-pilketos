<?php

    class user_model extends CI_Model{
        public function index(){
            return $this->db->get('ketua_1')->result_array();
        }

        public function pilih_ketua_1($id){
            $this->db->where('id' , $id);
            $data =  [
                'jumlah' => 1 
            ];
            $this->db->set('jumlah' , 'jumlah+1' , false);
            $this->db->update('ketua_1');
        }
        
    }