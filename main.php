<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('select').change(function(){
   var title = $(this).val(); 	
	// alert(title);
	  $.ajax({
                        url: 'process.php',
                        type: 'post',
                        data: {
                            "title": title,
                            
                        },
                        success: function(response) {
                           
                             $("#result").html(response);
                            
                        }
                    });
});
	});
</script>
</head>
<body>
<select name="titles" id="titles">
<option value="none">Select Title</option>
<option value="English">English</option>
<option value="Science">Science</option>
<option value="History">History</option>
</select>
	<div id="result"></div>
	
</body>