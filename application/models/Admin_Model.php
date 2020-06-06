<?php
    class Admin_Model extends CI_Model{

        public function cekLogin()
	{
		    $email = set_value('email');
		    $password = set_value('password');

		    $result   = $this->db->where('email',$email)
							 ->where('password',$password)
							 ->limit(1)
							 ->get('akun');
		    if($result->num_rows()>0)
		    {
    			return $result->row();
		    }
		    else
		    {
			    return array();
		    }
        }
        public function getAccount($where)
        {
            $sql = "SELECT email FROM akun WHERE id_akun = ?";
            $query = $this->db->query($sql,array($where));
            return $query->result();
        }
        public function updatePassword($where,$data)
        {
            /* $sql = "UPDATE akun SET password = ? WHERE id_akun = ?";
            $this->db->query($sql,array($data,$where)); */
            $this->db->where($where);
		    $this->db->update('akun',$data);
            
        }
        public function inputAccount($data){
            $this->db->insert('akun', $data);
        }

        public function getDestinations($limit, $start){
            $sql = "select * from destinasi order by id_destinasi desc limit ? offset ?";
            $query = $this->db->query($sql, array( $limit, $start));
            return $query->result();
        }

        public function getSliders(){
            $sql = "select * from slider order by id_slider asc";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function getNewsletter(){
            $sql = "select * from newsletter";
            $query = $this->db->query($sql);
            return $query->row();
        }

        public function countAllDestination(){
            $sql = "select * from destinasi";
            $query = $this->db->query($sql);
            return $query->num_rows();
            }
            
        public function deleteDestination($id_destinasi){
            $sql = "delete from destinasi where id_destinasi = ? ";
            $this->db->query($sql, array($id_destinasi));
        }

        public function deleteTanggal($id_berangkat){
            $sql = "delete from jadwal_keberangkatan where id_berangkat = ? ";
            $this->db->query($sql, array($id_berangkat));
        }

        public function deleteInclude($id_include){
            $sql = "delete from include where id_include = ? ";
            $this->db->query($sql, array($id_include));
        }

        public function deleteNotInclude($id_notinclude){
            $sql = "delete from notinclude where id_notinclude = ? ";
            $this->db->query($sql, array($id_notinclude));
        }

        public function delete_gambarGaleri($where){
            $sql = "delete from galeri_destinasi where id_galeri_destinasi = ? ";
            $this->db->query($sql, array($where));
        }

        public function getDestination($id_destinasi){
            $sql = "select * from destinasi where id_destinasi = ?";
            $query = $this->db->query($sql, array( $id_destinasi));
            return $query->row();
        }

        public function getCurDates($id_destinasi){
            $sql = "select * from jadwal_keberangkatan where id_destinasi = ? and tanggal_berangkat >= CURDATE()";
            $query = $this->db->query($sql, array( $id_destinasi));
            return $query->result();
        }
        public function getGaleriDestinasi($id_destinasi){
            $sql = "select * from galeri_destinasi where id_destinasi = ?";
            $query = $this->db->query($sql, array( $id_destinasi));
            return $query->result();
        }

        public function getInclude($id_destinasi){
            $sql = "select * from include where id_destinasi = ?";
            $query = $this->db->query($sql, array( $id_destinasi));
            return $query->result();
        }

        public function getNotInclude($id_destinasi){
            $sql = "select * from notinclude where id_destinasi = ?";
            $query = $this->db->query($sql, array( $id_destinasi));
            return $query->result();
        }


        public function input_destination($data){
            $this->db->insert('destinasi', $data);
        }

        public function input_date($data){
            $this->db->insert('jadwal_keberangkatan', $data);
        }

        public function input_include($data){
            $this->db->insert('include', $data);
        }

        public function input_notinclude($data){
            $this->db->insert('notinclude', $data);
        }

        public function inDestinationGallery($data){
            $this->db->insert('galeri_destinasi', $data);
        }

        public function update_destination($where, $data){
            $this->db->where($where);
            $this->db->update('destinasi', $data);
        }


        public function update_slider($where, $data){
            $this->db->where($where);
            $this->db->update('slider', $data);
        }

        public function update_newsletter($where, $data){
            $this->db->where($where);
            $this->db->update('newsletter', $data);
        }
	    public function getQuestions()
        {
            $sql = "select * from question order by id_faq asc";
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function deleteQuestions($id_faq)
        {
            $sql = "delete from question where id_faq = ? ";
            $this->db->query($sql, array($id_faq));
        }
        public function updateQuestions($where, $data){
            $this->db->where($where);
            $this->db->update('question', $data);
        }
        public function inputQuestions($data){
            $this->db->insert('question', $data);
        }
        public function getGalleries(){
            $sql = "SELECT * FROM gallery ORDER BY id_gallery ASC";
            $query = $this->db->query($sql);
            return $query->result();
        }

        public function update_gallery($where, $data){
            $this->db->where($where);
            $this->db->update('gallery', $data);
        }
        public function viewImages()
        {
            $sql = "SELECT * FROM gallery ORDER BY id_gallery ASC";
            $query = $this->db->query($sql);
            return $query->result();

        }

    }
    
?>
