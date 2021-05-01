<?php
$link = mysqli_connect("localhost", "root", "", "employee");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if((isset($_POST['startdate'])) && (isset($_POST['enddate'])) && (isset($_POST['Reason'])) )
{
if (isset($_POST['startdate'])) {
    $fromm = $_POST['startdate'];
}
if (isset($_POST['enddate'])) {
    $too = $_POST['enddate'];
}
if (isset($_POST['Reason'])) {
    $reason = $_POST['Reason'];
}
$sql = "INSERT INTO persons (fromm, too, reason) VALUES ('$fromm', '$too','$reason' )";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    header("location:index.php");
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class = "container1" >
            <form method="POST" action="#">
                <div class="lande">
                    <label for="Reason">Choose a Reason</label>

<select name="Reason" id="Reason">
  <option value="Paid Leave">Paid Leave</option>
  <option value="Sick Leave">Sick Leave</option>
  <option value="Holiday Leave">Holiday Leave</option>
  <option value="Other">Other</option>
</select>
                </div>
                <div class= "lande">
                <label>From</label>
                <input type='date' name='startdate'/>
                </div>
                <div class="lande">
                <label> To</label>
                <input type='date' name='enddate'/>
            </div>
                <input type="submit"  value="submit" class="btn-login"/>
            </form>

        </div>
    </body>
</html>
