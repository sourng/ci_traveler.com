        <div class="gap"></div>


        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Customer</h3>
                    <p>Sign in to your <a href="#">Traveler account</a> for fast booking.</p>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First & Last Name</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" checked/>Create Traveler account <small>(password will be send to your e-mail)</small>
                            </label>
                        </div>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="pp-img" src="<?php echo base_url();?>public/img/paypal.png" alt="Image Alternative text" title="Image Title" />
                            <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p><a class="btn btn-primary">Checkout via Paypal</a>	
                        </div>

                        <div class="col-md-6">
                            <h4>Pay via Credit/Debit Card</h4>
                            <form class="cc-form">
                                <div class="clearfix">
                                    <div class="form-group form-group-cc-number">
                                        <label>Card Number</label>
                                        <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text" /><span class="cc-card-icon"></span>
                                    </div>
                                    <div class="form-group form-group-cc-cvc">
                                        <label>CVC</label>
                                        <input class="form-control" placeholder="xxxx" type="text" />
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="form-group form-group-cc-name">
                                        <label>Cardholder Name</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                    <div class="form-group form-group-cc-date">
                                        <label>Valid Thru</label>
                                        <input class="form-control" placeholder="mm/yy" type="text" />
                                    </div>
                                </div>
                                <div class="checkbox checkbox-small">
                                    <label>
                                        <input class="i-check" type="checkbox" checked/>Add to My Cards</label>
                                </div>
                                <input class="btn btn-primary" type="submit" value="Proceed Payment" />
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="booking-item-payment">
                        <header class="clearfix">
                            <a class="booking-item-payment-img" href="#">
                                <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel 1" />
                            </a>
                            <h5 class="booking-item-payment-title"><a href="#">InterContinental New York Barclay</a></h5>
                            <ul class="icon-group booking-item-rating-stars">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </header>
                        <ul class="booking-item-payment-details">
                            <li>
                                <h5>Booking for 7 nights</h5>
                                <div class="booking-item-payment-date">
                                    <p class="booking-item-payment-date-day">April, 26</p>
                                    <p class="booking-item-payment-date-weekday">Saturday</p>
                                </div><i class="fa fa-arrow-right booking-item-payment-date-separator"></i>
                                <div class="booking-item-payment-date">
                                    <p class="booking-item-payment-date-day">May, 3</p>
                                    <p class="booking-item-payment-date-weekday">Saturday</p>
                                </div>
                            </li>
                            <li>
                                <h5>Room</h5>
                                <p class="booking-item-payment-item-title">Club LVL Water View Dbl/Dbl Premier Room</p>
                                <ul class="booking-item-payment-price">
                                    <li>
                                        <p class="booking-item-payment-price-title">7 Nights</p>
                                        <p class="booking-item-payment-price-amount">$150<small>/per day</small>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">Taxes</p>
                                        <p class="booking-item-payment-price-amount">$15<small>/per day</small>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p class="booking-item-payment-total">Total trip: <span>$1,155</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>



      