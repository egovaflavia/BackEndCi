<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model("user_model");
    //     if ($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    // }

    public function index()
    {
        // load view admin/Index.php
        $this->load->view("backend/template");
    }
}
