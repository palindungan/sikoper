<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simuda extends CI_Controller
{

    // link menu
    public function form_simuda_baru()
    {
        $this->template->load('notika/view_1', 'notika/konten/simuda/v_form_simuda_baru');
    }

    // link menu
    public function kelola_simuda()
    {
        $this->template->load('notika/view_1', 'notika/konten/simuda/v_kelola_simuda');
    }

    // link menu
    public function daftar_nominatif()
    {
        $this->template->load('notika/view_1', 'notika/konten/simuda/v_daftar_nominatif');
    }
}
