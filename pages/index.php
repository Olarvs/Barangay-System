<?php 
require_once '../components/navbar.php'
?>
<body class ="bg-gray-900">

<div class="flex justify-center items-center h-screen ">
<form class ="w-96 p-5" id = "frmLogin" action = "#">
<div class ="mt-3">
  <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
  <input type="text" id="email" class="bg-gray-50 border border-gray-500 text-gray-900 placeholder-gray-700 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-400" placeholder="sample@gmail.com" required>
  <p class="mt-2 text-sm text-gray-600 dark:text-gray-500 hidden"><span class="font-medium">Oops!</span> Username already taken!</p>
</div>
<div class ="mt-3">
  <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
  <input type="password" id="password" class="bg-gray-50 border border-gray-500 text-gray-900 placeholder-gray-700 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-400" required>
  <p class="mt-2 text-sm text-gray-600 dark:text-gray-500 hidden"><span class="font-medium">Oops!</span> Username already taken!</p>
</div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-3 w-full">Log In</button>
</form>
 </div>
<div class="flex justify-center">
 <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
  <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path></svg>
  Sign in with Facebook
</button>
</div>
 
<?php 
require_once '../components/footer.php';
?>
</body>