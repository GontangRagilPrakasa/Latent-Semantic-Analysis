<!-- 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<title>Reviewer LSA/LSI</title>
<?php
include "library/import.php";
?>
<style type="text/css">
  .google-logo
{
  padding: 20px 0;
}
.google-search
{
  padding: 20px 10px;
}
.google-search:focus
{
  box-shadow:silver 0 2px 10px; 
  border-color: silver;
}
.google-form .btn-group
{
  padding: 20px 0;
}
.btn-group>.btn
{
  border-radius: 0;
  margin: 0 10px;
}
.btn
{
  background-color: #f2f2f2;
  color: #757575;
  font-weight: 900;
}
.tengah {
     margin: auto;
     position: absolute;
     top: 0; left: 0; bottom: 0; right: 0;
     height: 300px;
     border: 1px solid #999; /*jika ingin melihat posisi div anda lebih jelas */
}
</style>
<br><br><br><br><br><br><br><br><br>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
    <div class="row google-logo text-center">
    <h1>Latent Semantic Analysis</h1> 
      
    </div>
    <div class="row google-form text-center">
      <form action="pencarian.php" method="post">
        <div class="form-group">

      <input type="text" class="form-control google-search" name="judul">
      <div class="btn-group">
  <br>
  <button type="submit" name="Kirim" class="btn btn-default">Pencarian LSA</button>
  <a type="button" href="admin/tambahdata.php" class="btn btn-default">Unggah Data LSA</a>
  
</div>
    </div>
      </form>
      
    </div>
    
    
  </div>
  </div>
</div>