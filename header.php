<div class='z-[-1] pt-[130px]'>
  <div class="flex justify-center items-center gap-5">
  <img class='w-[110px]' src="./images/msit_logo.png" alt="MSIT_logo" />

  <!-- ICAIA Logo + Text -->
  <div class="flex flex-col items-center">
    <img class="w-[150px]" src="./images/icaiaLogo.png" alt="ICAIA Logo">
    <p class="mt-2 text-sm md:text-lg font-semibold text-white tracking-wide">
      ICAIA 2026
    </p>
  </div>

  <img class='w-[220px]' src="./images/ieee.png" alt="IEEE_logo" />
</div>
  <div class='mx-[5%] md:mx-[15%] py-6 my-10 rounded-xl shadow border-2 border-white' style='background-color: rgba(255, 255, 255, 0.6);'>
  <div class='text-center text-white text-xl md:text-2xl lg:text-3xl font-[700] mx-auto'>
    
    <div class="flex items-center justify-center w-full">
      <div class="flex flex-col items-center">

        <p class="mt-2 text-sm md:text-lg font-semibold text-gray-800 tracking-wide mb-2">
          IEEE Conference ID: 71392 | SCOPUS INDEXED
        </p>

        <h1 class='z-10 md:tracking-widest tracking-[1px] text-blue-800'>
          4<sup>th</sup> International Conference on
        </h1>

        <h1 class="md:tracking-[2px] tracking-[1px] text-blue-800">
          Artificial Intelligence and Applications (ICAIA 2026)
</h1>

      </div>
    </div>

    <h1 class='text-[#c00000] text-3xl mt-2 z-10 tracking-widest font-bold text-border event-date text-2xl sm:text-1xl md:text-2xl lg:text-3xl'>
      Organized by
    </h1>

    <h1 class='tracking-[1px] md:tracking-[2.5px] text-[#D3B683] text-black mt-4 font-semibold text-2xl sm:text-xl md:text-2xl lg:text-3xl'>
      Maharaja Surajmal Institute of Technology
    </h1>

  </div>
</div>

  <div class='mx-[5%] md:mx-[15%] py-6 my-10 rounded-xl shadow border-2 border-white' style='background-color: rgba(255, 255, 255, 0.6);'>
    <div class='text-center text-2xl font-[700]'>
      <h1 id="header-rotating-text" class='text-[#c00000] text-3xl z-10 tracking-widest font-bold text-border event-date text-2xl sm:text-1xl md:text-2xl lg:text-3xl transition-opacity duration-500'>
        Conference dates :- 19th-20th November, 2026
      </h1>
    </div>
  </div>
</div>

<script>
  (function () {
    var rotatingText = document.getElementById("header-rotating-text");
    if (!rotatingText) {
      return;
    }

    var messages = [
      "Conference dates :- 19th-20th November, 2026",
      "Last date of submission of papers will not be extended further."
    ];

    var currentIndex = 0;
    var displayDurationMs = 3500;
    var fadeDurationMs = 500;

    setInterval(function () {
      currentIndex = (currentIndex + 1) % messages.length;
      rotatingText.style.opacity = "0";

      setTimeout(function () {
        rotatingText.textContent = messages[currentIndex];
        rotatingText.style.opacity = "1";
      }, fadeDurationMs);
    }, displayDurationMs + fadeDurationMs);
  })();
</script>