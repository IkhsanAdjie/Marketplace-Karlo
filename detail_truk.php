<html>
<?php
    require('koneksi.php');

    $id ="";
    if(isset($_GET["id"])){
        $id = $_GET["id"];
   }
   
   $sql = "SELECT * FROM `data_truk` WHERE id_truk ='$id'";
   $result = $conn->query($sql);

    
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
crossorigin="anonymous"></script>
<style>
  .container{
    margin-top: 100px;
    width:1100px;
    height:auto;
    padding:30px;
    background: white;
    box-shadow: 0px 0px 11px 1px rgba(0,0,0,0.28);
}

.btn-cart{
    background:rgb(115, 199, 238);
    color:white;
    font-size: 15px;
    border: none;
    height: 40px;
}
</style>
</head>
<body>
    <div class="container">
      <?php
         if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
      ?>
               <div class="row">
                  <div class="col-md-5">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                           <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                           </div>
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <img src="./images/<?php echo $row["file_foto"]?>" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                 <img src="" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                 <img src="" class="d-block w-100" alt="...">
                              </div>
                           </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Previous</span>
                                 </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Next</span>
                              </button>
                           </div>              
                  </div>
                  <div class="col-md-7">
                     <h2><?php echo $row["nama_truk"] ?></h2><br>
                     <p><b>Tipe Truk :</b> <?php echo $row["tipe_truk"] ?></p>
                     <p><b>Brand : </b> <?php echo $row["brand"] ?></p>
                     <p><b>Berat Muatan : </b><?php echo $row["berat_muatan"] ?></p>             
                     <button type="button" class="btn-cart">Pesan</button>
                  </div>
               </div>                
            <?php
            }
         }
      ?>
   </div>
</body>
        