<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="assets/img/italilogo.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Book Reservation Now!</em></button>
        </div>
    </div>
</header>



<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>Itali Restaurant</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="assets/img/picture7.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="assets/img/picture6.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="assets/img/menu6.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Mission & Story</h4>
	<p><br>

Welcome to Itali Restaurant, where the heart of Italy meets the soul of Dublin. Nestled in the vibrant streets of this historic city, our mission is to bring the authentic flavors of Italy right to your table. Born from a deep passion for Italian culinary traditions, Itali is more than just a dining establishment; it's a journey through Italy's rich gastronomic landscape.

As a newly opened gem in Dublin's culinary scene, we pride ourselves on using the finest ingredients, handpicked directly from local producers and Italian suppliers. Our dedicated team, led by experienced chefs from Italy, crafts each dish with love, ensuring that every bite is a true Italian experience.

At Itali, we believe in the power of food to bring people together. Our mission is to create a space where families, friends, and food lovers can gather, share stories, and create memories, all while savoring the timeless tastes of Italy.

Join us in celebrating the union of Italian authenticity and Dublin's vibrant spirit. Benvenuti a Itali.<br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>


<!-- Menu Section -->
<div id="menu-section">
    <div class="container">
        <h3 class="text-center">Menu</h3>

        <!-- Starter Section -->
        <div class="menu-category">
    <h4 class="category-title">Starters</h4>
    <!-- First Menu Item -->
    <div class="menu-item">
        <img src="assets/img/menu2.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> <!-- Wrap the text content in a container -->
            <h5>Calamari</h5>
            <p>Deep fried squid rings served with sweet chilli dip.</p>
            <span>€8.99</span>
        </div>
    </div>

    <div class="menu-item">
        <img src="assets/img/menu3.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Dough Balls</h5>
            <p>Oven baked dough balls served with olive oil chive dip.</p>
            <span>€7.99</span>
        </div>
    </div>
    
    <div class="menu-item">
        <img src="assets/img/menu4.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Chicken Wings</h5>
            <p>Free-range chicken wings marinated in fresh Italian herbs and spices with garlic dip.</p>
            <span>€9.99</span>
        </div>
    </div>

    <div class="menu-item">
        <img src="assets/img/menu5.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Caesar Salad</h5>
            <p>Crispy grean leaves, panchetta & croutons tossed in our homemade dressing topped with fresh parmesan.</p>
            <span>€7.99</span>
        </div>

    </div>
    <div class="menu-item">
        <img src="assets/img/menu6.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Antipasto Alla Italiano</h5>
            <p>Selection of cured meats, Italian cheese, sun-dried tomatoes with pickled home-grown vegetables.</p>
            <span>€10.99</span>
        </div>
    </div>

        <!-- Main Section -->
        <div class="menu-category">
    <h4 class="category-title">Main Course</h4>
    <!-- First Menu Item -->
    <div class="menu-item">
        <img src="assets/img/menu7.jpg" alt="Main Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Margherita Pizza</h5>
            <p>Creamy pasta with bacon and parmesan.</p>
            <span>€12.99</span>
        </div>
    </div>

    <div class="menu-item">
        <img src="assets/img/menu8.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Diavola Pizza</h5>
            <p>Jalapeno peppers, chorizo and fresh Parmesan.</p>
            <span>€13.99</span>
        </div>
    </div>

    <div class="menu-item">
        <img src="assets/img/menu9.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Hamburger di Manzo Italiano</h5>
            <p>Homemade beef burger with mozzarella, lettuce, red onion & sun ripened vine tomato on brioche bun.</p>
            <span>€13.99</span>
        </div>
    </div>

    <div class="menu-item">
        <img src="assets/img/menu1.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Pasta Carbonara</h5>
            <p>Creamy pasta with bacon and parmesan.</p>
            <span>€14.99</span>
        </div>
    </div>

    <div class="menu-item">
        <img src="assets/img/picture3.png" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Raviolli Alla Liguria</h5>
            <p>Fresh hand-made Raviolli ricotta & spinach.</p>
            <span>€12.99</span>
        </div>
    </div>

    <div class="menu-item">
        <img src="assets/img/menu12.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Lasagne Al Forno</h5>
            <p>Pasta sheets and bechamel between homemade bolognese ragu, topped with fresh mozzarella.</p>
            <span>€13.99</span>
        </div>

    </div>
    <div class="menu-item">
        <img src="assets/img/menu13.jpg" alt="Starter Dish" class="menu-img">
        <div class="menu-text"> 
            <h5>Linguine Di Pesce</h5>
            <p>Linguine, fresh prawns, shellfish, in a white wine biscque.</p>
            <span>€15.99</span>
        </div>
    </div>


        <!-- Dessert Section -->
        <div class="menu-category">
    <h4 class="category-title">Desserts</h4>
    <!-- First Menu Item -->
    <div class="menu-item">
        <img src="assets/img/menu14.jpg" alt="Desserts" class="menu-img">
        <div class="menu-text"> 
            <h5>Tiramisu</h5>
            <p>A traditional biscuit in coffee liqueur with mascarpone cream.</p>
            <span>€5.99</span>
        </div>
    </div>

    <div class="menu-item">
        <img src="assets/img/menu15.jpg" alt="Desserts" class="menu-img">
        <div class="menu-text"> 
            <h5>Panna Cotta</h5>
            <p>Homemade, rich flavoured, slicky smooth traditional Italian chilled pudding.</p>
            <span>€4.99</span>
        </div>
    </div>

    <div class="menu-item">
        <img src="assets/img/menu16.jpg" alt="Desserts" class="menu-img">
        <div class="menu-text"> 
            <h5>Gelato Misto</h5>
            <p>Three scoops of assorted ice cream with choice of strawberry vanilla or chocolate</p>
            <span>€6.99</span>
        </div>
    </div>




<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Table Reservation<br><br></h3>
    <img  src="assets/img/picture2.png" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Click Here To Book Now!</button>
        
</div><br><br>

<div class="header2">

</div>

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Our Location</h3><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4764.006457308543!2d-6.2645036413085595!3d53.343198400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670fbfb1accb11%3A0xce5ae5d496204795!2sGrafton%20Street!5e0!3m2!1sen!2sie!4v1697761167316!5m2!1sen!2sie" style= "width:100%;  height:250px; border:0;" allowfullscreen></iframe>
        <div class="row staff">
            <div class="col">
            <h4><strong>Our Opening Hours</strong></h4>
                       
                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Select Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Opening Hours</button>
                        </div>
                    </form>
                    
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }
         
   //close connection
   mysqli_close($conn);
}
?>
                        
                </div><br>
            </div>

            <div class="col">
            <h4 class="text-right"><strong>Visit Our Restaurant</strong></h4>
            <p class="text-right">Itali Restaurant<br><i class="fa fa-map-marker"></i>&nbsp; 17 Grafton Street, Dublin 2, <br>Ireland.<br><br>Email: info@itali.com<br>Telephone: +353 (01) 123 4567</p>
            </div>

	</div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>