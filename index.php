
<?php include __DIR__ . '/includes/header.php'; ?>
<style>
    .fa-angle-right:before {
        content: "\f105";
        top: 12px;
        position: absolute;
        right: 0;
        left: 0;
    }

    .fa-angle-left:before {
        content: "\f105";
        top: 12px;
        position: absolute;
        right: 0;
        left: 0;
    }
</style>

<div class="hero-slide-wrapper techex-landing-page">
    <div class="owl-slider" id="home-owl-slider">
        <div class="single-slide bg-cover" style="background-image: url('http://localhost/vizone/assets/images/slide1.webp');">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="hero-contents">
                            <h1>Integrated stainless steel solution</h1>
                            <p>Utilizing our internal melting facility, we consistently manufacture high-quality stainless steel across both standard and exotic grades. These materials are employed in the production of rounds, bars, wire rods, and more</p>
                            <div class="btn__wrapper d-flex flex-wrap justify-content-start">
                                <a href="http://localhost/vizone/infrastructure" class="slider-btn">Infrastructure <i>»</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg-cover" style="background-image: url('http://localhost/vizone/assets/images/slide2.webp');">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="hero-contents">
                            <h1>How you benefit with as your steel partner?</h1>
                            <p>With a dedicated team of Metallurgists and quality experts, we provide a vast portfolio of products, with timely delivery schedules and highest quality standards. We believe in long- term partnerships and collaborations, and are flexible to meet client requirements</p>
                            <div class="btn__wrapper d-flex flex-wrap justify-content-start">
                                <a href="http://localhost/vizone/quality" class="slider-btn">Quality <i>»</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg-cover" style="background-image: url('http://localhost/vizone/assets/images/slide3.webp');">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="hero-contents">
                            <h1>Building long term business relations</h1>
                            <p>You face a challenge- we provide the solution. Through our comprehensive range of offerings, we go the extra mile to assist our customers for increasing efficiency and profitability</p>
                            <div class="btn__wrapper d-flex flex-wrap justify-content-start">
                                <a href="http://localhost/vizone/products" class="slider-btn">Products <i>»</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .tp-tabs,
    .tp-thumbs {
        display: none !important;
    }

    .tag-line .row {
        width: 75%;
        margin: 0 auto;
    }

    .tag-line .linebox {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        background: #efefef;
        border-bottom: 3px solid #550808;
        text-align: center;
        z-index: 10;
        padding: 20px;
        color: #550808;
        border-radius: 10px;
        position: relative;
        top: -35px;
    }

    .tag-line .linebox p {
        margin-bottom: 0;
        font-size: 21px;
        font-weight: 600;
    }

    @media (max-width:800px) {
        .tag-line .row {
            width: 100%;
        }

        .tag-line .linebox {
            top: 15px;
        }

        .tag-line .linebox p {
            font-size: 16px;
        }
    }
