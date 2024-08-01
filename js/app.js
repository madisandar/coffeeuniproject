let navbar = document.querySelector('.navbar');

document.querySelector('.menu-btn').onclick = () => {
  navbar.classList.toggle('active');
}

window.onscroll = () => {
  navbar.classList.remove('active');
}

AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 400, // values from 0 to 3000, with step 50ms
  duration: 1200, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

const header = document.querySelector('#header');

window.addEventListener('scroll', function() {
  if (window.scrollY > 5) { 
      header.classList.add('scrolled');
  } else {
      header.classList.remove('scrolled');
  }
});



document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('.number');
  const speed = 200; // The lower the speed, the faster the count

  const updateCount = (counter) => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;
      const increment = target / speed;

      if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(() => updateCount(counter), 1);
      } else {
          counter.innerText = target + "+";
      }
  };

  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              const counter = entry.target;
              updateCount(counter);
              observer.unobserve(counter); // Stop observing after the animation
          }
      });
  }, { threshold: 0.1 });

  counters.forEach(counter => {
      observer.observe(counter);
  });
});


// Start Testimonials Section
const getblockquotetitle = document.querySelector('.blockquotetitle');
const getblockquotecaption = document.querySelector('.blockquotecaption');
const gettestimonial = document.querySelector('.testimonial');

const testimonialdatas = [
    {
        text: "Life is too short for bad coffee",
        name: "Steven Pressfield"
    },

    {
      text: "Life begins after coffee",
      name: "Louisa May Alcott"
    },

    {
      text: "Coffee is a hug in a mug",
      name: "Howard Schultz"
    },

    {
      text:"Coffee is a language in itself.",
      name:"Jackie Chan"
    },

    {
      text:"Coffee smells like freshly ground heaven.",
      name:"Jessi Lane Adams"
    }

];

let idx = 0;

function updatetestimonail(){
    //  getcompanyname.textContent = testimonialdatas[idx].name;
    //  getrole.textContent = testimonialdatas[idx].position;
    //  gettestimonial.textContent = testimonialdatas[idx].text;
      
     const {text,name} = testimonialdatas[idx];

    // console.log(name);
    // console.log(position);
    // console.log(text);

     getblockquotetitle.textContent = text;
     getblockquotecaption.textContent = name;

     idx ++;

     if(idx > testimonialdatas.length - 1){
        idx = 0;
     }


}

updatetestimonail();
setInterval(updatetestimonail,5000);
//End Testimonal


var getallboxes = document.querySelectorAll('.menu .box-container .box');
// console.log(getallboxes);
var getbox;







window.addEventListener('scroll',()=>{
  const getscrolly = window.scrollY;
  console.log(getscrolly);

  if(getscrolly >= 1100){
      document.querySelector('.productimgcontainer').classList.add('fromlefts');
      document.querySelector('.productcontent').classList.add('fromrights');

  }else{
    document.querySelector('.productimgcontainer').classList.remove('fromlefts');
    document.querySelector('.productcontent').classList.remove('fromrights');  }
});
