<?php
class EditarEliminar_model extends CI_Model{
    public function __construct() {
        parent::__construct(); 
        $this->load->database();
    }

     
=======
   
      public function getEjemDatos($id)
  {
    $this->db->select("*");
    $this->db->from("ejemplares");
    $resultados = $this->db->get();
    return $resultados->result();
    $this->db->UPDATE("*");
    $this->db->from("ejemplares");
    $this->db->WHERE("ejem_id",$id);
    $result= $this->db->get();
    return $result->result();
  }
     }
>>>>>>> 5f7d0011a39d09e9ddb6cd421c302ee38eb7ff9c
    public function Eliminarautor($id){
       $consulta=$this->db->query("DELETE FROM ejemplares WHERE ejem_id=$id");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
     public function Eliminarejem($id){
       $consulta=$this->db->query("DELETE FROM ejemplar WHERE ejem_id=$id");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
      public function Eliminaradmins($id){
       $consulta=$this->db->query("DELETE FROM usuarios WHERE usua_id=$id");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
 
 
}
?>