
     
    <?php 
        include 'header.php';
     ?>


        <!-- Home Slider -->
        <div class="home-slider owl-carousel owl-theme">

              <!-- Slider 1 -->
            <div class="slider-item bg-item1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-content">
                                <h1>G-EXPERT, la solution adaptée</h1>
                                <p>
                                  Nous vous fournissons de meilleurs solutions!
                                </p>
                                <div class="slider-btn">
                                    <a href="crea_logi.php" class="default-btn">Savoir plus</a>
                                    <a href="vente.php" class="default-btn active">Nos service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Slider 2 -->
            <div class="slider-item bg-item2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-content">
                                <h1>Besoin de matériel de bureau ?</h1>
                                <p>
                                    Chez nous la qualité fait la différence !
                                </p>
                                <div class="slider-btn">
                                    <a href="fourniture.php" class="default-btn">Savoir plus</a>
                                    <a href="vente.php" class="default-btn active">Nos produits</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider 3 -->
            <div class="slider-item bg-item3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-content">
                                <h1>Prestation informatique , communition...  </h1>
                                <p>
                                Faites nous confiance pour la qualité.
                                </p>
                                <div class="slider-btn">
                                    <a href="location_copieur.php" class="default-btn">Savoir plus</a>
                                    <a href="vente.php" class="default-btn active">Nos produits</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Slider End -->



        
        <!-- Product Images -->
        <div class="product-images ptb-100">
            <div class="container">
                <div class="product-images-slider owl-carousel owl-theme">
                    <div class="product-images-item">
                        <img src="assets/img/imgExpert/m2.jpg" alt="Images">
                    </div>
                    <div class="product-images-item">
                        <img src="assets/img/imgExpert/logi.jpg" alt="Images">
                    </div>
                    <div class="product-images-item">
                        <img src="assets/img/imgExpert/logic.jpg" alt="Images">
                    </div>
                    <div class="product-images-item">
                        <img src="assets/img/imgExpert/impri.jpg" alt="Images">
                    </div>
                    <div class="product-images-item">
                        <img src="assets/img/imgExpert/img4.jpg" alt="Images">
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Images End -->
        
        <h3>MEILLEURS VENTE ET NOUVEAUX PRODUITS</h3>

        
        <h3>SLIDE DE PUBLICITE</h3>

        <!-- Service Area -->
        <section class="service-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Services</span>
                    <h2>Nous fournissons des services de bonne qualité</h2>
                    <p>
                    
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card">
                            <a href="crea_logi.php">
                                <img src="assets/img/informatique/logic.jpg" alt="Service Images">
                            </a>
                            <div class="service-content">
                                <h3>INFORMATIQUE</h3>
                                
                                <center><button type="button" class="btn btn-warning btn-lg">Voir plus</button></center>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card">
                            <a href="maintenance.php">
                                <img src="assets/img/informatique/m1.jpg" alt="Service Images">
                            </a>
                            <div class="service-content">
                                <h3>DISTRIBUTION</h3>
        
                                <center><button type="button" class="btn btn-warning btn-lg">Voir plus</button></center>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-card">
                            <a href="elec_mena.php">
                                <img src="assets/img/informatique/e1.jpg" alt="Service Images">
                            </a>
                            <div class="service-content">
                              <h3>COMMUNICATION </h3>
                                
                                <center><button type="button" class="btn btn-warning btn-lg">Voir plus</button></center>

                            </div>
                        </div>
                    </div>
 

                     <div class="col-lg-3 col-md-6">
                        <div class="service-card">
                            <a href="sfourniture.php ">
                                <img src="assets/img/informatique/f1.jpg" alt="Service Images">
                            </a>
                            <div class="service-content">
                                <h3>SERVICES</h3>                            
                                <center><button type="button" class="btn btn-warning btn-lg">Voir plus</button></center>

                            </div>
                        </div>
                    </div>

           

                </div>
            </div>
        </section>
        <!-- Service Area End -->

        <section class="product-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Produits ventes</span>
                    <h2>Le meilleurs de l'équipement</h2>
                     
                </div>

                <div class="row pt-5">
                    
                    <?php for ($i=0; $i <9 ; $i++) { 
                    ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="produit_details.php?prd=322">
                                <img src="assets/img/service/catalogue/v1.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="produit_details.php">
                                    <h6></h6>
                                </a>
                                <p><span>5000</span> FCFA</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="bx bx-cart">
                                                <i class="bx bx-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart_produit.php">
                                                <i class="bx bx-cart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
        <div class="mb-5 d-flex justify-content-center">
        <button type="button" class="btn btn-warning btn-lg">Voir plus de produits</button>
            
        </div>
      </div>
  </section>


        <!-- About Area -->
        <div class="about-area pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xxl-6">
                        <div class="about-content about-width">
                            <span>A propos de nous</span>
                            <h2>Nous dirigeons notre agence depuis 15 ans</h2>
                            <p>
                                G-Expert est une entreprise commerciale et de prestations de services spécialisées dans le domaine Informatique, Distribution, Comunication et services en direction des PME/PMI.
                                Bénéficiant d'une expérience informatique et ayant accompagné la majorité de nos clients PME/PMI dans leur évolutions informatiques, nous sommes à même de vous proposer: un conseil ou un audit, la maintenance, la fourniture et l'installation de postes de travail et serveurs, la distribtion de consommable et logiciels, etc...
                            </p>
                           
                            <div class="about-btn">
                                <a href="apropos.php" class="know-more-btn">Savoir plus</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-xxl-6">
                        <div class="about-img-2">
                            <img src="assets/img/imgExpert/slide3.jpg" alt="About Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->

        <!-- Price Area -->
        <div class="price-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Tableau des prix</span>
                    <h2>Notre plan de tarification pré-prêt pour nos services</h2>
                    <p>
                        Pour plus de visibilité nous vous présentons nos différents prix.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-12 pt-45">
                        <div class="tabs-item-list">
                            <ul id="tabs-item" class="text-center">
                                <li class="active">
                                    <a href="#monthly" class="prices-tab">Mensuel</a>
                                </li> 
                                <li>
                                    <a href="#yearly" class="prices-tab">Annuel</a>
                                </li> 
                            </ul> 
                        </div>
                    </div>
                </div>
                <div id="prices-content">
                    <div id="monthly" class="active prices-content-area animated">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>Régime de base</span>
                                    <div class="single-price-title">
                                        <h2><sup>FCFA</sup>100000<sub>/Mois</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Branding</li>
                                        <li>Location de voiture</li>
                                        <li>Location de copieur</li>
                                        <li>Impression numérique</li>
                                        <li class="color-gray"><del>Maintenance informatique</del></li>
                                        
                                    </ul>
                                    <a href="#" class="get-btn">Commander</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Forfait standard</span>
                                    <div class="single-price-title">
                                        <h2><sup>FCFA</sup>600.000<sub>/Mois</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Branding</li>
                                        <li>Location de voiture</li>
                                        <li>Location de copieur</li>
                                        <li>Impression numérique</li>
                                        <li>Maintenance informatique</li>
                                        
                                    </ul>
                                    <a href="#" class="get-btn">Commander</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <span>Forfait Premium</span>
                                    <div class="single-price-title">
                                        <h2><sup>FCFA</sup>900.000<sub>/Mois</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Branding</li>
                                        <li>Location de voiture</li>
                                        <li>Location de copieur</li>
                                        <li>Impression numérique</li>
                                        <li>Maintenance informatique</li>
                                        
                                    </ul>
                                    <a href="#" class="get-btn">Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="yearly" class="animated prices-content-area">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>Régime de base</span>
                                    <div class="single-price-title">
                                        <h2><sup>FCFA</sup>700.000<sub>/Année</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Branding</li>
                                        <li>Location de voiture</li>
                                        <li>Location de copieur</li>
                                        <li>Impression numérique</li>
                                        <li> Maintenance informatique</li>
                                        
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Forfait standard</span>
                                    <div class="single-price-title">
                                        <h2><sup>FCFA</sup>1.200.000<sub>/Année</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Branding</li>
                                        <li>Location de voiture</li>
                                        <li>Location de copieur</li>
                                        <li>Impression numérique</li>
                                        <li>Maintenance informatique</li>
                                        >
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <span>Forfait Premium</span>
                                    <div class="single-price-title">
                                        <h2><sup>FCFA</sup>2.000.000<sub>/Année</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Branding</li>
                                        <li>Location de voiture</li>
                                        <li>Location de copieur</li>
                                        <li>Impression numérique</li>
                                        <li>Maintenance informatique</li>
                                        <li>Vector Art</li>
                                        <li> Print Ready Source</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price Area End -->

        <h1>MARQUES</h1>
        <!-- Choose Area -->
        <section class="choose-area ptb-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Pourquoi nous choisir</span>
                    <h2>G-EXPERT est un service d'impression de confiance</h2>
                    <p>
                     Nous choisir c'est de trouves des solutions à vos besoins
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-sm-6">
                        <div class="choose-card">
                            <i class='bx bx-box'></i>
                            <h3>Entreprise de confiance</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="choose-card">
                            <i class='bx bxs-coin-stack'></i>
                            <h3>Orienté budget</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="choose-card">
                            <i class='bx bxs-truck'></i>
                            <h3>Service rapide</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="choose-card">
                            <i class='bx bxl-creative-commons'></i>
                            <h3>Travail de qualité</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="choose-card">
                            <i class='bx bx-brush' ></i>
                            <h3>Impression d'urgence</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="choose-card">
                            <i class='bx bx-paint'></i>
                            <h3>Pré-impression</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="choose-card">
                            <i class='bx bx-like'></i>
                            <h3>Révisions de satisfaction</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="choose-card">
                            <i class='bx bx-money'></i>
                            <h3>Garantie</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Choose Area End -->
        
        
        
        
        
        
     <?php 

        include 'footer.php';
      ?>