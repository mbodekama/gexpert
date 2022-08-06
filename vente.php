<?php 
        include 'header.php';
     ?>
        
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg5">
            <div class="container">
                <div class="inner-title">
                    <h3>Vente de matériels Informatiques</h3>
                    <ul>
                        <li>
                            <a href="index.html">Accueil</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Product Area -->
        <section class="product-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Produits ventes</span>
                    <h2>Pour tous vos outils de travail</h2>
                    <p>
                        Sélectionner vos produits et recevez une cotation
                    </p>
                </div>

                <?php include 'connexion.php'; ?>
                
              


                <div class="row pt-45">
                    <?php 
                    for ($i=0; $i <count($prods) ; $i++) { 
                      
                     ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="produit_details.php?prd=<?=$prods[$i]['id']?>">
                                <img src="<?=$prods[$i]['img']?>" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="produit_details.php">
                                    <h6><?=$prods[$i]['nom']?></h6>
                                </a>
                                <p><span><?=$prods[$i]['prix']?></span> FCFA</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="bx bx-cart">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart_produit.php">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                    
                    
                </div>
            </div>
        </section>
        <!-- Product Area End -->

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
                                    <a href="#" class="get-btn">Commencer</a>
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
                                    <a href="#" class="get-btn">Commencer</a>
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
                                    <a href="#" class="get-btn">Commencer</a>
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

       <?php 
        include 'footer.php';
        ?>