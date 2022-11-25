<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin</title>
</head>
<body>
<?php 
include '../partials/header.php';
include '../core.inc.php';
?>


<section class="container mx-auto flex py-0 px-5 md:p-20 justify-center md:gap-20 h-[760px]">
  <div class="flex-1 hidden md:block">
    <img src="/hospital-system/images/signin.svg" alt="signin" class="scale-125">
  </div>
  <div class="flex-1 px-2 py-10 md:py-20 md:px-20">
    <h1 class="text-3xl mb-8">Sign in</h1>
    <form action="signin.process.php" method="post" class="flex flex-col gap-5 items-baseline my-5">
    <span class="bg-red-200 py-2 px-6 rounded text-red-900 border border-red-900 <?= isset($_SESSION['signinError']) == '' ? 'hidden' :  'block' ?> "><?php echo $_SESSION['signinError']; unset($_SESSION['signinError']); ?></span>
      <input type="email" placeholder="Email" class="bg-gray-200 px-4 py-2 rounded" name="email" required>
      <input type="password" placeholder="Password" class="bg-gray-200 px-4 py-2 rounded" name="password" required>
      <button class="px-5 py-3 text-white rounded text-sm bg-gradient-to-r from-[#FD0038] to-[#FF2F5D] shadow-md" type="submit" name="sign_in">Sign in</button>
    </form>
      <a href="/hospital-system/pages/signup.php" class="text-blue-600">Create an account</a>
    </div>
  </section>
  
  <?php include '../partials/footer.php'; ?>
  
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>