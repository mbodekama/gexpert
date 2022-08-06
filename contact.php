 <?php $contact ="class='active'" ?>
 <?php include 'header.php'; ?>


        
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg12">
            <div class="container">
                <div class="inner-title">
                    <h3>Contactez nous</h3>
                    <ul>
                        <li>
                            <a href="index.html">Acueil</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
                <div class="container">
                    <div class="row  pt-100">
                        <div class="col-lg-4 col-md-4 ">
                            <div class="footer-card">
                                <i class='bx bxl-telegram'></i>
                                <h3>info@gexpert-ci.com</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-card">
                                <i class='bx bxs-map'></i>
                                <h3>Côte d'ivoire, Bingerville,quartier Mitterand.</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-card">
                                <i class='bx bxs-phone-call'></i>
                                <h3 class="media-tel">
                                    <a href="tel:+2250709131395">+225 07 09 131 395 / 01 41 131 395</a> 
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Contact Area End -->
        <div class="contact-area ptb-100">
            <div class="section-title text-center">
                <span>Contactez nous</span>
                <h2>Votre Message</h2>
                <p>
                   veuillez remplir les champs pour nous soumettre vos préocupations!
                </p>
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
        <!-- Contact Area End -->
        
       <?php 

        include 'footer.php';
      ?>