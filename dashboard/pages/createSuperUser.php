<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Super</title>
</head>
<?php
include '../partials/header.php';
?>
<body class="h-screen">

<div class="flex flex-col gap-6 items-center justify-center bg-white p-5 rounded h-[90vh]">
    <h1 class="text-2xl font-bold uppercase">Make a Super user</h1>
    <form action="#" class="flex flex-col item-center justify-center gap-4">
        <input type="text" class="border border-gray-300 rounded p-2" placeholder="First Name">
        <input type="text" class="border border-gray-300 rounded p-2" placeholder="Last Name">
        <input type="email" class="border border-gray-300 rounded p-2" placeholder="Email">
        <input type="password" class="border border-gray-300 rounded p-2" placeholder="Password">
        <input type="password" class="border border-gray-300 rounded p-2" placeholder="Confirm Password">
        <select name="role" id="role" class="p-3">
            <option value="doctor">doctor</option>
            <option value="admin">admin</option>
        </select>
        <button type="submit" class="px-5 py-3 text-white rounded text-sm bg-gradient-to-r from-[#FD0038] to-[#FF2F5D] shadow-md text-center">Submit</button>
    </form>
    <a href="/hospital-system/dashboard/index.php" class="text-blue-700">return to dashboard</a>
</div>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
