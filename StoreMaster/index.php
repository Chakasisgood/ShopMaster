<?php
# Initialize the session
// session_start();


// # If user is not logged in then redirect him to login page
// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
//   echo "<script>" . "window.location.href='./login.php';" . "</script>";
//   exit;
// }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>The ShopeeShoes | Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="css/styles.css" />
       
    </head>
    <body>
      
<!-- Navigation Bar -->
  <header class="main-header">
  <nav>
    <h1 class="band-name band-name-large">ShopeeShoes</h1> 
		<ul class="navigation">
            <div class="dropdown" data-dropdown>
                 <a class="nav-link" data-dropdown-button id="shop">SHOP</a>
                <div class="dropdown-menu information-grid">
                  <div>
                    <div class="dropdown-links">
                      <a href="#nike" class="link">Nike</a>
                      <a href="#adidas" class="link">Adidas</a>
                      <a href="#converse" class="link">Converse</a>
                      <a href="#puma" class="link">Puma</a>
                      <a href="#vans" class="link">Vans</a>
                      <a href="#jordan" class="link">Jordan</a>
                      <a href="#new balance" class="link">New Balance</a>
                      <a href="#crocs" class="link">Crocs</a>
                      <a href="#skechers" class="link">Skechers</a>
                    </div>
                  </div>
                </div>
              </div>
			<li><a href="#about" class="nav-link">ABOUT</a></li>
			<li><a href="#faq" class="nav-link">FAQ</a></li>
			<li><a href="#contact" class="nav-link">CONTACT</a></li>				
            <div class="icons">
                <!-- <input type="text" class="search-input" placeholder="Tap to Search"> -->
                <a href="#"><i class='bx bx-search'></i></a>

                <div class="dropdown" data-dropdown>
                    <img src="image/download1.jpg" id="profile" class="nav-link" data-dropdown-button>
                        <div class="dropdown-logout information-grid">
                        <div>
                            <div class="dropdown-links">
                            <button type="button" class="logout" id="logout-btn" onclick="logout()">Logout</button>
                            </div>
                        </div>
                        </div>
                </div>   
                <a href="#cart"><i class='bx bx-shopping-bag'></i></a>
        </ul>
            <button class="burger-menu" id="burger-menu">
            <ion-icon class="bars" name="menu-outline"></ion-icon>
    </button>
	</nav>
	</header>


    <!-- <button type="button" class="btn btn-primary" id='confirm' onclick="logout()">Continue</button>

    </div>
	  	<div class="col-md-2 float-right text-white" href="ajax.php?action=logout">
	  		<a id="logout-btn" class="logout"> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
   -->









<!-- Nike Brand -->

        <section class="container content-section" id="nike">
            <h2 class="section-header">NIKE</h2>
            <div class="shop-items">
              <div class="all-item">
                <div class="shop-item">
                    <span class="shop-item-title">Dunk High Retro</span>
                    <img class="shop-item-image" src="Image/Nike/Nike1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Court Vision Low</span>
                    <img class="shop-item-image" src="Image/Nike/Nike2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                  </div>
                <div class="shop-item">
                    <span class="shop-item-title">Vomero 16</span>
                    <img class="shop-item-image" src="Image/Nike/Nike3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Air Force 1</span>
                    <img class="shop-item-image" src="Image/Nike/Nike4.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
              </div>
            </div>
        </section>

<!-- Adidas Brand -->
        <section class="container content-section" id="adidas">
            <h2 class="section-header">ADIDAS</h2>
            <div class="shop-items">
              <div class="all-item">
                <div class="shop-item">
                    <span class="shop-item-title">Forum Mid</span>
                    <img class="shop-item-image" src="Image/Adidas/Adidas1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">NMD R1</span>
                    <img class="shop-item-image" src="Image/Adidas/Adidas2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Superstar Shoes</span>
                    <img class="shop-item-image" src="Image/Adidas/Adidas3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Daily 3.0</span>
                    <img class="shop-item-image" src="Image/Adidas/Adidas4.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
              </div>
            </div>
        </section>
        
