<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
    <title>Test Book Form</title>
</head>
<body>
<form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="book_name">Tên sách</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="book_name" placeholder="Name of the book" name="book_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="author">Author</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="author" placeholder="Author name" name="author">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pub">Publisher</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pub" placeholder="Publisher" name="pub">
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="imgInp">Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    <input type="file" id="imgInp">
                </span>
            </span>
            <!-- <input type="text" class="form-control" readonly> -->
        </div>
        <img id='img-upload'/>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</body>
<script>
    $(document).ready( function() {
    	// $(document).on('change', '.btn-file :file', function() {
		// var input = $(this),
		// 	label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		// input.trigger('fileselect', [label]);
		// });

		// $('.btn-file :file').on('fileselect', function(event, label) {
		    
		//     var input = $(this).parents('.input-group').find(':text'),
		//         log = label;
		    
		//     if( input.length ) {
		//         input.val(log);
		//     } else {
		//         if( log ) alert(log);
		//     }
	    
		// });
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>
</html>