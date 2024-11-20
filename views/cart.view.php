<?php require 'partials/head.php'?>
<?php require 'partials/nav.php'?>
<?php require 'partials/banner.php'?>

<main class="bg-gray-100 py-10">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 bg-white shadow-lg rounded-lg p-8">
    <!-- Shopping Cart Item -->
    <div class="bg-gray-50 p-4 rounded-lg shadow-md">
      <!-- Product Info Section -->
      <div class="flex items-center space-x-4">
        <!-- Product Image -->
        <div class="w-24 h-24">
          <img src="https://via.placeholder.com/150" alt="Product Image" class="w-full h-full object-cover rounded-lg">
        </div>

        <!-- Product Details -->
        <div class="flex-1">
          <h3 class="text-lg font-semibold text-gray-800">Product Title</h3>
          <p class="text-gray-600">Short product description goes here. It provides a quick summary of the product.</p>
          <p class="text-blue-600 font-bold mt-2">$ 59.99</p>
        </div>

        <!-- Quantity Controls -->
        <div class="flex items-center space-x-2">
          <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-1 px-3 rounded-md">-</button>
          <span class="text-lg font-medium">1</span> <!-- Current Quantity -->
          <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-1 px-3 rounded-md">+</button>
        </div>

        <!-- Subtotal -->
        <div class="text-right">
          <p class="text-gray-700 font-semibold">Subtotal:</p>
          <p class="text-gray-800 font-bold">$ 59.99</p>
        </div>

        <!-- Delete Button -->
        <div>
          <button class="bg-red-500 hover:bg-red-600 text-white py-2 px-3 rounded-md transition">
            Delete
          </button>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require 'partials/footer.php'?>
