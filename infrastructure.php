<?php include __DIR__ . '/includes/header.php'; ?>
<div class="page-banner ovbl-dark parallax" style="background-image:url(assets/images/Infra-banner.webp);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white wow fadeInUp" data-wow-duraction="1.3s">Infrastructure</h1>
            <div class="breadcrumb-row">
                <ul class="list-inline wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".2s">
                    <li class="arrow"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li>Infrastructure</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .infra_section {
        background: #f5f5f5;
        padding-top: 80px;
        padding-bottom: 80px
    }

    .infra_title {
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 10px
    }

    .infra_list {
        padding-left: 0
    }

    .infra_list li {
        font-size: 15px;
        font-weight: 400;
        font-family: 'Montserrat', sans-serif;
        color: #212529;
        position: relative;
        padding: 10px 0 10px 25px;
        list-style-type: none
    }

    .infra_list li:before {
        content: "\f192";
        color: var(--primary);
        font-family: "FontAwesome";
        position: absolute;
        left: 0;
        top: 10px;
        display: block;
        font-size: 15px
    }

    .infra_row1 {
        background: #ffff;
        padding: 20px;
        align-items: center;
        box-shadow: 0 10px 36px 0 rgba(22, 24, 26, .08)
    }

    .infra_row2 {
        background: #550808;
        padding: 20px;
        align-items: center;
        box-shadow: 0 10px 36px 0 rgba(22, 24, 26, .08)
    }

    .infra_col2 .infra_title,
    .infra_col2 .infra_list li,
    .infra_col2 .infra_list li:before {
        color: #fff
    }

    .infra_col2 p {
        color: #fff;
        font-size: 15px;
        font-weight: 400
    }

    @media (max-width:850px) {

        .infra_row1,
        .infra_row2 {
            margin: 0;
            padding: 15px 0
        }

        .infra_box {
            margin-top: 15px
        }

        .or_infraCol {
            order: 2
        }
    }
</style>
<section class="infra_section">
    <div class="container">
        <div class="row infra_row1 wow fadeInUp" data-wow-duraction="1.3s">
            <div class="col-md-6 infra_col">
                <div class="infra_imgbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/infra1.webp" alt="Our Strength &#8211; Vizone Group of Industries">
                </div>
            </div>
            <div class="col-md-6 infra_col">
                <div class="infra_box">
                    <div class="infra_title">Our Strength</div>
                    <ul class="infra_list">
                        <li>A state-of-the-art, integrated steel mill featuring an on-site melting shop for the production of seamless products</li>
                        <li>Highly productive electric induction furnace with that guarantees regular production and chemically controlled, uniform quality</li>
                        <li>Modernised technology in our hot piercing mill allows for precise wall thickness measurement and high production in all grades of austenitic, ferritic, martensitic and high alloys</li>
                        <li>Our dynamic and driven group of metallurgists and seasoned business experts make sure that the final products and raw material's chemical and mechanical characteristics are upheld in accordance with international standards</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row infra_row2 mt-3 wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".2s">
            <div class="col-md-6 infra_col2 or_infraCol">
                <div class="infra_box">
                    <div class="infra_title">Steel Melting Shops</div>
                    <p>As a leading Manufacturer, we have a steel melting facility with an annual capacity of over 60,000 MT. Concast and the furnace are electronically controlled to precisely regulate the production parameters and produce a consistent product quality. </p>
                    <ul class="infra_list">
                        <li>Electric Induction Furnace</li>
                        <li>Continuous Casting Machine of 6/11 Meter Radius</li>
                        <li>Bottom Poured Ingot Casting up to 18-ton Ingot weight</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 infra_col2 ">
                <div class="infra_imgbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/infra2.webp" alt="Steel Melting Shops &#8211; Vizone Group of Industries">
                </div>
            </div>
        </div>
        <div class="row mt-3 infra_row1 wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".3s">
            <div class="col-md-6 infra_col3">
                <div class="infra_imgbox">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/rolling-mill.webp" alt="Rolling Mill &#8211; Vizone Group of Industries">
                </div>
            </div>
            <div class="col-md-6 infra_col3">
                <div class="infra_box">
                    <div class="infra_title">Rolling Mill</div>
                    <p>Kalima Steel Re-Rolling Mill is a 16” Semi-Automatic mill. Our cutting-edge rolling mill is equipped with a large capacity machinery to produce about 50,000 MT annually. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>