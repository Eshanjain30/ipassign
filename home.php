<?php
    include 'conn.php';
    if($conn)
    {
        $sql = mysqli_query($conn,"select * from membership");
        $row = mysqli_fetch_assoc($sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Ibrat Innovations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Hi, Welcomeback!</h2>
    <div class="block">
        <h3><?php echo $row['membership_name']; ?></h3>
        <br>
        <div class="navbar">
            <a href="home.php"  class="active">Details</a>
            <a href="plans.php">Plans</a>
            <a href="classes.php">Classes</a>
        </div><br><br>
        <p><hr></p>
        <label for="duration"><b>Duration:</b></label>
        <input type="text" name="duration" id="duration" value="<?php echo $row['membership_duration']; ?>">
        <br><br>
        <label for="price"><b>Price:</b></label>
        <input type="text" name="price" id="price" value="<?php echo $row['membership_price']; ?>">
        <br><br>
        <label for="classes"><b>Classes:</b></label>
        <input type="text" name="classes" id="classes" value="<?php echo $row['membership_classes']; ?>">
        <br><br>
        <label for="discount"><b>Discount Percentage:</b></label>
        <input type="text" name="discount" id="discount" value="<?php echo $row['membership_discount_percentage']; ?>">
        <br><br>
        <label for="offer"><b>Offer Name:</b></label>
        <input type="text" name="offer" id="offer" value="<?php echo $row['membership_offer_name']; ?>">
        <br><br>
        <label for="status"><b>Status:</b></label>
        <input type="text" name="status" id="status" value="<?php echo $row['membership_status']; ?>">
        <br><br>

        <a class="edit" href="#">Edit</a>
        <a class="delete" href="#">Delete</a>
    </div>
</body>
</html>