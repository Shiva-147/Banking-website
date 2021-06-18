<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/transfer.css">
    <title>Banking Website</title>
    <?php
        include  'facvicon.php';
    ?>

</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{
	background-color: black;
	height: 100%;
	color: white;
}
.form{
	margin-top: 50px;
	background-color: grey;
}
.form-group label{
	color: white;
}
.h4-heading{
	color: white;
}
.btn1{
	background-color: green;
}
.links{
	width: 100%;
	display: flex;
	justify-content: flex-end;
}
.links li{
	font-size: 2em;
	font-weight: 660;
	margin-right: 50px;
	list-style-type: none;
}
.links li a{
	color: white;
	
}
.links li a:hover{
	color: rgb(255, 191, 0);
	text-decoration: none;
}
.form{
	margin-top: 0;
}
</style>
<body>
<nav class="navbar">
  <ul class="links">
  <li><a href="index.php">Home</a></li>
  <li><a href="transfer.php" >Transfer </a></li>
  <li><a href="dashboard.php">Transaction </a></li>
  <li><a href="list.php">Customer </a></li>
  </ul>
</nav>
    <?php
    // middle ware files
    include 'navbar.php';
    require "config/config.php";

    require "sql/transferget.php";
    ?>
    <!-- Form-->
    <div class="form">
        <div class="form-panel one">
            <div class="form-header">
                <h4 class="h4-heading">Transactions made simple!!</h4>
            </div>
            <div class="form-content">
                <form action="transfer.php" method="POST">
                    <div class="form-group">
                        <label for="username">Sender UPI</label>
                        <input id="upi" type="text" name="upi" required="required" />
                    </div>
                    <div class="form-group">

                        <label for="samount">Amount</label>
                        <input id="amount" type="text" name="amount" required="required" />
                    </div>
					
					
					<div class="form-group">
                        <label for="username">Reciever UPI</label>
                        <input id="rupi" type="text" name="rupi" required="required" />
                    </div>

                    <div class="form-group">
                        <button class="btn1" type="submit" >Transfer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $upis = $_POST['upi'];

            $amounts = $_POST['amount'];
			$rupis = $_POST['rupi'];
            
		$quer = mysqli_query($conn,"select balance from contact where upi='$upis'");
		$res = mysqli_fetch_array($quer);
         if($amounts <= $res['balance'])
		 {
            $sql1 = "UPDATE contact set balance=balance+'$amounts' where upi='$rupis'";
            $result1 = mysqli_query($conn, $sql1);
			$sql3 = "UPDATE contact set balance=balance-'$amounts' where upi='$upis'";
            $result3 = mysqli_query($conn, $sql3);
            
        if ($result1) {
             $sql2 = "INSERT INTO `transaction` (`upi`, `amount`) VALUES ('$rupis', '$amounts')";
                $result2 = mysqli_query($conn, $sql2);


                if ($result2) 
                {
                    sleep(1);
                    echo '<div class="alert alert-success" role="alert"> Completed Transaction</div>';
                  
                } 
            else {
            echo "not added to transaction ";
            echo("Error description: " . mysqli_error($conn));
        }

        } else {
            echo "not added to contacts ";
        }
	 }else{
	 echo '<div class="alert alert-success" role="alert"> Insufficient Balance</div>';}
    }
    ?>
	
	  <!-- layout end  -->

    <!-- footer -->
    <?php
        include 'footer.php';
    ?>

    <!-- footer end  -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>