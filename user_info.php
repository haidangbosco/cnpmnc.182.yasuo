	<!-- Start UserInfo -->
	<div class="card pt-3	">
		<div class="row">
			<div id="avatar-container" class="container col-3">
				<img class="img-thumbnail mx-auto d-block" src="http://i.imgur.com/HQ3YU7n.gif">
			</div>
			<div class="col-7 container border-left">
				<div class="h1"><?php echo $author['fullname']; ?></div>
				<dl class="row">
					<dt class="col-3">Email</dt>
					<dd class="col-9"><?php echo $author['email']; ?></dd>


				<dt class="col-3">Phone</dt>
				<dd class="col-9">+<?php echo $author['phone']?></dd>

				<dt class="col-3">Address</dt>
				<dd class="col-9"><?php echo $author['address']?></dd>

			</dl>
		</div>
		<?php if ($_GET['id']==$_SESSION['user_data']['id']){?>
		<div class="col-2 border-left">
			<button class="btn" data-toggle="modal" data-target="#upload_book_form">Add Book</button>
		</div>
	<?php }?>
	</div>

	<!-- Upoad Book Modal -->
	<div class="modal fade" id="upload_book_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<form action="submit_book.php" method="post" class="form-inline">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Upload Book</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

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
					<label class="control-label col-sm-2" for="year">Year</label>
					<div class="col-sm-10">          
						<input type="number" class="form-control" id="year" placeholder="Publish year" name="year">
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-2" for="category">Category</label>
					<div class="col-sm-10">          
						<select class="form-control" id="category" name="category">
				      <option value="Truyen Ngan">Truyen Ngan</option>
				      <option value="Truyen Dai">Truyen Dai</option>
				    </select>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-2" for="pub">Publisher</label>
					<div class="col-sm-10">          
						<input type="text" class="form-control-plaintext" placeholder="Publisher" 
						value=<?php echo '"'.$author['fullname'].'"';?> disabled="">
					</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="imgInpT">Image URL</label>
						<input type="text" class="form-control" id="imgInpT" placeholder="URL" name="imgInpT">
						<div class="input-group" hidden>
							<span class="input-group-btn">
								<span class="btn btn-default btn-file">
									<input type="file" id="imgInp" name="imgInp">
								</span>
							</span>
							<!-- <input type="text" class="form-control" readonly> -->
						</div>
						<img id='img-upload' class="img-thumbnail col-6" hidden="" />
					</div>

					
		      </div>
		      <div class="modal-footer">
		        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Cancel">
		        <input name="submit" type="submit" class="btn btn-primary" value="Upload">
		      </div>
		    </div>
		  </div>
	  </form>
	</div>
<!-- End UserInfo -->
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