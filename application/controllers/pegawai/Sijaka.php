<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sijaka extends CI_Controller
{

    // link menu
    public function form_sijaka_baru()
    {
        $this->template->load('notika/view_1', 'notika/konten/sijaka/v_form_sijaka_baru');
    }

    // link menu
    public function daftar_nominatif()
    {
        $this->template->load('notika/view_1', 'notika/konten/sijaka/v_daftar_nominatif');
    }
}
