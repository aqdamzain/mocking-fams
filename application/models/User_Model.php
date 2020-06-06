<?php
    class User_Model extends CI_Model{

        public function inBooking($data){
            $this->db->insert('booking', $data);
        }

        public function getLastBookId(){
            $sql = "SELECT id_pemesan FROM booking ORDER BY id_pemesan DESC";
            $query = $this->db->query($sql);
            return $query->row();
        }

        public function getBook(){
            $sql = "SELECT * FROM booking ORDER BY id_pemesan DESC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function getDate($where){
            $sql = "select * from jadwal_keberangkatan where id_berangkat = ?";
            $query = $this->db->query($sql, array( $where));
            return $query->row();
        }
    }