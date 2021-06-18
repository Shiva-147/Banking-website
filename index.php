<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Banking Website</title>
   <?php
   include  'facvicon.php';
   ?>

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{
	background-image: url("bank.jpg");
}

.links{
	width: 100%;
	display: flex;
	justify-content: flex-end;
}
li{
	font-family: "Times New Roman", Times, serif;
	font-size: 2em;
	font-weight: 600;
	margin-right: 50px;
	list-style-type: none;
}
a{
	color: white;
	
}
a:hover{
	color: rgb(255, 191, 0);
	text-decoration: none;
}
h6{
	margin-top: 100px;
margin-left: 200px;
color: blue;
}

.user_card{
	margin-top: 150px;
	display: flex;
	justify-content: space-between;
}
.user2_card{
	background-color: yellow;
	width: 40%;
	margin: 0 auto;
	align-items: center;
	margin-top: 50px;
}
</style>


<body>
<div>


<!-- As a heading -->
<nav class="navbar">
  <ul class="links">
  <li><a href="index.php">Home</a></li>
  <li><a href="transfer.php" >Transfer </a></li>
  <li><a href="dashboard.php">Transaction </a></li>
  <li><a href="list.php">Customer </a></li>
  </ul>
</nav>
 <!-- <h6 class="display-3 font-weight-bold ">WELCOME TO GRIP</h6> -->






        <!-- cards  -->
        
            <div class="container">
			
                
                   <!-- <div class='user_card'>
                        <div class="card bg-info">
                            <div class="card-body text-white">
                                <h5 class="card-title">TRANSFER</h5>
                                <p class="card-text">The simple way to send or receive money with anyone</p>
								<a href="transfer.php" class=" btn  btn-light ">Proceed </a>
                                
                            </div>
                        </div> 
                   

                    
                        <div class="card  bg-success  ">
                            <div class="card-body text-white ">
                                <h5 class="card-title ">TRANSACTIONS HISTORY</h5>
                                <p class="card-text">Manage all of your transactions at one place. </p>
                                <a href="dashboard.php" class="btn btn-light">View </a>
                            </div>
                        </div>
                   </div>
					
					<div class='user2_card'>
                        <div class="card bg-warning">
                            <div class="card-body text-white ">
                                <h5 class="card-title ">CUSTOMER LIST</h5>
								
                                <p class="card-text">View all customers. </p>
                                <a href="list.php" class="btn btn-light">View </a>
                            </div>
                        </div>
                   </div>-->
					
					
                

           
        </div>

        





        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>



</body>

</html>