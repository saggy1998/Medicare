<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<body>


<?php include"top_nav.php";?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
     <div class="fill" style="background-image:url('images/slide-2.jpg');">
         <h1 style="font-size: 120px;text-align: center;padding-top: 150px;">Services</h1>    
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12" style="padding-top: 50px;">
              
            </div>
            		 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Donor Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation. </p>
                        <a href="Donor_reg.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i> Request for Blood</h4>
                    </div>
                    <div class="panel-body">
                        <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.  </p>
                        <a href="request_blood.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
			 
			  <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i> Search Donor</h4>
                    </div>
                    <div class="panel-body">
                        <p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.</p>
                        <a href="Search_Donor.php" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>
	    </div>
    
        <div class="row">
                     <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Camp Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p>Register for donation camp and we will provide you donors for the camp to connect people in need and with few simple steps you can find blood donors who are ready to donate near by.  </p>
                        <a href="Donor_reg.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
             <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i> Find Blood Banks</h4>
                    </div>
                    <div class="panel-body">
                        <p>Looking for blood banks near your area? To find blood banks near your area click on blood banks, select region to display blood banks near your area or enter location to search.  </p>
                        <a href="hospitals.php" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>
        </div>
             

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>We expect your loyal feedback to improve our standard.For more details and any subject related queries..</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="contact.php"><i class="fa fa-phone"></i> Call to Action</a>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
		<img src='' width="100%" height="100%" id='ModalImg'>
    </div>
  </div>
</div>

        <hr>

        <!-- Footer -->
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>

</body>

</html>
