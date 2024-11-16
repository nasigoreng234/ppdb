<?php 
    require_once ("koneksi.php");
    $sql = "SELECT * FROM daftar_sekolah";
    $result = $conn->query($sql);

    $daftar_sekolah = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>kewer kewer</title>
</head>
<body>

    <div class="container-fluid">

        <div class="card">
            <img src="image/head3.png" width="70%" >
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="text-center">DAFTAR SEKOLAH</h3>
            </div>
            <div class="card-body">
                <p class="text-center"> Berikut ini merupakan daftar SMP yang mengikuti PPDB Online Kota Karanganyar. Ditampilkan alamat serta identitas dari tiap sekolah. Untuk lebih lanjut silahkan klik Lihat Profil pada masing-masing sekolah.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hover ">
                    <tr class="table-dark">
                        <th rowspan="2" style="vertical-align: middle;">#</th>
                        <th>No</th>
                        <th>Nama Sekolah</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>ikut </th>
                        <th>Status sekolah</th>
                        <th>Profil</th>
                    </tr>
                    <tr>
                    
                        <th><input type="text" name="search" id="search" class="form-control" placeholder="no"></th>
                        <th><input type="text" name="search" id="search" class="form-control" placeholder="cari Sekolah"></th>
                        <th><input type="text" name="search" id="search" class="form-control" placeholder="kelurahan"></th>
                        <th><input type="text" name="search" id="search" class="form-control" placeholder="kecamatan"></th>
                        <th><input type="text" name="search" id="search" class="form-control" placeholder="status"></th>
                        <th><input type="text" name="search" id="search" class="form-control" placeholder="ikut"></th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach ($daftar_sekolah as $key => $row) { 
                    ?>
                        <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $row['NO'] ?></td>
                        <td><?= $row['NAMA_SKLH'] ?></td>
                        <td><?= $row['KELURAHAN'] ?></td>
                
                        <td><?= $row['KECAMATAN'] ?></td>
                        <!-- <td><?= $row['status'] ?></td>  -->
                        <!-- <td><?= $row['IKUT'] ?></td> -->
                        
                        <td>
                            <?php if ($row['status'] == 'negeri') { ?>
                                <div class="badge bg-success">negeri</div>
                            <?php } else { ?>
                                <div class="badge bg-primary">swasta</div>
                            <?php } ?>
                        </td>
                            
                        <td>
                            <?php if ($row['IKUT'] == 'ikut') { ?>
                                <div class="badge bg-success">ikut</div>
                            <?php } else { ?>
                                <div class="badge bg-danger">Tidak ikut</div>
                            <?php } ?>
                        </td>

                        <td>
                            <a href="#" class="btn btn-info">Lihat Profil</a>
                        </td>
                        <td></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>