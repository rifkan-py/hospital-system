<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha512-77kidyGDJGWWmJ0MVO0CRp+6nRgZRK67frUVBRvnL1zCcmcw9FkCQxpDHq52SebW+KWTAnnuX0Qk2/MQWogWoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>
<body>

<div class="min-h-[95vh]">
    <!--  header  -->
    <?php
    include './partials/header.php';
    ?>
    <div class="container mx-auto flex flex-col md:flex-row mt-5 gap-5 min-h-auto">
        <!--  main content  -->
        <div class="grow-[5] flex flex-col md:flex-row gap-5 px-3">
            <div class="flex-1 bg-green-300 p-3 rounded flex gap-5 items-center justify-start">
                <i class="fa fa-calendar text-5xl"></i>
                <div>
                    <p class="text-xl">Appointments</p>
                    <h1 class="text-4xl font-bold">300</h1>
                </div>
            </div>
            <div class="flex-1 bg-red-300 p-3 rounded flex gap-5 items-center justify-start">
                <i class="fa fa-medkit text-5xl"></i>
                <div>
                    <p class="text-xl">Appointments</p>
                    <h1 class="text-4xl font-bold">190</h1>
                </div>
            </div>
            <div class="flex-1 bg-blue-300 p-3 rounded flex gap-5 items-center justify-start">
                <i class="fa fa-user-md text-5xl"></i>
                <div>
                    <p class="text-xl">Doctors</p>
                    <h1 class="text-4xl font-bold">354</h1>
                </div>
            </div>
            <div class="flex-1 bg-yellow-300 p-3 rounded flex gap-5 items-center justify-start">
                <i class="fa fa-users text-5xl"></i>
                <div>
                    <p class="text-xl">Users</p>
                    <h1 class="text-4xl font-bold">453</h1>
                </div>
            </div>
       </div>
    </div>
</div>

<div class="bg-[#333]">
    <div class="container mx-auto py-5">
        <h1 class="text-5xl text-white">Footer</h1>
    </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>