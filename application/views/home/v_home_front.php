        <!-- TOP AREA -->
        <div class="top-area show-onload">
            <div class="bg-holder full">
                <div class="bg-front bg-front-mob-rel">
                    <div class="container">
                        <div class="search-tabs search-tabs-bg search-tabs-abs mt50">
                            <h1>Search and Save on Hotels</h1>
                            <div class="tabbable">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Hotels</span></a>
                                    </li>
                                    <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-plane"></i> <span >Flights</span></a>
                                    </li>
                                    <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-home"></i> <span >Rentals</span></a>
                                    </li>
                                    <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-car"></i> <span >Cars</span></a>
                                    </li>
                                    <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-bolt"></i> <span >Activities</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-1">
                                        <!-- <h2>Search and Save on Hotels</h2> -->
                                        <form>
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                <label>Where are you going?</label>
                                                <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                            </div>
                                            <div class="input-daterange" data-date-format="M d, D">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>Check-in</label>
                                                            <input class="form-control" name="start" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>Check-out</label>
                                                            <input class="form-control" name="end" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Rooms</label>
                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                <label class="btn btn-primary active">
                                                                    <input type="radio" name="options" />1</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />2</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3+</label>
                                                            </div>
                                                            <select class="form-control hidden">
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
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Guests</label>
                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                <label class="btn btn-primary active">
                                                                    <input type="radio" name="options" />1</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />2</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3+</label>
                                                            </div>
                                                            <select class="form-control hidden">
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
                                            </div>
                                            <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2">
                                        <h2>Search for Cheap Flights</h2>
                                        <form>
                                            <div class="tabbable">
                                                <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                                    <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                                                    </li>
                                                    <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="flight-search-1">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                    <label>From</label>
                                                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                    <label>To</label>
                                                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-daterange" data-date-format="M d, D">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                        <label>Departing</label>
                                                                        <input class="form-control" name="start" type="text" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                        <label>Returning</label>
                                                                        <input class="form-control" name="end" type="text" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-select-plus">
                                                                        <label>Passngers</label>
                                                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                            <label class="btn btn-primary active">
                                                                                <input type="radio" name="options" />1</label>
                                                                            <label class="btn btn-primary">
                                                                                <input type="radio" name="options" />2</label>
                                                                            <label class="btn btn-primary">
                                                                                <input type="radio" name="options" />3</label>
                                                                            <label class="btn btn-primary">
                                                                                <input type="radio" name="options" />3+</label>
                                                                        </div>
                                                                        <select class="form-control hidden">
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
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="flight-search-2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                    <label>From</label>
                                                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                    <label>To</label>
                                                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>Departing</label>
                                                                    <input class="date-pick form-control" data-date-format="M d, D" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                    <label>Passngers</label>
                                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                        <label class="btn btn-primary active">
                                                                            <input type="radio" name="options" />1</label>
                                                                        <label class="btn btn-primary">
                                                                            <input type="radio" name="options" />2</label>
                                                                        <label class="btn btn-primary">
                                                                            <input type="radio" name="options" />3</label>
                                                                        <label class="btn btn-primary">
                                                                            <input type="radio" name="options" />3+</label>
                                                                    </div>
                                                                    <select class="form-control hidden">
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
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-lg" type="submit">Search for Flights</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab-3">
                                        <h2>Find Your Perfect Home</h2>
                                        <form>
                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                <label>Where are you going?</label>
                                                <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                            </div>
                                            <div class="input-daterange" data-date-format="M d, D">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>Check-in</label>
                                                            <input class="form-control" name="start" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>Check-out</label>
                                                            <input class="form-control" name="end" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Rooms</label>
                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                <label class="btn btn-primary active">
                                                                    <input type="radio" name="options" />1</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />2</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3+</label>
                                                            </div>
                                                            <select class="form-control hidden">
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
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                            <label>Guests</label>
                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                <label class="btn btn-primary active">
                                                                    <input type="radio" name="options" />1</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />2</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3</label>
                                                                <label class="btn btn-primary">
                                                                    <input type="radio" name="options" />3+</label>
                                                            </div>
                                                            <select class="form-control hidden">
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
                                            </div>
                                            <button class="btn btn-primary btn-lg" type="submit">Search for Vacation Rentals</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab-4">
                                        <h2>Search for Cheap Rental Cars</h2>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>Pick-up Location</label>
                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>Drop-off Location</label>
                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-daterange" data-date-format="M d, D">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>Pick-up Date</label>
                                                            <input class="form-control" name="start" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                                            <label>Pick-up Time</label>
                                                            <input class="time-pick form-control" value="12:00 AM" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>Drop-off Date</label>
                                                            <input class="form-control" name="end" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                                            <label>Drop-off Time</label>
                                                            <input class="time-pick form-control" value="12:00 AM" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-lg" type="submit">Search for Rental Cars</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab-5">
                                        <h2>Search for Activities</h2>
                                        <form>
                                            <div class="input-daterange" data-date-format="M d, D">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label>Where are you going?</label>
                                                            <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>From</label>
                                                            <input class="form-control" name="start" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                            <label>To</label>
                                                            <input class="form-control" name="end" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-lg" type="submit">Search for Activities</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-slider owl-carousel-area visible-lg" id="owl-carousel-slider">
                    <div class="bg-holder full">
                        <div class="bg-mask"></div>
                        <div class="bg-blur" style="background-image:url(uploads/background/bg-1.jpg);"></div>
                        <div class="bg-content">
                            <div class="container">
                                <div class="loc-info text-right hidden-xs hidden-sm">
                                    <h3 class="loc-info-title"><img src="img/flags/32/fr.png" alt="Image Alternative text" title="Image Title" />Paris</h3>
                                    <p class="loc-info-weather"><span class="loc-info-weather-num">+25</span><i class="im im-cloudy loc-info-weather-icon"></i>
                                    </p>
                                    <ul class="loc-info-list">
                                        <li><a href="#"><i class="fa fa-building-o"></i> 125 Hotels from $42/night</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-home"></i> 270 Rentals from $60/night</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-car"></i> 109 Car Offers from $34/day</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bolt"></i> 195 Activities this Week</a>
                                        </li>
                                    </ul><a class="btn btn-white btn-ghost mt10" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-holder full">
                        <div class="bg-mask"></div>
                        <div class="bg-blur" style="background-image:url(uploads/background/bg-2.jpg);"></div>
                        <div class="bg-content">
                            <div class="container">
                                <div class="loc-info text-right hidden-xs hidden-sm">
                                    <h3 class="loc-info-title"><img src="img/flags/32/hu.png" alt="Image Alternative text" title="Image Title" />Budapest</h3>
                                    <p class="loc-info-weather"><span class="loc-info-weather-num">+31</span><i class="im im-cloudy loc-info-weather-icon"></i>
                                    </p>
                                    <ul class="loc-info-list">
                                        <li><a href="#"><i class="fa fa-building-o"></i> 256 Hotels from $49/night</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-home"></i> 190 Rentals from $58/night</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-car"></i> 193 Car Offers from $52/day</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bolt"></i> 170 Activities this Week</a>
                                        </li>
                                    </ul><a class="btn btn-white btn-ghost mt10" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-holder full">
                        <div class="bg-mask"></div>
                        <div class="bg-blur" style="background-image:url(uploads/background/bg-3.jpg);"></div>
                        <div class="bg-content">
                            <div class="container">
                                <div class="loc-info text-right hidden-xs hidden-sm">
                                    <h3 class="loc-info-title"><img src="img/flags/32/us.png" alt="Image Alternative text" title="Image Title" />Las Vegas</h3>
                                    <p class="loc-info-weather"><span class="loc-info-weather-num">+34</span><i class="im im-rain loc-info-weather-icon"></i>
                                    </p>
                                    <ul class="loc-info-list">
                                        <li><a href="#"><i class="fa fa-building-o"></i> 206 Hotels from $53/night</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-home"></i> 281 Rentals from $54/night</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-car"></i> 290 Car Offers from $31/day</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bolt"></i> 160 Activities this Week</a>
                                        </li>
                                    </ul><a class="btn btn-white btn-ghost mt10" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-img hidden-lg" style="background-image:url(uploads/background/bg-4.jpg);"></div>
                <div class="bg-mask hidden-lg"></div>
            </div>
        </div>
        <!-- END TOP AREA  -->

        <div class="gap"></div>


        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row row-wrap" data-gutter="120">
                        <div class="col-md-6">
                            <div class="mb30 thumb"><i class="fa fa-dollar box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                                <div class="thumb-caption">
                                    <h4 class="thumb-title">Best Price Guarantee</h4>
                                    <p class="thumb-desc">Habitant pulvinar nostra himenaeos pulvinar facilisi dui tincidunt luctus condimentum porttitor eros metus quisque scelerisque sollicitudin habitant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb30 thumb"><i class="fa fa-briefcase box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                                <div class="thumb-caption">
                                    <h4 class="thumb-title">Combine & Save</h4>
                                    <p class="thumb-desc">Hendrerit pretium magna ultricies massa dignissim mi praesent et justo sed platea est cras penatibus fermentum neque</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb30 thumb"><i class="fa fa-send box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                                <div class="thumb-caption">
                                    <h4 class="thumb-title">Best Destinations</h4>
                                    <p class="thumb-desc">Morbi vel nec sed imperdiet accumsan ultricies aliquet suspendisse placerat feugiat tellus platea fermentum eros in commodo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb30 thumb"><i class="fa fa-thumbs-o-up box-icon-left round box-icon-big box-icon-border animate-icon-top-to-bottom"></i>
                                <div class="thumb-caption">
                                    <h4 class="thumb-title">Best Travel Agent</h4>
                                    <p class="thumb-desc">Quisque porta dolor scelerisque gravida commodo in accumsan ullamcorper laoreet nam litora senectus diam sapien hac turpis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-holder">
            <div class="bg-mask"></div>
            <div class="bg-blur" style="background-image:url(img/1280x848.png);"></div>
            <div class="bg-content">
                <div class="container">
                    <div class="gap"></div>
                    <h1 class="text-center text-white mb20">Recent Reviews</h1>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <!-- START TESTIMONIAL -->
                            <div class="testimonial text-white">
                                <div class="testimonial-inner">
                                    <blockquote>
                                        <p>Eget penatibus hac tortor imperdiet ante elementum tellus vel habitant in laoreet aenean sapien penatibus</p>
                                    </blockquote>
                                </div>
                                <div class="testimonial-author">
                                    <img src="img/50x50.png" alt="Image Alternative text" title="Sevenly Shirts - June 2012  2" />
                                    <p class="testimonial-author-name">Alison Mackenzie</p><cite>on <a class="text-udl" href="#">Waldorf Astoria</a> hotel in New York</cite>
                                </div>
                            </div>
                            <!-- END TESTIMONIAL -->
                        </div>
                        <div class="col-md-4">
                            <!-- START TESTIMONIAL -->
                            <div class="testimonial text-white">
                                <div class="testimonial-inner">
                                    <blockquote>
                                        <p>Netus cum ornare massa blandit natoque dui volutpat lacus non volutpat enim praesent lobortis semper</p>
                                    </blockquote>
                                </div>
                                <div class="testimonial-author">
                                    <img src="img/50x50.png" alt="Image Alternative text" title="Flare lens flare" />
                                    <p class="testimonial-author-name">Cheryl Gustin</p><cite>on <a class="text-udl" href="#">Wellington</a> hotel in New York</cite>
                                </div>
                            </div>
                            <!-- END TESTIMONIAL -->
                        </div>
                        <div class="col-md-4">
                            <!-- START TESTIMONIAL -->
                            <div class="testimonial text-white">
                                <div class="testimonial-inner">
                                    <blockquote>
                                        <p>Aliquam vulputate velit penatibus elit gravida neque mollis purus vivamus habitasse iaculis nullam cras consectetur</p>
                                    </blockquote>
                                </div>
                                <div class="testimonial-author">
                                    <img src="img/50x50.png" alt="Image Alternative text" title="Afro" />
                                    <p class="testimonial-author-name">Sarah Slater</p><cite>on <a class="text-udl" href="#">Holiday</a> hotel in New York</cite>
                                </div>
                            </div>
                            <!-- END TESTIMONIAL -->
                        </div>
                    </div>
                    <div class="gap-small gap"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <h1 class="text-center mb20">Last Minute Deals</h1>
            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF library" />
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">The Benjamin</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> New York, NY (Chelsea)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$394</span><small> avg/night</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
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
                            <h5 class="thumb-title"><a class="text-darken" href="#">The London NYC</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> New York, NY (Chelsea)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$355</span><small> avg/night</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="hotel 1" />
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">InterContinental New York Barclay</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Ozone Park, NY (Kennedy Airport (JFK))</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$213</span><small> avg/night</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite2" />
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
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
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">Affinia Shelburne</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> Brooklyn, NY (Brooklyn)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$238</span><small> avg/night</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="hotel 2" />
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">New York Hilton Midtown</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> New York, NY (Midtown East)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$438</span><small> avg/night</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="hotel THE CLIFF BAY spa suite" />
                                <h5 class="hover-title-center">Book Now</h5>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <ul class="icon-group text-tiny text-color">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="thumb-title"><a class="text-darken" href="#">Wellington Hotel</a></h5>
                            <p class="mb0"><small><i class="fa fa-map-marker"></i> New York, NY (Downtown - Wall Street)</small>
                            </p>
                            <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$210</span><small> avg/night</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>