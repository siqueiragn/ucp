<?php

class Character extends CI_Model  {

    var $table 	    = 'accounts';

    function getByID( $codigo ) {

        return $this->db->select('*')
                        ->where("ucpOwn = $codigo")
                        ->get($this->table);

    }

    function getByIDToUser( $codigo, $username ) {

        return $this->db->select('*')
                        ->where("ucpOwn = $codigo")
                        ->get($this->table);

    }

    function salvar( $nome, $origem, $idade, $skin, $sexo, $nascimento, $status, $idUsuario, $stamp ) {

        $data = array(
            'Username'         => $nome,
            'Origin'           => $origem,
            'Age'              => $idade,
            'Skin'             => $skin,
            'Gender'           => $sexo,
            'Birthdate'        => $nascimento,
            'STATUS'           => $status,
            'ucpOwn'           => $idUsuario,
            'CreateDate'       => $stamp,
        );

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
            'DBCharacter'              => $usuario,
            'OSCharacter'              => $usuario,
        );

        $this->db->set('STAMP',"TO_DATE('$stamp','DD/MM/RR HH24:MI:SS')", false);


        $this->db->where('ID_ECOMMERCE_SITE', $codigo);
        $this->db->update($this->table, $data);

    }

    function getAllByUsername( $Charactername ) {

            return $this->db->select('*')
                            ->where("username = '$Charactername'")
                            ->order_by('ID')
                            ->get($this->table);

    }
    function getAllByUserID( $userID ) {

            return $this->db->select('*')
                            ->where("ucpOwn = '$userID'")
                            ->order_by('ID')
                            ->get($this->table);

    }

}

?>