</style>
<div class="section-area tag-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="linebox">
                    <p>Vizone Group is an industrial leading group founded in 1997</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .timeline_sec {
        padding-top: 50px;
        padding-bottom: 80px;
    }

    .timeline_sec .col-md-3 {
        padding: 0;
        flex: 0 0 20%;
        max-width: 20%;
    }

    ._topcol {
        margin-top: 10px;
    }

    ._topcol ._icon,
    ._bottomcol ._icon {
        position: absolute;
        left: 88px;
        bottom: 166px;
        width: 70px;
        justify-content: center;
        display: flex;
        height: 70px;
        color: #fff;
        border: 3px solid #550808;
        border-radius: 50%;
        background: #550808;
        animation-name: floating;
        animation-duration: 3s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-in-out;
        padding: 15px;
        font-size: 35px;
    }

    @keyframes floating {
        100% {
            transform: translate(0, -0px);
        }

        50% {
            transform: translate(0, 15px);
        }

        0% {
            transform: translate(0, 0px);
        }
    }

    ._bottomcol ._icon {
        top: 160px;
    }

    ._bottomcol {
        position: relative;
        top: -25px;
        left: -2px;
    }

    .timeline_sec .contentbx {
        text-align: center;
        overflow: hidden;
    }

    .timeline_sec .contentbx h3 {
        background: #550808;
        color: #fff;
        border-top: 3px solid #550808;
        border-right: 3px solid #550808;
        border-left: 3px solid #550808;
        border-radius: 15px 15px 0 0;
        font-size: 21px;
        font-weight: 600;
        font-family: 'Montserrat', sans-serif;
        padding: 10px 0;
        letter-spacing: 0.3px;
    }

    .timeline_row {
        padding: 90px 15px 15px 15px;
    }

    .timeline_sec .contentbx ._maintxt {
        font-size: 23px;
        font-weight: 600;
        margin-bottom: 0;
        padding-bottom: 10px;
    }

    .timeline_sec ._line {
        background: #550808;
        height: 10px;
        position: relative;
        left: 50%;
        width: 2px;
    }

    .timeline_sec ._dot {
        width: 15px;
        height: 15px;
        background: #550808;
        border-radius: 50%;
        content: "";
        position: absolute;
        top: -14px;
        left: calc(50% - 6px);
        z-index: 2;
    }

    ._bottomcol h3 {
        border-radius: 0 0 15px 15px;
        margin-bottom: 0;
    }

    ._bottomcol ._dot {
        top: 140px;
        left: calc(50% - 6px);
    }

    ._bottomcol .contentbx h3 {
        border-top: 0;
        border-bottom: 3px solid #550808;
        border-right: 3px solid #550808;
        border-left: 3px solid #550808;
        border-radius: 0 0 15px 15px;
    }

    ._timeline_txt {
        font-size: 15px;
        font-weight: 400;
        padding: 0 15px;
        margin-bottom: 0;
    }

    .contentbx p {
        font-size: 15px;
        font-weight: 400;
    }

    @media (max-width:850px) {
        .timeline_sec .col-md-3 {
            padding: 0 15px;
            flex: unset;
            max-width: 100%;
            left: 0 !important;
        }

        .timeline_row {
            padding-top: 30px;
        }

        .contentbx p {
            padding: 15px;
            margin-bottom: 0;
        }

        ._topcol ._icon,
        ._bottomcol ._icon {
            display: none;
        }

        ._topcol {
            margin-top: -5px;
        }

        ._titletx {
            display: grid;
        }

        .timeline_sec .contentbx {
            background: #f8f8f8;
            border: 1px solid #efefef;
            border-radius: 15px;
        }

        .timeline_sec .contentbx ._gridyear {
            order: 2;
            margin-bottom: 0;
            border-bottom: 3px solid #550808;
            border-right: 3px solid #550808;
            border-top: 0;
            border-left: 3px solid #550808;
            border-radius: 0 0 15px 15px;
        }

        ._bottomcol {
            margin-top: 60px;
        }

        .timeline_sec .line-1,
        .timeline_sec .line-2 {
            top: 140px;
        }

        .timeline_sec .dot-1,
        .timeline_sec .dot-2 {
            top: 150px;
        }

        .timeline_sec .line-3,
        .timeline_sec .dot-3 {
            display: none;
        }

        .line-4 {
            top: 0;
        }

        ._bottomcol ._dot {
            top: 100%;
        }
    }
