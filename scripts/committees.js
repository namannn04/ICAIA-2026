
  function changeTab(tabNumber) {
    const buttons = document.getElementsByClassName('tab');
    const contents = document.getElementsByClassName('content');

    for (let i = 0; i < buttons.length; i++) {
      if (i === tabNumber - 1) {
        buttons[i].classList.add('active');
        buttons[i].style.backgroundColor = '#365372';
        buttons[i].style.color = 'white';
        contents[i].style.display = 'block';
      } else {
        buttons[i].classList.remove('active');
        buttons[i].style.backgroundColor = 'white';
        buttons[i].style.color = 'black';
        contents[i].style.display = 'none';
      }
    }
  }