let cursor = document.querySelector(".cursor"); // Selects the element with class `.cursor` and assigns it to the `cursor` variable.
let mouseX = 0; // Initializes the `mouseX` variable to store the mouse's X-coordinate.
let mouseY = 0; // Initializes the `mouseY` variable to store the mouse's Y-coordinate.
cursorScale = document.querySelectorAll(".cursor-scale"); // Selects all elements with class `.cursor-scale` and assigns them to the `cursorScale` variable.
document.documentElement.classList.add('invisible-cursor');


gsap.to({}, 0.016, { // Creates a GSAP timeline with a duration of 0.016 seconds.
  repeat: -1, // Repeats the timeline indefinitely.
  onRepeat: function() { // Calls this function every time the timeline repeats.
    gsap.set(cursor, { // Sets the CSS properties of the `.cursor` element.
      css: { // Defines the CSS properties to modify.
        left: mouseX, // Sets the `left` position to the current `mouseX` value.
        top: mouseY // Sets the `top` position to the current `mouseY` value.
      }
    });
  }
});

document.documentElement.classList.remove('invisible-cursor');

window.addEventListener("mousemove", function(e) { // Adds an event listener for the `mousemove` event.
  mouseX = e.clientX; // Updates the `mouseX` variable with the current X-coordinate of the mouse.
  mouseY = e.clientY; // Updates the `mouseY` variable with the current Y-coordinate of the mouse.
});

cursorScale.forEach(link => { // Loops through each element in the `cursorScale` array.
  link.addEventListener('mouseleave', () => { // Adds an event listener for the `mouseleave` event on each link.
    cursor.classList.remove('grow'); // Removes the `grow` class from the `.cursor` element.
    cursor.classList.remove('grow-small'); // Removes the `grow-small` class from the `.cursor` element.
  });

  link.addEventListener('mousemove', () => { // Adds an event listener for the `mousemove` event on each link.
    cursor.classList.add('grow'); // Adds the `grow` class to the `.cursor` element.
    if (link.classList.contains('small')) { // Checks if the link has the `small` class.
      cursor.classList.remove('grow'); // Removes the `grow` class from the `.cursor` element.
      cursor.classList.add('grow-small'); // Adds the `grow-small` class to the `.cursor` element.
    }
  });
});
