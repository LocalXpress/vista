<?php
try
{
	$db = new PDO("mysql:dbname=code_compile;host=localhost", "root", "" );
}
catch(PDOException $e)
{
    alert($e->getMessage()) ;
}   
?>
<!DOCTYPE html>

<html>
<!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>Quizard</title>

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
	<div class="row">
      
        <div class="well bs-component">
          <form class="form-horizontal">
            <fieldset>
              <legend>Here's the result...</legend>
			  <style>
			  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr{background-color: #f2f2f2;color:black;}


#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #12a8ed;
    color: Black;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Team</th>
    <th>Level Cleared</th>
	<th>Attempt_Left</th>
    
  </tr>
 <?php
$sql="SELECT team_name as Team,level,(7-attempt) as Attempt_Left from student_record order by level desc";
foreach($db->query($sql) as $row)
{
?>  
  <tr>
    <td><?php echo $row['Team'];?></td>
	<td><?php echo $row['level'];?></td>
    <td><?php echo $row['Attempt_Left'];?></td>
  </tr>
<?php }?>
</table>
              </fieldset>
  
			
		
			
			</form>
        </div>
      </div>
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
