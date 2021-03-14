<style type="text/css">
* {
  margin: 0;
  border: 0;
  padding: 0;
}

/****COLORS*******************

Dark Grey:            #333333
Medium Grey:          #5a5a5a
Light Grey:           #f2f2f2
Blue:                 #498FDC
Medium Light Blue:    #79b7f4
Light Blue:           #DCECF5

*****************************/

html, body, input {
  font-family: "Montserrat", sans-serif;
}

.gradient-bar {
  width: 100%;
  height: 10px;
  background: linear-gradient(89.99deg, #498FDC 0%, #DCECF5 100%);
  z-index: 1000;
}

header {
  position: fixed;
  top: 0px;
  width: 100%;
  height: 70px;
  background-color: #333333;
  z-index: 999;
}

nav .logo {
  padding: 9px 40% 0;
  width: 75px;
  z-index: 1000000
}

.nav-contain {
  display: none;
}

.social-link {
  width: 35px;
  position: absolute;
  top: 21px;
  right: 5%;
  z-index: 1000000;
}

.social-link:hover {
  opacity: 75%;
  transition: 1s;
}



/***** Mobile Menu: https://codepen.io/g13nn/pen/eHGEF ************************/
.hamburger {
  background: none;
  position: absolute;
  top: 0;
  left: 0;
  line-height: 49px;
  padding: 13px 30px 8px;
  color: #f2f2f2;
  border: 0;
  font-size: 2.5em;
  cursor: pointer;
  outline: none;
  z-index: 10000000000000;
}

.cross {
  background: none;
  position: absolute;
  height: 70px;
  top: 0px;
  left: 0;
  padding: 11px 32px 10px;
  color: #f2f2f2;
  border: 0;
  font-size: 5em;
  line-height: 88px;
  font-weight: bold;
  cursor: pointer;
  outline: none;
  z-index: 10000000000000;
}

.menu {
  z-index: 1000000;
  font-size: 2em;
  width: 100%;
  height: 95vh;
  background: #333333;
  position: absolute;
  text-align: center;
  font-size: 2em;
  text-transform: uppercase;
}

.menu ul {
  margin: 45% 10%;
  padding: 0;
  list-style-type: none;
  list-style-image: none;
}

.menu li {
  display: block;
  padding:15px 0 15px 0;
  border-bottom: #498FDC 3px solid;
}

.menu li:nth-child(4){
  border-bottom:#dddddd 0px solid;
}

.menu ul li a {
  text-decoration:none;
  margin: 0px;
  color:#f2f2f2;
}

.menu a {
  text-decoration: none;
  color:#666;
}

.menu a:hover {
  text-decoration:none;
  color:#498FDC;
}

/***** Mobile Menu: https://codepen.io/g13nn/pen/eHGEF ************************/

.container-page {
  max-width: 425px;
  margin: 10% auto;
  padding: 0px 10%;
}

footer {
  background: #333;
  padding-bottom: 50px;
}

footer a {
  text-decoration: none;
  color: inherit;
}

.cta-bar {
  background: #dfe4e6;
  padding: 25px 5%;
  text-align: center;
  font-size: .8em;
  color: #498fdc;
  text-transform: uppercase;
  width: 90%;
  transition: .5s ease;
}

.cta-bar:hover {
  background: #DCECF5;
  transition: .5s ease;
}

.cta-bar h3,
.cta-bar p {
  display: inline;
}

.footer-container {
  max-width: 325px;
  width: 100%;
  margin: 25px auto 0;
}

footer img {
    width: 30%;
    margin: 10% 35% 5%;
}

.footer-container p {
  color: #ffffff;
  font-size: .6em;
  text-align: center;
  background: #498fdc;
  margin: 0 13%;
  padding: 10px 2%;
  width: 70%;
}

footer ul li {
  display: inline-block;
  list-style: none;
  border-right: 2px solid #498fdc;
}

footer ul li:nth-child(3) {
  border-right: none;
}

footer ul li a {
  color: #ffffff;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 500;
  padding: 0 15px;
  transition: 1s;
  font-size: .8em;
}

.footer-nav {
  width: 100%;
  margin: 45px auto;
  text-align: center;
}

footer ul li a:hover {
  color: #498FDC;
  transition: 1s;
}

@media (min-width: 480px) {
  .menu ul {
    margin: 35% 20%;
  }

  nav .logo {
    padding: 9px 44% 0;
  }
}

@media (min-width: 695px) {
  .hamburger, .cross, .menu {
    display: none;
  }

  .nav-contain {
    display: inline;
    margin: 8px 25%;
  }

  nav .logo {
    padding: 9px 5% 0;
    z-index: 10000000
  }

  nav ul {
    display: inline;
    list-style: none;
    position: absolute;
    top: 22px;
    margin: 0 5%;
    z-index: 10000
  }

  .nav-contain {
    display: flex;
    justify-content: center;
    width: 50%;
    z-index: 10000
  }
  nav li {
    display: flex;
    text-transform: uppercase;
    color: #f2f2f2;
    margin: 0 15px;
  }

  nav li:hover {
    color: #498FDC;
    transition: .3s ease;
  }

  nav a {
    text-decoration: none;
    color: inherit;
  }
}

@media (min-width: 825px) {
  .container-page {
    max-width: 800px;
    display: flex;
    width: 80%;
    margin: 10% auto;
    padding: 0;
  }
}

@media (min-width: 1200px) {
  nav .logo {
    margin-left: 10%;
  }

  nav li {
    margin: 0 35px;
  }

  .social-link {
    right: 15%;
  }

  .container-page {
    max-width: 1050px;
    margin: 5% auto;
  }
}


</style>

<header>
  <div class="gradient-bar"></div>
  <nav class="page-container">
    <a href="index.html"><img class="logo" src="images/stpa-logo.png" alt="South TPA"></a>
    <ul class="nav-contain">
      <li><a href="food.html">Food</a></li>
      <li><a href="drink.html">Drink</a></li>
      <li><a href="explore.html">Explore</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
    <a href="https://instagram.com/southtpa" target="_blank"><img class="social-link" src="images/ig-white.png" alt="Follow Us"></a>
  </nav>

  <button class="hamburger">&#9776;</button>
  <button class="cross">&#735;</button>

  <div class="menu">
    <ul>
      <li><a href="food.html">Food</a></li>
      <li><a href="drink.html">Drink</a></li>
      <li><a href="explore.html">Explore</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </div>
</header>



<div class="container-page">
  <h1>Sorry, something isn't quite right here...</h1>
  <p>Please try again later.</p>

</div>



<footer>
  <a href="https://instagram.com/southtpa" target="_blank">
    <div class="cta-bar">
      <h3>Keep up with South Tampa!</h3>
      <p>Follow us on Instagram.</p>
    </div>
  </a>

  <section class="footer-container">
    <a href="index.html"><img class="logo" src="images/stpa-logo.png" alt="South TPA"></a>
    <p>© SOUTHTPA. ALL RIGHTS RESERVED.</p>
  </section>

  <section class="footer-nav">
    <ul>
      <li><a href="accessibility.html">Accessibility</a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </section>
</footer>

<!-- Scripts -->
<!-- Mobile Menu -->
<script src="js/menu-mobile.js"></script>
