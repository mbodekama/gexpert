<?php 
        include 'header.php';
     ?>
        
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg2">
            <div class="container">
                <div class="inner-title">
                    <h3>Cable & Reseau</h3>
                    <ul>
                        <li>
                            <a href="index.html">Accueil</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Informatiques</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
        
        <!-- Blog Dtls -->
      <!-- About Area -->
        <div class="about-area pb-70 pt-100">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xxl-6">
                        <div class="about-content about-width">
                         
                            <h2>Nous vous accompagnons dans l'installation de votre cablage</h2>
                            <p>
                                Le câblage structuré est l'ensemble des techniques, méthodes et normes permettant de réaliser l'interconnexion physique des différents locaux d'une entreprise, d'un centre de données ou d'une zone plus large
                            </p>
                            <p>


                            </p>
                            <div class="about-btn">
                                <a href="#cn" class="know-more-btn">Plus d'info</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-xxl-6">
                        <div class="about-img-2">
                            <img src="assets/img/informatique/c&r2.jpg" alt="About Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About Area End -->

         <div class="contact-area ptb-45">
            <div class="section-title text-center" id="cn">
                <h2>Contactez nous</h2>
            </div>
            <div class="container">
                <div class="contact-wrap pt-45">
                    <div class="contact-wrap-form">
                         <form id="contactForm">
                             <div class="row">
                                 <div class="col-lg-6 col-sm-6">
                                     <div class="form-group">
                                         <input type="text" name="name" id="name" class="form-control" required data-error="Please entrer votre name" placeholder="Nom">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>

                                 <div class="col-lg-6 col-sm-6">
                                     <div class="form-group">
                                         <input type="text" name="anmet" id="anmet" class="form-control" required data-error="Please enter votre Prénoms" placeholder="Prénoms">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
 
                                 <div class="col-lg-6 col-sm-6">
                                     <div class="form-group">
                                         <input type="email" name="email" id="email" class="form-control" required data-error="Please entrer votre email" placeholder=" Email">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
 
                                 <div class="col-lg-6 col-sm-6">
                                     <div class="form-group">
                                         <input type="text" name="phone_number" id="phone_number" required data-error="Please entrer votre numéro" class="form-control" placeholder="Téléphone">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
 
                                 <div class="col-lg-12 col-md-12">
                                     <div class="form-group">
                                         <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write votre message" placeholder="Votre Message"></textarea>
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
 
                                 <div class="col-lg-12 col-md-12 text-center">
                                     <button type="submit" class="default-btn page-btn text-center">
                                         Envoyer
                                     </button>
                                     <div id="msgSubmit" class="h3 text-center hidden"></div>
                                     <div class="clearfix"></div>
                                 </div>
                             </div>
                         </form>
                    </div>
                 </div>
            </div>
        </div>
        
       <?php 

        include 'footer.php';
      ?>