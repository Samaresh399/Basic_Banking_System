<?php 
  require 'Database/MetaData.php';
  if($conn!='Connection Failed')
  {
      $email = $_GET['id'];
      $sql="select * from customers where Email!='$email'";
      $result=mysqli_query($conn,$sql);
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Basic Banking System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid transferBackground">
    <div class="row">
        <div class="col-12 formContainer">
            <div class="transactionForm">
                <h2 class="formHeading">Transfer Money</h2><hr>
                <form id="transactionForm" autocomplete="off">
                    
                    <div class="form-group">
                      <label for="txt_email">From: </label>
                      <input type="text" name="txt_sender" id="txt_sender" value="<?php echo $email; ?>" class="form-control" disabled="">
                    </div>

                    <div class="form-group">
                      <label for="txt_pass">To: </label>
                      <select name="txt_receiver" id="txt_receiver" class="form-control">
                        <option value="">--Select Customer--</option>
                        <?php
                          while($row = mysqli_fetch_array($result)){
                              ?>
                                <option value="<?php echo $row['Email'];?>"><?php echo $row['Email'];?></option>
                              
                              <?php
                          }
                          
                        ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="txt_confirmpass">Amount to be Transfered: </label>
                      <input type="number" min="1" max="100000" name="txt_amount" id="txt_amount" class="form-control">
                    </div>

                    <div class="form-group">
                      <button type="submit" name="btn_submit" id="btn_submit" class="form-control btn btn-primary">Proceed</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="js/transactions.js"></script>
</html>