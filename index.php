<?php include"inc/header.php";
$temp=273;
$c_master =$_POST["kelvin"] - $temp;
$k_master =$temp + $_POST["celsius"];?>

<body>	

<div class="container">
<form action="" method="POST" class="form-signup">
	<h2 class="text-center" style="font-family:gabriola; color:green; font-weight:bold; padding-top:50px;"><?php echo $appname;?></h2>
		<?php include"inc/validations.php";?>
		<br>
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<h5  style="font-family:gabriola;">Convert From Celsius To Kelvin</h5>
		<?php
		if(isset($_POST["c_to_K"]))
		{
			if(!empty($_POST["celsius"]))
			{
echo"<div class='alert alert-success'>Convertion of " .$_POST["celsius"].'<sup>o</sup>c to Kelvin is ' . $k_master."K</div>";
 #here is the simple Chemistry <br> 273+ t<sup>o</sup>C<br> 273 + ".$_POST["celsius"] ."<sup>o</sup>C<br>=" . $k_master."K

	}
	else
	{
		echo'<div class="alert alert-danger">Unable to Convert to Kelvin because Celsius value was not Specified</div>';
		}
		}
		?>
		<div class="form-group">
<label class="label-control" for="celsius"><b>Celsius Value</b></label>
<input type="number" name="celsius" value="<?php echo $cvalue;?>" id="celsius" class="form-control" placeholder="Enter Temperature Value 27" >
	</div>
	<button type="submit" name="c_to_K" class="btn btn-danger btn-block">Convert to Kelvin <i class="fa fa-sign-in"></i></button>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<h5  style="font-family:gabriola;">Convert From Kelvin To Celsius</h5>
			<?php
		if(isset($_POST["k_to_C"]))
		{
			if(!empty($_POST["kelvin"]))
			{
echo"<div class='alert alert-success'>Convertion of " .$_POST["kelvin"].'K to Celsius is ' . $c_master."<sup>o</sup>c</div>";
#here is the simple Chemistry <br>TK-273<br>".$_POST["kelvin"] ."- 273<br>=" . $c_master."<sup>o</sup>c 

	}
	else
	{
		echo'<div class="alert alert-danger">Unable to Convert to Celsius because Kelvin value was not Specified</div>';
		}
		}
		?>
	<div class="form-group">
<label class="label-control" for="kelvin"><b>Kelvin Value</b></label>
<input type="number" name="kelvin" value="<?php echo $kvalue;?>" id="kelvin" class="form-control" placeholder="Enter Temperature Value e.g 27" >
	</div>
<button type="submit" name="k_to_C" class="btn btn-danger btn-block">Convert to Celsius <i class="fa fa-sign-in"></i></button>
	</div>
</form>
</div>
</body>