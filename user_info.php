
<!-- Start UserInfo -->
	<div class="row">
		<div id="avatar-container" class="container col-3">
			<img class="img-thumbnail mx-auto d-block" src="https://via.placeholder.com/180x180">
		</div>
		<div class="col-7 container border-left">
			<div class="h1">Ten Nguoi Dung</div>
			<dl class="row">
				<dt class="col-3">Email</dt>
				<dd class="col-9">sample@email.com</dd>

				<dt class="col-3">Phone</dt>
				<dd class="col-9">+84123456789</dd>

				<dt class="col-3">Address</dt>
				<dd class="col-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>

			</dl>
		</div>
		<div class="col-2 border-left">
			<button class="btn" data-toggle="modal" data-target="#upload_book_form">Add Book</button>
		</div>
	</div>

	<!-- Upoad Book Modal -->
	<div class="modal fade" id="upload_book_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<form action="submit_book.php" method="post">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Upload Book</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

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