		<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top border-bottom" data-aos="fade-down">
		    <div class="container">
		        <a class="navbar-brand pt-3" href="#">
		            <img src="<?php echo base_url() . 'images/logo.svg'; ?>" />
		        </a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarResponsive">
		            <ul class="navbar-nav ml-auto">
		                <li class="nav-item active">
		                    <a class="nav-link" href="#">Home </a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link" href="#">Categories</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link" href="#">Rewards</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link" href="#">My Account</a>
		                </li>
		                <li class="nav-item">
		                    <a class="btn btn-sign-in nav-link px-4 text-white" href="#">Sign In
		                    </a>
		                </li>
		            </ul>
		        </div>
		    </div>
		</nav>

		<div class="page-content page-home">
		    <section class="store-carousel">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-12 pt-3" data-aos="zoom-in">
		                    <div id="storeCarousel" class="carousel slide" data-ride="carousel">
		                        <ol class="carousel-indicators">
		                            <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
		                            <li data-target="#storeCarousel" data-slide-to="1"></li>
		                            <li data-target="#storeCarousel" data-slide-to="2"></li>
		                        </ol>
		                        <div class="carousel-inner">
		                            <div class="carousel-item active">
		                                <img src="<?php echo base_url() . 'images/banner.jpg'; ?>" class="d-block w-100" alt="Carousel Image" />
		                            </div>
		                            <div class="carousel-item">
		                                <img src="<?php echo base_url() . 'images/banner.jpg'; ?>" class="d-block w-100" alt="Carousel Image" />
		                            </div>
		                            <div class="carousel-item">
		                                <img src="<?php echo base_url() . 'images/banner.jpg'; ?>" class="d-block w-100" alt="Carousel Image" />
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		    <section class="store-trend-categories">
		        <div class="container">
		            <div class="row">
		                <div class="col-12" data-aos="fade-up">
		                    <h5>Trend Categories</h5>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
		                    <a class="component-categories d-block" href="#">
		                        <div class="categories-image">
		                            <img src="<?php echo base_url() . 'images/categories-gadgets.svg'; ?>" alt="Gadgets Categories" class="w-100" />
		                        </div>
		                        <p class="categories-text">Gadgets</p>
		                    </a>
		                </div>
		                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
		                    <a class="component-categories d-block" href="#">
		                        <div class="categories-image">
		                            <img src="<?php echo base_url() . 'images/categories-furniture.svg'; ?>" alt="Furniture Categories" class="w-100" />
		                        </div>
		                        <p class="categories-text">Furniture</p>
		                    </a>
		                </div>
		                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
		                    <a class="component-categories d-block" href="#">
		                        <div class="categories-image">
		                            <img src="<?php echo base_url() . 'images/categories-makeup.svg'; ?>" alt="Makeup Categories" class="w-100" />
		                        </div>
		                        <p class="categories-text">Makeup</p>
		                    </a>
		                </div>
		                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
		                    <a class="component-categories d-block" href="#">
		                        <div class="categories-image">
		                            <img src="<?php echo base_url() . 'images/categories-sneaker.svg'; ?>" alt="Sneaker Categories" class="w-100" />
		                        </div>
		                        <p class="categories-text">Sneaker</p>
		                    </a>
		                </div>
		                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
		                    <a class="component-categories d-block" href="#">
		                        <div class="categories-image">
		                            <img src="<?php echo base_url() . 'images/categories-tools.svg'; ?>" alt="Tools Categories" class="w-100" />
		                        </div>
		                        <p class="categories-text">Tools</p>
		                    </a>
		                </div>
		                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
		                    <a class="component-categories d-block" href="#">
		                        <div class="categories-image">
		                            <img src="<?php echo base_url() . 'images/categories-baby.svg'; ?>" alt="Baby Categories" class="w-100" />
		                        </div>
		                        <p class="categories-text">Baby</p>
		                    </a>
		                </div>
		            </div>
		        </div>
		    </section>
		    <section class="store-new-products">
		        <div class="container">
		            <div class="row">
		                <div class="col-12" data-aos="fade-up">
		                    <h5>New Products</h5>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-3 pb-2" data-aos="fade-up" data-aos-delay="100">
		                    <a class="component-products d-block" href="#">
		                        <img src="<?php echo base_url() . 'images/products-vans-comfycrush.png'; ?>" />
		                        <p class="products-text">Vans ComfyCrush Era <br>
		                            <span class="products-price">$249</span>
		                        </p>
		                    </a>
		                </div>
		                <div class="col-3 pb-2" data-aos="fade-up" data-aos-delay="200">
		                    <a class="component-products d-block" href="#">
		                        <img src="<?php echo base_url() . 'images/products-hoodie-wessential.png'; ?>" />
		                        <p class="products-text">W.ESSENTIELS Hoodie <br>
		                            <span class="products-price">$124</span>
		                        </p>
		                    </a>
		                </div>
		                <div class="col-3 pb-2" data-aos="fade-up" data-aos-delay="300">
		                    <a class="component-products d-block" href="#">
		                        <img src="<?php echo base_url() . 'images/products-grey-sofa.png'; ?>" />
		                        <p class="products-text">IKEA Grogon Sofa <br>
		                            <span class="products-price">$1,409</span>
		                        </p>
		                    </a>
		                </div>
		                <div class="col-3 " data-aos="fade-up" data-aos-delay="400">
		                    <a class="component-products d-block" href="#">
		                        <img src="<?php echo base_url() . 'images/products-nacific-fresh-herb.png'; ?>" />
		                        <p class="products-text">Nacific Fresh Herb <br>
		                            <span class="products-price">$19</span>
		                        </p>
		                    </a>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-3" data-aos="fade-up" data-aos-delay="500">
		                    <a class="component-products d-block" href="#">
		                        <img src="<?php echo base_url() . 'images/products-apple-watch.png'; ?>" />
		                        <p class="products-text">Apple Watch 6 <br>
		                            <span class="products-price">$929</span>
		                        </p>
		                    </a>
		                </div>
		                <div class="col-3" data-aos="fade-up" data-aos-delay="600">
		                    <a class="component-products d-block" href="#">
		                        <img src="<?php echo base_url() . 'images/products-google-nest-mini.png'; ?>" />
		                        <p class="products-text">Google Nest Mini <br>
		                            <span class="products-price">$299</span>
		                        </p>
		                    </a>
		                </div>
		                <div class="col-3" data-aos="fade-up" data-aos-delay="700">
		                    <a class="component-products d-block" href="#">
		                        <img src="<?php echo base_url() . 'images/products-air-jordan-multicolor.png'; ?>" />
		                        <p class="products-text">Air Jordan Multi-Color <br>
		                            <span class="products-price">$1,399</span>
		                        </p>
		                    </a>
		                </div>
		                <div class="col-3" data-aos="fade-up" data-aos-delay="800">
		                    <a class="component-products d-block" href="#">
		                        <img src="<?php echo base_url() . 'images/products-nutribullet-blender.png'; ?>" />
		                        <p class="products-text">Nutribullet Blender <br>
		                            <span class="products-price">$29</span>
		                        </p>
		                    </a>
		                </div>
		            </div>
		        </div>
		</div>
		</section>
		</div>