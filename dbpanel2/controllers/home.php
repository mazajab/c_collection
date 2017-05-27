<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    
        
    }
    public function index(){
    $this->load->view('masterheader');
    $this->load->view('home_view');
     $this->load->view('masterfooter');

}
 public function login(){
    $this->load->view('masterheader');
    $this->load->view('login_view');
     $this->load->view('masterfooter');

}
public function restore(){
    $this->load->view('masterheader');
    $this->load->view('restore_view');
     $this->load->view('masterfooter');

}
public function signup(){
    $this->load->view('masterheader');
    $this->load->view('signup_view');
     $this->load->view('masterfooter');

}
public function dash(){
    $this->load->view('masterheader');
    $this->load->view('dash_view');
     $this->load->view('masterfooter');

}
public function accsetting(){
    $this->load->view('masterheader');
    $this->load->view('accsetting_view');
     $this->load->view('masterfooter');

}
public function signout(){
    //$this->load->view('masterheader');
    //$this->load->view('accsetting_view');
    // $this->load->view('masterfooter');

}
public function dbsetting(){
    $this->load->view('masterheader');
    $this->load->view('dbsetting_view');
     $this->load->view('masterfooter');

}
}