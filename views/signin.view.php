<?php require 'partials/head.php'?>
<?php require 'partials/nav.php'?>
<?php require 'partials/banner.php'?>


<main class="bg-gray-100 min-h-screen flex items-center justify-center py-12">
  <div class="container max-w-sm mx-auto bg-white rounded-lg shadow-lg p-8">
    <!-- Login Form Header -->
    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Sign In</h2>

      <!-- Email -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
        <span style="color:red" id="emailErr"></span>
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
        <span style="color:red" id="passwordErr"></span>
      </div>

      <!-- Forgot Password Link -->
      <div class="flex justify-end mb-4">
        <a href="/ecomm/forgotpassword.php" class="text-blue-500 hover:text-blue-700 text-sm">Forgot Password?</a>
      </div>

      <!-- Login Button -->
      <div class="mb-4">
      <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition-colors duration-300" onclick="signin(); return false;">Login</button>
      </div>

      <!-- No Account? Register Link -->
      <div class="text-center">
        <p class="text-gray-600">Don't have an account? <a href="/ecomm/register.php" class="text-blue-500 hover:text-blue-700 font-semibold">Register here</a></p>
      </div>
    
  </div>
</main>

<?php require 'partials/footer.php'?>