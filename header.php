
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <link rel="shortcut icon" href="./img/" type="image/png">

    
    
  
</head>
<body>



	<nav class="navbar navbar-static-top navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">
	 
	      </a>
	    </div>

	    <div class="collapse navbar-collapse">
	    	<ul class="nav navbar-nav navbar-left">
				<li class="active">
					<a href="header.php" type="button" class="bar  " data-toggle="" data-target="">Календар</a>
				</li>
			</ul>
			 <div class="collapse navbar-collapse">
	    	<ul class="nav navbar-nav  menu  ">
				<li>
					<a type="button" class=" bar " data-toggle="modal" data-target="#audet">Кабінет</a>
				</li>
			</ul>
			 <div class="collapse navbar-collapse">
	    	<ul class="nav navbar-nav menu ">
				<li>
				<a type="button" class=" bar  " data-toggle="modal" data-target="#group">Групи</a>
				</li>
			</ul>
			 <div class="collapse navbar-collapse">
	    	<ul class="nav navbar-nav  menu  ">
				<li>
				<a type="button" class=" bar" data-toggle="modal" data-target="#subject">Предмети</a>
				</li>
			</ul>
			 <div class="collapse navbar-collapse">
	    	<ul class="nav navbar-nav  menu  ">
				<li>
				<a type="button" class=" bar " data-toggle="modal" data-target="#teacher">Викладачі</a>
				</li>
			</ul>
			

	    </div>
	  </div>
	</nav>

<table  class="table table-bordered">
	<caption>Кабінеті</caption>
	 <thead >
    		<th >Група</th>
    		<th >К-сть</th>
    		<th >Видалити</th>
    		<th >Додати</th>
    		
    			
    	</thead>
    <tbody id="myStudents">
   
    </tbody>
</table>


   
   
    
    <script>
        $(function ()
        {
            $.get( "/actions/get.php", function( data ) 
            {
                      var table = JSON.parse(data);
                      
                      table.forEach(function (row)
                      {
                          $("#myStudents").append("<tr id='student_" + row.ID + "'><td >" + row.Nomer + "</td><td >" + row.Rozmir + "</td><td ><button class='btn' onclick='Delete(" + row.ID +")'>Delete</button></td><td><button class='btn' data-toggle='modal' data-target='#audet'  data-id='" + row.ID + "' data-name='" + row.Nomer + "' data-name='" + row.Rozmir + "'>Edit</button></td></tr>");
                      });
                    });
        })
    </script>
    
    

 



