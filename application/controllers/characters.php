<?php

class Characters extends MY_Controller {

	public function index()
	{

	    redirect( $this->router->class . '/listar');

	}
	 
	public function cadastrar()
	{
        $this->load->view('estruturas/topo_ucp');
        $this->load->view( $this->router->class . '/cadastrar');
	}

	public function editar()
	{
	    $this->load->model('character');

        $data['objeto'] = $this->character->getByID( $this->uri->segment(3), $this->nativesession->get('username') )->row();

	    if ( true ) {

            $this->load->view('estruturas/topo_ucp');
            $this->load->view( $this->router->class . '/editar', $data);
            $this->load->view('estruturas/rodape');


        }
	}

	public function listar()
	{
        $this->load->view('estruturas/topo_ucp');

        $this->load->model('character');

        $data['objetos'] = $this->character->getAllByUserID( $this->nativesession->get('userID') );

        $this->load->view( $this->router->class . '/listar', $data);
	}

	public function DB()
    {

        $this->load->model('character');

            switch ( $this->input->get('acao')) {

                case 'salvar':

                    $nome           = $this->input->post("nome");
                    $dataNascimento = $this->input->post("data_nascimento");
                    $sexo           = $this->input->post("sexo");
                    $origem         = $this->input->post("origem");
                    $idade          = calcularIdadade( $dataNascimento );
                    $skin           = $this->input->post('skin');

                    $this->character->salvar($nome, $origem, $idade, $skin, $sexo, $dataNascimento, 1, $this->nativesession->get('userID'), $this->dados_globais['stamp']);


                break;
                case 'atualizar':

                    $codigo       = $this->input->get('cd');
                    $tipo         = $this->input->post('tipo');
                    $link         = $this->input->post('link');
                    $area         = $this->input->post('area');
                    $texto        = $this->input->post('texto');
                    $grauDestaque = $this->input->post('grau_destaque');
                    $ordem        = $this->input->post('ordem');
                    $titulo       = $this->input->post('titulo');

                    /* IMAGEM 1  */
                    if( !empty( $_FILES['imagem']['name'] ) ){
                        $ext = extensao( $_FILES['imagem']['name'] );
                        $img = $this->router->class . '_' . $codigo.'.jpg';
                        $per = array('jpg','jpeg','png');
                        if( in_array($ext, $per) ){
                            if( upload($this->router->class, 'imagem', $img) ){
                                thumb($this->router->class, $img, 600, 400);
                            }
                        }
                    }

                    $this->character->atualizar($codigo, $area, $tipo, $grauDestaque, $titulo, $img, $link, $texto, $ordem, $this->nativesession->get('usuario_cd_empresa'), $this->nativesession->get('usuario_cd'), $this->dados_globais['stamp']);

                break;

            }
    }


}
