<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank | Transfer Money</title>
    <link rel="icon" href="./img/icon_bank.png">
    <script src="https://kit.fontawesome.com/50b1d2491c.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 </head>

 <body>
    <div class="containe" style="height: 94vh;">
        <!----------NAVIGATION BAR---------->
     <div class="navigation">
      <img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png" alt="logo">
      <div class="logo">
        The Sparks Foundation<span class="logo-hlt"></span> Bank
      </div>
      <nav>
        <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a href="customer.php">Customers</a>
          </li>
          <li>
            <a href="#footer">Contacts</a>
          </li>
        </ul>
      </nav>
    </div>

        <?php  
        include 'dbcon.php';
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $name = $_POST['cus'];
            }
            $sql = "SELECT balance FROM customer WHERE Name='$name';";
            $sql1 = "SELECT Name FROM customer;";
        ?>

        <div class="intro">
            <h1>Make a Transaction</h1>
        </div><br>

        <div class="container-xl" style="width:40%">
            <form action="payment.php" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Sender &nbsp</span>
                    </div>
                    <input type="text" value="<?php echo $name ?>" class="form-control" id="sender" name="sender"
                        aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly>
                </div>
                
                <?php $result=mysqli_query($con,$sql); ?>
                <?php while($row=mysqli_fetch_array($result)):; ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Balance&nbsp</span>
                    </div>
                    <input type="text" value="<?php echo $row[0];?>" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" readonly>
                </div>
                <?php endwhile ;
                ?>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Receiver</span>
                    </div>
                    <select id="rec" name="rec" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                        <?php $result1=mysqli_query($con,$sql1); ?>
                        <?php while($row1=mysqli_fetch_array($result1)):; ?>
                        <option value="<?php echo $row1[0]; ?>">
                            <?php echo $row1[0]; ?>
                        </option>
                        <?php endwhile ;
                            $con->close();
                        ?>
                    </select>
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Amount</span>
                    </div>
                    <input type="number" name="amount" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" required placeholder="Enter Amount here"
                        oninvalid="this.setCustomValidity('Please Enter Price')" oninput="this.setCustomValidity('')">
                </div>
                <button class="btn btn-info btn-lg btn-block mt-5" value="Transfer">Send Money</button>
            </form>
        </div>
    </div>

    <!----------Footer---------->
    <footer id="footer">
    <p>&copy; Copyright 2022 <span class="footer_logo">Sparks Bank</span></p>
    <div class="social-icon">
      <a href="https://www.linkedin.com/in/vinit-thombare-6a2944225/"></i></a>
      <a href="mailto: vinitthombare9867@gmail.com"><i class="fas fa-envelope"></i></i></a>
    </div>
  </footer>
 </body>
</html>