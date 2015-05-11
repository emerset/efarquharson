<?php include 'templates/includes/header.php';?>

<!-- LABELS
================================================== -->
   
<div class="navbar-spacing">&nbsp;</div>

<div class="labels" align="center">

      <h3>     	
        <a href="index.php" class="label <?php echo (isset($_GET['category'])) ? 'label-option' : 'label-select'; ?>">SHOW ALL</a>
        <?php foreach (getCategories() as $category) : ?>
        <a href="index.php?category=<?php echo $category->name ?>" class="label <?php echo selectLabel($category->name, $_GET['category']) ?>"><?php echo $category->name ?></a>
        <?php endforeach ?>
      </h3>

</div>      

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
      
<div class="label-spacing">&nbsp;</div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4 col-sm-4">
        <div align="center">
        <div class="block">        
          <a href="#"><img class="img-square" src="images/project/beethoven.jpg" alt="Generic placeholder image" width="100%" height="100%"></a>
          <div class="project-text">
          <a href="#">
          <h2>Project 1</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          </a>
          </div>
        </div>
        </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-sm-4">
        <div align="center">
        <div class="block">
          <a href="#">
          <img class="img-square" src="images/project/beethoven.jpg" alt="Generic placeholder image" width="100%" height="100%">
          </a>
          <div class="project-text">
            <a href="#">
            <h2>Project 2</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            </a>
          </div>
        </div>
        </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-sm-4">
        <div align="center">
        <div class="block">
          <img class="img-square" src="images/project/beethoven.jpg" alt="Generic placeholder image" width="100%" height="100%">
          <div class="project-text">
            <h2>Project 3</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          </div>
        </div>
        </div>
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->
      
            <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4 col-sm-4">
        <div align="center">
        <div class="block">
          <img class="img-square2" src="images/project/home6.jpg" alt="Generic placeholder image" width="100%" height="100%">
          <div class="project-text">
          	<h2>Project 4</h2>
          	<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          </div>
        </div>
        </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-sm-4">
        <div align="center">
        <div class="block">
          <img class="img-square2" src="images/project/home6.jpg" alt="Generic placeholder image" width="100%" height="100%">
          <div class="project-text">
          	<h2>Project 5</h2>
          	<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          </div>
        </div>
        </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-sm-4">
        <div align="center">
        <div class="block">
          <img class="img-square2" src="images/project/home6.jpg" alt="Generic placeholder image" width="100%" height="100%"">
          <div class="project-text">
          	<h2>Project 6</h2>
          	<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div>
        </div>
        </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
<?php include 'templates/includes/footer.php'; ?>
