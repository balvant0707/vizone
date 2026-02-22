<?php include __DIR__ . '/includes/header.php'; ?>
<div class="page-banner ovbl-dark parallax" style="background-image:url('assets/images/quality-bg.webp');">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white wow fadeInUp" data-wow-duraction="1.3s">Quality</h1>
            <div class="breadcrumb-row">
                <ul class="list-inline wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".2s">
                    <li class="arrow"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li>Quality</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .quality_section {
        position: relative;
        background: #f5f5f5;
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .quality_section:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 500px;
        height: 70%;
        background: #550808;
    }

    .quality_title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .quality_list {
        padding-left: 0;
    }

    .quality_list li {
        font-size: 15px;
        font-weight: 500;
        font-family: 'Montserrat', sans-serif;
        color: #212529;
        position: relative;
        padding: 6px 0 6px 25px;
        list-style-type: none;
    }

    .quality_list li:before {
        content: "\f192";
        color: var(--primary);
        font-family: "FontAwesome";
        position: absolute;
        left: 0;
        top: 5px;
        display: block;
        font-size: 15px;
    }

    .quality_box p {
        font-size: 15px;
        font-weight: 500;
        margin-bottom: 0;
    }

    @media (max-width:850px) {
        .quantity_col1 {
            order: 2;
        }

        .quality_box {
            margin-top: 20px;
        }

        .quality_section:before {
            background: unset;
        }
    }
</style>
<section class="quality_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 quantity_col1">
                <div class="quality_box">
                    <div class="quality_title wow fadeInUp" data-wow-duraction="1.3s">Quality Testing Facility</div>
                    <ul class="quality_list">
                        <li class="wow fadeInUp" data-wow-duraction="1.3s">PMI Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".2s">Spectro Analysis Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".2s">Tensile Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".3s">Hardness Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".3s">Flattening Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".4s">Drift Expanding Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".4s">Ring Expanding Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".4s">Impact Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".5s">IGC Test (A, E& C)</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".5s">Ultrasonic Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".6s">Radioactivity Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".6s">Visual Inspection Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".7s">Liquid & Dry Penetrant Test</li>
                        <li class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".7s">Microstructure Evaluation using Image Analyser Test</li>
                    </ul>
                    <p class="wow fadeInUp" data-wow-duraction="1.3s" data-wow-delay=".2s">Owing to our elaborate Quality Control procedures, we are an ISI standard IS:1786 and ISO: 9001:2015 certified company.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="quality_imgbox wow fadeInRight" data-wow-duraction="1.3s" data-wow-delay=".2s">
                    <img loading="lazy" src="http://localhost/vizone/assets/images/kmgroup-quality.webp" alt="Quality Testing Facility &#8211; KM Group of Industries">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .certf-list li {
        padding: 2px;
    }
</style>
<?php include __DIR__ . '/includes/footer.php'; ?>