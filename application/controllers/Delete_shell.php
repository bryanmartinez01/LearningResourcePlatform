<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_shell extends CI_Controller
{
  public function index()
  {
      $shell = $this->input->post('sh');
      $index = array_search($shell, $_SESSION['resmgr']);
      echo $index;

  }
}
?>
