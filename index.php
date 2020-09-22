<?php include('header.php'); ?>
<?php include('model.php'); ?>
    <!-- Slideshow container -->
  <div class="container-fluid slideshow-container">
    <div class="fontfeatures text-center pt-3 pb-5">
      <h3 class="text-capitalize">featured universities</h3>
    </div>
    <!-- Full-width images with number and caption text -->
      <div class="mySlidesfeatures">
        <div class="sliderfeatures">
          
        <div class="slideslogo">
        <a href="#"><img src="image/macquarieuniv.png" class="d-block img-fluid mx-auto pt-3"  alt="macquarieuniv"></a>
        </div>
        <div class="slideslogo">
        <a href="#"><img src="image/charlesuniv.png" class="d-block img-fluid mx-auto pt-3" alt="charlesuniv"></a>
        </div>
        <div class="slideslogo">
        <a href="#"><img src="image/newcastleuniv.png" class="d-block img-fluid mx-auto pt-3" alt="newcastleuniv"> </a>
        </div>
        <div class="slideslogo">
        <a href="#"><img src="image/latrobeuniv.png" class="d-block img-fluid mx-auto pt-3" alt="latrobeuniv"></a>
        </div>
      </div>
    </div>
    <div class="mySlidesfeatures">
      <div class="sliderfeatures">
      <div class="slideslogo">

      <a href="#"><img src="image/charlesuniv.png" class="d-block img-fluid mx-auto pt-3" alt="charlesuniv"></a>
      </div>
      <div class="slideslogo">
    <a href="#"><img src="image/macquarieuniv.png" class="d-block img-fluid mx-auto pt-3"  alt="macquarieuniv"></a>
      </div>
      <div class="slideslogo">
      <a href="#"><img src="image/newcastleuniv.png" class="d-block img-fluid mx-auto pt-3" alt="newcastleuniv"> </a>
      </div>
      <div class="slideslogo">
      <a href="#"><img src="image/latrobeuniv.png" class="d-block img-fluid mx-auto pt-3" alt="latrobeuniv"></a>
      </div>
    </div>
  </div>
  <div class="mySlidesfeatures">
    <div class="sliderfeatures">
    <div class="slideslogo">
    <a href="#"><img src="image/macquarieuniv.png" class="d-block img-fluid mx-auto pt-3"  alt="macquarieuniv"></a>
    </div>
    <div class="slideslogo">
    <a href="#"><img src="image/newcastleuniv.png" class="d-block img-fluid mx-auto pt-3" alt="newcastleuniv"> </a>
    </div>
    <div class="slideslogo">
    <a href="#"><img src="image/charlesuniv.png" class="d-block img-fluid mx-auto pt-3" alt="charlesuniv"></a>
    </div>
    <div class="slideslogo">
    <a href="#"><img src="image/latrobeuniv.png" class="d-block img-fluid mx-auto pt-3" alt="latrobeuniv"></a>
    </div>
  </div>
