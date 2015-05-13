<?php include 'templates/includes/header.php';?>
<?php displayMessages($errors, $success); ?>

<h1 class="page-title">Send an Email</h1>

<div class="container">
<div class="row">
<div class="col-sm-offset-3 col-sm-6">
<form class="form-horizontal" action="contact.php" method="post">
<div class="form-group">
	<input type="text" class="form-control" name="name" placeholder="What's your name?" <?php if(isset($_POST['name'])) echo 'value="'.$_POST['name'].'"';?>>
</div>
<div class="form-group">
	<input type="email" class="form-control" name="email" placeholder="What's your email?" <?php if(isset($_POST['email'])) echo 'value="'.$_POST['email'].'"';?>>
</div>
<div class="form-group">
	<textarea class="form-control" rows="3" name="message" placeholder="Please leave your message"><?php if(isset($_POST['message'])) echo $_POST['message'];?></textarea>
</div>
<div class="form-group">
	<input class="btn btn-default pull-right" type="submit" name="submit" value="Send"> 
</div>


</form>
</div><!-- /row -->
</div>
</div>

<?php include 'templates/includes/footer.php'; ?>
