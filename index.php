<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="tailwind.config.js"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <title>OmSaiCreation</title>
    <script>  
        $(function(){ 
          $("#header").load("header.php");
          $("#footer").load("footer.php");
          $("#product").load("products.php");  

        }); 
        </script>
      
</head>
<body >
  <!-- HEADER    -->
  <?php
        include("header.php");
    ?>
    <hr>
    <!-- SECTION 1 -->
      <section class="text-gray-600 body-font" style="margin: 4px; padding-left: 80PX; padding-right: 80PX;">
        <div class=" container mx-auto flex px-5 py-24 md:flex-row flex-col items-center drop-shadow-md">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-black">Export Quality 
              <br class="hidden lg:inline-block">Customized Printed Designs
            </h1>
            <p class="mb-8 leading-relaxed">Digital technology is the answer of the century, with being in the most fave list of all designers across the globe. With 12 high-tech Regianni machines, producing a whopping 2 million meters monthly, Sahiba’s digital printing studio stays ahead of its counterparts by a country mile, in terms of both produce & standards. The flexibility of printing on both manmade as well as natural fibers, Digital printing stays right on top of the demand chart. Having a design library of more than 25000 designs, and printing a wide variety of products like suits, sarees, kaftans, gowns, anarkalis, lehngas, skirts, scarves and every possible garment, Sahiba has established itself at the top of the Digital printing world.
            <div class="flex justify-center">
              <button class="inline-flex text-red-600 hover:text-white hover:drop-shadow-md bg-transparent border-2  border-red-500 py-2 px-6 focus:outline-2 hover:bg-red-500 rounded text-lg">Check Out</button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="images/homePages/fabric1.jpg">
          </div>
        </div>
      </section>

      <!-- SECTION 2 -->
      <section class="text-gray-600 body-font"  style="margin: 4px; padding-left: 80PX; padding-right: 80PX;">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center drop-shadow-md">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="images/homePages/fabric2.jpg">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-black">Processing 
              <br class="hidden lg:inline-block">Dyeing Preferable Fabric
            </h1>
            <p class="mb-8 leading-relaxed">he complete Dyeing process comprises of pre-treatment, dyeing and finishing. Sahiba, with its mammoth capacity of dyeing 5 million meters in a mere span of a month, offers dyes on a wide range of materials including polyester, cotton, rayon and blends. The quantity is achieved on a consistent basis without compromising on the quality at all.
            <div class="flex justify-center">
              <button class="inline-flex text-red-600 hover:text-white hover:drop-shadow-md bg-transparent border-2  border-red-500 py-2 px-6 focus:outline-2 hover:bg-red-500 rounded text-lg">Check Out</button>
            </div>
          </div>
        </div>
      </section>

      <!-- SECTION 3 -->
      <section class="text-gray-600 body-font" style="margin: 4px; padding-left: 80PX; padding-right: 80PX;">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center drop-shadow-md">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-black">Embroidery Work
              <br class="hidden lg:inline-block">
            </h1>
            <p class="mb-8 leading-relaxed">Being among Asia’s biggest infrastructure, Sahiba’s laces and embroidery wing needs no introduction. Set up in Surat, Gujarat, the unit outsources embroidered laces to some of the top notch international fashion and lingerie brands. The quality and designs are unmatchable. Employing state of the art machinery that includes 150 multi head embroidery machines and 70 Schiffli machines, Sahiba manufactures 24 million meters of embroidery annually. The produce includes exquisite work of designing for cotton laces, designer laces, garment laces and embroidery laces</p>
            <div class="flex justify-center">
              <button class="inline-flex text-red-600 hover:text-white hover:drop-shadow-md bg-transparent border-2  border-red-500 py-2 px-6 focus:outline-2 hover:bg-red-500 rounded text-lg">Check Out</button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="images/homePages/fabric3.jpg">
          </div>
        </div>
      </section>
      <hr>
      <!-- TESTIMONIALS
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
              <div class="h-full text-center">
                <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="images/person/person3.jpg">
                <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                <p class="text-gray-500">Senior Product Designer</p>
              </div>
            </div>
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
              <div class="h-full text-center">
                <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="images/person/person1.jpg">
                <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
                <p class="text-gray-500">UI Develeoper</p>
              </div>
            </div>
            <div class="lg:w-1/3 lg:mb-0 p-4">
              <div class="h-full text-center">
                <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="images/person/person2.jpg">
                <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HENRY LETHAM</h2>
                <p class="text-gray-500">CTO</p>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <!-- FOOTER -->
      <?php
        include("footer.php");
    ?>
</body>
</html>