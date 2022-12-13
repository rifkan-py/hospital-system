<?php
include 'connect.inc.php';
include 'core.inc.php';
if(isset($_SESSION['dashboard_user_id']) && !empty($_SESSION['dashboard_user_id'])) {
    echo '';
} else {
    header("Location: ./pages/signin.php");
}
?>
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
                    <p class="text-xl">Medicines</p>
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

<!--Appointments-->
    <div class="container mx-auto mt-10 overflow-x-auto relative">
        <h1 class="text-2xl mx-2 my-5 uppercase font-bold">Appointments</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Product name
                </th>
                <th scope="col" class="py-3 px-6">
                    Color
                </th>
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="py-4 px-6">
                    Sliver
                </td>
                <td class="py-4 px-6">
                    Laptop
                </td>
                <td class="py-4 px-6">
                    $2999
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="py-4 px-6">
                    White
                </td>
                <td class="py-4 px-6">
                    Laptop PC
                </td>
                <td class="py-4 px-6">
                    $1999
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="py-4 px-6">
                    Black
                </td>
                <td class="py-4 px-6">
                    Accessories
                </td>
                <td class="py-4 px-6">
                    $99
                </td>
            </tr>
            </tbody>
        </table>
    </div>

<!--    doctors -->
    <div class="container mx-auto mt-10 overflow-x-auto relative">
        <h1 class="text-2xl mx-2 my-5 uppercase font-bold">Doctors</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Product name
                </th>
                <th scope="col" class="py-3 px-6">
                    Color
                </th>
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="py-4 px-6">
                    Sliver
                </td>
                <td class="py-4 px-6">
                    Laptop
                </td>
                <td class="py-4 px-6">
                    $2999
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="py-4 px-6">
                    White
                </td>
                <td class="py-4 px-6">
                    Laptop PC
                </td>
                <td class="py-4 px-6">
                    $1999
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="py-4 px-6">
                    Black
                </td>
                <td class="py-4 px-6">
                    Accessories
                </td>
                <td class="py-4 px-6">
                    $99
                </td>
            </tr>
            </tbody>
        </table>
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