
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Website</title>
    <?php
        include  'facvicon.php';
    ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
body{
	background-color: black;
	color: white;
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
    <!-- middleware file -->
    <?php
    include 'tranhist(nav).php';
    // connection setup done
    require "config/config.php";
    // connect transfer files


    require "sql/dashboardinfo.php";

    ?>

    <!-- take the data from contacts db and then print the values -->
    <div class="container" style="background-color: grey">
          
            <p class="lead ">Check your past transactions here</p>


            <hr class="my-4">
            <!-- all the transactions fetched from db -->
            <div class="container">
                <table class="table">
                    <thead>
                        <tr style="color: #fff; background-color: orange;">
                            <th scope="col">Amount</th>
                            <th scope="col">RECEIVER UPI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // sql statement to get the data from database


                        while ($row = mysqli_fetch_assoc($result)) {

                            $upis = $row['upi'];
                            $amount = $row['amount'];
                        echo " <tr>
                                 <td>  $amount  </td>
                                <td> $upis </td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>

          




            <hr class="my-4">

        </div>
    </div>

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