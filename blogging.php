
<?php include('includes/header.php'); ?>

<script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js">

  </script>


	<div class="jumbotron">
    <form action="insert.php" method="post">
    <div class="input-group">
      <label for="title">Title</label>
		  	<input type="text" name="title" id="title" class="form-control" placeholder="Write title..." aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="input-group">
			<label for="story">Story</label>
		  	<textarea name="content" id="story" class="form-control" placeholder="Write your story here..." rows="10"></textarea>
		</div>
		<br>
		<div class="input-group">
			<input type="submit" value="Upload" class="btn btn-primary pull-right">
			
		</div>
    </form>
	</div>

<p id="footer"> hello World!</p>
<div id="commentBox">
  Leave a comment!
</div>
<script>

CKEDITOR.replace( 'content' ,{
	filebrowserBrowseUrl : '/BRiley/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	filebrowserUploadUrl : '/BRiley/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	filebrowserImageBrowseUrl : '/BRiley/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
});
</script>  

<?php include 'includes/footer.php'?>