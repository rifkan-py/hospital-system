<?php
include '../core.inc.php';
include '../connect.inc.php';
?>
<nav class="bg-white w-full h-16 flex items-center justify-center px-2 border-b">
    <div class="container mx-auto flex items-center justify-between">
      <div class="logo">
        <a href="#">
          <img src="/hospital-system/images/logo.png" alt="logo" class="w-28 mix-blend-multiply">
        </a>
      </div>
      <div class="hidden md:block links text-sm flex space-x-6 text-gray-500">
        <a href="/hospital-system/" class="hover:text-[#FD0038] transition duration-250 ease-out <?php if($page == 'home'): echo 'text-[#FD0038]'; endif; ?>">Home</a>
        <a href="/hospital-system/pages/about.php" class="hover:text-[#FD0038] transition duration-250 ease-out <?php if($page == 'about'): echo 'text-[#FD0038]'; endif; ?>">About us</a>
        <a href="/hospital-system/pages/contact.php" class="hover:text-[#FD0038] transition duration-250 ease-out <?php if($page == 'contact'): echo 'text-[#FD0038]'; endif; ?>">Contact us</a>
        <a href="/hospital-system/pages/appoinment.php" class="hover:text-[#FD0038] transition duration-250 ease-out <?php if($page == 'appoinment'): echo 'text-[#FD0038]'; endif; ?>">Appointmnet</a>
      </div>
      <div class="hidden md:block">

      <?php
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
      ?>
        <a href="/hospital-system/pages/logout.process.php" class="px-5 py-3 text-white rounded text-sm bg-gradient-to-r from-[#FD0038] to-[#FF2F5D] shadow-md">Log Out</a>
      <?php
        } else {
      ?>
        <a href="/hospital-system/pages/signin.php" class="px-5 py-3 text-white rounded text-sm bg-gradient-to-r from-[#FD0038] to-[#FF2F5D] shadow-md">Log in</a>
      <?php 
        }
      ?>
      </div>
      <div class="block md:hidden">
        <img src="/hospital-system/images/hamburger.svg" class="w-8" alt="menu">
      </div>
    </div>
  </nav>