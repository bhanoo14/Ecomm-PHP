<?php require 'partials/head.php'?>
<?php require 'partials/nav.php'?>
<?php require 'partials/banner.php'?>


<main class="bg-gray-100 py-10">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 bg-white shadow-lg rounded-lg p-8">
    <div class="text-center">
      <!-- Search Results Table -->
      <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Search Results for: "Shoes"</h2>
      </div>

      <!-- Product List Table -->
      <div class="space-y-6">
        <!-- Example Product Row -->
        <div class="flex bg-gray-50 rounded-lg shadow-md overflow-hidden">
          <!-- Product Image Section -->
          <div class="w-1/3 p-4">
            <img src="https://via.placeholder.com/300" alt="Product Image" class="w-full h-auto rounded-lg object-cover">
          </div>

          <!-- Product Details Section -->
          <div class="w-2/3 p-4">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Product Title</h3>
            <p class="text-gray-600 mb-2">$ 199.99</p>
            <p class="text-gray-700 mb-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel dolor sit amet lorem bibendum convallis.
            </p>
            <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition">
              Add to Cart
            </button>
          </div>
        </div>

        <!-- Repeat the above div for more product rows -->
        <div class="flex bg-gray-50 rounded-lg shadow-md overflow-hidden">
          <!-- Product Image Section -->
          <div class="w-1/3 p-4">
            <img src="https://via.placeholder.com/300" alt="Product Image" class="w-full h-auto rounded-lg object-cover">
          </div>

          <!-- Product Details Section -->
          <div class="w-2/3 p-4">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Product Title</h3>
            <p class="text-gray-600 mb-2">$ 149.99</p>
            <p class="text-gray-700 mb-4">
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition">
              Add to Cart
            </button>
          </div>
        </div>
        <!-- Add more rows as needed -->
      </div>

      <!-- Pagination Buttons -->
      <div class="flex justify-center items-center mt-8">
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 px-4 rounded-md mr-2 transition">
          Previous
        </button>
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 px-4 rounded-md transition">
          Next
        </button>
      </div>
    </div>
  </div>
</main>



<?php require 'partials/footer.php'?>