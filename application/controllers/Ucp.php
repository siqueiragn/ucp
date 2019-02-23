<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ucp extends MY_Controller {

    public function index()
    {
        if ($this->nativesession->get("autenticado")) {
            redirect($this->router->class . '/home');
        } else {
            redirect($this->router->class . '/login');
        }
    }

    public function home()
    {

        $this->load->model('NewsModel');

        $data['noticias'] = $this->NewsModel->listar(true);

        $this->load->view('estruturas/topo_ucp');
        $this->load->view('estruturas/home_ucp', $data);
    }

    public function staff()
    {

        $this->load->model('User');

        $data['objetos'] = $this->User->getCards();

        $this->load->view('estruturas/topo');
        $this->load->view('estruturas/staff', $data);
    }

    public function login() {


        $this->load->model('NewsModel');

        $data['noticias'] = $this->NewsModel->listar(true);

        if (!$this->nativesession->get('autenticado')) {
            $this->load->view('estruturas/topo');
            $this->load->view('estruturas/home', $data);
        } else {
            redirect( 'ucp/home?error=1');
        }

    }

    public function questionario() {

        if ($this->nativesession->get('autenticadoTemporariamente')) {

            $data['helps'] = array();
            $this->load->view('estruturas/topo');
            $this->load->view('estruturas/questionario', $data);
        } else {
            redirect( 'ucp/registrar?error=1');
        }

    }

    public function dbAuthme() {

        if ($this->input->post()) {

            $user = $this->input->post('user');
            $pass = $this->input->post('pass');

            $this->load->model('User');
            $result = $this->User->authMe($user, $pass);

            if ($result->num_rows()) {
                setLoginData($result->row());
            }
            else {
               redirect($this->router->class . '/login?error=1');
            }

            redirect( $this->router->class . '/home');

        }

    }

    public function dbRegisterStepTwo() {

        if ($this->input->post()) {

            $correctAnswers = array(
                1 => 'a',
                2 => 'c',
                3 => 'b',
                4 => 'd',
                5 => 'b',
                6 => 'a',
                7 => 'b',
                8 => 'b',
            );

            $acertos = 0;
            $erros = [];
            for ($i = 1; $i <= 8; $i++){

                if ($this->input->post('question' . $i) == $correctAnswers[$i]  ) {
                    $acertos++;
                } else {
                    $erros[] = $i;
                }

            }

            if ($acertos == 8) {

                $this->load->model('User');

                $this->User->register($this->nativesession->get('user'), $this->nativesession->get('email'), $this->nativesession->get('pass'), $this->dados_globais['stamp']);
                $result = $this->User->authMe($this->nativesession->get('user'), $this->nativesession->get('pass'));
                if ($result) {
                    setLoginData($result->row());
                    destruirTemporario();
                    redirect($this->router->class . '/home');
                }

                redirect($this->router->class . '/home');
            } else {

                redirect( $this->router->class . '/questionario?errors=' . serialize($erros));

            }

        }

    }

    public function dbRegister() {

        if ($this->input->post()) {

            $user  = $this->input->post('user');
            $pass  = $this->input->post('pass');
            $passC = $this->input->post('confirmpass');
            $email = $this->input->post('email');

            $this->load->model('User');

            if ($passC == $pass ) {

                if (!empty($email) && !empty($user)) {

                    loginTemporario($user, $email, $pass);
                    redirect( $this->router->class . '/questionario');

                }

            }
            redirect($this->router->class . '/registrar?error=1');

        }

    }

    function logout() {
        logout();
    }

    function registrar() {

        if (!$this->nativesession->get('autenticado')) {

            $this->load->view('estruturas/topo');
            $this->load->view('estruturas/registrar');

        } else {
            redirect( 'ucp/home?error=1');
        }

    }

    function forgotPass() {

        $this->load->view('estruturas/topo');
        $this->load->view('estruturas/forgotPass');

    }

}