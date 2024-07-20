
  // Start auto background
  
  function* genfun(){
    var index = 1;

    while(true){
        yield index++;

        if(index > 6){
            index = 1;
        }
    }
}

var getgen = genfun();
// console.log(getgen.next().value);


var getheader = document.querySelector('.home');
getheader.style.backgroundImage = `url('./assets/img/banner/bannercoffee${getgen.next().value}.jpg')`;


function autoload(){
    getheader.style.backgroundImage = `url('./assets/img/banner/bannercoffee${getgen.next().value}.jpg')`;
} 


setInterval(autoload,3000);


// End auto background



let navbar = document.querySelector('.navbar');

document.querySelector('.icons').onclick = () => {
  navbar.classList.toggle('active');
}

window.onscroll = () => {
  navbar.classList.remove('active');
}




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
