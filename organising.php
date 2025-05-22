<div class="mx-auto md:ml-0 w-[90%] md:w-[300px]">
  <ul class="space-y-2">
    <li class="relative">
      <button type="button" class="hover:text-white focus:text-white w-full bg-gray-200 text-left pl-3 py-2 rounded-md font-medium hover:bg-gray-500 focus:outline-none focus:bg-gray-500" onclick="toggleDropdown('patrons_dropdown')">
        Patrons
      </button>
      <ul id="patrons_dropdown" class="md:absolute left-full top-0 mt-2 mx-auto md:ml-2 w-[100%] md:w-[800px] rounded-md shadow-lg hidden text-left dropdown-menu">
        <li class="px-3 py-2 blur-sm select-none text-gray-700">Revealing Soon...</li>
      </ul>
    </li>

    <li class="relative">
      <button type="button" class="hover:text-white focus:text-white w-full bg-gray-200 text-left pl-3 py-2 rounded-md font-medium hover:bg-gray-500 focus:outline-none focus:bg-gray-500" onclick="toggleDropdown('organising_chair_dropdown')">
        Organising Chair
      </button>
      <ul id="organising_chair_dropdown" class="md:absolute left-full top-0 mt-2 mx-auto md:ml-2 w-[100%] md:w-[800px]  rounded-md shadow-lg hidden text-left dropdown-menu">
        <li class="px-3 py-2 blur-sm select-none text-gray-700">Revealing Soon...</li>
      </ul>
    </li>

    <li class="relative">
      <button type="button" class="hover:text-white focus:text-white w-full bg-gray-200 text-left pl-3 py-2 rounded-md font-medium hover:bg-gray-500 focus:outline-none focus:bg-gray-500" onclick="toggleDropdown('convener_dropdown')">
        Convener
      </button>
      <ul id="convener_dropdown" class="md:absolute left-full top-0 mt-2 mx-auto md:ml-2 w-[100%] md:w-[800px]  rounded-md shadow-lg hidden text-left dropdown-menu">
        <li class="px-3 py-2 blur-sm select-none text-gray-700">Revealing Soon...</li>
      </ul>
    </li>

    <li class="relative">
      <button type="button" class="hover:text-white focus:text-white w-full bg-gray-200 text-left pl-3 py-2 rounded-md font-medium hover:bg-gray-500 focus:outline-none focus:bg-gray-500" onclick="toggleDropdown('co_conveners_dropdown')">
        Co-Conveners
      </button>
      <ul id="co_conveners_dropdown" class="md:absolute left-full top-0 mt-2 mx-auto md:ml-2 w-[100%] md:w-[800px]  rounded-md shadow-lg hidden text-left dropdown-menu">
        <li class="px-3 py-2 blur-sm select-none text-gray-700">Revealing Soon...</li>
      </ul>
    </li>

    <li class="relative">
      <button type="button" class="hover:text-white focus:text-white w-full bg-gray-200 text-left pl-3 py-2 rounded-md font-medium hover:bg-gray-500 focus:outline-none focus:bg-gray-500" onclick="toggleDropdown('technical_review_dropdown')">
        Technical Review Committee
      </button>
      <ul id="technical_review_dropdown" class="md:absolute left-full top-0 mt-2 mx-auto md:ml-2 w-[100%] md:w-[800px]  rounded-md shadow-lg hidden text-left dropdown-menu">
        <li class="px-3 py-2 blur-sm select-none text-gray-700">Revealing Soon...</li>
      </ul>
    </li>

    <li class="relative">
      <button type="button" class="hover:text-white focus:text-white w-full bg-gray-200 text-left pl-3 py-2 rounded-md font-medium hover:bg-gray-500 focus:outline-none focus:bg-gray-500" onclick="toggleDropdown('program_committee_dropdown')">
        Program Committee
      </button>
      <ul id="program_committee_dropdown" class="md:absolute left-full top-0 mt-2 mx-auto md:ml-2 w-[100%] md:w-[800px]  rounded-md shadow-lg hidden text-left dropdown-menu">
        <li class="px-3 py-2 blur-sm select-none text-gray-700">Revealing Soon...</li>
      </ul>
    </li>

    <li class="relative">
      <button type="button" class="hover:text-white focus:text-white w-full bg-gray-200 text-left pl-3 py-2 rounded-md font-medium hover:bg-gray-500 focus:outline-none focus:bg-gray-500" onclick="toggleDropdown('finance_committee_dropdown')">
        Finance Committee
      </button>
      <ul id="finance_committee_dropdown" class="md:absolute left-full top-0 mt-2 mx-auto md:ml-2 w-[100%] md:w-[800px]  rounded-md shadow-lg hidden text-left dropdown-menu">
        <li class="px-3 py-2 blur-sm select-none text-gray-700">Revealing Soon...</li>
      </ul>
    </li>

    <li class="relative">
      <button type="button" class="hover:text-white focus:text-white w-full bg-gray-200 text-left pl-3 py-2 rounded-md font-medium hover:bg-gray-500 focus:outline-none focus:bg-gray-500" onclick="toggleDropdown('publication_committee_dropdown')">
        Publication Committee
      </button>
      <ul id="publication_committee_dropdown" class="md:absolute left-full top-0 mt-2 mx-auto md:ml-2 w-[100%] md:w-[800px] brounded-md shadow-lg hidden text-left dropdow
        <li class=" px-3 py-2 blur-sm select-none text-gray-700">Revealing Soon...
    </li>
  </ul>
  </li>
  </ul>
</div>

<script>
  function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    dropdown.classList.toggle("hidden");
  }
</script>
