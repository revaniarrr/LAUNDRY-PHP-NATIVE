<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="anggota/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .log{
            float: right;
        }
        *{
            list-style-type: none;
            text-decoration : none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top mb-2">
        <a href="../sewa/list-member.php" class="navbar-brand">Yepa's Laundry</a>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="../paket/list-paket.php" class="nav-link log">
                    Paket
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="../member/list-member.php" class="nav-link log">
                    Member
                </a>

            </li>

            <li class="nav-item dropdown">
                <a href="../user/list-user.php" class="nav-link log">
                    User
                </a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li>
                <a href="../transaksi/list-transaksi.php">
                    <button class="btn btn-dark btn-block ">Transaksi</button>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link log" href="../login/login.php">Log Out</a>
            </li>
        </ul>

    </nav>

        </div>
    </div>
</body>
</html>