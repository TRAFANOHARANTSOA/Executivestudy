<?php include('header.php'); ?>
<?php include('model.php'); ?>

<div class="headerbg">
    <div class="container row titlerow">
    <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10  headertitle  ">
      <h1>We Help to <span>Build</span> Your Dream</h1>
    </div>
    <div class="container headerbtn">
      <button type="button" class="btn  btn-lg">Apply online →</button>
    </div>
    <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10 headerfavicons">
      <a href="#"><img src="image/facebook.png" alt=""></a>
      <a href="#"><img src="image/twitter.png" alt=""></a>
      <a href="#"> <img src="image/insta.png" alt=""></a>
    </div>
  </div>
</div>

    <!-- Slideshow container -->
  <div class="container-fluid slideshow-container">
    <div class="fontfeatures text-center pt-3 pb-5">
      <h3 class="text-capitalize">featured universities</h3>
    </div>
    <!-- Full-width images with number and caption text -->
      <div class="mySlidesfeatures">
        <div class="sliderfeatures">
          <?php
        $featured = $dB->query("SELECT `image` FROM `featured`");
          while($donnees = $featured->fetch()){
      ?>
        <div class="slideslogo">
        <a href="#"><img src="image/<?php echo $donnees['image'];?>" class="d-block img-fluid mx-auto pt-3"  alt="macquarieuniv"></a>
        </div>
        <?php } $featured->closeCursor(); ?>
      </div>
    </div>

  <!-- The dots/circles -->
  <div class="container text-center">
    <span class="dot dotfeatures" onclick="currentSlide(1)"></span>
    <span class="dot dotfeatures" onclick="currentSlide(2)"></span>
    <span class="dot dotfeatures" onclick="currentSlide(3)"></span>
    <span class="dot dotfeatures" onclick="currentSlide(4)"></span>
  </div>
</div>

<!--<?php
/*$services = $dB->query("SELECT `icone`, `titre`, `contenu` FROM `services`");
  while($donnees = $services->fetch()){*/
