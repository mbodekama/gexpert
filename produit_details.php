<?php 
        include 'header.php';

        //Recuperation des donnes issus du formulaire
        //Variable superglobales GET / POST
        $idPrd = $_GET['prd'];
         include 'connexion.php';


                $requete =$bdd->prepare('SELECT * FROM produits WHERE id=?');
                $requete->execute([$idPrd]);

                $prods =$requete->fetch();



                 ?>
        
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg10">
            <div class="container">
                <div class="inner-title">
                    <h3>Product Details </h3>
                    <ul>
                        <li>
                            <a href="index.html">Accueil</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Services détails </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Product Detls -->
        <section class="product-detls ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="product-detls-image">
                            <img src="<?=$prods['img']?>" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="product-desc">
                            <h3><?=$prods['nom']?></h3>
                            <div class="price">
                                <span class="new-price"><?=$prods['prix']?> FCFA</span>
                            </div>

                            <div class="product-review">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                            </div>
                            <p>
                               <?=$prods['description']?>
                            </p>

                            <div class="input-count-area">
                                <h3><?=$prods['qte']?></h3>
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>
                            </div>
                
                            <div class="product-add">
                                <form action="cart_produit.php" method="POST" class="d-inline">
                                    <input type="hidden" name="idPrd" value="<?=$prods['id']?>">
                                    <button type="submit" class="default-btn">
                                        <i class="fas fa-cart-plus"></i> Acheter
                                    </button>
                                </form>
                                <button type="submit" class="default-btn" id="addCart">
                                    <i class="fas fa-cart-plus"  ></i> Ajouter au panier
                                </button>
                            
                            </div>

                            <div class="product-share">
                                <ul>
                                    <li>
                                        <span>Share:</span>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook' ></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                   <div class="col-lg-12 col-md-12">
                        <div class="tab product-detls-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#"> Description</a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">Additional information </a>
                                        </li>

                                        <li>
                                            <a href="#"> Reviews </a>
                                       </li>
                                    </ul>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <div class="tab_content current active">
                                        <div class="tabs_item current">
                                            <div class="product-detls-tab-content">
                                                <p>
                                                    Design inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                    Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar
                                                    odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula 
                                                    volutpat condimentum.  Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla
                                                    libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod
                                                    ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nam
                                                    consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, 
                                                    fermentum bibendum enim nibh eget ipsum. Nulla libero. Vivamus pharetra posuere sapien.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="product-detls-tab-content">
                                                <ul class="additional-information">
                                                    <li><span>SKU:</span>12</li>
                                                    <li><span>Category:</span>Business</li>
                                                    <li><span>Size:</span> Large, Medium</li>
                                                    <li><span>Tag:</span>Book Cover</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tabs_item">
                                            <div class="product-detls-tab-content">
                                                <div class="product-review-form">
                                                    <h3>Customer Reviews</h3>
                                                    <div class="review-title">
                                                        <div class="rating">
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star-half'></i>
                                                        </div>
                                                        <p>Based on 3 reviews</p>
                                                        <a href="#" class="default-btn btn-right">Write a Review <span></span></a>
                                                    </div>

                                                    <div class="review-comments">
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star-half'></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>June 21, 2020</strong></span>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                Ut enim ad minim veniam, quis nostrud exercitation.
                                                            </p>
                                                            <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                        </div>

                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star-half'></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>June 21, 2020</strong></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                            <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                        </div>

                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star'></i>
                                                                <i class='bx bxs-star-half'></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>June 21, 2020</strong></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                            <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                        </div>
                                                    </div>

                                                    <div class="review-form">
                                                        <h3>Write a Review</h3>
                                                        <div class="contact-wrap-form">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="col-lg-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="col-lg-12 col-md-12">
                                                                        <button type="submit" class="default-btn page-btn">
                                                                            Submit Review
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Detls End -->
        
       <?php 

        include 'footer.php';
      ?>



      <!-- JQUERY  -->

      <script type="text/javascript">
          let btn= $('#addCart');
          btn.click(function()
          {
            let panier = $('#panier');
            panier.text(parseInt(panier.text())+ 1);
         })

      </script>