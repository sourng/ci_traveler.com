   <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="#">United States</a>
                </li>
                <li><a href="#">New York (NY)</a>
                </li>
                <li><a href="#">New York City</a>
                </li>
                <li class="active">New York City Hotels</li>
            </ul>

            <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
                <h3>Search for Hotel</h3>
                <form>
                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-highlight"></i>
                        <label>Where are you going?</label>
                        <input class="typeahead form-control" placeholder="City, Airport, Point of Interest, Hotel Name or U.S. Zip Code" type="text" />
                    </div>
                    <div class="input-daterange" data-date-format="M d, D">
                        <div class="row">
                            <?php
                                if(isset($check)){
                                    $this->load->view($check);
                                }
                            ?>
                            
                            <?php
                                if(isset($room)){
                                    $this->load->view($room);
                                }
                            ?>
                            <?php
                                if(isset($guests)){
                                    $this->load->view($guests);
                                }
                            ?>
                            
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
                </form>
            </div>

            <h3 class="booking-title">521 hotels in New York on Mar 22 - Apr 17 for 1 adult</h3>
            <form class="booking-item-dates-change mb40">
                <div class="row">
                    <div class="col-md-4">
                        <?php
                            if(isset($where)){
                                $this->load->view($where);
                            }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <div class="input-daterange" data-date-format="MM d, D">
                            <div class="row">
                                <?php
                                    if(isset($check)){
                                        $this->load->view($check);
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <?php
                                if(isset($guests)){
                                    $this->load->view($guests);
                                }
                            ?>
                        
                            <?php
                                if(isset($room)){
                                    $this->load->view($room);
                                }
                            ?>
                        
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-3">                  
                        
                        <?php
                            if(isset($menu_left_hotel)){
                                $this->load->view($menu_left_hotel);
                            }
                        ?>
                    
                </div>
                <div class="col-md-9">
                    <div class="nav-drop booking-sort">
                        <h5 class="booking-sort-title"><a href="#">Sort: Aviability<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
                        <ul class="nav-drop-menu">
                            <li><a href="#">Price (low to high)</a>
                            </li>
                            <li><a href="#">Price (hight to low)</a>
                            </li>
                            <li><a href="#">Ranking</a>
                            </li>
                            <li><a href="#">Distance</a>
                            </li>
                            <li><a href="#">Number of Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="booking-list">
                        <?php
                            for($i=1;$i<=10;$i++){
                                ?>
                                   <li>
                            <a class="booking-item" href="#">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="img/800x600.png" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO suite lhotel living room" />
                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>28</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="booking-item-rating">
                                            <ul class="icon-group booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul><span class="booking-item-rating-number"><b >3.9</b> of 5</span><small>(1199 reviews)</small>
                                        </div>
                                        <h5 class="booking-item-title">Bryant Park Hotel</h5>
                                        <p class="booking-item-address"><i class="fa fa-map-marker"></i> East Elmhurst, NY (LaGuardia Airport (LGA))</p><small class="booking-item-last-booked">Latest booking: 58 minutes ago</small>
                                    </div>
                                    <div class="col-md-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$391</span><span>/night</span><span class="btn btn-primary">Book Now</span>
                                    </div>
                                </div>
                            </a>
                        </li> 
                                <?php
                            }
                        ?>                
                    </ul>


                    <div class="row">
                        <div class="col-md-6">
                            <p><small>521 hotels found in New York. &nbsp;&nbsp;Showing 1 – 15</small>
                            </p>
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#">6</a>
                                </li>
                                <li><a href="#">7</a>
                                </li>
                                <li class="dots">...</li>
                                <li><a href="#">43</a>
                                </li>
                                <li class="next"><a href="#">Next Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Not what you're looking for? <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Try your search again</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>
