const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('top-20');
      navLinks.classList.toggle('bg-theme');
      navLinks.classList.toggle('top-[-619px]');
    });
var countDownDate = new Date("Mar 26, 2025 15:37:25").getTime();
 
var x = setInterval(function() {
     
  var now = new Date().getTime();
      
  var distance = countDownDate - now;
      
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
  document.getElementById("demo").innerHTML = days + " D : " + hours + " H : "
  + minutes + " M : " + seconds + ' S';
      
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = 0 + " D : " + 0 + " H : "
    + 0 + " M : " + 0 + ' S';
    }
  }, 1000);