<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    public function index()
    {
        $this->template->load('notika/view_1', 'notika/konten/form/v_form');
    }
}
