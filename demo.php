
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Operand1=$_POST['Operand1'];
	$Operator=$_POST['1'];
	/*Validation begins from here.*/
	if($Operand1 == ''){
		$Error = "The input values are required.";
	}
	elseif (filter_var($Operand1, FILTER_VALIDATE_FLOAT) === false) {
		$Error = "The input value must be a number only.";
	}
	elseif($Operator=="/" && ($Operand1 == 0)){
		$Error = "Cannot divide by zero.";
	}
	else{
		/*Calculation begins from here.*/
		if($Operator=="interest of 4.8%")
			$Result=(4.8 / 100) * $Operand1;
		else if($Operator=="VIP user interest of sub user 0.25%")
			$Result=(0.25 / 100) * $Operand1;
		else if($Operator=="refrral is 0.5")
			$Result=(0.5 / 100) * $Operand1;
		else if($Operator=="/")
			$Result=$Operand1/$Operand2;
	}
} ?>
<link rel="stylesheet" href="app.css">

<body>
	<!-- Top bar -->
	<div class="container-fluid shadow-sm border-bottom mb-4">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-light justify-content-end">
					<?php if(!isset($_GET['iframe'])){?>
					
					<?php } ?>
				</nav>
			</div>
		</div>
	</div>
	<!-- Main -->
	<div class="container" style="max-width:800px">
		<?php if(!isset($_GET['iframe'])){?>
			<div class="text-center mb-5">
				<h1 class="fw-bolder mb-0">CALCULATOR</h1>
				
			</div>
		<?php } ?>
		<form method="post" action="">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 justify-content-center">
				<div class="col text-center mb-3 mb-md-5">
					<label for="Operand1" class="form-label fs-3">amount</label>
					<input id="Operand1" name="Operand1" type="number" step="any" class="form-control form-control-custom" value="<?php echo isset($Operand1)?$Operand1:''; ?>">
				</div>
			
			</div>
			<div class="row justify-content-center mb-3">
				<div class="col-auto">
					<input class="btn btn-success fs-2" type="submit" name="1" id="1" value="interest of 4.8%">
					<input class="btn btn-success fs-2" type="submit" name="1" id="1" value="VIP user interest of sub user 0.25%">
					<input class="btn btn-success fs-2" type="submit" name="1" id="1" value="refrral is 0.5">
				</div>
			</div>
		</form>
		<br>
		<!-- Error Messages -->
		<?php if(isset($Result) && is_numeric($Result)){?>
			<div class="row justify-content-center">
				<div class="col text-center">
					<label for="Result" class="fs-4">Result</label>
					<input id="Result" disabled="disabled" name="Result" type="number" step="any" class="form-control form-control-custom" value="<?php echo $Result; ?>">
				</div>
			</div>
		<?php } if(isset($Error)){?>
			<div class="row justify-content-center">
				<div class="col">
					<div class="alert alert-danger shadow-sm" role="alert">Error: <?php echo $Error; ?></div>
				</div>
			</div>
		<?php } ?>
	</div>
</body>
</html>