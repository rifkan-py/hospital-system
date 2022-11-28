<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Signin</title>
</head>

<?php
include '../partials/header.php';
?>

<div class="mt-20 px-3">
    <form action="signin.process.php" method="post" class="flex flex-col gap-5 border w-full h-auto md:w-2/6 mx-auto p-5">
        <h1 class="mb-10 text-3xl">Sign in to Dashboard</h1>
        <input type="text" name="email" placeholder="Email" class="border rounded px-5 py-2">
        <input type="password" name="password" placeholder="Password" class="border rounded px-5 py-2">
        <a href="#" class="px-5 py-3 text-white rounded text-sm bg-gradient-to-r from-[#FD0038] to-[#FF2F5D] shadow-md text-center">Sign in</a>
    </form>
</div>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>