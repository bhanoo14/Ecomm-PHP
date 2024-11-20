

<?php require 'partials/head.php'?>
<?php require 'partials/nav.php'?>
<?php require 'partials/banner.php'?>


<main class="bg-gray-100">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 bg-white shadow-lg rounded-lg p-8">
    <!-- Contact Us Section -->
    <div class="text-center">
      <!-- Title -->
      <h3 class="text-4xl font-bold text-gray-800 mb-6">Contact Us</h3>
      
      <!-- Description -->
      <p class="text-gray-600 leading-relaxed text-lg mb-8">
         dignissimos expedita ab illo perferendis optio minima, rerum sit in. In nobis assumenda consequuntur debitis quibusdam qui aliquam, provident saepe numquam quod amet nulla, facere maxime quia quis! Rem, aperiam, quam saepe ipsa repudiandae nemo soluta suscipit eaque expedita officiis quisquam architecto doloremque. Qui dignissimos quis nesciunt molestias molestiae. Pariatur amet voluptatem, voluptates praesentium deserunt debitis doloremque quo veniam eius obcaecati laboriosam, exercitationem, officia at magnam excepturi. Labore consequuntur quas doloremque voluptates, ut iste soluta illo quia suscipit id minus architecto incidunt vel eaque exercitationem deleniti itaque iusto aliquid dignissimos ea eveniet magnam quam molestiae expedita? Error, culpa ullam beatae et ducimus impedit quos rem!
      </p>
      
      <!-- Contact Details -->
      <div class="mb-6">
        <div class="flex justify-center items-center space-x-6">
          <!-- Email -->
          <a href="mailto:ecomm@gmail.com" class="flex items-center space-x-2 text-gray-800 hover:text-blue-500">
            <label class="font-semibold">Mail Us:</label>
            <span class="underline">ecomm@gmail.com</span>
          </a>
          
          <!-- Phone -->
          <a href="tel:+911122334455" class="flex items-center space-x-2 text-gray-800 hover:text-blue-500">
            <label class="font-semibold">Phone:</label>
            <span class="underline">+91-1122334455</span>
          </a>
        </div>
      </div>
      
      <!-- Contact Form -->
      <div class="bg-gray-50 p-6 rounded-lg shadow-md max-w-md mx-auto">
        <!-- Message Us Section -->
        <div class="mb-4">
          <label for="message" class="block text-gray-700 font-semibold mb-2">Message Us</label>
          <input type="text" name="message" id="message" 
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                 placeholder="Type your message here">
          <button class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Send</button>
        </div>

        <!-- Any Query Section -->
        <div class="mb-4">
          <label for="query" class="block text-gray-700 font-semibold mb-2">Any Query</label>
          <input type="text" name="query" id="query" 
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                 placeholder="Type your query here">
          <button class="mt-2 bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">Query</button>
        </div>
      </div>
    </div>
  </div>
</main>


<?php require 'partials/footer.php'?>


<!-- <div class="ml-10 flex items-baseline space-x-4"> -->
  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

  <!-- <a href="/p/ecomm/" class="rounded-md  px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" >Home</a> -->
  <!-- <a href="/p/ecomm/about.php" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">About</a> -->
<!-- </div> -->