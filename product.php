<?php include __DIR__ . '/includes/header.php'; ?>

<div class="page-banner ovbl-dark parallax" style="background-image:url('assets/images/product.jpg');">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white wow fadeInUp" data-wow-duration="1.3s">Products</h1>
            <div class="breadcrumb-row">
                <ul class="list-inline wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".2s">
                    <li class="arrow"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .kmgroups-products {
        position: relative;
        z-index: 1;
        overflow: hidden;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .products-box {
        border: 1px solid #eee;
        overflow: hidden;
        height: 100%;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        transition: all 0.5s ease 0s;
        -webkit-transition: all 0.5s ease 0s;
        -moz-transition: all 0.5s ease 0s;
    }

    .products-box:hover {
        transform: translateY(-10px);
        -webkit-transform: translateY(-10px);
        -moz-transform: translateY(-10px);
    }

    .product-img {
        position: relative;
        display: block;
        overflow: hidden;
        padding: 15px 15px 0;
    }

    .product-img img {
        width: 100%;
    }

    .products-info {
        padding: 25px 20px;
    }

    .products-info h3 {
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 0.2px;
    }

    .products-info p {
        font-size: 15px;
        font-weight: 400;
        margin-bottom: 10px;
    }

    .kmgroups-product-col {
        padding: 15px;
    }

    .read_more_btn {
        position: relative;
        display: inline-block;
        width: 180px;
        height: auto;
        text-decoration: none;
        background: transparent;
        font-size: 16px;
        font-family: 'Montserrat', sans-serif;
    }

    .read_more_btn .circle {
        position: relative;
        display: block;
        margin: 0;
        width: 48px;
        height: 48px;
        background: #550808;
        border-radius: 30px;
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    }

    .read_more_btn .circle .icon.arrow {
        background: none;
        left: 10px;
        width: 18px;
        height: 2px;
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    }

    .read_more_btn .circle .icon {
        position: absolute;
        background: #fff;
        top: 0;
        bottom: 0;
        margin: auto;
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    }

    .read_more_btn .circle .icon.arrow::before {
        position: absolute;
        content: "";
        top: -0.25rem;
        right: 0.0625rem;
        width: 0.625rem;
        height: 0.625rem;
        border-top: 0.125rem solid #fff;
        border-right: 0.125rem solid #fff;
        transform: rotate(45deg);
    }

    .read_more_btn .button-text {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 0.75rem 0;
        margin: 0 0 0 1.85rem;
        color: #282936;
        font-weight: 500;
        letter-spacing: 0.3px;
        line-height: 1.6;
        text-align: center;
        text-transform: capitalize;
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    }

    .read_more_btn:hover .circle {
        width: 100%;
    }

    .read_more_btn:hover .circle .icon.arrow {
        background: #fff;
        transform: translate(1rem, 0);
    }

    .read_more_btn:hover .button-text {
        color: #fff;
    }
</style>
<div class="kmgroups-products">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head m-b0">Our Products</h2>
            <div class="ttr-separator sepimg"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.1s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" src="assets/images/TMT-bars.webp" alt="TMT Bars &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>TMT Bars</h3>
                        <p>CROWN X TMT bars can be bent and re-bent around very small mandrels of 2D and 4D correspondingly without challenges, which have numeral advantages...</p>
                        <a href="product/tmt-bars" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.2s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" src="assets/images/hot-billet.webp" alt="Continuous cast billets &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>Continuous cast billets</h3>
                        <p>KR Industries is a leading manufacturer of Stainless Steel, Alloy and Mild Steel Billets in various sizes, located in Sihor, Gujarat. The Induction Furnace...</p>
                        <a href="product/continuous-cast-billets" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.3s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" src="assets/images/round-bar.webp" alt="Round Bar (16mm &#8211; 110mm) &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>Round Bar (16mm &#8211; 110mm)</h3>
                        <p>Steel Rounds are the basic raw material used in a variety of engineering, auto, and other ancillary industries. KR Industries provide steel with best...</p>
                        <a href="product/round-bar" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.4s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" src="assets/images/hexagonal-bar.webp" alt="Hexagonal Bar (17mm &#8211; 78mm) &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>Hexagonal Bar (17mm &#8211; 78mm)</h3>
                        <p>Steel Hexagons are long steel bars having 6 sides. They are used in a number of engineering products such as nuts, bolts, hydraulic...</p>
                        <a href="product/hexagonal-bar" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.5s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" src="assets/images/wire-rods.webp" alt="Wire Rods (5.5mm &#8211; 15mm) &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>Wire Rods (5.5mm &#8211; 15mm)</h3>
                        <p>Wire rods are manufactured through the direct hot charging technique, via concast facility. The product is rolled in the fully automatic...</p>
                        <a href="product/wire-rods" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.6s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" src="assets/images/square-bar.webp" alt="Square Bar/RCS (16mm &#8211; 125mm) &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>Square Bar/ RCS (16mm &#8211; 125mm)</h3>
                        <p>Round Cornered Square bars or RCS are mainly used for drop forged components in the automotive industry. Our RCS Products have a uniform internal structure...</p>
                        <a href="product/square-bar" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.6s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" style="width: 355px;height: 229px;" src="assets/images/steel-angles.webp" alt="Steel Angles &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>Steel Angles</h3>
                        <p>Steel angles are L-shaped structural sections used widely in construction, fabrication, and engineering projects. Known for their strength and versatility...</p>
                        <a href="product/steel-angles" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.6s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" style="width: 355px;height: 229px;" src="assets/images/flat-bars.webp" alt="Flat Bars &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>Flat Bars</h3>
                        <p>We supply high-quality steel flat bars designed for versatile industrial applications. Preferred by fabricators, manufacturers, and construction...</p>
                        <a href="product/flat-bars" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.6s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" style="width: 355px;height: 229px;" src="assets/images/steel-channel.webp" alt="Channel &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>Channel</h3>
                        <p>Our steel channels are widely used in structural and support applications across construction, infrastructure, and industrial projects. With a strong...</p>
                        <a href="product/channel" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.6s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" style="width: 355px;height: 229px;" src="assets/images/i-beam.webp" alt="I Beam &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>I Beam</h3>
                        <p>We offer robust I Beams engineered for heavy-duty structural applications. Commonly used in construction, bridges, and industrial frameworks, I Beams...</p>
                        <a href="product/i-beam" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6 col-sm-12 kmgroups-product-col wow fadeInUp" data-wow-delay="0.6s">
                <div class="products-box">
                    <div class="product-img">
                        <img width="355" height="229" style="width: 355px;height: 229px;" src="assets/images/h-beam.webp" alt="H Beam &#8211; Vizone Group of Industries">
                    </div>
                    <div class="products-info text-left">
                        <h3>H Beam</h3>
                        <p>Our H Beams are designed for high-load structural applications, offering superior strength and stability. With a wider flange and better weight distribution compared...</p>
                        <a href="product/h-beam" class="read_more_btn">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>