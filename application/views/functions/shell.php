  <div class="list-group">
  <div id="sidemenu">
    <h4>Resource Manager</h4>
    <script type="text/javascript">
    var container = document.getElementById("rm");
    var container2 = document.getElementById("inn");
    for (var i = 0; i < 30; i++) {
      // container.innerHTML += '<div id="div'+i+'"></div>';
      // container2.innerHTML += '<div id="manage'+i+'"></div>';
      if(count == 0){
        $("#delBtn").prop("disabled", true);
      }
    }
    </script>

    <ul id="rm">
      <input id="outlinetitle" type="text1" name="ol_name" placeholder="Outline title" value="<?php if(isset($_SESSION['outlineTitle'])){ echo $_SESSION['outlineTitle'];}?>">
      <button id="saveit" class="btn btn-info" type="button" name="save" onclick="save()">Save title</button>
      <a class="btn" data-popup-open="popup-1" href="#">Manage</a>
      <?php
      //  if(isset($_SESSION['resmgr'])){
      //    foreach ($_SESSION['resmgr'] as $value) {
      //      echo $value;
      //    }
      // }
      // print_r($_SESSION['resmgr']);
      if(isset($_SESSION['resmgr'])){
        $c = 0;
        foreach ($_SESSION['resmgr'] as $value) {
          echo $value.$_SESSION['citation'][$c];
          $c+=1;
        }
      }

        ?>
      </ul>
  </div>
</div>

<div class="popup" data-popup="popup-1">
  <div class="popup-inner">
    <div>
      <h5>Manage your notes</h5>
      <button type="submit" class="btn btn-danger" name="deb" id="delBtn" onclick="delShell()">Delete</button>
      <button type="submit" class="btn" name="clrbtn" id="clrBtn" onclick="clrShell()">Clear</button>
      <div id="inn" style="overflow-y: scroll; max-height: 300px">
      <?php

      if (isset($_SESSION['outlineTitle'])) {
        echo '<p id="titlep" class="font-weight-bold">'.$_SESSION['outlineTitle'].'</p>';
      }

      else{
        echo '<p id="titlep" class="font-weight-bold"></p>';
      }
      ?>
      <?php
      if(isset($_SESSION['resmgr'])){
        $c = 0;
        foreach ($_SESSION['resmgr'] as $value) {
          echo $value.$_SESSION['citation'][$c];
          $c+=1;
        }
      }
      ?>
    </div>
    <button type="submit" class="btn btn-info" name="saveb" id="savBtn" onclick="printDiv('inn')">Print</button>
    <button type="submit" class="btn btn-info" name="expb" id="expBtn" onclick="downloadInnerHtml('inn')">Save as document</button>
    <!-- <a class="word-export" href="javascript:void(0)"> Export as .doc </a> -->
    </div>
    <br />
    <br />
    <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
  </div>
</div>

<script type="text/javascript">
function save(){
  var myLength = $("#outlinetitle").val().length;
  if(myLength==0){
    alert('A title is needed');
  }
  else{
    var title = $("#outlinetitle").val();
    $.post("<?php echo base_url('Ajax_control/title');?>",{
      posttitle: title
    },
    function(data){
      $('#outlinetitle').html(data);
      $('#titlep').html(data);
    });
  }
}

$(function() {
//----- OPEN
$('[data-popup-open]').on('click', function(e)  {
var targeted_popup_class = jQuery(this).attr('data-popup-open');
$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
$('.toggler').click();
e.preventDefault();
});
//----- CLOSE
$('[data-popup-close]').on('click', function(e)  {
var targeted_popup_class = jQuery(this).attr('data-popup-close');
$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
$('.toggler').click();
e.preventDefault();
});
});

// function delShell(){
$(document).ready(function(){
$('#inn > p').click(function(){
  currentID = this.id;
  del = $('#'+currentID).html();
  // alert(currentID+' '+del);
  $('#delBtn').prop("disabled", false);
});
});

function delShell(){
  $.post("<?php echo base_url('Ajax_control/delete');?>",{
    postid: currentID,
    postpara : del
  },
  function(data){
    location.reload();
    $('.toggler').click();
    });
  }

  function clrShell(){
    $.post("<?php echo base_url('Ajax_control/clear');?>",{
      postid: currentID,
      postpara : del
    },
    function(data){
      location.reload();
      });
    }

// function saveNote(){
//   var notes = $('#inn').children().text();
  // alert(notes);
    // $.post("<?php// echo base_url('Ajax_control/save');?>",{
    //   postid: currentID,
    //   postpara : del
    // },
    // function(data){
    //   location.reload();
    //   $('.toggler').click();
    //   });
    // }
// });


// }
</script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php //echo base_url('assets/js/jquery.wordexport.js'); ?>"></script>
<script src="<?php //echo base_url('assets/js/FileSaver.js'); ?>"></script> -->
<!-- <script src="jquery.wordexport.js"></script> -->
<script type="text/javascript">
function downloadInnerHtml(elId) {
 var elHtml = document.getElementById(elId).innerHTML;
 var link = document.createElement('a');
 link.setAttribute('download', 'myOutline.doc');
 link.setAttribute('href', 'data:' + 'text/doc' + ';charset=utf-8,' + elHtml);
 link.click();
}
</script>
