
<?php require 'partials/head.php'?>
<?php require 'partials/nav.php'?>
<?php require 'partials/banner.php'?>

<main class="bg-gray-100 min-h-screen flex items-center justify-center py-12">
  <div class="container max-w-sm mx-auto bg-white rounded-lg shadow-lg p-8">
    <!-- Forgot Password Form Header -->
    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Forgot Password</h2>
    
    <!-- Forgot Password Form -->
    <form>
      <!-- Email Input -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
        <input type="email" id="email" placeholder="Enter your registered email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
      </div>

      <!-- Submit Button -->
      <div class="mb-4">
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition-colors duration-300">
          Send Password Reset Link
        </button>
      </div>

      <!-- Back to Login Link -->
      <div class="text-center">
        <p class="text-gray-600">Remember your password? <a href="/ecomm/signin.php" class="text-blue-500 hover:text-blue-700 font-semibold">Login here</a></p>
      </div>
    </form>
  </div>
</main>

<?php require 'partials/footer.php'?>