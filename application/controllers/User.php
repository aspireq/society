<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Admin_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->auth = new stdClass;
        $this->load->library('flexi_auth');
        $this->data = null;
        if ($this->flexi_auth->is_logged_in()) {
            $this->data['userinfo'] = $this->userinfo = $this->flexi_auth->get_user_by_identity_row_array();
            $this->user_id = $this->data['userinfo']['uacc_id'];
        }
    }

    function login_via_ajax() {
        if ($this->input->is_ajax_request()) {
            $this->load->model('demo_auth_model');
            $this->demo_auth_model->login_via_ajax();
            die(json_encode(array('message' => $this->flexi_auth->get_messages(), 'login_status' => $this->flexi_auth->is_logged_in())));
        }
    }

    function index() {
        $this->home();
    }

    function logout() {
        $this->flexi_auth->logout(TRUE);
        $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
        redirect('reseller/home');
    }

    function include_files() {
        $this->data['header'] = $this->load->view('user/header', $this->data, TRUE);
        $this->data['top_menu'] = $this->load->view('user/top_menu', NULL, TRUE);
        $this->data['common'] = $this->load->view('user/common', NULL, TRUE);
        $this->data['footer'] = $this->load->view('user/footer', NULL, TRUE);
        return $this->data;
    }

    function home() {
        $this->data = $this->include_files();
        $this->load->view('user/home', $this->data);
    }

    function myflats() {
        $this->data = $this->include_files();
        $this->load->view('user/myflats', $this->data);
    }

}
