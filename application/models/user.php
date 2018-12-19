<?php

class User extends CI_Model  {

    var $table 	    = 'accounts';

    function getByCode( $codigo ) {

        return $this->db->select('*')
                        ->where("ID = $codigo")
                        ->get($this->table);


    }

    function authMe( $user, $pass ) {

        $pass = hash('whirlpool', $pass);
        return $this->db->select('*')
                        ->where("username = '$user' AND password = '$pass'")
                        ->get($this->table);

    }

    function register( $user, $email, $pass, $stamp ) {

        $pass = hash('whirlpool', $pass);
        $data = array(
            'Username'     => $user,
            'Password'     => $pass,
            'email'        => $email,
            'RegisterDate' => $stamp,
        );

        //$this->db->set('RegisterDate',"TO_DATE('$stamp','DD/MM/RR HH24:MI:SS')", false);

        $this->db->insert($this->table, $data);

    }


    function atualizar( $codigo, $area, $tipo, $grauDestaque, $titulo, $imagem, $link, $texto, $ordem, $empresa, $usuario, $stamp ) {

        $data = array(
            'TP_AREA_SITE'        => $area,
            'TP_CONTEUDO'         => $tipo,
            'NR_GRAU_DESTAQUE'    => $grauDestaque,
            'NR_ORDEM_EXIBICAO'   => $ordem,
            'TX_TITULO'           => $titulo,
            'TX_IMAGEM'           => $imagem,
            'TX_LINK'             => $link,
            'TX_TEXTO'            => $texto,
            'CD_EMPRESA'          => $empresa,
            'DBUSER'              => $usuario,
            'OSUSER'              => $usuario,
        );

        $this->db->set('STAMP',"TO_DATE('$stamp','DD/MM/RR HH24:MI:SS')", false);


        $this->db->where('ID_ECOMMERCE_SITE', $codigo);
        $this->db->update($this->table, $data);

    }

    function ativar( $codigo, $empresa, $usuario, $stamp ) {

        $data = array(
            'CD_EMPRESA'          => $empresa,
            'DBUSER'              => $usuario,
            'OSUSER'              => $usuario,
            'CD_USUARIO_EXCLUSAO' => $usuario,
        );

        $this->db->set('DT_EXCLUSAO', 'null', false);
        $this->db->set('STAMP',"TO_DATE('$stamp','DD/MM/RR HH24:MI:SS')", false);


        $this->db->where('ID_ECOMMERCE_SITE', $codigo);
        $this->db->update($this->table, $data);

    }

    function inativar( $codigo, $empresa, $usuario, $stamp ) {

        $data = array(
            'CD_EMPRESA'          => $empresa,
            'DBUSER'              => $usuario,
            'OSUSER'              => $usuario,
            'CD_USUARIO_EXCLUSAO' => $usuario,
        );

        $this->db->set('DT_EXCLUSAO',"TO_DATE('$stamp','DD/MM/RR HH24:MI:SS')", false);
        $this->db->set('STAMP',"TO_DATE('$stamp','DD/MM/RR HH24:MI:SS')", false);


        $this->db->where('ID_ECOMMERCE_SITE', $codigo);
        $this->db->update($this->table, $data);

    }

    function listar( $pesquisa = null ) {

        if ( $pesquisa == null ) {
            $resultado = $this->db->select('*')
                                    ->where("TP_CONTEUDO = 'BD' OR TP_CONTEUDO = 'BP'")
                                    ->order_by('ID_ECOMMERCE_SITE')
                                    ->get($this->table);
        } else {
            $resultado = $this->db->select('*')
                ->where("UPPER(TX_TITULO) LIKE = '%$pesquisa%' AND (TP_CONTEUDO = 'BD' OR TP_CONTEUDO = 'BP')")
                ->order_by('ID_ECOMMERCE_SITE')
                ->get($this->table);
        }

        return $resultado;

    }

}

?>