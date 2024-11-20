

<?php require 'views/partials/head.php'?>
<?php require 'views/partials/nav.php'?>
<?php require 'views/partials/banner.php'?>


<main>
  <body class="bg-gray-100">
    <div class="container mx-auto px-4 py-10">
      <!-- Product List -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Product Cards -->
        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Clothing</h2>
          <p class="text-gray-600 mb-6">Explore a range of stylish clothing. Suitable for all occasions and seasons.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">View Products</button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Shoes</h2>
          <p class="text-gray-600 mb-6">Find comfortable and trendy footwear for men, women, and kids.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">View Products</button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Electronics</h2>
          <p class="text-gray-600 mb-6">Shop the latest gadgets and electronics with great deals.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">View Products</button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Cameras</h2>
          <p class="text-gray-600 mb-6">Capture memories with high-quality cameras and accessories.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">View Products</button>
        </div>
      </div>

      <!-- Another Row of Product Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-8">
        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Toys</h2>
          <p class="text-gray-600 mb-6">Browse a variety of fun and educational toys for kids.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">View Products</button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Gifts</h2>
          <p class="text-gray-600 mb-6">Choose the perfect gift for every occasion.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">View Products</button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Food</h2>
          <p class="text-gray-600 mb-6">Enjoy delicious food items and snacks from various brands.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">View Products</button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Groceries</h2>
          <p class="text-gray-600 mb-6">Get fresh groceries and daily essentials delivered to your doorstep.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">View Products</button>
        </div>
      </div>

      <!-- Pagination -->
      <div class="flex justify-center items-center mt-12 space-x-4">
        <button class="bg-gray-400 hover:bg-gray-500 text-white py-2 px-6 rounded-md transition">Previous</button>
        <button class="bg-gray-400 hover:bg-gray-500 text-white py-2 px-6 rounded-md transition">Next</button>
      </div>
    </div>
  </body>
</main>

<?php require 'views/partials/footer.php'?>