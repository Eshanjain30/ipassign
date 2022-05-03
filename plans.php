<?php
    include 'conn.php';
    if($conn)
    {
        $sql = mysqli_query($conn,"select * from plans");
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
        <h3><?php echo $row['plan_name']; ?></h3>
        <br>
        <div class="navbar">
            <a href="home.php">Details</a>
            <a href="plans.php"  class="active">Plans</a>
            <a href="classes.php">Classes</a>
        </div><br><br>
        <p><hr></p>
        <label for="workouts"><b>Total Workouts:</b></label>
        <input type="text" name="workouts" id="workouts" value="<?php echo $row['plan_total_workouts']; ?>">
        <br><br>
        <label for="duration"><b>Duration:</b></label>
        <input type="text" name="duration" id="duration" value="<?php echo $row['plan_avg_duration']; ?>">
        <br><br>
        <label for="weeks"><b>Total Weeks:</b></label>
        <input type="text" name="weeks" id="weeks" value="<?php echo $row['plan_total_weeks']; ?>">
        <br><br>
        <label for="image"><b>Image:</b></label>
        <input type="text" name="image" id="image" value="<?php echo $row['plan_image']; ?>" size="95">
        <br><br>
        <label for="level"><b>Plan Level:</b></label>
        <input type="text" name="level" id="level" value="<?php echo $row['plan_level']; ?>">
        <br><br>
        <label for="status"><b>Status:</b></label>
        <input type="text" name="status" id="status" value="<?php echo $row['status']; ?>">
        <br><br>

        <a class="edit" href="#">Edit</a>
        <a class="delete" href="#">Delete</a>
    </div>
</body>
</html>