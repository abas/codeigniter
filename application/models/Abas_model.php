<?php
/**
 *
 */
class Abas_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function get_mhs()
  {
    $query = $this->db->get('MHS');
    return $query->result_array();
  }

  public function get_mhs_id($id = FALSE)
  {
    $query = $this->db->get_where('MHS',array('id' => $id));
    return $query->row_array();
  }

  public function jumlah_mhs(){
    $sum = 0;
    foreach ($this->get_mhs() as $in) {
      $sum = $sum + 1;
    }
    return $sum;
  }

  public function status_mhs()
  {
    if($this->jumlah_mhs() == 5){
      return 'kelas penuh';
    }elseif ($this->jumlah_mhs() == 0) {
      return "kelas kosong";
    }else{
      return 5-$this->jumlah_mhs();
    }
  }

  public function set_mhs()
  {
    $this->load->helper('url');
    $data = array(
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'kelompok' => $this->input->post('kelompok')
    );
    return $this->db->insert('MHS',$data);
  }
}
