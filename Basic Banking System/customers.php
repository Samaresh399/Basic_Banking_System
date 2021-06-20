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
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
    <div class="membersBackground"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="membersContainer">
                    <div class="container-heading">
                        <h2 class="mr-auto text-white">EasyBanking Members</h2>
                    </div>
                    <div class="container-body">
                        <div id="membersArea" class="d-flex flex-wrap jsutify-content-around">
                            <?php
                                require 'Database/MetaData.php';
                                if($conn!='Connection Failed')
                                {
                                    $sql='select * from '.$Table1;
                                    $result=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_array($result))
                                    {
                                    ?>
                                    <div class="MembersCard"><h3><?php echo $row["Name"];?></h3>
                                        <h6 class="text-secondary gmail"><?php echo $row["Email"];?></h6>
                                        <div class="details">
                                            <label>Current Balance</label><br/>
                                            <p>&#8377;<?php echo $row["Current_Balance"];?></p>
                                            <a href="transfer.php?id=<?php echo $row["Email"]; ?>"><button class="btn text-white btnTransfer">Transfer&nbsp;Money</button></a>
                                        </div>
                                     </div>
                                    <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/main.js"></script>
</html>