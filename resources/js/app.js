import './bootstrap';

/* -----------------------------------------
  Have focus outline only for keyboard users 
 ---------------------------------------- */

 const handleFirstTab = (e) => {
    if(e.key === 'Tab') {
      document.body.classList.add('user-is-tabbing')
  
      window.removeEventListener('keydown', handleFirstTab)
      window.addEventListener('mousedown', handleMouseDownOnce)
    }
  
  }
  
  const handleMouseDownOnce = () => {
    document.body.classList.remove('user-is-tabbing')
  
    window.removeEventListener('mousedown', handleMouseDownOnce)
    window.addEventListener('keydown', handleFirstTab)
  }
  
  window.addEventListener('keydown', handleFirstTab)
  
  const backToTopButton = document.querySelector(".back-to-top");
  let isBackToTopRendered = false;
  
  let alterStyles = (isBackToTopRendered) => {
    backToTopButton.style.visibility = isBackToTopRendered ? "visible" : "hidden";
    backToTopButton.style.opacity = isBackToTopRendered ? 1 : 0;
    backToTopButton.style.transform = isBackToTopRendered
      ? "scale(1)"
      : "scale(0)";
  };
  
  window.addEventListener("scroll", () => {
    if (window.scrollY > 700) {
      isBackToTopRendered = true;
      alterStyles(isBackToTopRendered);
    } else {
      isBackToTopRendered = false;
      alterStyles(isBackToTopRendered);
    }
  });
  const textChange = document.getElementById('text-change');
  const textArray = ["SSr Web Developer", "Software Engineer", "🇦🇷  Argentinian", "Full Stack Developer"];
  let index = 0;
  let letterIndex = 0;
  let currentText = "";
  let isDeleting = false;
  let isEnd = false;
  let speed = 100;
  let changeDelay = 3000; // Delay after typing
  let showCursor = true; // Flag to control cursor display

  function type() {
    if (index === textArray.length) {
      index = 0;
    }
    currentText = textArray[index];
    if (isDeleting) {
      textChange.textContent = currentText.slice(0, letterIndex);
      letterIndex--;
      showCursor = false; // Hide cursor while deleting
    } else {
      textChange.textContent = currentText.slice(0, letterIndex + 1); // Add 1 to show the current letter
      letterIndex++;
      showCursor = true; // Show cursor while typing
    }
    if (letterIndex === currentText.length) {
      index++;
      letterIndex = 0;
      isDeleting = true;
      speed = changeDelay; // Set the delay after typing is finished
    }
    if (isDeleting && letterIndex === 0) {
      isDeleting = false;
      isEnd = true;
      speed = 100;
      showCursor = false; // Hide cursor while waiting
      setTimeout(type, changeDelay); // Add the delay before changing to the next text
      return;
    }
    if (showCursor) {
      textChange.textContent += "|"; // Add the cursor after the current letter
    }
    setTimeout(type, speed);
  }
  type();

  const blueSquare = document.getElementById('blue-square');
  //get the width of the rectange with the class name 'rectangle'
  const rectangleWidth = document.querySelector('.rectangle').offsetWidth;
  let isDragging = false;
  let startX = 0;
  let initialPosition = 0;
  const squareWidth = 590; // Ancho del cuadrado
  const maxMove = rectangleWidth - squareWidth -4; // Valor máximo de desplazamiento

  blueSquare.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.clientX;
    initialPosition = blueSquare.offsetLeft;
    blueSquare.style.cursor = 'grabbing';
  });

  document.addEventListener('mousemove', (e) => {
    if (isDragging) {
      const movedX = e.clientX - startX;
      let newPosition = initialPosition + movedX;

      // Limitar el desplazamiento dentro de los márgenes del rectángulo
      if (newPosition < 0) {
        newPosition = 0;
      } else if (newPosition > maxMove) {
        newPosition = maxMove;
      }

      blueSquare.style.left = newPosition + 'px';
    }
  });

  document.addEventListener('mouseup', () => {
    isDragging = false;
    blueSquare.style.cursor = 'grab';
  });
    