<!-- Converse Brand -->  
        <section class="container content-section" id="converse">
           <h2 class="section-header">CONVERSE</h2>
           <div class="shop-items">
             <div class="all-item">
               <div class="shop-item">
                   <span class="shop-item-title">Chuck Taylor</span>
                   <img class="shop-item-image" src="Image/Converse/Converse1.jpg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$19.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Chuck 70</span>
                   <img class="shop-item-image" src="Image/Converse/Converse2.jpg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$6.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Boots Cold Wall</span>
                   <img class="shop-item-image" src="Image/Converse/Converse3.jpg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$6.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
             </div>
           </div>
       </section>
        
<!-- Puma Brand -->
        <section class="container content-section" id="puma">
            <h2 class="section-header">PUMA</h2>
            <div class="shop-items">
              <div class="all-item">
                <div class="shop-item">
                    <span class="shop-item-title">Dunk High Retro</span>
                    <img class="shop-item-image" src="Image/Nike/Nike1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Court Vision Low</span>
                    <img class="shop-item-image" src="Image/Nike/Nike2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                  </div>
                <div class="shop-item">
                    <span class="shop-item-title">Vomero 16</span>
                    <img class="shop-item-image" src="Image/Nike/Nike3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Air Force 1</span>
                    <img class="shop-item-image" src="Image/Nike/Nike4.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
              </div>
            </div>
        </section>

<!-- Vans Brand -->
        <section class="container content-section" id="vans">
            <h2 class="section-header">VANS</h2>
            <div class="shop-items">
              <div class="all-item">
                <div class="shop-item">
                    <span class="shop-item-title">Forum Mid</span>
                    <img class="shop-item-image" src="Image/Adidas/Adidas1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">NMD R1</span>
                    <img class="shop-item-image" src="Image/Adidas/Adidas2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Superstar Shoes</span>
                    <img class="shop-item-image" src="Image/Adidas/Adidas3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Daily 3.0</span>
                    <img class="shop-item-image" src="Image/Adidas/Adidas4.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
              </div>
            </div>
        </section>
        
<!-- Jordan Brand -->  
        <section class="container content-section" id="jordan">
           <h2 class="section-header">JORDAN</h2>
           <div class="shop-items">
             <div class="all-item">
               <div class="shop-item">
                   <span class="shop-item-title">Chuck Taylor</span>
                   <img class="shop-item-image" src="Image/Converse/Converse1.jpg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$19.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Chuck 70</span>
                   <img class="shop-item-image" src="Image/Converse/Converse2.jpg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$6.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Boots Cold Wall</span>
                   <img class="shop-item-image" src="Image/Converse/Converse3.jpg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$6.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
             </div>
           </div>
       </section>

<!-- New Balnce Brand -->
        <section class="container content-section" id="new balance">
            <h2 class="section-header">NEW BALANCE</h2>
            <div class="shop-items">
              <div class="all-item">
                <div class="shop-item">
                    <span class="shop-item-title">Dunk High Retro</span>
                    <img class="shop-item-image" src="Image/Nike/Nike1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Court Vision Low</span>
                    <img class="shop-item-image" src="Image/Nike/Nike2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                  </div>
                <div class="shop-item">
                    <span class="shop-item-title">Vomero 16</span>
                    <img class="shop-item-image" src="Image/Nike/Nike3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Air Force 1</span>
                    <img class="shop-item-image" src="Image/Nike/Nike4.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
              </div>
            </div>
        </section>

<!-- Crocs Brand -->
        <section class="container content-section" id="crocs">
           <h2 class="section-header">CROCS</h2>
           <div class="shop-items">
             <div class="all-item">
               <div class="shop-item">
                   <span class="shop-item-title">Forum Mid</span>
                   <img class="shop-item-image" src="Image/Adidas/Adidas1.jpeg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$12.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">NMD R1</span>
                   <img class="shop-item-image" src="Image/Adidas/Adidas2.jpeg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$14.99</span>
                       <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Superstar Shoes</span>
                   <img class="shop-item-image" src="Image/Adidas/Adidas3.jpeg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$9.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Daily 3.0</span>
                   <img class="shop-item-image" src="Image/Adidas/Adidas4.jpeg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$19.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
             </div>
           </div>
       </section>
        
