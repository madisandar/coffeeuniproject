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

// const getcoffeedatas = fetch("https://fake-coffee-api.vercel.app/api")
//   .then((res) => res.json())
//   .then((data) => data);

// var url = "https://fake-coffee-api.vercel.app/api";


// fetch(url)
//         .then(response=>response.json())
//         .then(datas=>{
//                 coffeedatatodom(datas);
//             }).
//             catch(err=>console.log(err));
    
// function redirectToCart(){
//   window.location.href = "addtocart.php";
// }

// function coffeedatatodom(coffees) {

//   let count = 0;

// coffees.forEach(function(coffee) {
//     if (count >= 6) return; // Exit the function if count reaches 12
    
//     var getcoffeestring = JSON.stringify(coffee);
//     var coffeeObject = JSON.parse(getcoffeestring);
    
//     var lis = document.createElement('li');
//     lis.classList.add('box');
//     console.log(coffeeObject);
//     // Access the properties directly from the parsed object
//     lis.innerHTML = `
//       <img src="${coffeeObject.image_url}" width="400px" height="200px" />
//       <h3>${coffeeObject.name}</h3>
//       <p>Price <span class="price"> ${Math.round(coffeeObject.price * 200)} mmk</span></p>
//       <p>Made by <span class="madeby">${coffeeObject.region}</span></p>
//       <button type="button" class="btncarts" onclick="redirectToCart()">Add to cart <i class="fas fa-trash-alt icons"></i></button>
//     `;
    
//     document.querySelector('.box-container').appendChild(lis);
    
//     count++; // Increment the counter

    
// });


    
// }

var getallboxes = document.querySelectorAll('.menu .box-container .box');
// console.log(getallboxes);
var getbox;



window.onscroll = function(){
  scrollanimate();
};


function scrollanimate(){
  var getscrolltop = document.documentElement.scrollTop;

  if(getscrolltop >= 800){
    getallboxes.forEach(function(getbox){
      // console.log(getbox);
        getboxbox.classList.add('fade-in');  
  });
  }
}
