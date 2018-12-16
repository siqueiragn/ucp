<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function index()
    {
        redirect( $this->router->class . '/login');
    }

    public function home()
    {
        $this->load->view('estruturas/topo_ucp');
        $this->load->view('estruturas/home_ucp');
    }

    public function login() {


        $this->load->view('estruturas/topo');
        $this->load->view('estruturas/home');


    }

    public function authme() {

        if ($this->input->post()) {

            $user = $this->input->post('user');
            $pass = $this->input->post('pass');

            $this->load->model('user');
            $result = $this->user->authMe($user, $pass);


            if ($result) {
                setLoginData($result->row());
            }
            else {
               echo "DEU RUIM"; exit;// redirect();
            }

            redirect( $this->router->class . '/home');

        }

    }

}