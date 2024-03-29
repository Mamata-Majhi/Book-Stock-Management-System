<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css_file/style.css">

  <title>Book Stock Management System</title>
</head>

<body>
  <div class="w-full max-w-sm absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <div class="mb-4">
      <!-- <h1 class="block text-gray-700 text-2xl font-bold">Login</h1> -->
    </div>
    <form action="./MyProject/user/login_config.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
    <h1 class="block text-gray-700 text-2xl font-bold">Login</h1>  
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Username
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="username" required />
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="*********" name="password" required />
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Log In
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="./MyProject/user/user_register.php">
          Register Here
        </a>
      </div>
    </form>
  </div>

  <!-- landing page image -->
  <div class="img">
    <img src="./MyProject/images/img2.jpg" alt="index">
  </div>

  <div class="absolute top-0 left-0 mt-80 ml-24 text-white">
    <p class="text-4xl font-bold">Pay Less,Read More.</p>
  </div>
</body>

</html>