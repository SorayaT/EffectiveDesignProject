<header>
<div class="Menu">
    <ul id="menu">
     <li class="top">    <a href="" class="openLinks">
         <img id="my-img" class="openmenu" src="img/menu2.bmp"/>
         </a>
      <ul id="dropdown">
        <li id="submenu"><a href="index.html">Home Page</a></li>
        <li id="submenu"><a href="news.html">Gaming NEWS</a></li>
        <li id="submenu"><a href="#">Genre Categories</a></li>
        <li id="submenu"><a href="#">Age Groups</a></li>
        <li id="submenu"><a href="#">Top Rated</a></li>
        <li id="submenu"><a href="#">Featured Games</a></li>
        <li id="submenu"><a href="#">NEW Additions</a></li>
        <li id="submenu"><a href="#">About US</a></li>
        <li id="submenu"><a href="#">Contact US</a></li>
      </ul>

      </li>


    


         <li class="top2"><a href="" class="openLinks">
         <img id="my-img2" src="img/profile.png" class="openmenu"/>
         </a>
         <ul id="dropdown2">
        <li id="submenu"><a href="login.html">Login</a></li>
        <li id="submenu"><a href="registerForm.html">Register</a></li>
        <li id="submenu"><a href="profile.html">View Profile</a></li>
        <li id="submenu"><a href="#">Developer's Home</a></li>
        <li id="submenu"><a href="#">Log out</a></li>
      </ul>

         </li>
       


         <li class="top3"><a href="" class="openLinks">
         <img id="my-img3" src="img/Shopping.jpg" class="openmenu">
         </a>
         <ul id="dropdown3">
        <li id="submenu"><a href="ShoppingCart.html">Shopping Cart</a></li>
        <li id="submenu"><a href="#">Check out</a></li>
        <li id="submenu"><a href="#">Submit Donation</a></li>
      </ul>

         </li>


    </ul>
    </div>

    <script>

$("#my-img").hover(function(){
    $(this).attr("src", function(index, attr){
        return attr.replace(".bmp", "-hover.bmp");
    });
    }, function(){
    $(this).attr("src", function(index, attr){
        return attr.replace("-hover.bmp", ".bmp");
    });
});

$("#my-img2").hover(function(){
    $(this).attr("src", function(index, attr){
        return attr.replace(".png", "-hover.png");
    });
    }, function(){
    $(this).attr("src", function(index, attr){
        return attr.replace("-hover.png", ".png");
    });
});

$("#my-img3").hover(function(){
    $(this).attr("src", function(index, attr){
        return attr.replace(".jpg", "-hover.jpg");
    });
    }, function(){
    $(this).attr("src", function(index, attr){
        return attr.replace("-hover.jpg", ".jpg");
    });
});

// $('#dropdown').css('visibility','visible').hide().fadeIn("slow");

</script>

</header>

<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
			<img src="img/untitled4.png" id="logo">
		</div>
		<div class="back">
			<img src="img/untitled.png" id="logo">
		</div>
	</div>
</div>
