<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 5a Q1</title>
</head>

<body>
    <?php
    $name = "Wong Lik";
    $matricnum = "DI220058";
    $course = "BIC21203 Web Development";
    $study_year = 3;
    $address = "12, Persiaran Desa Pengkalan 5,<br> Taman Sri Megah,<br> 31500 Lahat<br> Perak.";
    ?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric No.</td>
            <td><?php echo "$matricnum"; ?></td>
            
        </tr>
        <tr><td>Course</td>
            <td><?php echo "$course"; ?></td>
            
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$study_year"; ?></td>
            
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>

</html>