<!-- Skechers Brand -->  
        <section class="container content-section" id="skechers">
           <h2 class="section-header">SKECHERS</h2>
           <div class="shop-items">
             <div class="all-item">
               <div class="shop-item">
                   <span class="shop-item-title">Chuck Taylor</span>
                   <img class="shop-item-image" src="Image/Converse/Converse1.jpg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$19.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Chuck 70</span>
                   <img class="shop-item-image" src="Image/Converse/Converse2.jpg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$6.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Boots Cold Wall</span>
                   <img class="shop-item-image" src="Image/Converse/Converse3.jpg">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$6.99</span>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
             </div>
           </div>
       </section>  
  
<!-- Cart -->
        <section class="container content-section" id="cart">
           <h2 class="section-header">CART</h2>
           <div class="cart-row">
               <span class="cart-item cart-header cart-column">ITEM</span>
               <span class="cart-price cart-header cart-column">PRICE</span>
               <span class="cart-quantity cart-header cart-column">QUANTITY</span>
           </div>
           <div class="cart-items">
           </div>
           <div class="cart-total">
               <strong class="cart-total-title">Total</strong>
               <span class="cart-total-price">$0</span>
           </div>
           <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
       </section>  
  
  
<!-- About-->

<div class="about" id="about">
    <div class="about_main">
        
        <div class="image">
            <img src="logo/Logo.jpeg">
        </div>
        <div class="about-text-cont">

            <div class="about_text">
                <h1><span>About</span>Us</h1>
                <h3>Why Choose Us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem magnam eveniet est natus odit harum sapiente porro distinctio iure commodi.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nihil iusto qui voluptatem officiis magnam, error suscipit sequi quos harum?</p>
            </div>
            <a href="#" class="about_btn">Order Now</a>
        </div>
    </div>

   

</div>
       
<!--Faq--> 
<section class="Faq-Section" id="faq">
    <div class="grid-container">
        <div class="grid-item1"><h1>FREQUENTLY ASKED QUESTION</h1></div>
        <div class="grid-item2">
            <p>Got a question? We're here to answer! If you don't see your question here, frop us in a line on our
             <a href="#contact">Contact Page</a> </p>
        </div>
        <div class="grid-item3">
            <h4 class="title-1">CAN I RETURN AN ITEM?</h4> 
            ipsum dolor sit amet consectetur 
            adipisicing elit. Facilis modi commodi ipsum hic libero, 
            quidem provident perferendis! Impedit, reiciendis minima, 
            adipisci explicabo consequatur esse 
            laborum optio saepe, recusandae aut debitis!</div>  
        <div class="grid-item4">
            <h4 class="title-2">WHEN I WILL RECEIVE MY ITEM?</h4> 
            ipsum dolor sit, amet consectetur 
            adipisicing elit. Exercitationem aspernatur ab, quia dignissimos 
            quod aliquam iusto unde illum numquam architecto laudantium maiores 
            tenetur sit porro vel delectus quidem commodi. Inventore.</div>
  </section>

<!-- Contact -->

    <section class="Contact-Section" id="contact">
    <form class="Contact-Form">
      <h1 class="Contact-h1"> Contact Form </h1>
      
      <input type="text" name="name" id="name" placeholder="Name" required>
      
      <input type="text" name="email" id="email" placeholder="Email" required>
      
      <textarea name="textbox" id="textbox" cols="35" rows="8" placeholder="Send Us a Message...">
      </textarea>
     <input type="submit" value="Send">
    </form>
    </section>

<!-- Footer -->

    <section class="contact" id="contact">
        <div class="main-contact">
              <div class="contact-content">
                <li><a href="#shop">Shop</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#faq">Faq</a></li>
                <li><a href="#contact">Contact</a></li>
            </div>
    
            <div class="contact-content">
                <li><a href="#">Shipping & Returns</a></li>
                <li><a href="#">Store policy</a></li>
                <li><a href="#">Payment Methods</a></li>
            </div>
    
            <div class="contact-content">
                <li><a href="#">Contact</a></li>
                <li><a href="#">Tel: 123-456-7890</a></li>
            </div>
    
            <div class="contact-content">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Pinterest</a></li>
                
            </div>
        </div>
    
            <div class="action">
                <form>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="submit" name="submit" value="submit" required>
                </form>
            </div>
    </section>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> 
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  
   <script src="js/script.js" async></script>
   <script>

    function logout() {
    var txt = document.getElementById('logout-btn').innerHTML;
    window.location.href= 'login.php';

	}

</script>

        
    </body>
</html>