</div>
<div class="mySlidesfeatures">
  <div class="sliderfeatures">
  <div class="slideslogo">
  <a href="#"><img src="image/macquarieuniv.png" class="d-block img-fluid mx-auto pt-3"  alt="macquarieuniv"></a>
  </div>
  <div class="slideslogo">
  <a href="#"><img src="image/charlesuniv.png" class="d-block img-fluid mx-auto pt-3" alt="charlesuniv"></a>
  </div>
  <div class="slideslogo">
  <a href="#"><img src="image/latrobeuniv.png" class="d-block img-fluid mx-auto pt-3" alt="latrobeuniv"></a>
  </div>
  <div class="slideslogo">
  <a href="#"><img src="image/newcastleuniv.png" class="d-block img-fluid mx-auto pt-3" alt="newcastleuniv"> </a>
  </div>
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



  <div class="container-fluid bg-light pt-2 ourservices">
      <div class="page-header text-center ">
        <h3>Our services</h3>
          <p>Executive Trade International is an University Application Centre, guiding Bangladeshi students to Australian, British, Canadian and Irish universities!</p>
      </div>

      <div class="row justify-content-around mt-5 ml-5 mr-5 pr-5 pl-5  ">
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

    <div class="container-fluid bg-light  pt-2 pb-4 featurescarrousel">
      <div class="fontfeatures text-center ">
        <h3 class="text-capitalize mt-5 mb-5 ">News</h3>
        <p>Sunt autem nusquam hoc epicurus in gravissimo bello animadversionis metu degendae praesidia firmissima. Torquatos nostros? quos tu paulo ante cum teneam sententiam, quid bonum esse vult.</p>
      </div>
          <div id="carousel" class="carousel slide mt-5" data-interval="2000" data-ride="carousel" >
            <div class="carousel-inner ">
                  <div class="carousel-item active carouselimg">
                  <?php
                $news = $dB->query("SELECT `image`, `datearticle`, `titre` FROM `news`");
                  while($donnees = $news->fetch()){
              ?>
                  <div class="card  shadow shadow-xl  servicescards">
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
          			<div class="card  eventscards bg-white shadow  shadow-xl p-2 rowbgevents" style="width: 20rem;">
          			  <div class="card-body d-flex flex-row">
          				<div class="bg-secondary rounded text-white mr-3" height="50px" width="50px" alt="avatar">
          				  <p class="card-text">23 Déc</p>
          				</div>
          				<div>
          				  <h5 class="card-title font-weight-bold mb-2">Macquarie University, Sydney, Australia</h5>
          				</div>
          			  </div>
          				<p class="card-text">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
          				<a href="#" class="card-link ">Learn more → </a>
          				<p class="card-text"><i class="far fa-clock pr-2"></i> 10:00 AM 2:00 PM</p>
          			</div>
                  <div class="card eventscards bg-white shadow  shadow-xl p-2" style="width: 20rem;">
                    <div class="card-body d-flex flex-row">
                      <div class="bg-secondary rounded text-white mr-3" height="50px" width="50px" alt="avatar">
                        <p class="card-text">17 Oct</p>
                      </div>
                      <div>
                        <h5 class="card-title font-weight-bold mb-2">Federation University, Australia</h5>
                      </div>
                    </div>
                      <p class="card-text">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                      <a href="#" class="card-link ">Learn more → </a>
                      <p class="card-text"><i class="far fa-clock pr-2"></i> 10:00 AM 2:00 PM</p>
                  </div>
              </div>

              <div class="container slidereventscards">
                <div class="card  eventscards bg-white shadow  shadow-xl p-2 rowbgevents" style="width: 20rem;">
                  <div class="card-body d-flex flex-row">
                  <div class="bg-secondary rounded text-white mr-3" height="50px" width="50px" alt="avatar">
                    <p class="card-text">23 Déc</p>
                  </div>
                  <div>
                    </div>
                  </div>
                  <p class="card-text">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                  <a href="#" class="card-link ">Learn more → </a>
                  <p class="card-text"><i class="far fa-clock pr-2"></i> 10:00 AM 2:00 PM</p>
                </div>
                  <div class="card eventscards bg-white shadow  shadow-xl p-2" style="width: 20rem;">
                    <div class="card-body d-flex flex-row">
                      <div class="bg-secondary rounded text-white mr-3" height="50px" width="50px" alt="avatar">
                        <p class="card-text">17 Oct</p>
                      </div>
                      <div>
                        <h5 class="card-title font-weight-bold mb-2">Federation University, Australia</h5>
                      </div>
                    </div>
                      <p class="card-text">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                      <a href="#" class="card-link ">Learn more → </a>
                      <p class="card-text"><i class="far fa-clock pr-2"></i> 10:00 AM 2:00 PM</p>
                  </div>
                  <div class="card eventscards bg-white shadow  shadow-xl p-2" style="width: 20rem;">
                    <div class="card-body d-flex flex-row">
                      <div class="bg-secondary rounded text-white mr-3" height="50px" width="50px" alt="avatar">
                        <p class="card-text">17 Oct</p>
                      </div>
                      <div>
                        <h5 class="card-title font-weight-bold mb-2">Federation University, Australia</h5>
                      </div>
                    </div>
                      <p class="card-text">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.</p>
                      <a href="#" class="card-link ">Learn more → </a>
                      <p class="card-text"><i class="far fa-clock pr-2"></i> 10:00 AM 2:00 PM</p>
                  </div>
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
      <div class="container row row-cols-6 countriescontainer">
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
