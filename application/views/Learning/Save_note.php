<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save_note extends CI_Controller
{
  public function index()
  {
    $title['mypage'] = "My Account";
    $this->load->model('Learning_model');

    $userid = $_SESSION['userid'];
    $notetitle = $_SESSION['outlineTitle'];

    $this->learning_model->savenoteTodb($userid, $notetitle, foreach ($_SESSION['resmgr'] as $val) {echo $val;}, foreach ($_SESSION['citation'] as $value) {echo $value;});

    $this->load->view('template/header1', $title);
    $this->load->view('function/myaccount');
    $this->load->view('template/footer');
  }
}
?>
