<?php

class Banners extends MY_Controller {

	public function index()
	{
		$this->load->view('estruturas/topo');
		$this->load->view($this->router->class . '/cadastrar');

	}
	 
	public function cadastrar()
	{
       /* $r = $this->db->query("SELECT * FROM CEJO_USUARIOS_SISTEMA");
        foreach ($r->result() as $i) {
            echo "<pre>";
            print_r($i);
            echo "</pre>";
        }
        exit;*/
        $this->load->view('estruturas/topo');
        $this->load->view( $this->router->class . '/cadastrar');
	}

	public function editar()
	{
	    $this->load->model('Banner');

        $data['objeto'] = $this->Banner->buscar_por_codigo( $this->uri->segment(3) )->row();

	    if ( true ) {

            $this->load->view('estruturas/topo');
            $this->load->view( $this->router->class . '/editar', $data);
            $this->load->view('estruturas/rodape');


        }
/*

        flashdata('alert-success', 'Objeto não encontrado!');
        redirect( $this->router->class . '/listar' );*/

	}

	public function listar()
	{
        $this->load->view('estruturas/topo');

        $this->load->model('Banner');

        $pesquisa = $this->input->get('pesquisa');
        $data['objetos'] = $this->Banner->listar( $pesquisa );

        $this->load->view( $this->router->class . '/listar', $data);
	}

	public function DB()
    {

        $this->load->model('Banner');

        if ($this->input->post('remover')) {

            $codigo       = $this->input->get('cd');
            if ($this->input->post('exclusao') != '') {
                $this->Banner->ativar($codigo, $this->nativesession->get('usuario_cd_empresa'), $this->nativesession->get('usuario_cd'), $this->dados_globais['stamp']);
            } else {
                $this->Banner->inativar($codigo, $this->nativesession->get('usuario_cd_empresa'), $this->nativesession->get('usuario_cd'), $this->dados_globais['stamp']);
            }

        } else {

            switch ( $this->input->get('acao')) {

                case 'salvar':

                    $codigo         = buscar_sequencia_oracle($this->Banner->sequencia);
                    $tipo           = $this->input->post('tipo');
                    $link           = $this->input->post('link');
                    $area           = $this->input->post('area');
                    $texto          = $this->input->post('texto');
                    $grauDestaque   = $this->input->post('grau_destaque');
                    $ordem          = $this->input->post('ordem');
                    $titulo         = $this->input->post('titulo');

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

                    $this->Banner->salvar($codigo, $area, $tipo, $grauDestaque, $titulo, $img, $link, $texto, $ordem, $this->nativesession->get('usuario_cd_empresa'), $this->nativesession->get('usuario_cd'), $this->dados_globais['stamp']);


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

                    $this->Banner->atualizar($codigo, $area, $tipo, $grauDestaque, $titulo, $img, $link, $texto, $ordem, $this->nativesession->get('usuario_cd_empresa'), $this->nativesession->get('usuario_cd'), $this->dados_globais['stamp']);

                break;

            }
        }


        flashdata('alert-success', 'Operação realizada com sucesso!');
        redirect($this->router->class . '/listar');

        /*     } else {

                 flashdata('alert-success', 'Ocorreu um problema ao realizar a operação!');

             }*/

    }


}
