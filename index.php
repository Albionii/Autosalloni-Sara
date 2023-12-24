<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoSalloni Sara</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.html"><img src="fotot/Sara-logo.png" alt="logo" class="logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="index.html">HOME</a></li>
                <li><a href="productList.php">PRODUCTS</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li>
                  <div class = "search-div">
                    <input type="text" class="search_box" placeholder="Search here">
                    <img src="fotot/search_logo.png" alt="serach box logo" class="search-logo">
                  </div>
                </li>
                <li>
                  <a href="log-in.html">
                    <img src="fotot/user-logo.png" alt="user" class="user-logo">
                  </a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="slider-div" onmouseover="startHover()" onmouseout="removeHover()">

      <div class="car-and-text">
        <div>
          <p id="p-title1">DECADES OF EXPERTISE IN AUTOMOTIVE EXCELLENCE</p>
          <p>
            Welcome to <i>AutoSalon Sara</i>, where automotive excellence meets decades of unparalleled expertise.
            With over 20 years of dedicated service, we have been at the forefront of the automotive industry,
            offering a level of knowledge and skill that sets us apart.
          </p>
          <br>
          <button>About Us</button>
        </div>
        <img src="fotot/car-slider.jpg" alt="car" id="car-slider">
        <div>
          <p id = "p-title2">A PROMISE OF TRUST AND COMFORT</p>
          <p>At <i>Sara</i>, trust and comfort are not just promises, they're the foundation of our relationship with every customer.
             We understand that buying a car is not just a transaction; it's an experience. That's why we prioritize transparency, reliability,
              and your peace of mind in every step of your journey with us.
          </p>
          <br>
          <button>Our Products</button>
        </div>
      </div>
      <div class="div-dots">
        <span class = "dot" id = "dot1" onclick="leftCar()"></span>
        <span class = "dot" id = "dot2" onclick="rightCar()"></span>
      </div>
    </div>


    <div class="introduction">
      <div class="info">

        <div class="serviceDiv">

          <div class="spanDiv">
            <span>OUR SERVICES</span>
          </div>
          <div class="services">
            <!-- <p>OUR SERVICES</p> -->
            <div class="ser">
              <img src="fotot/services/3.png" alt="" class="servImg">
              <p>Beyond Transportation: Experience the Journey with Our Premium Rentals</p>
            </div>
            <div class="ser">
              <img src="fotot/services/2.png" alt="" class="servImg">
              <p>Unleash Power, Elegance, and Precision: Your Journey Starts with a Brand New Chapter</p>
            </div>
            <div class="ser">
              <img src="fotot/services/1.png" alt="" class="servImg">
              <p>A Decade of Confidence: Our 10-Year Guarantee for Enduring Quality</p>
            </div>
          </div>
        </div>
        <div class="map">
          <p>FIND US</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2945.2537392624895!2d21.154287375695997!3d42.42233363116564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13547f6d26de7507%3A0xb57f0fddeda9ad59!2sAutosallon%20%22Sara%22!5e0!3m2!1sen!2s!4v1700997693167!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>


        <div class="trend">
          <div class="trendSpan">
            <span>OUR TOP 3 MOST VIEWED CARS</span>
          </div>
          <div class="carDiv">
            <div class="car">
              <p>Mercedes Benz E220 2019</p>
              <img src="MainPagePhotos/Photo5.jpg" alt="Car photo">
              <p>28,900€</p>
            </div>
            <div class="car">
              <p>BMW 535d 2014</p>
              <img src="MainPagePhotos/Photo6.jpg" alt="Car photo">
              <p>18,900€</p>
            </div>
            <div class="car">
              <p>Audi A3 2.0d 2014</p>
              <img src="MainPagePhotos/Photo9.jpg" alt="Car photo">
              <p>14,300€</p>
            </div>
          </div>
        </div>

        <footer>
          <div class="upDiv">
            <div class="footerDiv">
              <a class="titleFooter">About SARA</a>
              <p>Our company is on of the best if not the best because we made it. Noice</p>
            </div>
            <div class="footerDiv">
              <a class="titleFooter">Contact Us</a>
              <div class="contact">
                <div class="left">
                    <img src="fotot/contact/Lokacioni.webp" alt="Lokacioni-Logo">
                    <img src="fotot/contact/Tel.png" alt="Tel logo">
                    <img src="fotot/contact/Email.png" alt="Email logo">
                </div>
                <div class="right">
                  <p>Magjistrale, Ferizaj 70000</p>
                  <p>+38344771777</p>
                  <p>autosara@gmail.com</p>
                </div>
                
              </div>
            </div>
            <div class="footerDiv">
              <a class="titleFooter">Follow Us</a>
              <div class="social">
                <a href="#"><img src="fotot/social/facebook.png" alt="facebook"></a>
                <a href="#"><img src="fotot/social/instagram.png" alt="instagram"></a>
                <a href="#"><img src="fotot/social/whatsup.png" alt="whatsup"></a>
              </div>
            </div>
          </div>

          <div class="downDiv">
            <p>Copyright © 2023 | All Rights Reserved</p>
            <p>Designed by Abdusamed Beqiri and Albion Qerreti</p>
          </div>
        </footer>
      </div>
      
    </div>

    

    <script>
      let hoverTimer;
      let isLeftOn = true;
      
      function startHover(){
        if (isLeftOn){
          hoverTimer = setTimeout(rightCar, 10000);
        }
        else {
          hoverTimer = setTimeout(leftCar, 10000);
        }
      }

      function removeHover() {
        clearTimeout(hoverTimer);
      }

      function rightCar(){
        document.getElementById("dot1").style.backgroundColor = "black";
        document.getElementById("dot2").style.backgroundColor = "white";
        let slides = document.getElementsByClassName('car-and-text');
        let slider = slides[0];
        slider.style.marginLeft = "-100%";
        isLeftOn = false;
      }

      function leftCar(){
        document.getElementById("dot2").style.backgroundColor = "black";
        document.getElementById("dot1").style.backgroundColor = "white";
        let slides = document.getElementsByClassName('car-and-text');
        let slider = slides[0];
        slider.style.marginLeft = "0%";
        isLeftOn = true;
      }

      let inicialNavSize = document.getElementsByTagName('header')[0].style.height;
      window.addEventListener('scroll', () => {
        if (pageYOffset > 600) {
          document.getElementsByTagName('header')[0].style.height = '30px';        
        }
        else {
          document.getElementsByTagName('header')[0].style.height = inicialNavSize;
          document.getElementsByTagName('header')[0].style.backgroundColor = 'black'  
        }
      })


    </script>

    
    
</body>
</html>