</style>
<div class="section-area timeline_sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="heading-bx m-b20 text-center">
                    <h2 class="title-head m-b0 wow fadeInUp" data-wow-duration="1.3s">A testament of our Adaptability and Flexibility in response to market demands</h2>
                    <div class="ttr-separator sepimg"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center timeline_row">
            <div class="col-md-3 _topcol wow fadeInDown" data-wow-delay="0.2s">
                <div class="_icon"><img loading="lazy" src="http://localhost/vizone/assets/images/timeline1.svg" alt="1997 &#8211; Vizone Group of Industries"></div>
                <div class="_dot dot-1"></div>
                <div class="_line line-1"></div>
                <div class="contentbx">
                    <div class="_titletx">
                        <h3 class="_gridyear">1997</h3>
                        <p class="_timeline_txt">Inception of Kalima Steel Re-Rolling Mill with manufacturing of TMT bars</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 _bottomcol wow fadeInUp" data-wow-delay="0.2s">
                <div class="contentbx">
                    <div class="_titletx">
                        <p>Kalima Steel was automated. Launch of our TMT bar brand, Crown X</p>
                        <h3>2015</h3>
                    </div>
                </div>
                <div class="_dot"></div>
                <div class="_line"></div>
                <div class="_icon"><img loading="lazy" src="http://localhost/vizone/assets/images/timeline2.svg" alt="2015 &#8211; Vizone Group of Industries"></div>
            </div>
            <div class="col-md-3 _topcol wow fadeInDown" data-wow-delay="0.2s" style="left: -4.5px;position: relative;">
                <div class="_icon"><img src="http://localhost/vizone/assets/images/timeline3.svg" alt="2016 &#8211; Vizone Group of Industries"></div>
                <div class="_dot dot-2"></div>
                <div class="_line line-2"></div>
                <div class="contentbx">
                    <div class="_titletx">
                        <h3 class="_gridyear">2016</h3>
                        <p class="_timeline_txt">Launch of second brand Crown- Next with cross ribbed TMT bars</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 _bottomcol wow fadeInUp" data-wow-delay="0.2s" style="position: relative;left: -7px;">
                <div class="contentbx">
                    <div class="_titletx">
                        <p>KR Industries (Induction furnace with CCM) was established and Billets production started</p>
                        <h3>2019</h3>
                    </div>
                </div>
                <div class="_dot dot-2"></div>
                <div class="_line line-4"></div>
                <div class="_icon"><img loading="lazy" src="http://localhost/vizone/assets/images/timeline4.svg" alt="2019 &#8211; Vizone Group of Industries"></div>
            </div>
            <div class="col-md-3 _topcol wow fadeInDown" data-wow-delay="0.2s" style="left: -9px;position: relative;">
                <div class="_icon"><img loading="lazy" src="http://localhost/vizone/assets/images/timeline5.svg" alt="2022 &#8211; Vizone Group of Industries"></div>
                <div class="_dot dot-3"></div>
                <div class="_line line-3"></div>
                <div class="contentbx">
                    <div class="_titletx">
                        <h3 class="_gridyear">2022</h3>
                        <p class="_timeline_txt">Started manufacturing of Rounds, Squares, Hex Bars, Wire Rods and Flats</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .product_section {
        background: #f5f5f5;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .product_carousel {
        padding: 0 55px;
    }

    .product_section .owl-nav.disabled {
        display: block !important;
    }

    .product_section .owl-none .owl-nav {
        display: block;
    }

    .product_section .owl-nav {
        width: 100%;
        position: absolute;
        top: calc(50% - 25px);
    }

    .product_section .owl-nav .owl-prev,
    .product_section .owl-nav .owl-next {
        position: absolute;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        color: #550808;
        cursor: pointer;
        font-size: 25px;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        border: 1px solid #550808;
        border-radius: 10px;
    }

    .product_section .owl-nav .owl-prev:hover,
    .product_section .owl-nav .owl-next:hover {
        background: #550808;
        color: #fff;
    }

    .product_section .owl-carousel .owl-stage {
        padding-top: 20px;
    }

    .product_section .owl-nav .owl-next {
        right: 60px;
    }

    .product_section .owl-nav .owl-prev {
        left: -50px;
    }

    .product_section .owl-dots {
        display: none;
        width: 100%;
        bottom: -30px;
        position: absolute;
        justify-content: center;
        margin: -7.5px !important;
        cursor: pointer;
    }

    .product_section .owl-dots .owl-dot {
        width: 15px;
        height: 15px;
        margin: 0px 7.5px;
        line-height: 15px;
        position: relative;
        border-radius: 50%;
        border: 1px solid #000;
        border-color: transparent;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .product_section .owl-dots .owl-dot span {
        margin: 0;
        width: 9px;
        border-radius: 50%;
        height: 9px;
        position: absolute;
        top: calc(50% - 4.5px);
        left: calc(50% - 4.5px);
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        background: rgba(8, 106, 215, 0.3);
    }

    .product_section .owl-dots .owl-dot:hover,
    .product_section .owl-dots .owl-dot.active {
        border-color: #000;
    }

    .product_section .owl-dots .owl-dot:hover span,
    .product_section .owl-dots .owl-dot.active span {
        background-color: #550808 !important;
    }

    .read_more_btn {
        position: relative;
        display: inline-block;
        width: 180px;
        height: auto;
        text-decoration: none;
        background: transparent;
        margin-bottom: 15px;
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
        color: #550808;
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

    @media (max-width:850px) {
        .product_carousel {
            padding: 0;
        }

        .product_section .owl-dots {
            display: flex;
        }

        .product_section .owl-nav {
            display: none !important;
            top: calc(-5% - 25px)
        }

        .product_section .owl-nav .owl-next {
            right: 0
        }

        .product_section .owl-nav .owl-prev {
            left: 0;
        }
    }
</style>
<div class="product_section">
    <div class="container wow fadeIn" data-wow-delay="0.3s">
        <div class="heading-bx text-center m-b0">
            <h2 class="title-head m-b0 wow fadeInUp" data-wow-duration="1.3s">Our Products</h2>
        </div>
        <div class="product_carousel owl-carousel owl-none">
            <div class="item">
                <div class="service-box text-center m-xs-b30">
                    <div class="service-media">
                        <img loading="lazy" src="http://localhost/vizone/assets/images/TMT-bars.webp" alt="TMT Bars &#8211; Vizone Group of Industries">
                    </div>
                    <div class="service-info">
                        <h3 class="title">TMT Bars</h3>
                        <p>CROWN X TMT bars can be bent and re-bent around very small mandrels of 2D and 4D correspondingly without challenges, which have numeral advantages at construction sites.</p>
                    </div>
                    <a href="/product/tmt-bars" class="read_more_btn">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Read More</span>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="service-box text-center m-xs-b30">
                    <div class="service-media">
                        <img loading="lazy" src="http://localhost/vizone/assets/images/hot-billet.webp" alt="Continuous cast billets &#8211; Vizone Group of Industries">
                    </div>
                    <div class="service-info">
                        <h3 class="title">Continuous cast billets</h3>
                        <p>KR Industries is a leading manufacturer of Stainless Steel, Alloy and Mild Steel Billets in various sizes, located in Sihor, Gujarat. The Induction Furnace has a capacity of 18 MT.</p>
                    </div>
                    <a href="/product/continuous-cast-billets" class="read_more_btn">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Read More</span>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="service-box text-center m-xs-b30">
                    <div class="service-media">
                        <img loading="lazy" src="http://localhost/vizone/assets/images/round-bar.webp" alt="Round Bar (16mm &#8211; 110mm) &#8211; Vizone Group of Industries">
                    </div>
                    <div class="service-info">
                        <h3 class="title">Round Bar (16mm &#8211; 110mm)</h3>
                        <p>Steel Rounds are the basic raw material used in a variety of engineering, auto, and other ancillary industries.</p>
                    </div>
                    <a href="/product/round-bar" class="read_more_btn">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Read More</span>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="service-box text-center m-xs-b30">
                    <div class="service-media">
                        <img loading="lazy" src="http://localhost/vizone/assets/images/hexagonal-bar.webp" alt="Hexagonal Bar (17mm &#8211; 78mm) &#8211; Vizone Group of Industries">
                    </div>
                    <div class="service-info">
                        <h3 class="title">Hexagonal Bar (17mm &#8211; 78mm)</h3>
                        <p>Steel Hexagons are long steel bars having 6 sides. They are used in a number of engineering products such as nuts, bolts, hydraulic fittings, etc.</p>
                    </div>
                    <a href="/product/hexagonal-bar" class="read_more_btn">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Read More</span>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="service-box text-center m-xs-b30">
                    <div class="service-media">
                        <img loading="lazy" src="http://localhost/vizone/assets/images/wire-rods.webp" alt="Wire Rods (5.5mm &#8211; 15mm) &#8211; Vizone Group of Industries">
                    </div>
                    <div class="service-info">
                        <h3 class="title">Wire Rods (5.5mm &#8211; 15mm)</h3>
                        <p>Wire rods are manufactured through the direct hot charging technique, via concast facility. The product is rolled in the fully automatic steel rolling mill.</p>
                    </div>
                    <a href="/product/wire-rods" class="read_more_btn">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Read More</span>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="service-box text-center m-xs-b30">
                    <div class="service-media">
                        <img loading="lazy" src="http://localhost/vizone/assets/images/square-bar.webp" alt="Square Bar/RCS (16mm &#8211; 125mm) &#8211; Vizone Group of Industries">
                    </div>
                    <div class="service-info">
                        <h3 class="title">Square Bar/RCS (16mm &#8211; 125mm)</h3>
                        <p>Round Cornered Square bars or RCS are mainly used for drop forged components in the automotive industry. Our RCS Products have a uniform internal structure and a very good surface quality.</p>
                    </div>
                    <a href="/product/square-bar" class="read_more_btn">
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

<style type="text/css">
    .why_kmgroups {
        padding-top: 60px;
    }

    .feature-lg img {
        width: 60px;
        height: 60px
    }

    @media (max-width:850px) {

        .whymob_col,
        .whyCol {
            margin-bottom: 30px;
        }

        .feature-lg img {
            width: 60px;
            height: 60px
        }

        .feature-bx2 .ttr-tilte {
            font-size: 21px
        }

        .feature-bx2 .icon-content p {
            font-size: 15px
        }
    }
</style>
<div class="section-area why_kmgroups">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-bx m-b20 text-center">
                    <h2 class="title-head m-b0 wow fadeInUp" data-wow-duration="1.3s">Why us?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 whyCol wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-container feature-bx2">
                    <div class="feature-lg text-center m-b20">
                        <span class="icon-cell">
                            <img loading="lazy" src="http://localhost/vizone/assets/images/excellence_quality.svg" alt="Excellence in Quality &#8211; Vizone Group of Industries">
                        </span>
                    </div>
                    <div class="icon-content">
                        <h3 class="ttr-tilte">Excellence in Quality</h3>
                        <p>Our raw materials are tested for optimized chemistry, guaranteeing high standards. Our stringent quality control practices leave zero tolerance for defects, ensuring all rigorous specifications are met</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 whyCol wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-container feature-bx2">
                    <div class="feature-lg text-white m-b20">
                        <span class="icon-cell">
                            <img loading="lazy" src="http://localhost/vizone/assets/images/reliability.svg" alt="Reliability and Flexibilty &#8211; Vizone Group of Industries">
                        </span>
                    </div>
                    <div class="icon-content">
                        <h3 class="ttr-tilte">Reliability and Flexibilty</h3>
                        <p>Our automated mill guarantees a seamless material flow, eliminating dependence on external suppliers. Our team of metallurgists, developers, and quality experts is driven to pioneer new grades and optimize plant engineering, striving to achieve the highest quality standards in stainless steel products</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp whymob_col" data-wow-delay="0.4s">
                <div class="feature-container feature-bx2">
                    <div class="feature-lg text-white m-b20">
                        <span class="icon-cell">
                            <img loading="lazy" src="http://localhost/vizone/assets/images/diverse_product.svg" alt="Diverse Product Portfolio &#8211; Vizone Group of Industries">
                        </span>
                    </div>
                    <div class="icon-content">
                        <h3 class="ttr-tilte">Diverse Product Portfolio</h3>
                        <p>We proudly offer an extensive spectrum of Steel grades, encompassing Austenitic, Ferritic, Martensitic, and High Alloy varieties.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-container feature-bx2">
                    <div class="feature-lg text-white m-b20">
                        <span class="icon-cell">
                            <img loading="lazy" src="http://localhost/vizone/assets/images/partnership.svg" alt="Collaborative Partnership &#8211; Vizone Group of Industries">
                        </span>
                    </div>
                    <div class="icon-content">
                        <h3 class="ttr-tilte">Collaborative Partnership</h3>
                        <p>We prioritize building lasting partnerships, fostering collaboration and mutual success with our clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    ._cou2t3r {
        padding-top: 70px;
        background: url('http://localhost/vizone/assets/images/4.png');
        background-size: cover;
    }

    ._cou2t3r ._borderlines {
        border-right: 1px solid #550808;
        border-left: 1px solid #550808;
    }

    .counter-style-2 .counter-bx span {
        font-size: 41px;
        font-weight: 700;
        font-family: 'Montserrat', sans-serif;
        line-height: 40px;
        display: inline-block;
        color: #550808;
    }

    @media (max-width:850px) {
        ._cou2t3r ._borderlines {
            border-right: 0;
        }

        .counter-style-2 {
            margin-bottom: 20px;
        }

        .mission-tab-bx p.br-left {
            border-left: 0;
            padding-left: 0;
            text-align: center;
        }

        .support-section .kmgroup-support {
            padding: 29px;
        }

        .kmgroup-support-col {
            padding: 0 !important;
            text-align: center;
        }

        .kmgroup-support-col:after {
            display: none;
        }

        .kmgroup-support .col-lg-4.text-center {
            padding-top: 20px;
        }

        .kmgroup-support ._requestbtn {
            font-size: 13px;
            padding: 15px 40px;
        }
    }
</style>
<div class="_cou2t3r section-area bg-white section-sp1">
    <div class="container">
        <div class="heading-bx text-center m-b0">
            <h2 class="title-head wow fadeInUp" data-wow-duration="1.3s">Live Counting</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeIn" data-wow-delay="0.2s">
                <div class="counter-style-2">
                    <div class="counter-bx">
                        <span class="counter">250</span><span>+</span>
                    </div>
                    <span class="counter-text">Manpower</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30 _borderlines wow fadeIn" data-wow-delay="0.4s">
                <div class="counter-style-2">
                    <div class="counter-bx">
                        <span class="counter">60,000</span>
                    </div>
                    <span class="counter-text">Capacity (MT)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30 wow fadeIn" data-wow-delay="0.6s">
                <div class="counter-style-2">
                    <div class="counter-bx">
                        <span class="counter">55,000</span>
                    </div>
                    <span class="counter-text">Area (sq. mtr.)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .bg-color {
        background-color: #550808;
    }

    .mission_vision_section {
        background: linear-gradient(180deg, #f4f4f4, #fff);
    }

    .misson-tabs li {
        padding-top: 0;
    }

    .misvis_img {
        width: 100%;
        border-radius: 15px;
    }

    @media (max-width:850px) {
        .mission-tab-bx {
            width: 100%;
            margin: 0 auto;
            padding: 40px 0 !important;
        }
    }
</style>
<div class="section-area bg-fix mission_vision_section">
    <div class="bg-color">
        <div class="container">
            <ul class="nav misson-tabs justify-content-center" id="tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" id="mission-tab" data-toggle="pill" href="#mission" role="tab" aria-controls="mission" aria-selected="true">Our Mission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="vision-tab" data-toggle="pill" href="#vision" role="tab" aria-controls="vision" aria-selected="false">Our Vision</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="tab-content p-b40 p-t40" id="tabContent">
            <div class="tab-pane fade active show" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="text-center mission-tab-bx text-black">
                            <p class="br-left">Driven by innovation and fuelled by a passion for excellence, we strive to be at the forefront of technological advancements in steel production. Our mission is to foster a culture of continuous growth and provide our clients with a diverse range of top-tier steel products, manufactured with the utmost precision and efficiency.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="text-center mission-tab-bx text-black">
                            <p class="br-left">Our vision is to revolutionize the Indian steel industry by introducing innovative products that redefine quality, productivity, and profitability. We aspire to be the benchmark for value creation, consistently setting new standards and contributing to the advancement of our industry. Through relentless commitment to excellence, we envision to grow into a global leader, shaping a world built on the strength and sustainability of our steel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style type="text/css">
    .stainless_steel_section {
        padding-top: 80px;
    }

    .mission-tab-bx {
        padding: 40px 40px 0px;
    }

    .list-check li {
        position: relative;
        list-style: none;
        padding: 5px 5px 5px 30px;
    }

    .list-check.right li:before,
    .list-check li:before {
        content: "\f192";
        color: var(--primary);
    }

    .list-check li:before {
        font-family: "FontAwesome";
        position: absolute;
        left: 0;
        top: 5px;
        display: block;
        font-size: 15px;
    }

    .steel_row {
        background: #f9faff;
        border: 1px solid #55080847;
        margin: 0;
    }

    .stainless_steel_section .title {
        padding: 0 50px;
    }

    .service-info .list-check {
        padding-left: 0;
    }

    @media (max-width:850px) {
        .service-info .list-check li {
            font-size: 15px
        }

        .service-img-bx .service-media {
            flex: 0 0 100%;
        }

        .service-img-bx .service-info {
            flex: 0 0 100%;
        }

        .stainless_steel_section .title {
            padding: 20px 0;
        }
    }
</style>
<div class="stainless_steel_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-bx m-b20 text-center">
                    <h2 class="title-head m-b0 wow fadeInUp" data-wow-duration="1.3s">Stainless Steel Applications</h2>
                </div>
            </div>
        </div>
        <div class="row steel_row align-items-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-4 p-0">
                <img class="img-fluid" loading="lazy" src="http://localhost/vizone/assets/images/stainless-steel.webp" alt="Stainless Steel Applications &#8211; Vizone Group of Industries">
            </div>
            <div class="col-md-8">
                <div class="title">
                    <p><b>Vizone Group of Industries</b> is a brand for Long Products like Continuous Cast Billets, TMT Bars, Round Bars, Hex Bars etc. Besides meeting the in-house requirements to manufacture these products, we also supply to customers all over the country.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .stainless_steel_section2 {
        padding-top: 50px;
        padding-bottom: 80px;
    }

    .steel_sliderbox {
        background-color: #f5f5f5;
        transition: all .3s ease-in-out;
    }

    .steel_sliderbox:hover {
        transform: translateY(-10px);
    }

    .steel_sliderbox h3 {
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 0;
    }

    .stainless_steel_slider .owl-stage-outer {
        padding-top: 20px;
    }

    .stainless_steel_section2 .owl-dots {
        display: flex;
        width: 100%;
        bottom: -30px;
        position: absolute;
        justify-content: center;
        margin: -7.5px !important;
        cursor: pointer;
    }

    .stainless_steel_section2 .owl-dots .owl-dot {
        width: 15px;
        height: 15px;
        margin: 0px 7.5px;
        line-height: 15px;
        position: relative;
        border-radius: 50%;
        border: 1px solid #550808;
        border-color: transparent;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .stainless_steel_section2 .owl-dots .owl-dot:hover,
    .stainless_steel_section2 .owl-dots .owl-dot.active {
        border-color: #550808;
    }

    .stainless_steel_section2 .owl-dots .owl-dot span {
        margin: 0;
        width: 9px;
        border-radius: 50%;
        height: 9px;
        position: absolute;
        top: calc(50% - 4.5px);
        left: calc(50% - 4.5px);
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        background: #550808;
    }
</style>
<div class="stainless_steel_section2 wow fadeIn" data-wow-duration="1.3s">
    <div class="container">
        <div class="stainless_steel_slider owl-carousel owl-none">
            <div class="item">
                <div class="steel_sliderbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/oil-and-gas.webp" alt="Oil & Gas &#8211; Vizone Group of Industries">
                    <h3>Oil & Gas</h3>
                </div>
            </div>
            <div class="item">
                <div class="steel_sliderbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/petrochemicals.webp" alt="Petrochemicals &#8211; Vizone Group of Industries">
                    <h3>Petrochemicals</h3>
                </div>
            </div>
            <div class="item">
                <div class="steel_sliderbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/transportation.webp" alt="Transportation &#8211; Vizone Group of Industries">
                    <h3>Transportation</h3>
                </div>
            </div>
            <div class="item">
                <div class="steel_sliderbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/dairy-processing-equipment.webp" alt="Dairy Processing Equipment &#8211; Vizone Group of Industries">
                    <h3>Dairy Processing Equipment</h3>
                </div>
            </div>
            <div class="item">
                <div class="steel_sliderbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/power-generation.webp" alt="Power Generation &#8211; Vizone Group of Industries">
                    <h3>Power Generation</h3>
                </div>
            </div>
            <div class="item">
                <div class="steel_sliderbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/heat-exchangers.webp" alt="Heat Exchangers &#8211; Vizone Group of Industries">
                    <h3>Heat Exchangers</h3>
                </div>
            </div>
            <div class="item">
                <div class="steel_sliderbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/chemicals.webp" alt="Chemicals &#8211; Vizone Group of Industries">
                    <h3>Chemicals</h3>
                </div>
            </div>
            <div class="item">
                <div class="steel_sliderbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/pharmaceuticals.webp" alt="Pharmaceuticals & Medical Equipment &#8211; Vizone Group of Industries">
                    <h3>Pharmaceuticals & Medical Equipment</h3>
                </div>
            </div>
            <div class="item">
                <div class="steel_sliderbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/defense-services.webp" alt="Defense Services &#8211; Vizone Group of Industries">
                    <h3>Defense Services</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
