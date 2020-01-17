<title>Reviewer LSA/LSI</title>
<?php
set_time_limit(0);
include "library/import.php";
//menampilkan API
if(isset($_POST['Kirim'])){

$text = $_POST['judul'];
include "library/import.php";
?>

<br>
<div class="container">
    <a href="index.php"><h1>Hasil Pencarian LSA</h1></a>
    <form action="pencarian.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control google-search" name="judul" value="<?php echo $text ?>">
        <div class="btn-group">
      <br>
        <button type="submit" name="Kirim" class="btn btn-primary">Pencarian LSA</button>
        <a type="button" href="admin/tambahdata.php" class="btn btn-success">Unggah Data LSA</a>
        </div>
        </div>
    </form>
<?php
$query =  str_replace(" ", "%20", $text);
$json=file_get_contents("http://localhost:5000/cariquery?q=$query");
$data = json_decode($json, true);
 echo "<br/>";
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Latent Semantic Analysis</title>
 <style>
  table {
   width: 100%; 
  }
  table tr td {
   padding: 1rem;
  }
 </style>
</head>
<body>
  <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Ranking</th>
      <th>Reviewer</th>
      <th>Document</th>
      <th>Score</th>
      <th>Judul</th>
    </tr>
  </thead>
  <?php   
   // for($a=0; $a < count($data); $a++)
  $i =1;
  foreach ($data as $value) {
      foreach ($value['details'] as $dataa) {
        echo '<tbody>
    <tr class="active">';
         echo '<td>'.$i.'</td>';
         echo '<td>'.$dataa['Reviewer'].'</td>';
         echo '<td>'.$dataa['document'].'</td>';
         echo '<td>'.$dataa['score'].'</td>';
         ?>
          <td data-placement="bottom" data-toggle="popover" title="<?php echo $dataa['Abstrak']; ?>"><?php echo $dataa['Judul']; ?></td>
        <?php
        // echo $i;
        // echo "<div class='col-md-12'>";
        //   echo "<div class='col-md-12'>";
        //   echo "<h2 class='text-primary'>".$dataa['Judul']." , ".$dataa['Reviewer']."</h2>";
        //   echo "<h5>".$dataa['id']." , ".$dataa['document']." , ".$dataa['score']."</h5>";
        //   echo "<p>".$dataa['Abstrak']."</p>";
        //   echo "</div>";
        // echo "</div>";
        // echo "<hr class='sidebar-divider'>";
        $i = $i+1;
   }
 }
  ?>
  </table> 
</body>
</html>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>
