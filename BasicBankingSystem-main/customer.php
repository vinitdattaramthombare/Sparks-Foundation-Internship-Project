<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank | History</title>
    <link rel="icon" href="./img/icon_bank.png">
    <script src="https://kit.fontawesome.com/50b1d2491c.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="containe">
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

        echo '<div class="intro">
        <h1>Customer Details</h1>
        </div><br>';
        echo '<table class="listtable table-light table  table-striped table-hover mt-2"  style="opacity: 0.9; width: 80%; margin: auto;">
          <tr class="table-dark">
              <th>ID</th>
              <th>Name</th>
              <th>E-mail</th>
              <th>Balance (in &#8377;)</th>
          </tr>';

        
        $sql = "SELECT id,Name,email,balance FROM customer;";
        $sql1 = "SELECT Name FROM customer;";
        
        // Execute the query
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
                // var_dump($row);
                echo '<tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["Name"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["balance"].'</td>
                </tr>';
            }
            echo'</table>';
      ?> <br>
      <hr/>

      <h1 class="text-center font-weight-bold mb-5">
        <img src="https://m.foolcdn.com/media/affiliates/images/Bank_to_bank_GettyImages-900917830_QB3CjfS.width-1200.jpg" width="80" height="60">
        <div class="intro">
        <h1>Customer Details</h1>
        </div><br>
        <img src="https://m.foolcdn.com/media/affiliates/images/Bank_to_bank_GettyImages-900917830_QB3CjfS.width-1200.jpg" width="80" height="60"></h1>
      <form action="select.php" method="POST" style="text-align:center">
        <label class="choose" style="color: #fff; font-size: 1rem; font-weight: 500;">Customer Name &#40;Sender&#41;: </label>
        <select id="cus" name="cus" style="width: 18%; height: 26px; margin-left: 8px;">
          <?php $result1=mysqli_query($con,$sql1); ?>
          <?php while($row1=mysqli_fetch_array($result1)):; ?>
          <option value="<?php echo $row1[0]; ?>">
            <?php echo $row1[0]; ?>
          </option>
          <?php endwhile ;
            $con->close();
          ?>
        </select><br>
        
        <div>
          <button class="btn btn-info btn-sm col-lg-2" style="margin-top:20px;">Select</button>
        </div>

      </form>
      <br><br>
    </div>

    <!----------Footer---------->
    <footer id="footer">
    <p>&copy; Copyright 2022 <span class="footer_logo">Sparks Bank</span></p>
    <div class="social-icon">
      <a href="https://www.linkedin.com/in/vinit-thombare-6a2944225/"><i class="fab fa-linkedin-in"></i></a>
      <a href="mailto: vinitthombare9867@gmail.com"><i class="fas fa-envelope"></i></i></a>
    </div>
  </footer>
  </body>
</html>