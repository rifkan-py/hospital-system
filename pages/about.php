<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About us</title>
</head>
<body>
<?php $page = 'about'; include '../partials/header.php'; ?>

  <section class="container mx-auto flex flex-col md:flex-row py-5 md:py-40 px-2 gap-10 leading-7">
    <div class="flex-1">
      <h1 class="text-4xl my-6 uppercase">Who are we ?? </h1>
    <p class="text-gray-600">The Grace Hospital is a state-of-the-art medical facility providing a full range of inpatient and outpatient services. We are dedicated to providing the highest quality care possible to our patients and their families.</p><br>

    <span class="font-bold text-gray-600">Our hospital features include:</span>
    <ul class="ml-9 leading-8 text-gray-600 list-disc">
      <li>A 24-hour emergency department</li>
      <li>A full range of inpatient and outpatient services</li>
      <li>A wide variety of educational and support groups</li>
      <li>A state-of-the-art surgical suite</li>
      <li>A comprehensive cancer center</li>
      <li>A Level III Neonatal Intensive Care Unit (NICU)</li>
    </ul> <br>
    <p class="text-gray-600">We are committed to providing our patients and their families with the best possible care and experience. We hope you will visit us soon.</p>
    </div>

    <div class="flex-1">
      <img src="/hospital-system/images/about_us.svg" alt="about us">
    </div>
  </section>

<?php include '../partials/footer.php'; ?>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>