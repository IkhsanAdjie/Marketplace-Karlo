<?php
require('koneksi.php');
$sql = "SELECT * FROM data_truk";
$result = $conn->query($sql);
?>
<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
    <style>

a:hover {
            text-decoration: none;
        }
        .main-section{
            margin-top:20px;
            margin-bottom:20px;
            border-radius:5px;
            box-shadow: 0px 0px 11px 1px rgba(0,0,0,0.28);
        }
        .add-sens{
            position: absolute;
            top:0px;
            right:30px;
        }
        .img-section{
            overflow: hidden;
        }
        .img-section img{
            overflow: hidden;
            width:100px;
        }
        /*.img-section img:hover{*/
        /*    opacity:0.6;*/
        /*    transition: 0.5s;*/
        /*    cursor: pointer;*/
        /*}*/
        .sectin-title h1{
            font-weight:700;
            font-size:23px;
            color:#285A63;
        }
            #test:hover{
                opacity:0.6;
                transition: 1.5s;
            }

        .text_center{
            margin-bottom:20px;
        }

        .body{
    margin: 0;
    padding: 0;
    background-color:grey;
}
.header{
    display:flex;
    justify-content:center;
    font-family: sans-serif;
}
h1{
    margin-top: 20px;
    margin-left: 50px;
    font-size: 20px;
    letter-spacing:2px ;
    text-align:left;
}
.search-field{
    height: 50px;
    padding: 10px;
}

.kotaasal{
    width: 360px;
    margin-right: 100px;
    margin-left: 40px;
}
.kotatujuan{
    width: 330px;
    margin-left: 20px;
}

.date1{
    width: 150px;
    margin-left:20px ;
    margin-right: 20px;
}

.date2{
    width: 150px;
    margin-left: 20px;
    margin-right: 100px;
}

.cargo{
    width: 330px;
    margin-left: 65px;
}

.reset{
    margin-left:795px;
}

.search-btn{
    height: 50px;
    width: 150px;
    background:rgb(115, 199, 238);
    border: none;
    color: white;
}
.form-box{
    width:1150px;
    height:300px;
    background: white;
    padding:30px;
    box-shadow: 0px 0px 11px 1px rgba(0,0,0,0.28);
}


    </style>

</head>

<body>
    <div class="header">
        <form>
            <div class="form-box">
                <label for="kotaasal">Kota Asal</label>
                <input type="text" class="search-field kotaasal"
                placeholder="Ketik nama kota" id="kotaasal">
                    
                <label for="kotatujuan">Kota Tujuan</label>
                <input type="text" class="search-field kotatujuan"
                placeholder="Ketik Nama Kota" id="kotatujuan"><br><br><br>
                    
                <label for="">Jadwal Muat</label>
                <input type="date" class="search-field date1"
                placeholder="Pilih tanggal" id="date1"> -
                    
                <input type="date" class="search-field date2"
                placeholder="Pilih tanggal" id="date2">

                <label for="cargo">Cargo</label>
                <select name="dropdown" class="search-field cargo" id="cargo">
                    <option disabled hidden selected>Pilih cargo</option>
                    <option>Alumunium</option>
                    <option >Asbes</option>
                    <option >Atap</option>
                    <option >Atap Seng</option>
                </select><br><br>
                <input type="reset" class="search-field reset">                                    
                <button class="search-field search-btn" type="button">Find Task</button>
                    
            </div>
        </form>
    </div>

    <div class="container main-section" style="font-family: 'Open Sans', sans-serif;">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Marketplace</h2>
                </div>
            </div>

            <!-- <div class="col-lg-3">
                <img src="images/TR001.png" alt="">
            </div> -->

            <?php
                while($row = $result->fetch_assoc()) {
            ?>

            <div class="col-lg-3" id="test">
                <a href="detail_truk.php?id=<?php echo $row['id_truk']?>">

                    <div class="section shadow-sm p-2 mb-5 bg-white rounded" style="box-shadow: 0px 0px 11px 1px rgba(0,0,0,0.28);">
                        <div class="row">
                            <div class="col-lg-12 img-section text-center">
                                <img height="100%" width="100%" src="./images/<?php echo $row['file_foto']; ?>" class="p-0 m-0 res-ponsive">
                                <hr>
                            </div>

                            <hr>

                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2" style="color: rgba(0, 0, 0, 0.7);font-size: 18px;font-weight: 600;line-height: 19px;"><?php echo $row['nama_truk']; ?></h1>
                            </div>

                            <div class="col-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-12 text-left">
                                        <span style="font-size: 12px;color: blue;"><b><?php echo "Tipe Truk: ".$row['tipe_truk']; ?></b></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-12 text-left">
                                        <span style="font-size: 12px"><?php echo $row['brand'];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
                <?php } ?>
            </div>

        <div class="text-center">
            <button type="button" class="btn btn-outline-primary btn-lg" style="font-weight: bold; font-size: 20px">Load More</button>
            <!-- <a href="" class="btn btn-outline-primary btn-lg" style="font-weight: bold; font-size: 20px">Load More</a><br><hr> -->
        </div>

        <!-- <div class="footer"></div> -->

    </div>
</body>
</html>
<?php
$conn->close();
?>
