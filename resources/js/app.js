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
    const textArray = ["I am a SSr Web Developer", "I am a Software Engineer", "I am from Tucuman", "I am a Full Stack Developer"];
    let index = 0;
    let letterIndex = 0;
    let currentText = "";
    let isDeleting = false;
    let isEnd = false;
    let speed = 100;


    function type() {
        if (index === textArray.length) {
            index = 0;
        }
        currentText = textArray[index];
        if (isDeleting) {
            textChange.textContent = currentText.slice(0, letterIndex);
            letterIndex--;
        } else {
            textChange.textContent = currentText.slice(0, letterIndex);
            letterIndex++;
        }
        if (letterIndex === currentText.length) {
            index++;
            letterIndex = 0;
            isDeleting = true;
            speed = 5000;
        }
        if (isDeleting && letterIndex === 0) {
            isDeleting = false;
            isEnd = true;
            speed = 100;
        }
        setTimeout(type, speed);
    }
    type();
    