<div class=" bg-white ">
  <div class="w-full" id="committee">
    
    <div class=' bg-white md:px-[10%]  pt-12'>
      <div class='pt-16'>
        <h1 class='text-[#c00000] text-center text-3xl font-[600]'>COMMITTEES</h1>
        <div class='w-48 h-[2px] mx-auto mt-2 bg-[#365372] rounded-xl'></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 mt-8 mx-auto">
        <button class="mx-auto tab text-lg rounded-lg text-white w-[80%] py-1 bg-[#365372]" onclick="changeTab(1)">Organising Committee</button>
        <button class="mx-auto tab text-lg rounded-lg text-black w-[80%] py-1 bg-white" onclick="changeTab(2)">Advisory Committee</button>
        <button class="mx-auto tab text-lg rounded-lg text-black w-[80%] py-1 bg-white" onclick="changeTab(3)">Technical Program Committee</button>
      </div>

      <div id="content1" class="content mt-8">
      <?php include("./organising.php")?>
      </div>
      <div id="content2" class="content mt-8" style="display: none;">
      <?php include("./advisory.php")?>
      </div>
      <div id="content3" class="content mt-8" style="display: none;">
      <?php include("./technical.php")?>
      </div>
    </div>
  </div>
</div>