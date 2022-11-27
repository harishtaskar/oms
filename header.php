<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>header</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>  
        $(function(){ 
          $("#header").load("header.php");  
        }); 
        </script>
</head>
<body> 
    <header class="text-gray-600 body-font bg-gray-200 p-20"  style="margin: 4px; padding-left: 40px; padding-right: 40px; padding-top: 35px; padding-bottom: 25px;"> 
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg> -->  
            <span class="ml-3 text-xl drop-shadow-md" style="font-size: 55px; color: #ff0a50; font-weight: bolder; font-style: italic; text-shadow: grey;">Om Sai Creation</span>
          </a>
          <nav style="padding-top: 40px;" class="md:ml-auto flex flex-wrap items-center text-lg justify-center p-5 font-normal bg-white-500 hover:bg-white-600 focus:ring focus:ring-black-300 hover:drop-shadow-md ...">
            <a href="index.php" class="mr-5 hover:text-red-700 hover:underline underline-offset-3 hover:font-bold ...">Home</a>
            <a href="services.php" class="mr-5 hover:text-red-700 hover:underline underline-offset-3 hover:font-bold ...">Services</a>
            <a href="products.php" class="mr-5 hover:text-red-700 hover:underline underline-offset-3 hover:font-bold ...">Products</a>
            <a href="contact.php" class="mr-5 hover:text-red-700 hover:underline underline-offset-3 hover:font-bold ...">Contact Us</a>
            <a href="about.php" class="mr-5 hover:text-red-700 hover:underline underline-offset-3 hover:font-bold ...">about Us</a>
          </nav>
          <!-- <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button> -->
        </div>
      </header>

</body>
</html>