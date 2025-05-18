document.getElementById('marqueetext').addEventListener('click', function() {
    var textNewDiv = document.getElementById('textnew');

    // Add pulse class for the animation effect
    textNewDiv.classList.add('pulse');

    // Display the div
    textNewDiv.style.display = 'block';

    // Remove the pulse class after 1 second (1000 milliseconds)
    setTimeout(function() {
      textNewDiv.classList.remove('pulse');
    }, 1000);
  });