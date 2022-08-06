<?php 
        include 'header.php';
     ?>
        
         <!-- Inner Banner -->
        <div class="inner-banner inner-bg9">
            <div class="container">
                <div class="inner-title">
                    <h3>Location de voiture</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
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
        
       <!-- Service Area -->
        <section class="service-area pb-70 pt-100" >
            <div class="container">
                <div class="section-title text-center">
                    <span>Services</span>
                    <h2>Nous mettons a votre disposition des voitures de qualités</h2>
                    <p>
                       N'hesitez pa a nous contactez!
                    </p>
                </div>
                <div class="service-slider owl-carousel owl-theme pt-45">
                    <div class="service-card">
                        <a href="services.html">
                            <img src="assets/img/service/vs1.jpg" alt="Service Images">
                        </a>
                    </div>

                    <div class="service-card">
                        <a href="services.html">
                            <img src="assets/img/service/vs2.jpg" alt="Service Images">
                        </a>
                    </div>

                    <div class="service-card">
                        <a href="services.html">
                            <img src="assets/img/service/vs3.jpg" alt="Service Images">
                        </a>
                    </div>

                    <div class="service-card">
                        <a href="services.html">
                            <img src="assets/img/service/vs7.jpg" alt="Service Images">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Area End -->

        <!-- About Area End -->

         <div class="contact-area ptb-45">
            <div class="section-title text-center">
                <h2>Contactez nous pour plus de details</h2>
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