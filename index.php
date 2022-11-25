<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha512-77kidyGDJGWWmJ0MVO0CRp+6nRgZRK67frUVBRvnL1zCcmcw9FkCQxpDHq52SebW+KWTAnnuX0Qk2/MQWogWoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Hospital System</title>
</head>
<body class="bg-gray-200">
  <!-- navbar -->
  <?php include 'core.inc.php'; $page='home'; include './partials/header.php'; ?>

  <!-- banner -->
  <section class="flex flex-col md:flex-row h-[80vh]">
    <!-- banner content -->
    <div class="flex-1 px-2 py-10 md:px-24 md:py-20 leading-6">
      <h1 class="text-3xl md:text-5xl font-bold">The Best Quality Care for You and Your Family</h1>
      <p class="text-gray-500 my-10 text-sm text-justify leading-6">Our hospital is a full-service, acute care facility with a 24-hour emergency department. We offer a wide range of inpatient and outpatient services.</p>

      <div class="flex space-x-5">
        <a href="#" class="px-5 py-3 text-white rounded text-sm bg-gradient-to-r from-[#FD0038] to-[#FF2F5D] my-5">Explore More</a>
        <a href="#" class="px-5 py-3 text-white rounded text-sm border border-[#FD0038] text-black my-5">Quick Watch</a>
      </div>


    </div>

    <!-- banner image -->
    <div class="flex-1 relative h-full">
      <img src="./images/banner.avif" alt="banner" class="h-96 md:h-full w-full object-cover grayscale"> 
    </div>
  </section>

    <!-- book an appoinment -->
  <div class="container  mx-auto mt-20 flex flex-col gap-5 z-50 translate-y-0 md:-translate-y-64 bg-[#ffffffd9] py-6 px-5 md:px-12 shadow-md rounded">
    <h2 class="text-lg font-bold mx-2">Book an appinment</h2>
    <div class="flex flex-col md:flex-row gap-8 md:gap-16 text-sm items-baseline md:items-end whitespace-nowrap">
      <div class="flex flex-col">
        <span class="mb-2 text-gray-500">Date</span>
        <b>Wed, Feb 14, 2022</b>
      </div>
      <div class="flex flex-col">
        <span class="mb-2 text-gray-500">Location</span>
        <b>Galle, Sri Lanka.</b>
      </div>
      <div class="flex flex-col">
        <span class="mb-2 text-gray-500">Services</span>
        <b>Phycology Consultation</b>
      </div>
      <div class="flex flex-col">
      <a href="#" class="px-5 py-3 text-white rounded text-sm bg-gradient-to-r from-[#FD0038] to-[#FF2F5D] whitespace-nowrap">Book Now</a>
      </div>
    </div>
  </div>

  <section class="container mx-auto bg-[#555] mb-20 md:-mt-48 mt-10 p-10 flex flex-wrap gap-5 text-gray-500">
    <div class="bg-[#444] p-5 flex flex-col flex-1 items-center justify-center gap-5 rounded text-center">
      <h1 class="text-2xl font-bold text-white uppercase">Customer Service</h1>
      <i class="fa fa-question-circle text-5xl font-bold text-blue-600" aria-hidden="true"></i>
      <span class="text-white">24/7 fast cusotmer service</span>
    </div>

    <div class="bg-[#444] p-5 flex flex-col flex-1 items-center justify-center gap-5 text-center rounded">
      <h1 class="text-2xl font-bold text-white uppercase">Ambulance Service</h1>
      <i class="fa fa-ambulance text-5xl font-bold text-[#FD0038]" aria-hidden="true"></i>
      <span class="text-white">24 hours emargency serviece</span>
    </div>

    <div class="bg-[#444] p-5 flex flex-col flex-1 items-center justify-center gap-5 text-center rounded">
      <h1 class="text-2xl font-bold text-white uppercase">Spacial Doctors</h1>
      <i class="fa fa-user-md text-5xl font-bold text-yellow-600" aria-hidden="true"></i>
      <span class="text-white">Highly qualified expericed Doctors</span>
    </div>

    <div class="bg-[#444] p-5 flex flex-col flex-1 items-center justify-center gap-5 text-center rounded">
      <h1 class="text-2xl font-bold text-white uppercase">Affordable Price</h1>
      <i class="fa fa-money text-5xl font-bold text-green-600" aria-hidden="true"></i>
      <span class="text-white">Best servcices in best prices</span>
    </div>
  </section>

  <!-- footer -->
  <?php include './partials/footer.php'; ?>




  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>