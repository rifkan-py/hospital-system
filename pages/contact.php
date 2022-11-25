<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha512-77kidyGDJGWWmJ0MVO0CRp+6nRgZRK67frUVBRvnL1zCcmcw9FkCQxpDHq52SebW+KWTAnnuX0Qk2/MQWogWoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>contact</title>
</head>
<body>
<?php $page = 'contact'; include '../partials/header.php'; ?>

  <section class="container mx-auto flex flex-col md:flex-row gap-5 md:gap-20 py-5 md:py-20 px-3 min-h-[780px]">
    <div class="flex-1">
      <h1 class="text-4xl uppercase mb-6">Get in Touch</h1>
      <div class="flex space-x-8 text-2xl mb-8">
        <div class="w-10 h-10 flex items-center justify-center bg-[#4267B2] text-white rounded-full"><i class="fa fa-facebook"></i></div>
        <div class="w-10 h-10 flex items-center justify-center bg-[#1DA1F2] text-white rounded-full"><i class="fa fa-twitter"></i></div>
        <div class="w-10 h-10 flex items-center justify-center bg-[#028a0f] text-white rounded-full"><i class="fa fa-phone"></i></div>
        <div class="w-10 h-10 flex items-center justify-center bg-[#C13584] text-white rounded-full"><i class="fa fa-instagram"></i></div>
      </div>
      <div class="flex items-center">
        <div class="w-10 h-10 flex items-center justify-center"><i class="fa fa-map-marker text-lg text-red-600" aria-hidden="true"></i></div>
        <span class="text-sm">Galle, Sri Lanka</span>
      </div>
      <div class=" flex items-center mb-8">
      <div class="w-10 h-10 flex items-center justify-center"><i class="fa fa-envelope text-sm text-green-600" aria-hidden="true"></i></div>
        <span class="text-sm">mohamedrifkan00127@gmail.com</span>
      </div>

      <div class="hidden md:block">
        <img src="/hospital-system/images/contact.svg" alt="contact">
      </div>

    </div>
    <div class="flex-1">
      <form action="#" class="flex flex-col gap-5">
      <input type="text" placeholder="Name" class="bg-gray-200 px-4 py-2 rounded">
      <input type="text" placeholder="Email" class="bg-gray-200 px-4 py-2 rounded">
      <input type="text" placeholder="Phone" class="bg-gray-200 px-4 py-2 rounded">
      <textarea name="message" class="bg-gray-200 px-4 py-2 rounded h-48" placeholder="Type your message here ..."></textarea>
      <button class="px-5 py-3 text-white rounded text-sm bg-gradient-to-r from-[#FD0038] to-[#FF2F5D] shadow-md">Send</button>
      </form>
    </div>
  </section>

<?php include '../partials/footer.php'; ?>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>