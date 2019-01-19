<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_control extends CI_Controller
{
  public function index()
  {

      $cout = 0;
      if (isset($_SESSION['resmgr'])) {
        $curr = count($_SESSION['resmgr']);
        if ($curr == 1) {
          $cout = 1;
        }
        else {
        // $last = end($_SESSION['resmgr']);
        // $lastrec = explode(' ', $last)));
        // // $newlast = end((explode('id="par', $lastrec[0])));
        // $parid = $lastrec[0];
        // //id="parX"
        // $newlast = rtrim($newlast, '"');
        // $lastrec = (int)$newlast;
          $cout = $curr;
        }
      }

      $citetitle = $this->input->post('postcitetitle');
      $citeyear = $this->input->post('postciteyear');
      $projurl = $this->input->post('posturl');

      $text = $this->input->post('postres');
      $text = end((explode('<p', $text)));
      $newtext = '<p id="par'.$cout.'" '.$text;
      // $newtext = $text;//.'<a href="#" onclick="delShell()" id="del'.$cout.'">remove</a>';
      // $arr = array('res'.$cout => $newtext);
      $_SESSION['resmgr'][] = $newtext;
      $_SESSION['citation'][] = '<p><small><i>from: <a href="'.$projurl.'">'.$citetitle.' ('.$citeyear.')</a> link: '.$projurl.'</i></small><p>';

    //   foreach ($arr as $k => $v) {
    //     $_SESSION['resmgr'][$k] = $v;
    // }end($_SESSION['citation'])
      $currcite = end($_SESSION['citation']);
      $currres = end($_SESSION['resmgr']);

      echo $currres.$currcite;
  }


  public function title()
  {
      $title = $this->input->post('posttitle');
      $_SESSION['outlineTitle'] = $title;

      echo $title;
  }

  public function delete()
  {
    $id = $this->input->post('postid');
    $para = $this->input->post('postpara');

    $newid = end((explode('par', $id)));
    $index = (int)$newid;
    // $id = end((explode('del', $id)));
    // $item = '<p id="'.$id.'" class="list-group-item">'.$para.'</p>';
    // $key = "res".$id;
    // $index = array_search($item, $_SESSION['resmgr']);
    // $from = $_SESSION['resmgr'][$index];

    $_SESSION['resmgr'][$index] = '<p hidden></p>';
    $_SESSION['citation'][$index] = '<p hidden></p>';

    // $size = count($_SESSION['resmgr']);
    // $size -=1;
    // foreach ($_SESSION['resmgr'] as $val) {
    //   str_replace('par2','par'.$size.'',$val);
    //   $size+=1;
    // }
    echo '';
  }

  public function clear()
  {
    unset($_SESSION['resmgr']);
    unset($_SESSION['citation']);
    unset($_SESSION['outlineTitle']);

    echo '';
  }

}
?>
