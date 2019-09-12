<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->template->load('notika/view_1', 'notika/konten/home/v_home');
    }
}
