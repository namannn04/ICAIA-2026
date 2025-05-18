// Function to toggle the dropdown menu
function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    const allDropdowns = document.querySelectorAll('.dropdown-menu');
    allDropdowns.forEach((item) => {
      if (item.id !== id) {
        item.classList.add('hidden');
      }
    });
    dropdown.classList.toggle('hidden');
  }

  // Open the "Organising Chair" section by default
  const organisingChairDropdown = document.getElementById('patrons_dropdown');
  organisingChairDropdown.classList.remove('hidden');

  const track12 = document.getElementById('track1');
  track12.classList.remove('hidden');