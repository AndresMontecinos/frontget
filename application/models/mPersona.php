<?php

class Mpersona extends CI_Model 
{

    function __construct()
    {
        parent::__construct();

    }
    public function guardar($param)
    {
        $campos = array(
            'idpersona'=> $param['idpersona'],
            'nombres'=> $param['nombres'],
        );

        $this->db->insert('persona',$campos);
    }
}