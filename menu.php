<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .back-btn{
            text-decoration: underline;     
            font-size: 1.5rem;
            color: blue;

            position: absolute;
            right: 10px;
            top: 10px;

            padding: 10px;
        }
        .menu-container{
            width: auto;
            padding: 20px;
            text-align: center;
        }
        .menu-container h5{
            color: #fff;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .menu-container p{
            font-size: 15px;
            color: #fff;
        }

        .menu-card{
            display: flex;
            justify-content: space-between;
        }

        .menu-card h3{
            color: burlywood;
            font-size: 20px;
        }

        .menu-content{
            box-shadow: 255 255 255 rgb(0,0,0,0.4);
            display: flex; 
            justify-content: space-between;
        }
        .menu-content button{
            background-color: whitesmoke;
            border-radius: 50%;
            padding: 10px;
            margin-left: 30px;

            cursor: pointer;

            position: relative;
        }   

        .menu-content button:hover{
            background-color: #000;
            color: #fff;
        }
        
        .menu-content button:nth-child(1):hover::after{
            content: "Set";

            position: absolute;
            bottom: -20px;
            left: 10px;
        }

        .menu-content button:nth-child(2):hover::after{
            content: "Coffee";

            position: absolute;
            bottom: -20px;
            left: 10px;
        }

        .menu-content button:nth-child(3):hover::after{
            content: "Cake";

            position: absolute;
            bottom: -20px;
            left: 10px;
        }

        .menu-boxs-container,.cake-container,.coffee-container{
            top: 20px;
            padding: 10px;
            
            display: none;
        }

      
        .menu-contents{
            margin-top: 10px;
        }
        
        .menu-contents h3{
            color: burlywood;
            font-size: 20px;    
        }

        .menu-contents p{
            color: #fff;
        }

        .menu-contents span{
            font-size: 25px;
        }
        .hidden {
            display: none;
        }

        .read-more-btn{
            width: 120px;
            margin-top: 20px;
            background-color: burlywood;
            font-size: 50px;
            cursor: pointer;
            padding: 7px 13px;
        }

        .menu-boxs-container.active,.cake-container.active,.coffee-container.active{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap: 1.5rem;
        }

        .menu-boxs{
            width: 90%;
            height: 400px;

            /* border: 1px solid #999; */
            box-shadow: 1px 1px 1px 1px rgb(0,0,0,0.1);

            margin: 10px;
            padding: 10px 20px;

            text-align: left;
            transition: opacity 0.1 s ease;


        }

        .menu-boxs img{
            width: 100%;
            height: 60%;
            cursor: pointer;
        }

        .menu-container:hover .menu-boxs {
            opacity: 0.3;
        }

        .menu-boxs:hover{
            opacity: 1 !important;;
        }


      

                


        .cake-boxes,.coffee-boxs{
            margin-top: 20px;
        }

        .coffees{
            text-align: center;
        }

        .coffees h1{
            text-align: center;
            color: #fff;
            margin: 20px;

        }

        .coffee-boxs{
            display: flex;
            align-items: center;

            margin: 10px;
            padding: 10px;
        }

        .coffee-boxs img{
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        
        .coffee-content{
            margin-left: 10px;
        }

        .coffee-content h3{
            color: burlywood;
            font-size: 2rem;
        }

        .coffee-content p{
            color: #fff;
            font-size: 1.2rem;
        }

        .coffee-content small{
            display: block;
            color: #fff;
            font-size: 1.3rem;
        }

        .coffee-content .price{
            color: burlywood;
            font-size: 1.7rem;

        }
        
    </style>
</head>
<body>

    <a href="index.php" class="back-btn">Back to home</a>

 

    <div class="menu-container">
        <h5>Menus</h5>
        <p>Look at our menus</p>

        <div class="menu-card">
            <h3>Coffee & Cake</h3>

            <div class="menu-content">
                <button type="button" id="all"><i class="fas fa-allergies fa-2x"></i></button>
                <button type="button" id="coffee"><i class="fas fa-coffee fa-2x"></i></button>
                <button type="button" id="cake"><i class="fas fa-birthday-cake fa-2x"></i></button>
            </div>
        </div>

        <div class="menu-boxs-container active">

            <div class="menu-boxs">
                <img src="./assets/img/menu/set1.jpg" alt="" />
                <div class="menu-contents">
                    <h3>Name : Set1</h3>
                    <p>Price : <span>8000</span>MMK</p>
                    <p>Coffee Sweety Hub</p>
                    <p class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></p>
                    <p class="hidden">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <div class="menu-boxs">
                <img src="./assets/img/menu/set2.jpeg" alt="" />
                <div class="menu-contents">
                    <h3>Name : Set2</h3>
                    <p>Price : <span>9000</span>MMK</p>
                    <p>Coffee Sweety Hub</p>

                    <p class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></p>
                    <p class="hidden">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                </div>
            </div>


            <div class="menu-boxs">
                <img src="./assets/img/menu/set3.jpeg" alt="" />
                <div class="menu-contents">
                    <h3>Name : Set3</h3>
                    <p>Price : <span>12000</span>MMK</p>
                    <p>Coffee Sweety Hub</p>

                    <p class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></p>
                    <p class="hidden">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                </div>
            </div>

            <div class="menu-boxs">
                <img src="./assets/img/menu/set4.jpeg" alt="" />
                <div class="menu-contents">
                    <h3>Name : Set4</h3>
                    <p>Price : <span>7800</span>MMK</p>
                    <p>Coffee Sweety Hub</p>

                    <p class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></p>
                    <p class="hidden">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                </div>
            </div>

            <div class="menu-boxs">
                <img src="./assets/img/menu/set5.jpeg" alt="" />
                <div class="menu-contents">
                    <h3>Name : Set5</h3>
                    <p>Price : <span>10000</span>MMK</p>
                    <p>Coffee Sweety Hub</p>

                    <p class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></p>
                     <p class="hidden">Praesent commodo cursus magna, vel scelerisque nisl consectetur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    
                </div>
            </div>

            <div class="menu-boxs">
                <img src="./assets/img/menu/set6.jpeg" alt="" />
                <div class="menu-contents">
                    <h3>Name : Set6</h3>
                    <p>Price : <span>9500</span>MMK</p>
                    <p>Coffee Sweety Hub</p>

                    <p class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></p>
                    <p class="hidden">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                </div>
            </div>


        </div>

        <div id="overlay"></div>

        <div class="coffee-container">
            
            <!-- <div class="coffee-boxs">
                <img src="./assets/img/banner/bannercoffee1.jpg" />
                <div class="coffee-content">
                    <h3>Espresso</h3>
                    <p>Loreum...</p>
                    <small>Price : <span class="price">5000MMK</span></small>
                </div>
            </div> -->

            <!-- <div class="coffee-boxs">
                <img src="" />
                <div class="coffee-content">
                    <h3>Espresso</h3>
                    <p>Loreum...</p>
                    <small>Price : <span class="price">5000MMK</span></small>
                </div>
            </div> -->

            <!-- <div class="coffee-boxs">
                <img src="" />
                <div class="coffee-content">
                    <h3>Espresso</h3>
                    <p>Loreum...</p>
                    <small>Price : <span class="price">5000MMK</span></small>
                </div>
            </div> -->

        </div>


        <div class="cake-container">
           
        </div>



<script src="./js/app.js" type="text/javascript"></script>
<script src="./assets/libs/jquery.js" type="text/javascript"></script>
<!-- <script src="./libs/jquery-ui-1.13.1/jquery-ui.min.js" type="text/javascript"></script> -->
<script src="./addtocart.php" type="text/javascript"></script>
<script type="text/javascript">

    const getall = document.getElementById('all');
    const getcake = document.getElementById('cake');
    const getcoffee = document.getElementById('coffee');

    const getmenucontainer = document.querySelector('.menu-boxs-container');
    const getcakecontainer = document.querySelector('.cake-container');
    const getcoffeecontainer  = document.querySelector('.coffee-container');

    document.addEventListener("DOMContentLoaded", function() {
        var readMoreBtns = document.querySelectorAll(".read-more-btn");

        readMoreBtns.forEach(function(btn) {
            btn.addEventListener("click", function() {
                var hiddenParagraph = this.nextElementSibling;

                if (hiddenParagraph.classList.contains("hidden")) {
                    hiddenParagraph.classList.remove("hidden");
                    this.innerHTML = 'Cancel<i class="fas fa-arrow-right"></i>';
                } else {
                    hiddenParagraph.classList.add("hidden");
                    this.innerHTML = 'Read More <i class="fas fa-arrow-right"></i>';
                }
            });
        });
    });


    getall.addEventListener("click",function(){
        getmenucontainer.classList.add('active');
        getcakecontainer.classList.remove('active');
        getcoffeecontainer.classList.remove('active');
    });

    getcake.addEventListener("click",function(){
        getmenucontainer.classList.remove('active');
        getcakecontainer.classList.add('active');
        getcoffeecontainer.classList.remove('active');
    });
    
    getcoffee.addEventListener('click',function(){
        getmenucontainer.classList.remove('active');
        getcakecontainer.classList.remove('active');
        getcoffeecontainer.classList.add('active');
    })



    var url = `https://www.themealdb.com/api/json/v1/1/search.php?s=cake`;
    // console.log(url);

    fetch(url)
                .then(response=>response.json())
                .then(data=>{
                    // console.log(data);
                    // console.log(typeof data);

                    // console.log(data.meals);

                    foodsettertodom(data.meals);
                }).catch(err=>console.log(err));



            function foodsettertodom(food){
                // console.log(food);

                const ingredients = [];

                for(let x=1; x<=12; x++){
                    // console.log(x);  // 1 to 20
                    // console.log(food[x].idMeal);
                    var getcakestring = JSON.stringify(food[x]);
                    var cakeObject = JSON.parse(getcakestring);

                    // console.log(getcakestring);
                    // console.log(food[x].strMealThumb);
                    var boxes = document.createElement('div');
                    boxes.classList.add('cake-boxes');
                    boxes.innerHTML = `
                        <img src="${cakeObject.strMealThumb}" width="300px" height="200px" />
                        <h1 style="font-size:20px;color:burlywood;">${cakeObject.strMeal}</h1>
                        <p>Type : ${cakeObject.strCategory}</p>
                        <p>${cakeObject.strArea} taste</p>
                    `

                    document.querySelector('.cake-container').appendChild(boxes);


                }

        }

            // console.log(ingredients);

            var coffeeobjs = [
                {name:"Espresso",text:"Lorem Ipsum is simply dummy text",price:"4000MMK",url:"./assets/img/banner/bannercoffee1.jpg"},
                {name:"Americano",text:"Lorem Ipsum is simply dummy text",price:"3000MMK",url:"./assets/img/banner/bannercoffee1.jpg"},
                {name:"Cappuccino",text:"Lorem Ipsum is simply dummy text",price:"5000MMK",url:"./assets/img/banner/bannercoffee1.jpg"},
                {name:"Latte",text:"Lorem Ipsum is simply dummy text",price:"4500MMK",url:"./assets/img/banner/bannercoffee1.jpg"},
                {name:"Mocha",text:"Lorem Ipsum is simply dummy text",price:"3000MMK",url:"./assets/img/banner/bannercoffee1.jpg"},
                {name:"Ristretto",text:"Lorem Ipsum is simply dummy text",price:"3500MMK",url:"./assets/img/banner/bannercoffee1.jpg"},
                {name:"Affogato",text:"Lorem Ipsum is simply dummy text",price:"5000MMK",url:"./assets/img/banner/bannercoffee1.jpg"},
                {name:"Macchiato",text:"Lorem Ipsum is simply dummy text",price:"3500",url:"./assets/img/banner/bannercoffee1.jpg"},
                {name:"BlackCoffee",text:"Lorem Ipsum is simply dummy text",price:"4000MMK",url:"./assets/img/banner/bannercoffee1.jpg"},
            ];

            // console.log(coffeeobjs);
            coffeeobjs.map(function(coffeeobj){
                // console.log(coffeeobj);

                var creatediv = document.createElement('div');
                creatediv.classList.add('coffee-boxs');

                creatediv.innerHTML = `
                    <img src="${coffeeobj.url}" />
                    <div class="coffee-content">
                        <h3>${coffeeobj.name}</h3>
                        <p>${coffeeobj.text}</p>
                        <small>Price : <span class="price">${coffeeobj.price}</span></small>
                    </div>
                `;

                getcoffeecontainer.appendChild(creatediv);

            });



         var overlay = document.getElementById('overlay');
          var getallmenuboxes = document.querySelectorAll('.menu-boxs');
          getallmenuboxes.forEach(function(singlemenubox){
             singlemenubox.addEventListener('click',function(e){
                const style = window.getComputedStyle(e.target);
                console.log(e.target);
                if (style.opacity === '1') {
                    
                } else {
                    console.log('Opacity is not 1');
                    overlay.innerHTML = `

            <div class="menu-boxs">
                <img src="./assets/img/menu/set6.jpeg" alt="" />
                <div class="menu-contents">
                    <h3>Name : Set6</h3>
                    <p>Price : <span>9500</span>MMK</p>
                    <p>Coffee Sweety Hub</p>

                    <p class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></p>
                    <p class="hidden">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                </div>
            </div>`;
                }
            });
          })
          

</script>

</body>
</html>
