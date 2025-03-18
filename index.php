    <?php include './component/head.php'?>
    <script src="script.js" defer></script>
    <title>Janata Bank</title>
  </head>
  <body>
    <!-- Outer wrapper -->
    <section id="outer-wrapper" class="relative overflow-x-hidden">
      <!-- Hero and Nav -->
      <?php include './component/nav.php'?>
      <!-- Hero -->
      <hero id="hero" class="relative">
        <!-- Hero Overlay -->
        <div class="absolute top-0 left-0 h-full w-full bg-black opacity-40 z-40"></div>
        <video src="./assets/video/islamic_family.mp4" muted autoplay loop class="relative w-full h-[60vh] lg:h-full object-cover z-30"></video>
        <!-- Hero text -->
        <div class="absolute top-[35%] left-[3%] z-40 h-fit border-2 border-white px-4 py-10">
          <h2 class="text-4xl lg:text-6xl text-white font-bold">A Committed Partner</h2>
          <h2 class="text-4xl lg:text-6xl text-white font-bold">in Progress</h2>
        </div>
      </hero>
      <!-- Product -->
      <section class="h-[100vh] bg-slate-500"></section>
    </section>
  </body>
</html>
