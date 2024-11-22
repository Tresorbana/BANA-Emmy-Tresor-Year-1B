<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $names = $_POST["names"];
     $email = $_POST["email"];
     $pass = $_POST["pass"];
     $confpass = $_POST["confpass"];
     $tel = $_POST["telephone"];
     $port = $_POST["portfolio"];
     $age = $_POST["age"];
     $marks = $_POST["marks"];
     $date = $_POST["date"];
     $time = $_POST["time"];
     $color = $_POST["color"];
     $gender = $_POST["gender"];
     $profile = $_POST["profile"];
     $interests = $_POST["interests"];
     $userId = $_POST["userId"];
     }
     ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <table border='1'>
        <tr>
                    <th>Full Names</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Confirmed password</th>
                    <th>Telephone</th>
                    <th>Portfolio</th>
                    <th>age</th>
                    <th>Marks</th>
                    <th>Birthdate</th>
                    <th>Application <Time></Time></th>
                    <th>Favourite color</th>
                    <th>Gender</th>
                    <th>Picture</th>
                    <th>Personal interests</th>
                    <th>userId</th>
                </tr>
            
            
            
                <tr>
                    <td><?php echo $names ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $pass?></td>
                    <td><?php echo $confpass?></td>
                    <td><?php echo $tel?></td>
                    <td><?php echo $port?></td>
                    <td><?php echo $age?></td>
                    <td><?php echo $marks?></td>
                    <td><?php echo $date?></td>
                    <td><?php echo $time?></td>
                    <td><?php echo $color?></td>
                    <td><?php echo $gender?></td>
                    <td><?php echo $profile?></td>
                    <td><?php echo $interests?></td>
                    <td><?php echo $userId?></td>
                    
                </tr>
                </table>
</body>
</html>
        
        
    

        
        
   
