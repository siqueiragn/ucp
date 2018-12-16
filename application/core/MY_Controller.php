<?php

class MY_Controller extends CI_Controller
{

    public $dados_globais;

    function __construct()
    {

        parent::__construct();
        $c = get_instance();

        $this->dados_globais['stamp'] = date('d-m-Y H:i:s');

        /* Create sessions with user data */
        function setLoginData( $user ){

            $CI = get_instance();

            $CI->nativesession->set('username', $user->Username);
            $CI->nativesession->set('email', $user->email);
            $CI->nativesession->set('admin', $user->admin);
            $CI->nativesession->set('register', $user->RegisterDate);
            $CI->nativesession->set('lastLogin', $user->LoginDate);

        }


        function logout()
        {

            $CI = get_instance();

            $CI->nativesession->delete('username', $user->Username);
            $CI->nativesession->delete('email', $user->email);
            $CI->nativesession->delete('admin', $user->admin);
            $CI->nativesession->delete('register', $user->RegisterDate);
            $CI->nativesession->delete('lastLogin', $user->LoginDate);

            flashdata('alert-danger', 'Sua sessão expirou, faça login novamente!');

            redirect($CI->router->class.'/login');

        }

        /* ===== FUNÇÃO FLASHDATA ===== */
        function flashdata( $classe, $mensagem ){

            $ci = get_instance();

            $ci->session->set_flashdata('classe', $classe);
            $ci->session->set_flashdata('mensagem', $mensagem);

        }
        /* ===== FIM FUNÇÃO FLASHDATA ===== */


        function upload( $pasta, $fonte, $nome, $tamanho_max = '20480' ){
            /* PASTA = A partir de assets/upload */
            /* FONTE = Nome do campo do arquivo */
            /* NOME = Nome para salvar o arquivo */

            if ( !is_dir(getcwd(). "/assets/upload/$pasta") ) {
                mkdir(getcwd() ."/assets/upload/$pasta", 777, true);
            }

            $config['upload_path']   	= getcwd() ."/assets/upload/$pasta";
            $config['allowed_types'] 	= '*';
            $config['file_name']     	= $nome;
            $config['max_size']      	= $tamanho_max;
            $config['overwrite']     	= true;
            $config['maintain_ratio'] 	= TRUE;

            $CI = get_instance();
            $CI->load->library('upload', $config);
            $CI->upload->initialize($config);

            return $CI->upload->do_upload($fonte);

        }
        function upload_customizado( $pasta, $arquivo, $nome ){

            if ( !is_dir($pasta)) {
                mkdir($pasta, 777, true);
            }
            move_uploaded_file($arquivo, "$pasta/$nome");

        }

        function pre( $entrada ){
            echo "<pre>";
            print_r($entrada);
            echo "</pre>";
        }

        function thumb( $pasta, $imagem, $largura, $altura ){

            $config['image_library']    = 'gd2';
            $config['source_image']     = getcwd() ."/assets/upload/$pasta/$imagem";
            $config['new_image']        = getcwd() ."/assets/upload/$pasta/";
            $config['create_thumb']     = TRUE;
            $config['maintain_ratio']   = TRUE;
            $config['width']            = $largura;
            $config['height']           = $altura;
            $config['create_thumb']     = true;

            $CI = get_instance();
            $CI->load->library('image_lib', $config);
            return $CI->image_lib->resize();

        }

        function extensao($arquivo){

            return strtolower( pathinfo($arquivo, PATHINFO_EXTENSION) );

        }

        function buscar_thumb($nome){

            return str_replace('.jpg', '_thumb.jpg', $nome);

        }

        function cleanName( $name ) {

            return str_replace("_", " ", $name);
        }


        /* ==================== VERIFICAÇÃO LOGIN ==================== */
        $permitidas = array('welcome/login', 'welcome', 'welcome/logout', 'welcome/authme');

        if( !$this->nativesession->get('username') ){
            if( !in_array($this->router->class.'/'.$this->router->method, $permitidas) ){
                !$this->nativesession->set('usuario_url_redirecionar', current_url());
                redirect('welcome/login');
            }
        }
        /* ==================== FIM VERIFICAÇÃO LOGIN ==================== */


    }

}

?>