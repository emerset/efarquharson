<?php include 'templates/includes/header.php';?>

<?php $project_id = $_GET['id']; ?>

<!-- TITLE
================================================== -->

<h1 class="page-title"><?php echo getProject($project_id)->title ?></h1>
<h3 class="project-subtitle"><?php echo getProject($project_id)->subtitle ?></h3>

<!-- PROJECT EXAMPLES
================================================== -->

<div class="container marketing">
      <!-- Three columns of text -->
      
      <div class="row">

      <?php foreach (getExamplesByProj($project_id) as $example) : ?>
		
      	<div class="col-lg-4 col-sm-4">
        <div align="center">
        <div class="block">        
          <img class="img-square" src="images/example/<?php echo $example->image ?>" width="100%" height="100%">
          <div class="project-text">
          <h3><?php echo $example->title ?></h3>
          <p><?php echo $example->subtitle ?></p>
          <a href="<?php echo $example->githubcode ?>" class="btn btn-primary" target="_blank">GitHub Code</a>
          </div>
        </div>
        </div>
        </div><!-- /.col-lg-4 -->
        
        <?php endforeach;?>
                
      </div><!-- /.row -->
      </div>

<?php include 'templates/includes/footer.php'; ?>
