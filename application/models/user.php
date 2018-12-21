<?php

class User extends CI_Model  {

    var $table 	    = 'ucp_users';

    function getByCode( $codigo ) {

        return $this->db->select('*')
                        ->where("uID = $codigo")
                        ->get($this->table);


    }

    function authMe( $user, $pass ) {

        $pass = hash('whirlpool', $pass);
        return $this->db->select('*')
                        ->where("uNome = '$user' AND uSenha = '$pass'")
                        ->get($this->table);

    }

    function register( $user, $email, $pass, $stamp ) {

        $pass = hash('whirlpool', $pass);
        $data = array(
            'uNome'         => $user,
            'uSenha'        => $pass,
            'uEmail'        => $email,
            'uRegisterDate' => $stamp,
        );

        //$this->db->set('RegisterDate',"TO_DATE('$stamp','DD/MM/RR HH24:MI:SS')", false);

        $this->db->insert($this->table, $data);

    }

}

?>