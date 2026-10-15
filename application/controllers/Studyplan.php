<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Studyplan extends CI_Controller
{
    public function index()
    {
        $this->load->view('jadwal_pelajaran');
    }
}
