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
        <div class="absolute flex flex-col gap-5 bottom-0 left-[50%] translate-x-[-50%] h-[70%] w-full text-white font-poppins z-40 md:px-12 px-4 py-4">
          <h1 class="text-4xl md:text-6xl font-extrabold max-w-80 md:max-w-md">A Committed Partner in Progress</h1>
          <p class="text-xl md:text-2xl font-light max-w-80 md:max-w-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <i class="absolute lg:bottom-28 bottom-10 left-[50%] translate-x-[-50%] bi bi-mouse3-fill text-white text-2xl" id="mouseIcon"></i>
        </div>
      </hero>
      <!-- Product -->
      <section class="h-[100vh] bg-slate-500"></section>
    </section>
  </body>
</html>
