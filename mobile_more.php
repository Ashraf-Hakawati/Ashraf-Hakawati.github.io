<!--#ffffff-->

<!DOCTYPE html>
<html>
<head>
<?php
include('header.php');

?>
<style>
table, th, td {
border: 1px solid black;
background-color: white;
margin:0px;
margin-bottom: 40px;
text-align: center;
width:80%;
height:50px;
padding-top:10px;    }

</style>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>
	
<?php	$conn = mysqli_connect("localhost", "root", "", "mobile");

$id = $_GET['id'];

$sql = "select * from mobiles where mob_id=$id";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
  ?>


<div class="container" style=" float:left;width:auto; height:auto; border:5px solid #e0e0e0;">

<div style="float:left;background-color: #ffffff; height:500px;width:35%; border:5px solid #e0e0e0;">
<a href='mobile_more.php?id=<?php echo $row['mob_id']; ?>'><img class="imgSize" src="<?php echo $row['mob_image']; ?>" alt="1"/></a>
</div>


<div style=" width:50%;background-color: #ffffff; border:5px solid #e0e0e0;height: 110px;float: left;">
      <h2 style="margin-left: 15px;"><?php echo $row['mob_desc'] ; ?></h2>                   
         </div>

<div style=" float: left;width:50%;background-color: #ffffff; border:5px solid #e0e0e0;height: 110px;">
      <h2 style="float: left;margin-left: 15px;">Price :</h2><h2 style="float: left;color:gray;"><?php echo $row['mob_price'] . " ₪ شيكل "; ?></h2>
                               </div>

<div style=" float:left;width:50%;background-color: #ffffff; border:5px solid #e0e0e0;height:140px;">
     <h3 style="float: left;margin-left: 15px;">Storage capacity : </h3>
  <select style="color:gray;width:25%;height: 40px;font-size:20px;margin-top:3px;">
  <option value="32 GB" >32 GB</option>
  <option value="64 GB">64 GB</option>
  <option value="128 GB">128 GB</option>
</select>

     <h3 style="margin-left: 15px;">Color :
     <select style="color:gray;width:25%;height: 40px;font-size:20px;margin-top:3px;">
  <option value="Red" >Red</option>
  <option value="Black">Black</option>
  <option value="Gold">Gold</option>
  <option value="White">White</option>
</select></h3>
                   </div>

	<div class="container" style="float: left;width:50%;background-color: #ffffff; border:5px solid #e0e0e0;height:140px; ">
		
		<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

<button class="btn btn-primary"style="float: left;font-size:24px; margin-left: 100px;margin-top: 20px;"> <a style="color: white;" href="<?php if (!$_SESSION['login']){

     echo "login.php";

 } ?>">Add to Cart</a> <i class="fa fa-shopping-cart"></i></button>



<?php if (!$_SESSION['login']){

     echo "<a style='color: white;' href='login.php'><button class='btn btn-primary'style='float: left;font-size:24px; margin-left: 100px;margin-top: 20px;' type='button' class='btn btn-info btn-lg'>Buy now <i class='fa fa-shekel'></i></a>";

 } else{

echo "<button data-toggle='modal' data-target='#myModal'class='btn btn-primary'style='float: left;font-size:24px; margin-left: 100px;margin-top: 20px;' type='button' class='btn btn-info btn-lg'>Buy now <i class='fa fa-shekel'></i>";
}
 	?>





                       


</button>

    

    

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style=" color:green;padding-left: 25px;">Purchased Successfully<i style="padding-left: 60px;padding-top:15px;" class="fa-li fa fa-check-square"></i></h3>
        </div>
        <div class="modal-body">
          <h3>If you encounter any problem please contact us through (contact us).</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>





                </form>
            </div>


	<table style="margin-left: 80px; float: left;">

<tr>
<th colspan="2" style="text-align: center;">General Specifications</th>
</tr>
<tr>
<td style="width:25%;"> Trade mark</td>
<td style="width:25%;"><?php echo $row['mob_type']; ?> </td>
</tr>

<tr>
<td style="width:25%;">Operating System Type </td>
<td style="width:25%;"><?php echo $row['mob_os']; ?> </td>
</tr>

<tr>
<td style="width:25%;">Storage capacity </td>
<td style="width:25%;"><?php echo $row['mob_storage']." GB"; ?> </td>
</tr>

<tr>
<td style="width:25%;">Type </td>
<td style="width:25%;"> <?php echo $row['mob_name']; ?></td>
</tr>

<tr>
<td style="width:25%;">Color </td>
<td style="width:25%;">  <?php echo $row['mob_color']; ?></td>
</tr>

<tr>
<td style="width:25%;"> Screen Size</td>
<td style="width:25%;"><?php echo $row['mob_screen']; ?>
</td>
</tr>
<tr>
<td style="width:25%;">RAM memory size </td>
<td style="width:25%;"><?php echo $row['mob_memory']." GB"; ?></td>
</tr>


</table>

</div>	
   

<?php  }  ?>
</body>

<div style=" float:left;width: 100%">
<?php
include('footer.php');
?>
</div>
</head>
</html>