<nav id="navbar" class="bg-[#365372] bg-gray-400 z-50 w-full fixed top-0 left-0 font-sans">
  <div class="md:flex items-center justify-between bg-theme py-1 pr-6 pl-3 xl:pr-1 xl:py-0 md:px-14">
    <div class="cursor-pointer ">
      <a href="/">
        <div class="flex justify-left">
          <div><img class='z-10 w-[60px] mt-2 md:relative md:right-12' src="https://msit.in/static/img/msit.png" alt="MSIT_logo" /></div>
          <!-- <div><img class='z-10 w-[80px] ml-2' src="./images/witLogo.png" alt="WIT_logo" /></div> -->
          <!-- <div><img class='z-10 w-[100px] ml-2 md:hidden' src="./images/springer.png" alt="Springer_logo" /></div> -->
          <!-- <img class='z-10 w-[110px] my-4 px-2 ml-4' src="./images/springer-logo.svg" alt="" /> -->
        </div>
      </a>
    </div>
    <div id="menu-toggle" class="text-3xl text-white absolute right-8 top-6 cursor-pointer md:hidden">
      <span class="fa fa-bars"></span>
    </div>
    <ul id="nav-links" class="md:flex md:items-center bg-[#9ca3af] md:bg-[transparent] text-white font-[600] tracking-[2px] md:pb-0 absolute md:static md:z-auto z-[-1] left-0 w-full md:w-auto md:pl-0 pl-9 transition-all duration-500 ease-in top-[-619px]">
      <!-- <li class="lg:ml-6 md:ml-2 md:text-[10px] lg:text-[11px] xl:text-lg  leading-5 md:my-0 my-7">
          <a href="/" class="nav-link">Home</a>
        </li> -->
      <li class="lg:ml-4 md:ml-2 md:text-[10px] lg:text-[8.5px] xl:text-lg  leading-5 md:my-0 my-7 dropdown hover:bg-slate-300 rounded-xl transition-all cursor-pointer">
        <a class="nav-link">About Us <i class="cursor-pointer fa-solid fa-caret-down md:hidden"></i></a>
        <div class="dropdown-content w-[250px] text-black">
          <a class="hover:text-blue-600 ease-in-out duration-200" href="#overview">Conference Overview</a>
          <br />
          <a class="hover:text-blue-600 ease-in-out duration-200" href="#aboutUs">About Institute</a>
        </div>
      </li>
      <li class="lg:ml-4 md:ml-2 md:text-[10px] lg:text-[8.5px] xl:text-lg  leading-5 md:my-0 my-7 hover:bg-slate-300 rounded-xl transition-all">
        <a href="#sponsor" class="nav-link">Sponsorship</a>
        <!-- <a href="https://drive.google.com/file/d/1uRSmyXgDBtrkhl_FiAg3RvrnLbgn9RIb/view?usp=drive_link" target="#" class="nav-link">Sponsorship</a> -->
        <!-- <a onclick= "sponsor()" style="cursor: pointer;">Sponsorship</a> -->
      </li>
      <li class="lg:ml-6 md:ml-2 md:text-[10px] lg:text-[8.5px] xl:text-lg  leading-5 md:my-0 my-7 hover:bg-slate-300 rounded-xl transition-all">
        <a href="#committee" class="nav-link">Committees</a>
      </li>
      <li class="lg:ml-6 md:ml-2 md:text-[10px] lg:text-[8.5px] xl:text-lg  leading-5 md:my-0 my-7 hover:bg-slate-300 rounded-xl transition-all">
        <a href="#tracks" class="nav-link">Tracks</a>
      </li>
      <li class="lg:ml-6 md:ml-2 md:text-[10px] lg:text-[8.5px] xl:text-lg  leading-5 md:my-0 my-7 dropdown hover:bg-slate-300 rounded-xl transition-all cursor-pointer">
        <a class="nav-link text-center">Author Guidelines</a>
        <div class="dropdown-content w-[250px] text-black">
          <a class="hover:text-blue-600 ease-in-out duration-200" href="#submissions">Submissions</a>
          <br />
          <a class="hover:text-blue-600 ease-in-out duration-200" href="#plagiarism">Plagiarism policy</a>
          <br />
          <a class="hover:text-blue-600 ease-in-out duration-200" href="#privacy">Privacy policy</a>
        </div>
      </li>
      <li class="lg:ml-4 md:ml-2 md:text-[8px] lg:text-[7.5px] xl:text-lg leading-5 md:my-0 my-7 hover:bg-slate-300 rounded-xl transition-all nav-link cursor-pointer">Schedule

        <!-- <a href="https://drive.google.com/file/d/1QuKQwksaMKpZ2TTDtTboOXlrjbCmFJp8/view?usp=drive_link" class="nav-link">Schedule</a> -->
      </li>
      <li class="lg:ml-4 md:ml-2 md:text-[8px] lg:text-[7.5px] xl:text-lg  leading-5 md:my-0 my-7 hover:bg-slate-300 rounded-xl transition-all">
        <a href="#registrations" class="nav-link">Registrations</a>
      </li>
      <li class="lg:ml-4 md:ml-1 md:text-[7.9px] lg:text-[6.9px] xl:text-lg  leading-5 md:my-0 my-7 md:text-center hover:bg-slate-300 rounded-xl transition-all">
        <a href="#callforpapers" class="nav-link">Call for papers</a>
      </li>
      <li class="lg:ml-4 md:ml-1 md:text-[7.9px] lg:text-[7px] xl:text-lg  leading-5 md:my-0 my-7 dropdown hover:bg-slate-300 rounded-xl transition-all cursor-pointer">
        <a class="nav-link">Previous Conferences</a>
        <div class="dropdown-content w-[250px] text-black">
          <a class="hover:text-blue-600 ease-in-out duration-200" href="2024/index.php">ICAIA 2024</a>
          <br />
          <a class="hover:text-blue-600 ease-in-out duration-200" href="2025/index.php">ICAIA 2025</a>
          <br />
          <a class="hover:text-blue-600 ease-in-out duration-200" href="#video">ICAIA 2020</a>
        </div>
      </li>
      <li class="lg:ml-3 md:ml-1 md:text-[7.9px] lg:text-[7px] xl:text-lg md:my-0 my-7 md:text-center hover:bg-slate-300 rounded-xl transition-all">
        <a href="#contact" class="nav-link">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>