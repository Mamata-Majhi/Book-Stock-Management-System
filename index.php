<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Book Stock Management System</title>
</head>

<body>
  <div class="w-full max-w-sm absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <div class="mb-4">
      <h1 class="block text-gray-700 text-2xl font-bold">Login</h1>
    </div>
    <?php
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo '<p style="color: red;">Invalid username or password. Please try again.</p>';
        }
        ?>
    <form action="./MyProject/validate_user/login_page.php" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" onsubmit="return validateForm()">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Username
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Username" />
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="*********" />
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Log In
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="MyProject/register.php">
          Register Here
        </a>
      </div>
    </form>

    <!-- validation code -->
    <script>
      function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Check if username and password are not empty
        if (username.trim() === "" || password.trim() === "") {
          alert("Please fill out both username and password fields");
          return false; // Prevent form submission
        }

        // If all fields are filled, allow form submission
        return true;
      }
    </script>
  </div>
</body>

</html>