





<!DOCTYPE html>
<html lang="en">
    <head>
			<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>
				New Student Registration - Manthali Secondary School
		
		</title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<script>
			function page()
				{
					 location.href = "users.html";
				} 
			</script>

	
            <style>
              
			
			
			
                    
                         /* Make the image fully responsive */
              .carousel-inner img {
                width: 100%;
                height: 100%;
              }
			  .row{
			  padding-left:20px;}
			</style> 
    </head>
<body>
div class="collapse navbar-collapse bg-primary" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link " href="#"><div class="lead"> Home <span class="sr-only">(current)</span></div> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="..\pages\aboutus.php"> <div class="lead"> हाम्रो बारेमा  </div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="..\pages\ourprogramme.php"> <div class="lead"> हाम्रा कार्यक्रमहरु </div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="..\pages\downloads.php"> <div class="lead"> डाउनलोड </div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="..\pages\contacts.php"> <div class="lead"> सम्पर्क  </div> </a>
        </li>
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="lead"> अनलाईन भर्ना आवेदन</div> 
         
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="..\admission\junioradmission.php"><div class="lead">कक्षा नर्सरी देखी कक्षाा १० सम्म </div></a>
            <a class="dropdown-item" href="..\admission\senioradmission.php"> <div class="lead">कक्षाा ११ र १२        </div></a>
            
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toogle" href="#" id="ecaDropdown" role="button" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false"> 
          <div class="lead text-white"> ECA </div>  </a>
        </li>
      </ul>
      
     
        <!Modal for Log In starts Here> 
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn  btn-lg  btn-outline-dark bg-success my-2 my-sm-0 " data-toggle="modal" data-target="#loginmodal">Log In</button>

          <!-- Modal -->
          <div id="loginmodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
               
                  <h4 class="modal-title"><div class="lead text-center">Registered User Please Log In </div></h4>
                </div>
                <div class="modal-body">
                    <! Form Inside Modal Body> 
                      <form action=".\php\login.php" method="POST">
                        <div class="form-group">
                          <label for="email">ईमेल ठेगाना </label>
                          <input type="email" name="emailid" class="form-control" placeholder="Enter email" id="email" required>
                        </div>
                        <div class="form-group">
                          <label for="pwd">पासवर्ड </label>
                          <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">लगईन गर्नुहोस् </button>
                      </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  
                </div>
              </div>

            </div>
          </div>
    
    <!modal ends here> 
    </div>
  </nav>
 
  <! Nav Bar Code Ends> 
  <div class="row">
		<div class="col-sm-1 bg-info" ;> 
			<p class="lead text-center font-weight-bold"> Notices </p> 
		</div>
			<div class="col-sm-11">
		<marquee mouseover="this.stop()" mouseout="this.start()"> 		<p> <a href="text.html"> <?php echo $showDATA ?> </a> </p> </marquee> 
		 </div> 
	</div> 
	
 
	<div class="container-fluid" > 
	<div class="top"> 
		<div class="row"> 
		
	<br> 
  
 
	

 <hr>  <! Carousel > 
        <div class="container">
          <div class="row"> 
            <div class="col-sm-8"
                    <h2> Some Glimps of Camera </h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ul>
                      
                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="project\img1.jpg" alt="Los Angeles" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                          <img src="project\img2.jpg" alt="Chicago" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                          <img src="project\img3.jpg" alt="New York" width="1100" height="500">
                        </div>
                      </div>
                      
                     
                      
                    </div>

                    </div>
              
                  <div class="col-sm-4"> 
           
                  <div class="lead text-center bg-info"> सूचना पाटी  </div> 
                 
                  <table class="table table-responsive table-stripped table-hoverable"> 
                    <thead> 
                      <tr> 
                        <th scope="col"> प्रकाशित मिति </th> 
                        <th scope="col"> सूचना </th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                    <?php
										$conn=mysqli_connect('localhost','root','','school');


										
										// Select Query
										$sqlselect="SELECT * FROM notices";

										// Firing Query
										$qry=mysqli_query($conn,$sqlselect); 
										// Counting the number of rows
										$row=mysqli_num_rows($qry); 
										// Getting data in form of array 
										$data=mysqli_fetch_array($qry);


										// Displaying Data on a loop 
										while ($data=mysqli_fetch_array($qry)){
											
											?>											
												<tr>
												   
												  <td> <?php  echo $data['PUB_DATE'];?>  </td> 
												  <td> <?php  echo $data['DESCRIPTION'];?>  </td> 
												 						
												</tr>
																				
										<?php
										}
										?>   





                    </tbody> 
                    </table> 




                  </table> 






                  </div> 
          </div> 
      </div> 
                 
<div class="container col-sm-8">

  <h1>From the Desk of Principal </h1>
  <p class="lead text-justify"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</p>

  
  
  
  
</div>
					

<div class="container"> <br> 
    
    <div class="row">
        <div class="col-md-4">
            <h2>Our Glorious Histroy </h2>
            <p class="lead">There are many variations <IMG SRC="IMAGES\NEPAL SCOUT.PNG"> of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. .</p>
            <p><a href="files\school_at_glance.html" target="_blank" class="btn btn-success">Learn More »</a></p>
        </div>
        <div class="col-md-4">
            <h2><div class="lead display-4">  Our Sucess Stories</div> </h2>
            <p class="lead">CSS is used for describing the presentation of web pages. CSS can save a lot of time and effort. Our CSS tutorials will help you to learn the essentials of latest CSS3, so that you can control the style and layout of your website.</p>
            <p><a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">Continue Reading »</a></p>
        </div>
        <div class="col-md-4">
            <h2>Why M.H.S.S?</h2>
            <p class="lead" >"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?".</p>
            <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More »</a></p>
        </div>
    </div>
	

   
    <footer>
            <div class="row"> 
                <div col="md-6"> 
                    <p> Designed My Manoz </p>
                </div>
                <div col="md-6"> 
                    <p> Contact us : 9862439513 </p>
                </div>
            </div>
    </footer>








</div>

<div class="container"> 
<div class="card">
	<div class="card-header"> This is card Tab </div> 
	<div class="card-body"> This is body of the card </div> 


</div> 
</div> 


   <iframe src="https://www.hamropatro.com/widgets/calender-full.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"
                 style="border:none; overflow:hidden; width:800px; height:840px;" allowtransparency="true"></iframe>
</body>
</html>                            