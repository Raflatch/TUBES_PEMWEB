<?php
session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] != 'logged_in') {
    header("Location: ../login.php");
    exit();
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container mx-auto mt-10">
    <h1 class="text-4xl font-bold">Profil Pengguna</h1>
    <div class="bg-white p-6 shadow-md rounded-md mt-5">
      <p><strong>Nama Pengguna:</strong> <?php echo $_SESSION['username']; ?></p>
      <p><strong>Role:</strong> <?php echo $_SESSION['role']; ?></p>
    </div>
    <a href="../index.php" class="text-blue-500 hover:underline mt-5 inline-block">Kembali ke Beranda</a>
  </div>
</body>
</html>
