<?php
 include('./config.php');
 if(isset($_POST['submit']))
 { 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $date=$_POST['date'];
    $guest=$_POST['guest'];
    $message=$_POST['message'];
    $sql= mysqli_query($con,"INSERT INTO banquet(`name`,`email`,`contact`,`date`,`guest`,`message`)VALUES('$name','$email','$contact','$date','$guest','$message')");
    if(!$con){
    echo"not inserted";
    }
    else {
    echo "submited";
    }
  }
?>
<!DOCTYPE html>
<html>
 <head>
	<title> Detail page</title>



   <link rel="stylesheet" type="text/css" href="banquet.css">
   <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.min.css">
	     	    
	       <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	       <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
         <link rel="icon" type="image/icon" href="C:\Users\Deeksha\Desktop\final project\img\icon.jpg">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  
 </head>
 <body>
  
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F7E7CE">
   <img src=".\img\R-Lette.png" height="40px" width="50px">
 
    <ul class="navbar-nav">

      <li class="nav-item active">
        <a class="navbar-brand" href="banquet.html">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Venues</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Vendors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Photos</a>
      </li>
    </ul>
  
  </nav>
  <div class="container-fluid">
   <div class="row">
    <div class="column">
     <img src=".\img\img19.jpg" height="400px">
     </div>

     <div class="column container-fluid">
      <img src=".\img\party hall\62.jpg" height="200px">
      <img src=".\img\party hall\64.jpg" height="200px">
      </div>
     <div class="column">
       <img src=".\img\party hall\63.jpg" height="400px">
      </div>
     </div>
   </div>

 <div class="container">
   <h3> Uttsav Farm And Banquet, Chattarpur, Delhi</h3>
   <h6>Uttsav Farm and Banquet Farm no 14 Gadaipur bandh road chattarpur New Delhi 110074 </h6>
   <div class="row">
     <p style="background-color: #F0F8FF; width:15%; ">Cocktail Venues</p>
     <p  style="background-color: #F0F8FF; width:15%;">Banquet Halls</p>
     <p  style="background-color: #F0F8FF; width:15%">Wedding Lawns</p>
     <p  style="background-color: #F0F8FF; width: 10%">Party Halls</p>
     <p  style="background-color: #F0F8FF; width: 10%">Party Plots</p>
     <p  style="background-color: #F0F8FF; width: 15%">Marriage Halls</p>
   </div>
  </div>
  <div class="container">
   <h3>About this venue</h3>
    <p>As the name proposes, Uttsav Farm And Banquet, Chattarpur, Delhi, is a vibrant destination to host your royal affair. Embellished with ornate crystal chandeliers, vibrant-hued interiors, plush seating arrangements, their banquet halls comes alive when illuminated with their stylish lighting fixtures. Equipped with all the modern facilities, this perfect event venue in Delhi will treat you and your guests to the best of services. Uttsav Farms And Banquet Hall, Delhi, offers you multiple party areas which include an elegant banquet hall, and a sprawling well-manicured lawn. Located 13 minutes away from Ghitorni Railway Station, this venue is very easy for all to find and reach.</p>

    <h4>Call Uttsav Farm and Banquet</h4>
    <p><i class="fas fa-phone-alt" style="font-size: 25px"></i>  +91-1140146318 </p>
 </div>
  
  <div class="container">

   <form style="background-color: #FFE6E8;width:50% ; padding:7px;">
     <h5 style="text-align: center;">Inquiry</h5>
     <div class="row">
       <div class="col-3">
         <input type="text" class="form-control" placeholder="City">
        </div>
         <div class="col-3">
           <input type="text" class="form-control" placeholder="guests">
         </div>
          <div class="col-3" >
            <input style="background-color: #FF1493;color:white" type="text" class="form-control" placeholder="See Price"><br>
          </div>
   </form>
 </div>

  <h4>Check live availability</h4>
   <p style="color:#F52887">We have live availability for this venue</p>
   
   <input type="Date" id="date of Birth" name="event date">
     <label style="color: #F52887">Event date</label>
     <form style="background-color: #F5FFFA;margin-top:20px; padding: 35px">
       <p>Party Areas & Capacity</p>
       <p style="text-align: right">Availability</p>
       <p style="text-align:right;">Day | Night</p><hr>
       <p>Hall </p>
       <p>Seating:500, Max Capacity:750 </p><hr>
       <p>Lawn</p>
       Seating:1000, Max Capacity:1500<hr>
     </form>

  <form style="background-color: black; width:50%; color: white ;padding:10px" >
    <h4>Get Virtual Tour</h4>
    <h6>Get guided tour of the Venue by our Venue Managers over Video Call at comfort of your home.</h6>
    <div class="row">
     <div class="col-4">
       <input type="date" class="form-control" id="Visit date" placeholder="Visit Date">
     </div>
     <div class="col-4">
       <input type="text" class="form-control" placeholder="Visit Time">
      </div>
       <div class="col-4" >
         <input style="background-color: #FF1493;" type="text" class="form-control" placeholder="Submit"><br>
        </div>
   </div>
 </form><br>
  
  <h2>Rating & Review</h2>
  <h1 style="color: green">4.3/5</h1> 
  <div class="row">
   <div class="col-6" ><h6>Verified User</h6>
    <p>Event Date: 24 Mar 2022</p>
    <p>Service was decent.</p>
 </div>
    <div class="col-6"><h6>Verified User</h6>
       <p>Event Date: 18 Jan 2022</p>
       <p>Excellent Experience</p></div><hr>
      
       <div class="col-6">
        <h6> Verified User</h6>
         <p>Event Date: 28 Dec 2021</p>
         <p>Service was  superb.</p>
        </div>

    <div class="col-6">
     <h6> Verified User</h6>
      <p>Event Date: 27 Aug 2021</p>
      <p>Service was  superb.</p>
     </div>
   </div>
 <div class="container">
   <h3>Food packages</h3>
    <h4> <img src=".\img\non.png" height="20px" width="20px"> Non Vegetarian</h4>
  <div class="row">
   <div class="col-4">
   <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
     <h6>  Food items</h6>
      <h6>Package<br> <del>₹2000/Plate</del></h6>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Welcome Drinks
     <p class="align-items-center">3</p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Soups
     <p class="text-item-center">2</p>
   </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Veg Starter
     <p class="align-items-center">4</p>
   </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Non-Veg Starter
     <p class="text-item-center">2</p>
    </li> <li class="list-group-item d-flex justify-content-between align-items-center">
     Veg Main Courses
      <p class="align-items-center">3</p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Salads
     <p class="text-item-center">5</p>
   </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Non-Veg Main Courses
     <p class="align-items-center">3</p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Raita
      <p class="text-item-center">2</p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Dal
     <p class="align-items-center">1</p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Rice/Biryani
     <p class="text-item-center">2</p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Assorted Breads/Rotis
      <p class="align-items-center">3</p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Desserts
     <p class="text-item-center">4</p>
    </li>
  </ul>
  </div>

  <div class="col-4">
    <h4> <img src=".\img\veg.png" height="30px" width="40px">Vegetarian</h4>
   <ul class="list-group">
     <li class="list-group-item d-flex justify-content-between align-items-center">
       <h6> Food items</h6>
       <h6>Package<br><del>₹1600/Plate<del></h6>
       </li>
     <li class="list-group-item d-flex justify-content-between align-items-center">
       Welcome Drinks
       <p class="text-item-center">1</p>
     </li>
     <li class="list-group-item d-flex justify-content-between align-items-center">
       Soups
        <p class="text-item-center">2</p>
     </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Veg Starter
        <p class="text-item-center">5</p>
     </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
       Veg Main Courses
       <p class="text-item-center">4</p>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Salads
       <p class="text-item-center">8</p>
     </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
       Raita
        <p class="text-item-center">2</p>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
       Dal
       <p class="text-item-center">1</p>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Rice/Biryani
        <p class="text-item-center">2</p>
     </li>
     <li class="list-group-item d-flex justify-content-between align-items-center">
       Assorted Breads/Rotis
       <p class="text-item-center">4</p>
     </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Desserts
       <p class="text-item-center">5</p>
      </li>
   </ul>
 </div>
   
  <h4><b>Venue expert notes</b></h4>
  <p>Located in a lush green, beautiful surrounding, Uttsav Farm And Banquet, Chattarpur, Delhi is a destination wedding property. Though it offers both lawn and banquet hall, the lawn is the USP of this property as it offers immense greenery and beautiful decoration which can accommodate more than half a thousand guests. Located 40 minutes away from the Indira Gandhi International Airport, the commute is very convenient for all. It has a parking facility for more than 300 cars within the premises. It also has a well-maintained hall with fancy chandeliers and Arabian lights. Uttsav Farm And Banquet, Delhi has it all so check it out now!</p>

  <h4><b>Features of venue</b></h4>
  <div class="row">
    <div class="col-4">
      <ul>
        <li>
          Parking area for your convenience
        </li>
        <li>
         In-house caterers and decorators for enhanced services<br><br>
        </li>
      </ul>
    </div>
   <div class="col-4">
     <ul>
       <li>
         Located 13 minutes away from Ghitorni Railway Station<br>
       </li>
       <li>
         Serves both veg and non-veg food
        </li>
      </ul>
    </div>
  </div>

  <h4>Venue policies</h4>
  <div class="row">
   <div class="col-4">
     <h6>Timings & Slots (Venue close at 12:30 AM)</h6><br><br>
     <h6>Morning</h6>
     <p style="color: #C0C0C0">9:00 AM - 12:30 PM</p>
     <h6>Evening</h6>
     <p style="color: #C0C0C0">7:00 PM - 12:30 AM</p><br><br>
     <h6>Taxes</h6>
     <ul style="color: #C0C0C0">
       <li>Taxes F&B : 18.00 %</li>
      </ul>
     <h6>Lodging</h6>
     <ul style="color: #C0C0C0">
       <li>No rooms available</li>
      </ul><br><br><br><br>
     <h6>Food</h6>
     <ul style="color: #C0C0C0">
       <li>Food provided by the venue</li>
       <li>Outside food/caterer allowed at the venue</li>
       <li>Non-Veg allowed at the venue</li>
      </ul>
    </div>
    <div class="col-4">
     <h6>Changing Room at</h6>
      <ul style="color: #C0C0C0">
       <li>No. of complimentary changing rooms: 1</li>
       <li>Changing Room A/C</li>
      </ul>
      <h6>Parking At</h6>
      <ul style="color: #C0C0C0">
        <li>Valet provided by venue</li>
        <li>Parking space available for 350 vehicles</li>
      </ul><br><br><br>
      <h6>Alcohol</h6>
      <ul style="color: #C0C0C0">
       <li>Alcohol allowed at the venue</li>
       <li>Outside alcohol allowed at the venue</li>
       <li>Corkage costs applicable</li>
     </ul><br><br><br><br><br>
     <h6>Decoration</h6>
     <ul style="color: #C0C0C0">
       <li>No Outside decorators allowed</li>
       <li>Decoration starting costs at Rs 75000</li>
       <li>Decor provided by the venue</li>
     </ul>
   </div>
   <div class="col-4">
     <h6>Advance</h6>
      <ul style="color: #C0C0C0">
        <li>25% at the time of booking</li>
       <li>Advance can be adjusted against future bookings in NA months.</li>
      </ul>
     <h6>Cancellation</h6>
     <ul style="color: #C0C0C0">
       <li>Non cancellable</li>
     </ul><br><br><br>
     <h6>Other Policies</h6>
      <ul style="color: #C0C0C0">
        <li>No Music allowed late</li>
       <li>Halls are air conditioned</li>
       <li>Ample parking</li>
       <li>Baarat allowed</li>
       <li>Fire crackers allowed</li>
       <li>Hawan allowed</li>
       <li>No overnight wedding allowed</li>
      </ul>
   </div>
 </div>

 <div class="row">
   <h2>Have us call you!</h2>
   <img src=".\img\contact.jpg" height="400px"; width="150px"; align="right">
            
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color:lightblue;">
     Contact Us
   </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#FDEEF4">
            <h5 class="modal-title" id="exampleModalLabel">Visiting  Infomation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
          </div>
         <div class="modal-body" style="background-color:#FDEEF4">
           <form action='' method="post">
             <div class="input-group input-group-sm mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                </div>
                 <input type="text" class="form-control" name='name' aria-label="Small" aria-describedby="inputGroup-sizing-sm"/>
                </div>
            
            
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="inputGroup-sizing-sm">Email</span>
                </div>
                <input type="text" class="form-control" name='email' aria-label="Small" aria-describedby="inputGroup-sizing-sm"/>
              </div>

              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="inputGroup-sizing-sm">contact</span>
                </div>
                <input type="text" class="form-control" name='contact' aria-label="Small" aria-describedby="inputGroup-sizing-sm">
              </div>

              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="inputGroup-sizing-sm">Event Date</span>
                </div>
                <input type="date" name='date' class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
              </div>
               
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="inputGroup-sizing-sm">No. of guest</span>
                </div>
              <div class="input-group mb-3">
                <select class="custom-select" name='guest' id="inputGroupSelect03">
                  <option selected>Choose...</option>
                  <option value="100-200">100-200</option>
                  <option value="200-300">200-300</option>
                  <option value="300-400">300-400</option>
                </select>
              </div>


              <div class="input-group input-group-sm mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"  id="inputGroup-sizing-sm">comment</span>
                </div>
                <textarea name="message" row="6" col="10"></textarea>
               </div>

              <div class="modal-footer">
                <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name='submit' class="btn btn-primary">Submit</button>
               </div>
            </form>
         </div>
       </div>
     </div>
  </div>

 </div>
   <h3>Summary</h3>
    <p style="color:#C0C0C0;">The Uttsav Farm and Banquet located in Chattarpur, Delhi has Cocktail Venues, Banquet Halls, Wedding Lawns, Party Halls, Party Plots, Marriage Halls. Hall can accomodate upto 500 guests in seating and 750 guests in floating. Lawn can accomodate upto 1000 guests in seating and 1500 guests in floating.
     Vegetarian and Non Vegetarian food is served at this venue. Features of this wedding venues are : Food provided by the venue, Outside food/caterer allowed at the venue, Non-Veg allowed at the venue, Alcohol allowed at the venue, Outside alcohol allowed at the venue, Halls are air Conditioned, Ample parking, Baarat allowed, Fire crackers allowed, Hawan allowed, Decor provided by the venue, Packages starts at Rs 1600 per plate for vegetarian menu and at Rs 2000 for non veg menu. Decoration starts at Rs 75000.
    Call weddingz.in at 76-66-77-88-99 for best price guarantee and hassle free booking of Uttsav Farm and Banquet . You can also get venue contact details and photos at weddingz.in</p>
   <footer>
     <div class="container-fluid cls" style="background-color:#17272B">
       <div class="row">
         <div class="col-md-3">
           <a href="detail.html" style="color: white;text-decoration: none;">  Mumbai<br> </a>
           <a href="detail.html" style="color: white; text-decoration: none">VENUES<br>
             Party Halls in Mumbai<br>
             Marriage Halls in Mumbai<br>
             Banquet Halls in Mumbai<br>
             Cocktail Venues in Mumbai<br>
             Birthday Party Halls <br><br>

             VENDORS<br>
             Photographers<br>
             Makeup Artists<br>
             Mehendi Artists<br>
             All Vendor
          </div></a>
          <div  class="col-md-3">
             <a href="detail.html" style="color: white; text-decoration: none;"> Delhi NCR<br></a>
             <a href="detail.html" style="color: white; text-decoration: none;"> VENUES<br>
              Party Halls in Delhi<br>
              Marriage Halls in Delhi<br>
              Banquet Halls in Delhi<br>
              Cocktail Venues in Delhi<br>
              Birthday Party Halls in Delhi<br>
              All Venues in Delhi<br><br>
                      
             VENDORS<br>
             Photographers<br>
             Makeup Artists<br>
             Mehendi Artists<br>
             All Vendors<br>
              </a>
            </div>

            <div class="col-md-3">
               <a href="detail.html" style="color: white; text-decoration: none;">Jaipur<br>
                  <a href="detail.html" style="color: white; text-decoration: none;">  VENUES<br>
                    Banquet Halls in Jaipur<br>
                    Party Halls in Jaipur<br>
                    Marriage Halls in Jaipur<br>
                    Wedding Lawns in Jaipur<br>
                    Birthday Party Halls in Jaipur<br>
                    All Venues in Jaipur<br><br>
                      
                    VENDORS<br>
                    Photographers<br>
                    Makeup Artists<br>
                    Mehendi Artists<br>
                    All Vendors<br>
                  </a>
                  FOLLOW US:-<br>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-twitter"></i>
                </div>
               <div class="col-md-3">
                 <a href="detail.html" style="color: white; text-decoration: none;">Destination Weddings<br>
                  Destination Wedding in Jaipur<br>
                  Destination Wedding in Udaipur<br>
                  Destination Wedding in Jodhpur<br>
                  Destination Wedding in Jaisalmer<br>
                  Destination Wedding in Bikaner<br>
                  Destination Wedding in Goa<br>
                  All Venues in Destination Weddings<br><br>

                  VENDORS<br>
                  Photographers<br>
                  Makeup Artists<br>
                  Mehendi Artists<br>
                  All Vendors<br>
                </a>
              </div>
         </div>
       </div>
     </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
 </body>
</html>