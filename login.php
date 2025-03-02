<?php 
	require_once('_functions.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?=url('_assets/css/login.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Rumah Laundry | Login</title>
    <link rel="shortcut icon" href="<?= url('_assets/img/logo/favicon-svg.png') ?>" type="image/x-icon">
</head>
<body>
<?php
if (isset($_SESSION['login']) && isset($_SESSION['master'])) {
    $redirectUrl = ($_SESSION['level'] === 'Admin') ? 'index.php' : 'index.php';
    echo "<script>window.location='$redirectUrl'</script>";
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query ke database untuk cek username
    $query = "SELECT * FROM master WHERE username = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['master'] = $username;
            $_SESSION['login'] = true;
            $_SESSION['level'] = $user['level']; // Menyimpan level user dalam sesi

            // Arahkan berdasarkan level user
            if ($user['level'] === 'Admin') {
                echo "<script>window.location='index.php';</script>";
            } elseif ($user['level'] === 'Karyawan') {
                echo "<script>window.location='index.php';</script>";
            }
        } else {
            // Password salah
            echo "<div class='overlay'>
                    <div class='boxSalah'>
                        <a href='login.php' class='close'>&times;</a>
                        <p>Password salah!</p>
                    </div>
                  </div>";
        }
    } else {
        
        echo "<div class='overlay' id='popup'>
        <div class='alert'>
                <img src='_assets/img/gagal.png' alt='alert gagal'>
                <p>Username atau password salah!</p>
                <button onclick='closePopup()' class='btn-alert'>Ok</button>
            </div>
        </div>
      </div>
      <script>
          function closePopup() {
              document.getElementById('popup').style.display = 'none';
          }
      </script>";


    }
}
?>


	<div class="wrapper">
		<div class="container main">
			<div class="row">
				<div class="col-md-6 side-image">
					<img src="_assets/img/logo/logofix.png" alt="">
					
				</div>
				<div class="col-md-6 right">
					<div class="input-box">
						<header>Login akun anda</header>
						<form method="POST">
							<div class="input-field">
								<input type="text" class="input" id="email" name="username" required autocomplete="off">
								<label for="username">Username</label>
							</div>
							<div class="input-field">
								<input type="password" class="input" id="pass" name="password" required>
								<label for="pass">Password</label>
							</div>
							<div class="input-field">
                            <button type="submit" class="submit" name="login">
                                Login
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            </div>
						</form>					
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="copyright">
		<p>&copy; Syauki <span id="tahun"></span> All Rights Reserved.</p>
		<script>
			// mengambil tanggal hari ini
			var now = new Date();
			var tahun = now.getFullYear();
			// menampilkan tahun di dalam elemen HTML
			document.getElementById("tahun").innerHTML = tahun;
		</script>
	</div>

</body>
</html>
