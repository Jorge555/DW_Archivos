<?php

class empleado extends mysqli(){
    
    function construct()
    {
        parent::__construct('localhost','root','','activos_fijos');
    }
    
     function getUser()
    {
        $query = $this->db->get('empleado');
        return $query->row();
    }
}

?>