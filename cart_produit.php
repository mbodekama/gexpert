<?php 
        include 'header.php';
     ?>
        
        
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg6">
            <div class="container">
                <div class="inner-title">
                    <h3>Cart</h3>
                    <ul>
                        <li>
                            <a href="index.html">Accueil</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Table</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Start Cart Area -->
		<section class="cart-wraps-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<form>
							<div class="cart-wraps">
								<div class="cart-table table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th scope="col">Produit</th>
												<th scope="col">Nom produit</th>
												<th scope="col">Prix unitaire</th>
												<th scope="col">Quantité</th>
												<th scope="col">Totaux</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td class="product-thumbnail">
													<a href="<?=$prods[$i]['nom']?>">
														<img src="<?=$prods[$i]['img']?>" alt="Image">
													</a>
												</td>

												<td class="product-name">
													<a href="#">Package Design</a>
                                                </td>
                                                
												<td class="product-price">
													<span class="unit-amount">$35.00</span>
												</td>

												<td class="product-quantity">
													<div class="input-counter">
														<span class="minus-btn">
															<i class='bx bx-minus'></i>
														</span>
														<input type="text" value="1">
														<span class="plus-btn">
															<i class='bx bx-plus'></i>
														</span>
													</div>
												</td>

												<td class="product-subtotal">
													<span class="subtotal-amount">$35.00</span>

													<a href="#" class="remove">
														<i class='bx bx-trash'></i>
													</a>
												</td>
											</tr>

											<tr>
												<td class="product-thumbnail">
													<a href="#">
														<img src="assets/img/products/2.jpg" alt="Image">
													</a>
												</td>

												<td class="product-name">
													<a href="#">T-shirt Design</a>
												</td>

												<td class="product-price">
													<span class="unit-amount">$30.00</span>
												</td>

												<td class="product-quantity">
													<div class="input-counter">
														<span class="minus-btn">
															<i class='bx bx-minus'></i>
														</span>
														<input type="text" value="1">
														<span class="plus-btn">
															<i class='bx bx-plus'></i>
														</span>
													</div>
												</td>

												<td class="product-subtotal">
													<span class="subtotal-amount">$30.00</span>

													<a href="#" class="remove">
														<i class='bx bx-trash'></i>
													</a>
												</td>
											</tr>

											<tr>
												<td class="product-thumbnail">
													<a href="#">
														<img src="assets/img/products/3.jpg" alt="Image">
													</a>
												</td>

												<td class="product-name">
													<a href="#">Cover Van</a>
												</td>

												<td class="product-price">
													<span class="unit-amount"> $75.00</span>
												</td>

												<td class="product-quantity">
													<div class="input-counter">
														<span class="minus-btn">
															<i class='bx bx-minus'></i>
														</span>
														<input type="text" value="1">
														<span class="plus-btn">
															<i class='bx bx-plus'></i>
														</span>
													</div>
												</td>

												<td class="product-subtotal">
													<span class="subtotal-amount">$75.00</span>

													<a href="#" class="remove">
														<i class='bx bx-trash'></i>
													</a>
												</td>
											</tr>

											<tr>
												<td class="product-thumbnail">
													<a href="#">
														<img src="assets/img/products/4.jpg" alt="Image">
													</a>
												</td>

												<td class="product-name">
													<a href="#">Mug Design</a>
												</td>

												<td class="product-price">
													<span class="unit-amount">$25.00</span>
												</td>

												<td class="product-quantity">
													<div class="input-counter">
														<span class="minus-btn">
															<i class='bx bx-minus'></i>
														</span>
														<input type="text" value="1">
														<span class="plus-btn">
															<i class='bx bx-plus'></i>
														</span>
													</div>
												</td>

												<td class="product-subtotal">
													<span class="subtotal-amount">$25.00</span>

													<a href="#" class="remove">
														<i class='bx bx-trash'></i>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="cart-buttons">
									<div class="row align-items-center">
										<div class="col-lg-7 col-sm-7 col-md-7">
											<div class="continue-shopping-box">
												<a href="#" class="default-btn">
													Continue Shopping
												</a>
											</div>
										</div>

										<div class="col-lg-5 col-sm-5 col-md-5 text-end">
											<a href="#" class=" default-btn">
												Update Cart
											</a>
										</div>
									</div>
								</div>
                            </div>
                            
							<div class="row">
								<div class="col-lg-6">
									<div class="cart-calc">
										<div class="cart-wraps-form"> 
											<h3>Calculate Shipping</h3>
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<select>
															<option value="">Credit Card Type</option>
															<option value="">Another option</option>
															<option value="">A option</option>
														</select>	
													</div>
                                                </div>
												<div class="form-group col-lg-6">
													<input type="text" class="form-control" placeholder="Credit Card Number">
												</div>
												<div class="form-group col-12">
													<input type="text" class="form-control" placeholder="Card Verification Number">
												</div>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Coupon Code">
											</div>
											<ul>
											<li>Total <span><b>$160.00</b></span></li>
										</ul>
											<a href="#" class="default-btn">
												Apply Coupon
											</a>
										</div>
									</div>
                                </div>
                                
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End Cart Area -->

       <?php 

        include 'footer.php';
      ?>