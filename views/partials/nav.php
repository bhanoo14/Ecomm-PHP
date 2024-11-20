<nav class="bg-gray-800 shadow-lg"> 
  <div class="container mx-auto px-4">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <!-- Logo or Company Name -->
        <div class="text-2xl text-blue-400 italic font-semibold">
          Ecomm
        </div>
        <!-- Navigation Links -->
        <div class="ml-12 flex items-baseline space-x-4">
          <!-- Home Link -->
          <a href="/ecomm" 
             class="<?= urls('/ecomm') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> 
             rounded-md px-4 py-2 text-sm font-medium transition-colors duration-200">
            Home
          </a>
          <!-- Product Link -->
          <a href="/ecomm/product.php" 
             class="<?= urls('/ecomm/product.php') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> 
             rounded-md px-4 py-2 text-sm font-medium transition-colors duration-200">
            Product
          </a>
          <!-- About Link -->
          <a href="/ecomm/about.php" 
             class="<?= urls('/ecomm/about.php') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> 
             rounded-md px-4 py-2 text-sm font-medium transition-colors duration-200">
            About
          </a>
          <!-- Contact Link -->
          <a href="/ecomm/contact.php" 
             class="<?= urls('/ecomm/contact.php') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> 
             rounded-md px-4 py-2 text-sm font-medium transition-colors duration-200">
            Contact
          </a>
        </div>
      </div>
      <!-- Right-aligned Navigation Items -->
      <div class="ml-auto flex items-center space-x-6">
        <!-- Search Bar -->
        <div class="relative">
          <input type="text" placeholder="Search"
                 class="pl-8 pr-4 py-2 rounded-md bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-gray-600 focus:ring-2 focus:ring-blue-500 transition">
          <i class="fa-solid fa-magnifying-glass absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
        
        <!-- Cart Icon -->
        <div class="relative"><a href="/ecomm/cart.php">
          <i class="fa-solid fa-cart-shopping text-gray-300 hover:text-white text-2xl cursor-pointer transition-colors duration-200"></i>
          <!-- Optional badge for cart items -->
          <span class="absolute top-0 right-0 bg-red-500 text-white rounded-full px-1 text-xs">3</span></a>
        </div>

        <!-- User Icon and Username -->
        <div class="flex items-center space-x-2"><a href="/ecomm/signin.php">
          <i class="fa-solid fa-user text-gray-300 hover:text-white text-2xl cursor-pointer transition-colors duration-200"></i>
          <span class="text-gray-300 text-sm"><?= 'SignIn' ?></span></a>
        </div>
      </div>
    </div>
  </div>
</nav>
