<!DOCTYPE html>
<?php
session_start();
try {
    $db = new PDO("mysql:dbname=code_compile;host=localhost", "root", "" );
    //echo "PDO connection object created";
    }
catch(PDOException $e)
    {
    alert($e->getMessage()) ;
    }
	$id=$_SESSION['id'];
	
	$sql="select * from student_record where id='$id'";
		foreach($db->query($sql) as $row)
		{$team_name=$row['team_name'];
		$name_1=$row['name_1'];
		$name_2=$row['name_2'];
		$name_3=$row['name_3'];
		$level=$row['level'];
		$attempt=$row['attempt'];
		$extention=$row['extention'];
		}
		
		if(!isset($_SESSION['id'])) 
	{ 
		header("Location:index.php");
		exit;
	} 
?>
<html>
<!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>competitive coding</title>

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="dist/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="dist/css/ripples.min.css" rel="stylesheet">


  <link href="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  
<body background="j.jpg">

	<div class="container">
		
		<div class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
			</div> 
			<center>
			<div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<h3><li><a class="navbar-brand" href="javascript:void(0)"><b><i class="material-icons md-48"><i class="material-icons">account_circle</i></i><?php echo "Team: ".$team_name."                         Level: 1              Attempt Left: ".(7-$attempt);?></a>
				</ul>
			</div>
			</center>
        </div>
		</div>
		
	  <div class="bs-docs-section">
		<div class="row">
		  <div class="col-md-6">
				<p style=" height: 500px; width:550px; background: white; font-size:20px; font-type:Times New Roman;">Hello!!</p>
		  </div>
		  <div class="col-md-6">
			<form action="php/code_check_1.php" method="POST">
				<b><textarea name="c_code" id="c_code" style=" height: 500px; width:550px; background: black; color:green; font-size:20px; font-type:CONSOLAS;" placeholder="C:\Users\<?php echo $team_name?>\Type your code here > " required></textarea></b>
				<div class="form-group">
						<div class="col-md-10 col-md-offset-2">
							<button type="reset" class="btn btn-raised btn-info">Reset</button>
							<button type="submit" class="btn btn-raised btn-success">Submit</button>
						</div>
				</div>
				<br><br>
			</form>
		  </div>
		</div>
	  </div>
	</div>

  
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="dist/js/ripples.min.js"></script>
<script src="dist/js/material.min.js"></script>
<script src="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>
</body>
</html>
