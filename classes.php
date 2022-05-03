<?php
    include 'conn.php';
    if($conn){
            
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
        <h3>IBRAT INNOVATIONS</h3>
        <br>
        <div class="navbar">
            <a href="home.php">Details</a>
            <a href="plans.php">Plans</a>
            <a href="classes.php" class="active">Classes</a>
        </div><br><br>
        <p><hr></p>
        <table class="tabledata" border="3" cellspacing="5">
            <tr>
                <th>Class Name</th>
                <th>Duration</th>
                <th>Member Limit</th>
                <th>Class Level</th>
                <th>Class Cover</th>
                <th>Class Trainer</th>
                <th>Status</th>

                <?php
                        $name = "";
                        $duration = "";
                        $member="";
                        $level="";
                        $cover="";
                        $trainer="";
                        $status="";
                    
                        $query = "select * from classes";
                        $sql = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($sql)){
                            $name = $row['class_name'];
                            $duration = $row['class_duration'];
                            $member = $row['class_member_limit'];
                            $level = $row['class_level'];
                            $cover = $row['class_cover'];
                            $trainer = $row['class_trainer'];
                            $status = $row['class_status'];
                ?>
            </tr>
            <tr>
                <td> 
                    <?php
                        echo $name;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $duration;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $member;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $level;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $cover;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $trainer;
                    ?>
                </td>
                <td> 
                    <?php
                        echo $status;
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
        </table><br><br>

        <a class="edit" href="#">Edit</a>
        <a class="delete" href="#">Delete</a>
    </div>
</body>
</html>