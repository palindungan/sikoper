<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekening extends CI_Controller
{

    // link menu
    public function pembukaan_baru()
    {
        $this->template->load('notika/view_1', 'notika/konten/pegawai/v_tambah');
    }
}
