 <div class="row">
                    <div class="col-md-7">
                        <div class="tabbable booking-details-tabbable">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-camera"></i>Photos</a>
                                </li>
                                <li><a href="#google-map-tab" data-toggle="tab"><i class="fa fa-map-marker"></i>On the Map</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">
                                    <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs">
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF living room" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite2" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel 2" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="The pool" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO luxury suite" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF library" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel THE CLIFF BAY spa suite" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel EDEN MAR suite" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel 1" />
                                        <img src="img/800x600.png" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO lobby" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY LIBERDADE" />
                                        <img src="<?php echo base_url();?>public/img/800x600.png" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO suite lhotel living room" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="google-map-tab">
                                    <div id="map-canvas" style="width:100%; height:500px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="booking-item-meta">
                            <h2 class="lh1em mt40">Exeptional!</h2>
                            <h3>97% <small >of guests recommend</small></h3>
                            <div class="booking-item-rating">
                                <ul class="icon-list icon-group booking-item-rating-stars">
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
                                </ul><span class="booking-item-rating-number"><b >4.7</b> of 5 <small class="text-smaller">guest rating</small></span>
                                <p><a class="text-default" href="#">based on 1535 reviews</a>
                                </p>
                            </div>
                        </div>
                        <div class="booking-item-dates-change">
                            <form>
                                <div class="input-daterange" data-date-format="MM d, DD">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
                                                <label>Check in</label>
                                                <input class="form-control" name="start" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
                                                <label>Check in</label>
                                                <input class="form-control" name="end" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group- form-group-select-plus">
                                            <label>Adults</label>
                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />1</label>
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="options" />2</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />3</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />4</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />4+</label>
                                            </div>
                                            <select class="form-control hidden">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option selected="selected">5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-select-plus">
                                            <label>Children</label>
                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="options" />0</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />1</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />2</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />3</label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" />3+</label>
                                            </div>
                                            <select class="form-control hidden">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option selected="selected">4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="gap gap-small"></div>   <a href="#" class="btn btn-primary btn-lg">Book Now</a>
                    </div>
                </div>