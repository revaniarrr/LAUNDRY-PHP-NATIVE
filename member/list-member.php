<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Member Laundry</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    // menyambungkan dengan database
    include("../home.php");
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header bg-dark">
                <h4 class="text-white text-center">Daftar Member Yepa's Laundry</h4>
                <a href="form-member.php">
                </a>

                <a href="form-member.php">
                    <button class="btn btn-success form-control">
                        Add Member
                    </button>
                </a>
            </div>

            <div class="card-body">
                <form action="list-member.php" method="get">
                    <input type="text" name="search" class="form-control mb-2"
                    placeholder="Search">
                </form>
                
                <ul class="list-group">
                    <?php
                    include("../connection.php");
                    if (isset($_GET["search"])) {
                        # jika pada saat loadd halaman ini,
                        # akan mengecek apakah data dengan method
                        # GET yg bernama "search"
                        $search = $_GET ["search"];
                        $sql = "select * from member
                        where id_member like '%$search%'
                        or nama_member like '%$search%' 
                        or alamat_member like '%$search%'
                        or telepon like '%$search%'";
                    } else {
                        $sql = "select * from member";
                    }
                    
                    //eksekusi perintah SQL
                    $query = mysqli_query($connect, $sql);
                    while ($member = mysqli_fetch_array($query)) {?>
                        <li class="list-group-item">
                        <div class="row">
                            <!-- bagian data member -->
                            <div class="col-lg-8 col-md-10">
                                <h5>Nama : <?php echo $member["nama_member"];?></h5>
                                <h6>ID Member: <?php echo $member["id_member"];?></h6>
                                <h6>Alamat: <?php echo $member["alamat_member"];?></h6>
                                <h6>Jenis Kelamin: <?php echo $member["jenis_kelamin"];?></h6>
                                <h6>Telepon: <?php echo $member["telepon"];?></h6>
                            </div>

                            <!-- bagian tombol pilihan -->
                            <div class="col-lg-4">
                                    <a href="form-member.php?id_member=<?=$member["id_member"]?>">
                                        <button class="btn btn-primary btn-block">
                                         Edit
                                         </button>
                                    </a>

                                    <div class="card-footer">
                                      <a href="process-member.php?id_member=<?=$member["id_member"]?>"
                                         onclick="return confirm('Are you sure?')">
                                    </div>
                                        <button class="btn btn-danger btn-block">
                                          Hapus
                                        </button>
                                      </a>
                                    
                                </div>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>