<?php require 'partials/head.php'?>
<?php require 'partials/nav.php'?>
<?php require 'partials/banner.php'?>

<main>
    <table id='empTable' class='display dataTable'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <!-- Uncomment these if needed and ensure backend support -->
                <!-- <th>Salary</th> -->
                <!-- <th>City</th> -->
            </tr>
        </thead>
    </table>

</main>


<?php require 'partials/footer.php'?>



<!-- <div class="container mx-auto px-4 py-10">
      Category Filter Buttons
      <div class="flex justify-center mb-6">
        Each button represents a category to filter by
        <button class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md mx-2 filter-btn" data-category="all">All</button>
        <button class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md mx-2 filter-btn" data-category="clothing">Clothing</button>
        <button class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md mx-2 filter-btn" data-category="shoes">Shoes</button>
        <button class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md mx-2 filter-btn" data-category="electronics">Electronics</button>
        <button class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md mx-2 filter-btn" data-category="toys">Toys</button>
        <button class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md mx-2 filter-btn" data-category="gifts">Gifts</button>
        <button class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md mx-2 filter-btn" data-category="food">Food</button>
        <button class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md mx-2 filter-btn" data-category="groceries">Groceries</button>
      </div>

      Product List
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" id="product-list">
        Example Product Card (Repeat this structure for each product)
        <div class="bg-white rounded-lg shadow-lg p-6 product-card" data-category="clothing">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Shirt</h2>
          <p class="text-gray-600 mb-2">$49.99</p>
          <p class="text-gray-500 mb-4">Stylish and comfortable clothing for all seasons.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">Add to Cart</button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 product-card" data-category="shoes">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Shoes</h2>
          <p class="text-gray-600 mb-2">$79.99</p>
          <p class="text-gray-500 mb-4">Comfortable and stylish shoes for any occasion.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">Add toCart</button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 product-card" data-category="electronics">
          <h2 class="text-xl font-bold mb-2 text-gray-800">Sony Alpha</h2>
          <p class="text-gray-600 mb-2">$199.99</p>
          <p class="text-gray-500 mb-4">Capture Reality with us sony cameras.</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-full transition duration-300 w-full">Add to Cart</button>
        </div>

        Repeat the product structure for each item, setting the data-category attribute accordingly
      </div>
    </div> -->



    <!-- Here Script it being used to filter -->
    <!-- <script>
      // JavaScript to handle filtering by category
      document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');

        // Function to filter products
        function filterProducts(category) {
          productCards.forEach(card => {
            if (category === 'all' || card.getAttribute('data-category') === category) {
              card.style.display = 'block'; // Show matching products
            } else {
              card.style.display = 'none'; // Hide non-matching products
            }
          });
        }

        // Add click event to each filter button
        filterButtons.forEach(button => {
          button.addEventListener('click', function () {
            const category = this.getAttribute('data-category');
            filterProducts(category);
          });
        });
      });
    </script> -->
 
