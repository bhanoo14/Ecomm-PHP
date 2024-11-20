
<?php require 'partials/head.php'?>
<?php require 'partials/nav.php'?>
<?php require 'partials/banner.php'?>

<!-- Taking user Input -->

<main class="bg-gray-100 min-h-80% flex items-center justify-center py-4">
  <div class="container max-w-lg mx-auto bg-white rounded-lg shadow-lg p-8">
    <!-- Registration Form Header -->
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">User Registration</h2>

    <!-- Registration Form -->
    <!-- <form action ="/ecomm" method ="post"> -->
      <!-- Full Name -->
      <div class="mb-4">
        <label for="fullName" class="block text-gray-700 font-semibold mb-2">Full Name</label>
        <input type="text" name ="name" id="name" placeholder="Enter your full name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
      </div>

      <!-- Email -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
        <input type="email" name ="email" id="email" placeholder="Enter your email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
        <span style="color:red" id="emailErr"></span>
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label for="phone" class="block text-gray-700 font-semibold mb-2">Password</label>
        <input type="password" name ="password" id="password" placeholder="Enter your phone number" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
      </div>

      <!-- Phone Number -->
      <div class="mb-4">
        <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone Number</label>
        <input type="tel" name ="phone" id="phone" placeholder="Enter your phone number" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
      </div>

      <!-- User Role -->

      <!-- Address -->
      <div class="mb-4">
        <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
        <textarea id="address"  name ="address" placeholder="Enter your address" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" rows="3" required></textarea>
      </div>

      <!-- Register Button -->
      <div class="mb-4">
        <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition-colors duration-300" onclick="userRegister(); return false;">Register</button>
      </div>

      <!-- Already have an account link -->
      <div class="text-center">
        <p class="text-gray-600">Already have an account? <a href="/ecomm/signin.php" class="text-blue-500 hover:text-blue-700 font-semibold">Login here</a></p>
      </div>
    <!-- </form> -->
  </div>
</main>


<?php require 'partials/footer.php'?>


<!-- User Role -->
      <!-- <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">Role</label>
        <div class="flex items-center space-x-4">
          <label class="inline-flex items-center">
            <input type="radio" name="role" value="user" class="form-radio h-4 w-4 text-blue-500" checked>
            <span class="ml-2 text-gray-700">User</span>
          </label>
          <label class="inline-flex items-center">
            <input type="radio" name="role" value="admin" class="form-radio h-4 w-4 text-blue-500">
            <span class="ml-2 text-gray-700">Admin</span>
          </label>
        </div>
      </div> -->
