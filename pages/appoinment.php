<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" integrity="sha512-77kidyGDJGWWmJ0MVO0CRp+6nRgZRK67frUVBRvnL1zCcmcw9FkCQxpDHq52SebW+KWTAnnuX0Qk2/MQWogWoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>make an appoinment</title>
</head>
<body>
<?php $page='appoinment'; include '../partials/header.php'; ?>

  <section class="container mx-auto flex flex-col-reverse md:flex-row py-5 md:py-20 px-2 gap-5 md:gap-20">
    <div class="flex-1">
      <h1 class="text-3xl uppercase mb-10">Make anappoinment to <span class="text-[#FD0038]">Caring hospital</span></h1>
      <img src="/hospital-system/images/booking.svg" alt="booking">
    </div>
    <div class="flex-1">
      <form action="appoinment.process.php" method="post" class="flex flex-col gap-5">
        <div class="flex flex-col md:flex-row gap-5">
          <input type="text" placeholder="Patient's First Name" class="bg-gray-200 px-4 py-2 rounded flex-1" name="first_name" required>
          <input type="text" placeholder="Patient's Last Name" class="bg-gray-200 px-4 py-2 rounded flex-1" name="last_name" required>
        </div>
        <input type="text" placeholder="Email" class="bg-gray-200 px-4 py-2 rounded" name="email" required>        
        <input type="text" placeholder="Phone Number" class="bg-gray-200 px-4 py-2 rounded" name="phone_number" required>

        <div class="flex flex-col md:flex-row gap-5">
          <input type="number" placeholder="Age" class="bg-gray-200 px-4 py-2 rounded flex-1" name="age" required>
          <div class="gender flex-1 flex items-center gap-3">
            <span>Male: </span>
            <input type="radio" name="gender" id="gender" value="male" required>
            <span>Female: </span>
            <input type="radio" name="gender" id="gender" value="female" required>
            <span>Other: </span>
            <input type="radio" name="gender" id="gender" value="other" required>
          </div>
        </div>

        <input type="date" placeholder="Pic a Date" class="bg-gray-200 px-4 py-2 rounded" name="date" required>
        <textarea name="description" class="bg-gray-200 px-4 py-2 rounded h-48" placeholder="type a short details about the problem" name="description"></textarea>
        <button class="px-5 py-3 text-white rounded text-sm bg-gradient-to-r from-[#FD0038] to-[#FF2F5D] shadow-md self-start" name="appoinment_form">Request an appoinment</button>
      </form>
    </div>
  </section>

  <section class="container mx-auto">

  <?php
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
  ?>

    <h1 class="text-3xl uppercase mb-10">My Appoinments</h1>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-10">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Patient Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Age
                </th>
                <th scope="col" class="py-3 px-6">
                    Gender
                </th>
                <th scope="col" class="py-3 px-6">
                    Phone Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <?php
            } else {
        ?>
        <h1 class="text-4xl my-10 uppercase text-gray-600">Sign in see your appoinments</h1>
        <?php   
            }
        ?>
        <tbody>
            <?php 
            $query = "SELECT * FROM `appoinments` WHERE `user`='".$_SESSION["user_id"]."'";
            $result = $conn->query($query);
            if($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                   ?> 
                    <tr class="bg-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            <?php echo $row['first_name'].' '.$row['last_name'] ?>
                        </th>
                        <td class="py-4 px-6">
                            <?php echo $row['age'] ?>
                        </td>
                        <td class="py-4 px-6">
                        <?php echo $row['gender'] ?>
                        </td>
                        <td class="py-4 px-6">
                        <?php echo $row['phone_number'] ?>
                        </td>
                        <td class="py-4 px-6">
                            <a class="font-medium text-red-600 hover:underline" href="/hospital-system/pages/cancel.process.php?deleteId=<?php echo $row['id']; ?>">Cancel</a>
                        </td>
                    </tr>
            <?php

                }
            }
            
            ?>
          
            
        </tbody>
    </table>
  </section>

<?php include '../partials/footer.php'; ?>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>