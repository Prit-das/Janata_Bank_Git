<?php include './component/head.php' ?>
<script src="script.js" defer></script>
<title>Janata Bank</title>
</head>

<body>
  <!-- Outer wrapper -->
  <section id="outer-wrapper" class="relative overflow-x-hidden">
    <!-- Nav -->
    <?php include './component/nav.php' ?>
    <!-- Hero -->
    <hero id="hero" class="relative">
      <!-- Hero Overlay -->
      <video src="./assets/video/islamic_family.mp4" muted autoplay loop
        class="relative w-full lg:h-full h-[60vh] object-cover"></video>
      <div class="absolute top-0 left-0 h-full w-full bg-black opacity-60 z-30"></div>
      <!-- Hero Text -->
      <div
        class="absolute container mx-auto flex flex-col gap-5 bottom-0 left-[50%] translate-x-[-50%] h-[75%] w-full text-white font-poppins z-40 md:px-12 px-4 py-4">
        <h1 class="text-4xl md:text-7xl font-extrabold max-w-80 md:max-w-xl">A Committed Partner in Progress</h1>
        <p class="text-xl md:text-2xl font-light max-w-80 md:max-w-md">Lorem ipsum dolor sit amet consectetur
          adipisicing elit.</p>
        <i class="absolute lg:bottom-28 bottom-10 left-[50%] translate-x-[-50%] bi bi-mouse3-fill text-white text-2xl"
          id="mouseIcon"></i>
      </div>
    </hero>
    <!-- Products -->
    <section id="products" class="relative px-4">
      <!-- Swiper & Text container -->
      <div class="container mx-auto flex flex-col gap-12 lg:px-12 py-12">
        <!-- Heading -->
        <h4 class="font-bold text-center md:text-start text-4xl lg:text-6xl text-darkbasecolor font-poppins">Our
          Products</h4>
        <!-- Swiper container -->
        <div class="slider-container relative pt-[50px]">
          <!-- Slider main container -->
          <div class="swiper flex justify-center lg:justify-start">
            <div class="swiper-wrapper flex justify-start items-center space-x-4 lg:space-x-0 mb-10">
              <!-- Card 1 -->
              <div class="swiper-slide">
                <div class="relative h-[28rem] flex flex-col shadow-lg rounded-xl">
                  <div class="w-full cardsUpper rounded-xl">
                    <img
                      src="https://images.unsplash.com/photo-1579621970588-a35d0e7ab9b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      class="W-full object-left">
                  </div>
                  <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-6">
                    <h4 class="text-2xl font-semibold font-poppins text-slate-700">Accounts</h4>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in
                      repellendus illo dolorem natus doloremque excepturi nulla.</p>
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
                <div class="relative h-[28rem] flex flex-col shadow-lg rounded-xl">
                  <div class="w-full cardsUpper rounded-xl">
                    <img
                      src="https://images.unsplash.com/photo-1726137569962-456daf4ec02f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                      class="w-full object-right">
                  </div>
                  <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-6">
                    <h4 class="text-2xl font-semibold font-poppins text-slate-700">Cards</h4>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in
                      repellendus illo dolorem natus doloremque excepturi nulla.</p>
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
                <div class="relative h-[28rem] flex flex-col shadow-lg rounded-xl">
                  <div class="w-full cardsUpper rounded-xl">
                    <img
                      src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full">
                  </div>
                  <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-6">
                    <h4 class="text-2xl font-semibold font-poppins text-slate-700">Loans</h4>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in
                      repellendus illo dolorem natus doloremque excepturi nulla.</p>
                    <div class="flex items-center" id="cardsbuttons">
                      <a href="#" class="">Personal</a>
                      <a href="#" class="">Business</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card 4 -->
              <div class="swiper-slide">
                <div class="relative h-[28rem] flex flex-col shadow-lg rounded-xl">
                  <div class="w-full cardsUpper rounded-xl">
                    <img
                      src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full">
                  </div>
                  <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-6">
                    <h4 class="text-2xl font-semibold font-poppins text-slate-700">Guarantees</h4>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in
                      repellendus illo dolorem natus doloremque excepturi nulla.</p>
                    <div class="flex items-center" id="cardsbuttons">
                      <a href="#" class="">Employee</a>
                      <a href="#" class="">Commercial</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card 5 -->
              <div class="swiper-slide">
                <div class="relative h-[28rem] flex flex-col shadow-lg rounded-xl">
                  <div class="w-full cardsUpper rounded-xl">
                    <img
                      src="https://images.unsplash.com/photo-1721378467004-eb44b57fa361?q=80&w=1997&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full"
                      class="object-right">
                  </div>
                  <div class="cardsLower flex flex-col justify-end items-start rounded-xl select-none gap-4 px-4 py-6">
                    <h4 class="text-2xl font-semibold font-poppins text-slate-700">Services</h4>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi et quia culpa ab in
                      repellendus illo dolorem natus doloremque excepturi nulla.</p>
                    <div class="flex items-center" id="cardsbuttons">
                      <a href="#" class="">WPS</a>
                      <a href="#" class="">Remittance</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Navigation Buttons -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <!-- Pagination Dots -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- Services -->
    <section id="services" class="relative px-4">
      <div class="container mx-auto px-4 lg:px-12 py-4">
        <!-- Heading -->
        <h4 class="hidden lg:block font-poppins font-bold text-center md:text-start text-6xl text-darkbasecolor">
          Remittance Calculator</h4>
        <!-- Calculator & Text container -->
        <div class="flex flex-col lg:flex-row justify-between items-center gap-8 py-8 lg:py-16" id="calcContainer">
          <!-- Left Section -->
          <div class="w-full lg:w-1/2 font-poppins">
            <h1 class="text-3xl md:text-4xl lg:text-6xl font-extrabold text-center lg:text-left">
              <span class="text-slate">Live currency</span>
              <span class="text-slate block md:inline">exchange rates</span>
            </h1>
            <h2
              class="text-3xl md:text-4xl lg:text-6xl font-extrabold text-darkbasecolor mt-4 text-center lg:text-left">
              Calculator</h2>
            <p class="lg:max-w-lg text-slate mt-8 text-center lg:text-left">Keep up with all your fiat foreign currencies
              in one place, updated regularly.</p>
            <div class="flex justify-center lg:justify-start space-x-8 mt-4">
              <div class="flex items-center space-x-2 text-slate">
                <i class="bi bi-lightning"></i>
                <span>Fast & easy transfers</span>
              </div>
            </div>
          </div>
          <!-- Right section -->
          <div class="w-full lg:w-1/2 font-poppins">
            <!-- Calculator -->
            <div class="glassmorphisum flex flex-col items-center rounded-lg lg:px-20 px-4 lg:py-20 py-6">
              <!-- Group one -->
              <label class="text-slate self-start">Your Currency</label>
              <div
                class="w-full flex justify-between items-center gap-2 border-2 border-darkbasecolor shadow-lg rounded-lg mb-6 px-2">
                <input type="text" placeholder="AED 100" name="inAed"
                  class="w-1/2 bg-transparent text-darkbasecolor outline-none font-bold py-3">
                <div class="flex items-center gap-2 select-none">
                  <img src="https://flagcdn.com/w320/ae.png" class="h-8 w-8 rounded-full">
                  <p class="text-slate text-xs lg:text-base font-extrabold">UAE</p>
                </div>
              </div>
              <!-- Group two -->
              <a class="convertBtn shadow-lg mb-6" id="converter"><i class="bi bi-arrow-down-up"></i>Convert</a>
              <!-- Group three -->
              <label class="text-slate self-start">Converted in this Currency</label>
              <div
                class="w-full flex justify-between items-center gap-2 border-2 border-darkbasecolor shadow-lg rounded-lg px-2">
                <input type="text" placeholder="Taka 3300" name="inTaka"
                  class="w-1/2 bg-transparent text-darkbasecolor outline-none font-bold py-3">
                <div class="flex items-center select-none gap-2">
                  <img src="https://flagcdn.com/w320/bd.png" class="h-8 w-8 object-cover rounded-full">
                  <p class="text-slate text-xs lg:text-base font-extrabold">Bangladesh</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <?php include './component/footer.php' ?>
  </section>
</body>

</html>