<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function index()
    {
        $this->template->load('notika/view_1', 'notika/konten/anggota/v_tambah');
    }
}
