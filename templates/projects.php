<?php include 'templates/includes/header.php';?>

<!-- LABELS
================================================== -->
   


<div class="labels" align="center">
<?php if (!isset($_GET['category'])){
		$get_category = '';
		} else {
		$get_category = $_GET['category']; }
?>
      <h3 class="projectlabels">     	
        <a href="index.php" class="label <?php echo (isset($_GET['category'])) ? 'label-option' : 'label-select'; ?>">SHOW ALL</a>
        <?php foreach (getCategories() as $category) : ?>
        <a href="index.php?category=<?php echo $category->name ?>" class="label <?php echo selectLabel($category->name, $get_category) ?>"><?php echo $category->name ?></a>
        <?php endforeach ?>
      </h3>

</div>      
<div class="label-spacing">&nbsp;</div>

    <!-- PROJECTS
    ================================================== -->
      


    <div class="container marketing">
      <!-- Three columns of text -->
      
      <div class="row">
      <?php $counter = 2 ?>
      <?php foreach (getProjects() as $project) : ?>
		
      	<div class="col-lg-4 col-sm-4">
        <div align="center">
        <div class="block">        
          <a href="project.php?id=<?php echo $project->id ?>"><img class="img-square" src="images/project/<?php echo $project->image ?>" width="100%" height="100%"></a>
          <div class="project-text">
          <a href="project.php?id=<?php echo $project->id ?>">
          <h3><?php echo $project->title ?></h3>
          <p><?php echo $project->subtitle ?></p>
          </a>
          </div>
        </div>
        </div>
        </div><!-- /.col-lg-4 -->
        
        <?php if ($counter % 3 == 1) { echo '</div><div class="row">'; }
        $counter++; ?>
        
        <?php endforeach;?>
        
        
      </div><!-- /.row -->
      

<?php include 'templates/includes/footer.php'; ?>
