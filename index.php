<!doctype html>
<html lang="en">

<head>
	<title>Add or Remove Input Fields Dynamically</title>
	<link rel="stylesheet"
		href=
"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet"
		href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src=
"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<style>
		body {
			display: flex;
			flex-direction: column;
			margin-top: 1%;
			justify-content: center;
			align-items: center;
		}

		#rowAdder {
			margin-left: 17px;
		}
	</style>
</head>

<body>
	<h2 style="color:green">GeeksforGeeks</h2>
	<strong> 
		Adding and Deleting Input fields Dynamically
	</strong>
	<div style="width:40%;">
		<form action="save.php" method="post">
        <div class="field_wrapper">
    <div>
        <input type="text" name="student[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><span>+</span></a>
    </div>
</div>

            <button class="btn btn-success" type="submit">Save</button>
		</form>
	</div>
    <script>
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="student[]" value=""/><a href="javascript:void(0);" class="remove_button"><span>-</span></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });
    
    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });
});
</script>
</body>
</html>
