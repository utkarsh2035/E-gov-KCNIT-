<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Gov|KCNIT</title>
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <?php
    include 'connection.php';
    $errMssg = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];

        $sql = "SELECT * FROM `userregistration` WHERE email = '$email' AND password = '$password' AND name = '$name'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $num = mysqli_num_rows(($result));
            if ($num > 0) {
                session_start();
                $_SESSION['name'] = $name;
                header("Location: index.php"); // Redirect to the home page
                exit();
            } else {
                $errMssg =  '<div class="alert alert-danger alert-dismissible fade show mt-0 items-center" role="alert">
                    <strong>Oops!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
            }
        }
    }
    ?>
    <div class="bg-white shadow-lg rounded-lg p-8 w-96">
        <?php
        if ($errMssg) {
            echo $errMssg;
        }
        ?>
        <h1 class="text-gray-400 text-3xl font-bold text-center mb-6">Login</h1>
        <form action="login.php" method="post">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">E-mail</label>
                <input type="email" id="email" name="email" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Enter your email">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Enter your password">
            </div>
            <button type="submit" class="w-full bg-orange-600 text-white font-semibold py-2 rounded-lg hover:bg-orange-500">Login</button>
        </form>
        <div class="mt-4 text-center">
            <a href="register.php" class="text-orange-600 hover:underline">Register for New User</a>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="gsap.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
    <script src="scrolling.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>