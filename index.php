<!DOCTYPE html>

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
  
<body background="c1.jpg">

<div class="container" style="width: 700px; height:100px;">

 
  <div class="bs-docs-section">
    <div class="row">
      <div class="col-md-12">
        
      </div>
    </div>
	<br>
	<div class="row">
      <div >
        <div class="well bs-component">
          <form class="form-horizontal" action="php/registration.php" method="POST">
            <fieldset>
              <legend><font color="green" face="Courier New" size="20"><center><b>COMPETITIVE CODING</b></center></font></legend>
			  
			  <div class="form-group">
                <label for="inputEmail" ></label>
				<h4 class="col-md-2"><b>Team Name</b></h4>

                <div class="col-md-10">
                  <input type="text" class="form-control" name="team_name" placeholder="Name1">
                </div>
              </div>
			  
			  
			  <div class="form-group">
                <label for="inputEmail" ></label>
				<h4 class="col-md-2"><b>Name1</b></h4>

                <div class="col-md-10">
                  <input type="text" class="form-control" name="name_1" placeholder="Name1">
                </div>
              </div>
			  
			  <div class="form-group">
                <label for="inputEmail" ></label>
				<h4 class="col-md-2"><b>Name2</b></h4>

                <div class="col-md-10">
                  <input type="text" class="form-control" name="name_2" placeholder="Name2">
                </div>
              </div>
			  
			  <div class="form-group">
                <label for="inputEmail" ></label>
				<h4 class="col-md-2"><b>Name 3</b></h4>

                <div class="col-md-10">
                  <input type="text" class="form-control" name="name_3" placeholder="Name2">
                </div>
              </div>
			  
			  <div class="form-group">
                <label for="inputEmail" ></label>
				<h4 class="col-md-2"><b>Phone number</b></h4>

                <div class="col-md-10">
                  <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                </div>
              </div>
			  
              <div class="form-group">
                <label for="inputEmail" ></label>
				<h4 class="col-md-2"><b>Email Id</b></h4>

                <div class="col-md-10">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
              </div>
			  
			<div class="form-group">
			  <h4 class="col-md-2"><b>Language</b></h4>

			  <div class="col-md-10">
				<div class="radio radio-primary">
				  <label>
					<input type="radio" name="extention" value="c" checked="">
					C
				  </label>
				</div>
				<div class="radio radio-primary">
				  <label>
					<input type="radio" name="extention"  value="cpp">
					C++
				  </label>
				</div>
				<div class="radio radio-primary">
				  <label>
					<input type="radio" name="extention" value="java">
					JAVA
				  </label>
				</div>
			  </div>
			</div>
          </fieldset>
			<center>
			<br><br>
			
					<div class="form-group">
						<div class="col-md-10 col-md-offset-2">
							<button type="reset" class="btn btn-raised btn-info">Cancel</button>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
							<button type="submit" class="btn btn-raised btn-success">Submit</button>
						</div>
					</div>
			<br>
			<br>
			<br>
			</center>
          </form>
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
