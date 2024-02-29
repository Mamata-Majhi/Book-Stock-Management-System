<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>

  <title>register page</title>
</head>

<body>
  <div class="w-full max-w-sm absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <div class="mb-4">
      <h1 class="block text-gray-700 text-2xl font-bold">Sign Up</h1>
      <p>It's quick and easy.</p>
    </div>
    <form action="./user/process_user.php" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" onsubmit="return validateForm()">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="fullname">
          Full Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fullname" type="text" placeholder="Full Name" />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Username</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" placeholder="abc@gmail.com" type="email" />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">Gender</label>
        <div class="block text-gray-700 font-semibold ">
          <input type="radio" name="gender" id="male" checked>Male
          <input type="radio" name="gender" id="female">Female
        </div>

      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password" />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="cpassword">
          Confirm Password
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="cpassword" type="password" placeholder="Confirm Password" />
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Sign Up
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="../index.php">
          Login Here
        </a>
    </form>
  </div>

  <!-- validation of form -->
  <!-- validation of form -->
<script>
    function validateForm() {
        var fullname = document.getElementById("fullname").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var cpassword = document.getElementById("cpassword").value;

        // Check if fields are not empty
        if (fullname.trim() === "" || email.trim() === "" || password.trim() === "" || cpassword.trim() === "") {
            alert("Please fill out all fields");
            return false; // Prevent form submission
        }

        // You can add additional validation logic here if needed

        // If all fields are filled, allow form submission
        return true;
    }
</script>

</body>

</html>