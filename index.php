    <?php include './component/head.php'?>
    <script src="script.js" defer></script>
    <title>Janata Bank</title>
  </head>
  <body>
    <!-- Outer wrapper -->
    <section id="outer-wrapper" class="relative overflow-x-hidden">
      <!-- Nav -->
      <?php include './component/nav.php'?>
      <!-- Hero -->
      <hero id="hero" class="relative">
        <!-- Hero Overlay -->
        <video src="./assets/video/islamic_family.mp4" muted autoplay loop class="relative w-full lg:h-full h-[60vh] object-cover"></video>
        <div class="absolute top-0 left-0 h-full w-full bg-black opacity-60 z-30"></div>
        <!-- Hero Text -->
        <div class="absolute flex flex-col gap-5 bottom-0 left-[50%] translate-x-[-50%] h-[75%] w-full text-white font-poppins z-40 md:px-12 px-4 py-4">
          <h1 class="text-4xl md:text-7xl font-extrabold max-w-80 md:max-w-xl">A Committed Partner in Progress</h1>
          <p class="text-xl md:text-2xl font-light max-w-80 md:max-w-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <i class="absolute lg:bottom-28 bottom-10 left-[50%] translate-x-[-50%] bi bi-mouse3-fill text-white text-2xl" id="mouseIcon"></i>
        </div>
      </hero>
      <!-- Products -->
      <section id="products" class="relative px-4">
        <!-- Swiper & Text container -->
        <div class="container mx-auto flex flex-col gap-12 lg:px-12 py-12">
          <!-- Heading -->
          <h4 class="font-bold text-center md:text-start text-4xl lg:text-6xl text-darkbasecolor font-poppins">Our Products</h4>
          <!-- Swiper container -->
          <div class="slider-container">
            <!-- Slider main container -->
            <div class="swiper flex justify-center lg:justify-start">
              <div class="swiper-wrapper flex justify-start items-center space-x-4 lg:space-x-0 mb-10">
                <!-- Card 1 -->
                <div class="swiper-slide">
                  <div class="relative h-[28rem] w-82 lg:w-96 flex flex-col shadow-lg rounded-xl">
                    <div class="cardsUpper rounded-xl">
                      <img src="https://images.unsplash.com/photo-1579621970588-a35d0e7ab9b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-left">
                    </div>
                    <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-2">
                      <h4 class="text-2xl font-semibold font-poppins text-slate-700">Accounts</h4>
                      <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in repellendus illo dolorem natus doloremque excepturi nulla.</p>
                      <div class="flex items-center" id="cardsbuttons">
                        <a href="#" class="">Savings</a>
                        <a href="#" class="">Current</a>
                        <a href="#" class="">Deposits</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card 2 -->
                <div class="swiper-slide">
                  <div class="relative h-[28rem] w-82 lg:w-96 flex flex-col shadow-lg rounded-xl">
                    <div class="cardsUpper rounded-xl">
                      <img src="https://images.unsplash.com/photo-1726137569962-456daf4ec02f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-right">
                    </div>
                    <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-2">
                      <h4 class="text-2xl font-semibold font-poppins text-slate-700">Cards</h4>
                      <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in repellendus illo dolorem natus doloremque excepturi nulla.</p>
                      <div class="flex items-center" id="cardsbuttons">
                        <a href="#" class="">Platinum</a>
                        <a href="#" class="">Gold</a>
                        <a href="#" class="">Classic</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card 3 -->
                <div class="swiper-slide">
                  <div class="relative h-[28rem] w-82 lg:w-96 flex flex-col shadow-lg rounded-xl">
                    <div class="cardsUpper rounded-xl">
                      <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                    </div>
                    <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-2">
                      <h4 class="text-2xl font-semibold font-poppins text-slate-700">Loans</h4>
                      <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in repellendus illo dolorem natus doloremque excepturi nulla.</p>
                      <div class="flex items-center" id="cardsbuttons">
                        <a href="#" class="">Personal</a>
                        <a href="#" class="">Business</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card 4 -->
                <div class="swiper-slide">
                  <div class="relative h-[28rem] w-82 lg:w-96 flex flex-col shadow-lg rounded-xl">
                    <div class="cardsUpper rounded-xl">
                      <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                    </div>
                    <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-2">
                      <h4 class="text-2xl font-semibold font-poppins text-slate-700">Guarantees</h4>
                      <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in repellendus illo dolorem natus doloremque excepturi nulla.</p>
                      <div class="flex items-center" id="cardsbuttons">
                        <a href="#" class="">Employee</a>
                        <a href="#" class="">Commercial</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card 5 -->
                <div class="swiper-slide">
                  <div class="relative h-[28rem] w-82 lg:w-96 flex flex-col shadow-lg rounded-xl">
                    <div class="cardsUpper rounded-xl">
                      <img src="https://images.unsplash.com/photo-1721378467004-eb44b57fa361?q=80&w=1997&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-right">
                    </div>
                    <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-2">
                      <h4 class="text-2xl font-semibold font-poppins text-slate-700">Services</h4>
                      <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in repellendus illo dolorem natus doloremque excepturi nulla.</p>
                      <div class="flex items-center" id="cardsbuttons">
                        <a href="#" class="">WPS</a>
                        <a href="#" class="">Remittance</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- If we need scrollbar -->
              <div class="swiper-scrollbar"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services -->
      <section id="services" class="relative px-4">
        <!-- Swiper & Text container -->
        <div class="container mx-auto flex flex-col gap-12 lg:px-12 py-12">
          <!-- Heading -->
          <h4 class="font-bold text-center md:text-start text-4xl lg:text-6xl text-darkbasecolor font-poppins">Remittance Calculator</h4>  
        </div>      
      </section>
    </section>
  </body>
</html>