?>
<div class="slideslogo">
<a href="#"><img src="image/<?php/* echo $donnees['image'];*/?>" class="d-block img-fluid mx-auto pt-3"  alt="macquarieuniv"></a>
</div>
<?php /*} $services->closeCursor(); */?>-->

  <div class="container-fluid bg-light pt-2 ourservices">
      <div class="page-header text-center ">
        <h3>Our services</h3>
          <p>Executive Trade International is an University Application Centre, guiding Bangladeshi students to Australian, British, Canadian and Irish universities!</p>
      </div>

      <div class="row justify-content-around ourservicesrow ">
              <?php
            $services = $dB->query("SELECT `icone`, `titre`, `contenu` FROM `services`");
              while($donnees = $services->fetch()){
          ?>
            <div class="card  shadow shadow-xl  servicescards">
              <div class="card-body">
                <img src="image/<?php echo $donnees['icone'];?>">
                <h4 class="card-subtitle mb-2 text-muted"><?php echo $donnees['titre'];?></h4>
                <p class="card-text"><?php echo $donnees['contenu'];?></p>
                <a href="#" class="card-link ">Learn more → </a>
              </div>
            </div>
          <?php } $services->closeCursor(); ?>
        </div>
      </div>

    <div class="container-fluid bg-light  pt-2 pb-4 newscarousel">
      <div class="fontfeatures text-center ">
        <h3 class="text-capitalize mt-5 mb-5 ">News</h3>
        <p>Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
      </div>
          <div id="carousel" class="carousel slide newscarouselcontainer" data-interval="2000" data-ride="carousel" >
            <div class="carousel-inner ">
              <div class="carousel-item active carouselimg newscarouselitem">
                  <?php
                $news = $dB->query("SELECT `image`, `datearticle`, `titre` FROM `news`");
                  while($donnees = $news->fetch()){?>
                  <div class="card  shadow shadow-xl  newscards">
                    <div class="card-body">
                      <img src="image/<?php echo $donnees['image'];?>">
                      <p class="card-text"><?php echo $donnees['datearticle'];?></p>
                      <h4 class="card-subtitle mb-2 text-muted"><?php echo $donnees['titre'];?></h4>
                    <a href="#" class="card-link ">Learn more → </a>
                    </div>
                  </div>
                <?php } $news->closeCursor(); ?>
                  </div>
                <a class="carousel-control-prev " href="#carousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
      </div>
      <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10  newsbtn">
          <button type="button" class="btn  btn-lg">Join here  → </button>
      </div>
    </div>

    <div class="container-fluid slideshow-container events">
        <div class="fontfeatures text-center pt-3 pb-5">
          <h3>Upcoming University Events</h3>
          <p>Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
        </div>
        <!-- Full-width images with number and caption text -->
          <div class="container mySlidesevents">
            <div class="container sliderevents">
              <div class="container slidereventscards">
                <?php
              $events = $dB->query("SELECT `date`, `titre`,`contenu`, `horaires` FROM `events`");
                while($donnees = $events->fetch()){?>
          			<div class="card  eventscards bg-white shadow  shadow-xl p-2">
          			  <div class="card-body d-flex flex-row ">
          				<div class="bg-secondary rounded text-white mr-3" height="50px" width="50px" alt="avatar">
          				  <p class="card-text text-center mt-1"><?php echo $donnees['date'];?></p>
          				</div>
          				<div>
          				  <h5 class="card-title font-weight-bold mb-2"><?php echo $donnees['titre'];?></h5>
          				</div>
          			  </div>
          				<p class="card-text mr-3 ml-3"><?php echo $donnees['contenu'];?></p>
                  <div class="cardfootevents">
                    <a href="#" class="card-link ">Learn more → </a>
            				<p class="card-text"><i class="far fa-clock pr-2"></i><?php echo $donnees['horaires'];?></p>
                  </div>
          			</div>
                <?php } $events->closeCursor(); ?>
              </div>
            </div>
          </div>

      <!-- The dots/circles -->
      <div class="container text-center">
        <span class="dot dotevents" onclick="currentSlide(1)"></span>
        <span class="dot dotevents" onclick="currentSlide(2)"></span>
        <span class="dot dotevents" onclick="currentSlide(3)"></span>
        <span class="dot dotevents" onclick="currentSlide(4)"></span>
      </div>
    </div>

    <div class="container-fluid bg-light pt-2 countries">
          <div class="page-header text-center ">
            <h3>Countries We Covered</h3>
            <p>Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
          </div>
      <div class="row countriescontainer">
        <?php
          $countries = $dB->query("SELECT `image`, `titre`, `contenu` FROM `countries`");
            while($donnees = $countries->fetch()){
        ?>
          <div class="card countriescards bg-light">
            <img src="image/<?php echo $donnees['image'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-text"><?php echo $donnees['titre'];?></h4>
                <p class="card-text"><?php echo $donnees['contenu'];?></p>
            </div>
          </div>
        <?php } $countries->closeCursor(); ?>
      </div>
      <div class="container text-center mt-5 ">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
      </div>
  </div>



      <div class="container-fluid bg-light  pt-2">
          <div class="page-header text-center mt-5">
            <h3>Testimonial</h3>
            <p>Torquem detraxit hosti et quidem faciunt, ut et negent satis esse appetendum, alterum. Si sine causa? quae fuerit causa, mox videro; interea hoc epicurus in liberos.</p>
          </div>
          <div class="row justify-content-around mt-5 mr-5 ml-5 ">
            <?php
              $testimonial = $dB->query("SELECT `image`, `prenom`, `nom` , `metier`, `contenu` FROM `testimonial`");
                while($donnees = $testimonial->fetch()){
            ?>
            <div class="card testimonialscards p-2" style="width: 20rem;">
              <div class="card-body d-flex flex-row">
                <img src="image/<?php echo $donnees['image'];?>" class="rectangle-circle mr-3" height="50px" width="50px" alt="avatar">
                <div>
                  <h4 class="card-title font-weight-bold mb-2"><?php echo $donnees['prenom'];?><?php echo $donnees['nom'];?></h4>
                  <p class="card-text"><?php echo $donnees['metier'];?></p>
                </div>
              </div>
                <p class="card-text"><?php echo $donnees['contenu'];?></p>
            </div>
          <?php } $testimonial->closeCursor(); ?>
          </div>
          <div class="container text-center mt-5">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
          </div>
        </div>

<div class="row justify-content-around mt-5 mr-5 ml-5 ">
  <div class="">
    <h3>Ready to chase your dreams?</h3>
  </div>

  <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10  readybtn">
    <button type="button" class="btn  btn-lg">Apply Online →  </button>
  </div>
</div>

<?php
/*function thenewstitle(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$dB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }
}
  $stmt = $dB->prepare("SELECT `titre` FROM `news` WHERE 1");
  $stmt->execute();
  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
}
thenewstitle()*/
?>


<?php include('footer.php'); ?>
