<?php
$pageTitle = "Login - Moco";
// Untuk halaman login, kita tidak include header.php karena desainnya berbeda
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link href="./css/output.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center min-h-screen bg-[#FFF8F2]">
  <div class="flex flex-col items-center justify-center bg-white p-8 rounded-lg w-full max-w-md">
    <!-- Logo Section -->
    <a href="index.php">
      <div class="flex gap-4 items-center mb-6">
        <img src="./img/Logo.png" class="h-14" alt="Logo">
        <p class="font-bold text-3xl">Moco</p>
      </div>
    </a>
    <!-- Welcome Text -->
    <p class="font-bold text-xl md:text-2xl mb-2 text-center">Selamat Datang Di Moco!</p>
    <p class="text-slate-500 text-sm md:text-base font-medium mb-6 text-center">
      Silahkan masuk untuk melanjutkan
    </p>
    
    <!-- Form Section -->
    <form action="proses_login.php" method="POST" class="w-full">
      <div class="flex flex-col w-full mb-5 gap-y-3">
        <label for="email" class="text-slate-400 font-medium">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Masukan Email Kamu"
          class="border border-slate-300 p-3 rounded-xl font-medium focus:border-none focus:ring-1 focus:ring-primary focus:outline-none transition duration-300 ease-in-out"
          required>
      </div>
      <div class="flex flex-col w-full mb-8 gap-y-3">
        <label for="password" class="text-slate-400 font-medium">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukan Password Kamu"
          class="border border-slate-300 p-3 rounded-xl font-medium focus:border-none focus:ring-1 focus:ring-primary focus:outline-none transition duration-300 ease-in-out"
          required>
      </div>
      <!-- Login Button -->
      <button type="submit"
        class="bg-primary rounded-xl text-white w-full text-center py-3 font-semibold hover:bg-primary-dark transition mb-4">
        Masuk
      </button>
    </form>
    
    <!-- Link ke Register -->
    <div class="text-center">
      <p class="text-slate-500">
        Belum punya akun? 
        <a href="register.php" class="text-primary font-semibold hover:underline">Daftar di sini</a>
      </p>
    </div>
  </div>
</body>

</html>