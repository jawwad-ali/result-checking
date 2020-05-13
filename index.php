<?php 
    require_once("include/db.php");
	error_reporting(1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarkSheet</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
    crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="text-center ">
                    <h1 class="page-heading text-primary">Result Checking Website</h1>
                    <form method="get" >
                        <input type="text" name="search_result" class="form-control" placeholder="Search Your Roll No">
                        <input name="submit" type="submit" class="btn btn-success mt-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
  
    <?php 
        // $res = mysqli_query($conn , $select);
        if(isset($_GET['submit'])){
            $input_value = $_GET['search_result'];
            $SearchSql = "SELECT * FROM marksheet WHERE roll_no like '%$input_value%' ";
            $result = mysqli_query($conn ,$SearchSql);
        } 
    ?>
  
        <?php 
        $pageRes  = mysqli_query($conn , $SearchSql )or die(mysqli_error($conn->$SearchSql));

            while($row = mysqli_fetch_assoc($pageRes)){
                $id = $row['id'];
                $roll_no = $row['roll_no'];
                $full_name = $row['full_name'];
                $maths = $row['maths'];
                $english = $row['english'];
                $urdu = $row['urdu'];
                $isl = $row['isl'];
                $pst = $row['pst'];
                $obt_marks = $row['obt_marks'];
                $total_marks = $row['total_marks'];
                $percentage = $row['percentage'];
        ?>
        <div class="basic_info">
            <p> <strong>Roll Number: </strong> <?= $roll_no ?> </p>  
            <p> <strong >Student Name:</strong> <?= $full_name ?></p> 
        </div>
        <table class="table table-bordered mt-3">
            <tr>
                <th>Subject</th>
                <th>Marks</th>
            </tr>
            <tr>
                <td>Maths</td>
                <td> <?php echo $maths ?> </td>
            </tr>
            <tr>
                <td>English</td>
                <td> <?php echo $english ?> </td>
            </tr>
            <tr>
                <td>Urdu</td>
                <td> <?php echo $urdu ?> </td>
            </tr>
            <tr>
                <td>Islamiat</td>
                <td> <?php echo $isl ?> </td>
            </tr>
            <tr>
                <td>Pakistan Studies</td>
                <td> <?php echo $pst ?> </td>
            </tr>
            <tr>
                <th>Obtain Marks</th>
                <td> <?php echo $obt_marks ?> </td>
            </tr>
            <tr>
                <th>Total Marks</th>
                <td><?= $total_marks ?></td>
            </tr>
            <tr>
                <th>Percentage</th>
                <td><?= $percentage ?></td>
            </tr>
        <?php } ?>
    </table>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h5 class="text-center">Grade Box</h5>
               <table class="table table-dark">
                    <tr>
                        <th>Percentage</th>
                        <th>Grades</th>
                    </tr>
                    <tr>
                        <td> 90 or Greater than 90</td>
                        <td>A+ Grade</td>
                    </tr>
                    <tr>
                        <td> 80 or Greater than 80</td>
                        <td>A Grade</td>
                    </tr>
                    <tr>
                        <td> 70 or Greater than 70</td>
                        <td>B Grade</td>
                    </tr>
                    <tr>
                        <td> 60 or Greater than 60</td>
                        <td>C Grade</td>
                    </tr>
                    <tr>
                        <td> 50 or Greater than 50</td>
                        <td>D Grade</td>
                    </tr>
                    <tr>
                        <td class="text-danger">Below 50</td>
                        <td class="text-danger">Fail</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>