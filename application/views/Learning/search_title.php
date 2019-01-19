<script>
$(document).ready(function(){
     // $('#search_data').DataTable({
      // "bFilter" : false,
      // "bLengthChange" : false,
      // "bInfo" : false
      //  "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>'
$('#example').DataTable({
  "bFilter" : false,
  "bLengthChange" : false,
  "bInfo" : false
     });

 });
</script>

<?php defined ('BASEPATH') OR exit ('No direct script access allowed');

 $connect = mysqli_connect("localhost", "root", "", "learningplatform");
if(isset($_POST["submit"]))
{
     if(!empty($_POST["search"]))
     {
          $query = str_replace(" ", "+", $_POST["search"]);
          header("location:search_title?search=" . $query);
     }
}
?>
<body>
  <div align = "center" id = "container">


      <h1> Search </h1>

      <div class="search-container">
      <div class="row upse">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-center">
          <a class="btn btn-info dashlink" href="<?php echo base_url(); ?>Learning/browse"><i class="fa fa-search" aria-hidden="true"></i> Browse All Thesis </a>
        </div>
        <div class="col-sm-2"></div>
        <div class = "col-sm-12">
          <form class = "form-inline" role = "form" action="<?php echo base_url().'Learning/search_title'; ?> " method= "post">
            <button type ="submit" class = "btn btn-info searchb" name = "submit"><i class="fa fa-search" aria-hidden="true"></i> Search</button><input type = "text" class="form-control" id="searchf" name = "search" placeholder = "Search here...">
          </form>
        </div>

          </form>
          </div>
      </div>


      <div class = "table-responsive" style="width: 90%;">
      <table id="example" class = "table table-striped">
      <thead style ="background-color: #3b5998; color: #fff; opacity: 0.9;" >
        <tr>
          <th><i class="fa fa-bookmark" id="upicon" aria-hidden="true"></i> Title</th>
          <th><i class="fa fa-graduation-cap" id="upicon" aria-hidden="true"></i> Course</th>
          <th><i class="fa fa-calendar" id="upicon" aria-hidden="true"></i> Year</th>
          <th><i class="fa fa-calendar" id="upicon" aria-hidden="true"></i> Category</th>
          <th><i class="fa fa-tripadvisor" id="upicon" aria-hidden="true"></i> Adviser</th>
        </tr>
      </thead>

    <?php

     if(isset($_GET["search"]))
     {
          $title['mypage'] = "Project";
          $condition = '';
          $query = explode(" ", $_GET["search"]);
          foreach($query as $text)
          {
               $condition .= "title LIKE '%".mysqli_real_escape_string($connect, $text)."%' OR ";
          }
          $condition = substr($condition, 0, -4);
          $sql_query = "SELECT projects_tbl.proj_id, projects_tbl.title, projects_tbl.year, projects_tbl.category, advisers_tbl.professor, courses_tbl.abbrev
          FROM projects_tbl INNER JOIN advisers_tbl ON projects_tbl.adv_id=advisers_tbl.adv_id
          INNER JOIN courses_tbl on projects_tbl.course_id=courses_tbl.course_id  WHERE " . $condition ;
          $result = mysqli_query($connect, $sql_query);

          if(mysqli_num_rows($result) > 0)
          {
                while($row = mysqli_fetch_array($result))
               {
                    echo '<tr><td><a href="'.base_url('Show_project?id='.$row['proj_id']).'">'.$row["title"].'</td>
                              <td>'.$row["abbrev"].'</td>
                              <td>'.$row["year"].'</td>
                              <td>'.$row["category"].'</td>
                              <td>'.$row["professor"].'</td>
                              </tr>';
               }
          }
     }

    ?>
  </table>
</div>
</div>
</body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-full navbar-s">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand aaa" href="<?php echo base_url(); ?>Learning/dashboard">LEARNING RESOURCE PLATFORM</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url(); ?>Learning/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
                <button class="dropdown-menu dropdown-style">
                    <li class="drp"><a href="<?php echo base_url(); ?>Learning/browse"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</li>
                    <li class="drp"><a href="<?php echo base_url(); ?>upload"><i class="fa fa-upload" aria-hidden="true"></i> UPLOAD</a></li>
                  </button>
            </li>
            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url(); ?>Learning/help"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Help</a>
            </li>
            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url(); ?>Learning/about"><i class="fa fa-question-circle" aria-hidden="true"></i> About<span class="sr-only"></span></a>
            </li>
            <li class="dropdown">
                <a class="nav-link" href="<?php echo base_url('Learning/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log-out</a>
            </li>
        </ul>
        </div>
      </nav>
