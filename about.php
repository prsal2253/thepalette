<?php include 'page_item/head.php';?>

    <style>
        #about nav {
            z-index: 99;
            position: absolute;
            bottom: 100px;
            right: 0;
        }

        #about button:hover {
            background: none;
        }

        #about .index_main section {
            padding: 0;
            background:#fff;
        }

        .about_box1 {
            width: 100%;
            height: 100vh;
            background: #d1c0a5;
        }

        .about_box1 img {
            width: 60%;
            position: absolute;
            top: 11%;
            left: 22%;
        }

        .about_box2 {
            width: 25%;
            height: 40%;
            background: #fff;
            position: absolute;
            bottom: 0;
        }

        .about_box3 {
            width: 18%;
            height: 71%;
            background: #fff;
            position: absolute;
            right: 0;
        }

        .about_box4 {
            width: 25%;
            height: 11%;
            background: #fff;
            position: absolute;
            right: 0;
        }

        .about_title h2,
        .about_title h3,
        .about_title h4 {
            color: #fff;
            position: absolute;
            letter-spacing: 5px;
        }

        .about_title h2 {
            left: 15%;
            top: 22%;
            font-family: 'Playfair Display';
            font-weight: 700;
            font-size: 50px;
        }

        .about_title h3 {
            font-family: 'SourceHanSerifTC-Bold';
            writing-mode: vertical-lr;
            font-size: 40px;
            left: 16%;
            top: 30%;
        }

        .about_title h4 {
            right: 16%;
            bottom: 4%;
        }

        /* 目錄 */

        .about_catalog {
            width: 100%;
            justify-content: center;
        }

        .about_catalog a {
            font-family: 'Roboto';
            font-size: 18px;
            color: #d1c0a5;
            background: #fff;
            font-weight: 400;
            padding: 0;
            letter-spacing: 2px;
            border: 1px solid #d1c0a5;

        }

        .about_catalog a:hover {
            font-family: 'Roboto';
            font-size: 18px;
            color:#fff;
            background: #d1c0a5;
            border: 1px solid #d1c0a5;
            font-weight: 400;
            padding: 0;
            letter-spacing: 3px;
        }

        .w_catalog1,
        .w_catalog2,
        .w_catalog3,
        .w_catalog4{
            margin:8% 2% 0 2%;
            width: 15%;
        }

        /* 關於我們 */

        .about_us {
            position: relative;
            margin: 15% 0 5% 0;
            width: 100%;
            height: auto;
        }

        .about_us figure {
            width: 100%;
        }

        .about_us img {
            width: 84%;
            margin-left: 16%;
        }

        .about_box5 {
            position: absolute;
            background: #d1c0a5;
            width: 10%;
            height: 180px;
            right: 0;
            top: -50px;
        }

        .about_box6 {
            position: absolute;
            background: #d1c0a5;
            width: 18%;
            height: 480px;
            bottom: 160px;
        }

        .about_article1 {
            width: 100%;
            height: 735px;
            margin-bottom: 10%;
        }

        .about_article1 h2 {
            color: #d1c0a5;
            font-family: 'Playfair Display';
            font-weight: 700;
            letter-spacing: 5px;
            font-size: 60px;
            line-height: 100%;
        }

        .about_left1 {
            float: left;
            width: 40%;
            line-height: 20px;
            text-align: justify;
            margin-top: 4%;
        }

        .about_article1 p {
            font-size: 14px;
        }

        .about_right1 {
            float: right;
            width: 40%;
            margin-top: 4%;
        }

        .about_img1 img {
            width: 100%;
            margin-bottom: 15%;
            margin-left: 0%;
        }

        .about_img2 img {
            width: 55%;
            float: right;
        }

        /* 設計師 */

        .about_designer {
            width: 100%;
            margin-top: 30%;
        }

        .about_designer h2 {
            top: 0;
            color: #d1c0a5;
            font-family: 'Playfair Display';
            font-weight: 700;
            letter-spacing: 5px;
            font-size: 60px;
            line-height: 100%;
        }

        .about_designer h3 {
            color: #000;
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 30px;
            line-height: 100%;
            margin: 10px 0 100px 0;
        }

        .about_name {
            font-size: 400px;
            color: #d1c0a5;
            font-family: 'Playfair Display';
            font-weight: 700;
            position: absolute;
        }

        /* animate */

        /* left */

        .about_member_l {
            width: 420px;
            height: 440px;

        }

        .about_animate_l {
            position: absolute;
            height: 440px;
            width: 420px;
            box-shadow: 8px 2px 18px rgba(0, 0, 0, 0.3);
        }

        @keyframes run_l {
            from {
                background-position: 0 0;
            }
            to {
                background-position: -2940px 0;
            }
        }

        .about_animate_l:hover {
            animation: run_l 1s steps(7) infinite;
        }

        /* right */

        .about_member_r {
            width: 500px;
            height: 480px;
        }

        .about_animate_r {
            position: absolute;
            height: 500px;
            width: 480px;
            box-shadow: -5px 7px 18px rgba(0, 0, 0, 0.3);
        }

        @keyframes run_r {
            from {
                background-position: 0 0;
            }
            to {
                background-position: -2410px 0;
            }
        }

        .about_animate_r:hover {
            animation: run_r 1s steps(5) infinite;
        }

        /* member img */

        .about_prsal {
            background: url('images/about/Y.jpg') no-repeat 0 0;
        }

        .about_sandra {
            background: url('images/about/S.jpg') no-repeat 0 0;
        }

        .about_orange {
            background: url('images/about/O.jpg') no-repeat 0 0;
        }

        .about_weiwei {
            background: url('images/about/W.jpg') no-repeat 0 0;
        }

        /* designer 1 */

        .about_left2 {
            width: 50%;
            height: 100%;
            position: relative;
            margin-left: 10%;
        }

        .about_left2 h4 {
            margin-left: -19%;
            margin-top: -553px;
        }

        .about_box7 {
            background: #d1c0a5;
            height: 430px;
            width: 70%;
            margin-left: 31%;
            margin-top: -65%;
        }

        .about_left2 p {
            width: 70%;
            margin-top: 5%;
            text-align: justify;
            line-height: 25px;
            font-weight: 400;
        }

        /* designer 2 */

        .about_right2 {
            margin-top: 15%;
            width: 40%;
            height: 100%;
            margin-left: 50%;
        }

        .about_right2 p {
            width: 100%;
            margin-top: 11%;
            text-align: justify;
            line-height: 25px;
            font-weight: 400;
        }

        .about_right2 h4 {
            margin-left: -7%;
            margin-top: -623px;
        }

        /* designer 3 */

        .about_left3 {
            width: 50%;
            height: 100%;
            font-weight: 900;
            margin: 10% 0 0 10%;
        }

        .about_left3 h4 {
            margin-left: -9%;
            margin-top: -458px;
        }

        .about_left3 p {
            width: 70%;
            margin-top: 5%;
            text-align: justify;
            line-height: 25px;
            font-weight: 400;
        }

        /* designer 4 */

        .about_right3 {
            margin-top: 25%;
            width: 40%;
            height: 100%;
            margin-left: 50%;
        }

        .about_right3 p {
            width: 100%;
            margin-top: 26%;
            text-align: justify;
            line-height: 25px;
            font-weight: 400;
        }

        .about_right3 h4 {
            margin-left: 13%;
            margin-top: -285px;
        }

        .about_box8 {
            background: #d1c0a5;
            height: 598px;
            width: 110%;
            margin-left: -10%;
            margin-top: -139%;
        }

        /* product slider */

        .about_box9 {
            margin: 10% 0 5% 0;
            width: 100%;
            overflow: hidden;
        }

        .about_slider {
            overflow: hidden;
            height: 400px;
            width: 14544px;
        }

        .about_polite {
            position: relative;
            float: left;
        }

        /* policy */

        .about_policy {
            margin-top: 200px;
            width: 100%;
        }

        .about_policy h2 {
            color: #d1c0a5;
            font-family: 'Playfair Display';
            font-weight: 700;
            letter-spacing: 5px;
            font-size: 60px;
            line-height: 100%;
        }

        .about_policy h3 {
            color: #000;
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 30px;
            line-height: 100%;
            margin: 10px 0 80px 0;
        }

        .about_policy h6 {
            padding: 0 5%;
            font-family: 'SourceHanSerifTC-SemiBold';
            font-size: 16px;
        }

        .about_policy p {
            padding: 0 5%;
            font-size: 12px;
            line-height: 20px;
            margin: 1% 0 3% 0;
            text-align: justify;
        }

        /* 麵包屑 */

        #about .bread_crumbs {
            position: absolute;
            top: 50px;
            left: 70px;
            z-index: 11;
        }

        #about .bread_crumbs ul li a {
            color: #fff;
        }

        /* Slider Style */

        .about_slider_box {
            position: relative;
            width: 100%;
            height: 50rem;
            overflow: hidden;
        }

        .about_slider li {
            position: absolute;
            top: 0;
            right: 0;
            width: 85%;
            height: 80%;
            visibility: hidden;
            transition: visibility 0s 1s;
            will-change: visibility;
        }

        .about_image {
            width: 100%;
            height: 100%;
            position: absolute;
            background-position: 50% 50%;
            clip: rect(0, 80rem, 50rem, 80rem);
            transition: clip .5s cubic-bezier(0.99, 0.01, 0.45, 0.9) .5s;
            will-change: clip;
        }

        .about_content {
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 2rem 0 0 2rem;
            font-size: 40px;
            text-align: right;
        }

        .about_content h2 {
            text-overflow: ellipsis;
            overflow: hidden;
            transform: translateY(-30%);
            top: 0;
            opacity: 0;
            transition: transform .5s, opacity .5s;
            will-change: transform, opacity;
        }

        .about_content a {
            display: inline-block;
            font-size: 2rem;
            text-transform: lowercase;
            padding: 1.5rem;
            opacity: 0;
            transform: translateY(-100%);
            transition: transform .5s .1s, opacity .5s .1s;
            will-change: transform, opacity;
        }

        /* Current Slide */

        li.current {
            visibility: visible;
            transition-delay: 0s;
        }

        li.current .about_image {
            clip: rect(0, 80rem, 50rem, 0);
        }

        li.current .about_content h2 {
            transform: translateY(0);
            opacity: 1;
            transition-delay: 1s;
        }

        li.current .about_content a {
            transform: translateY(0);
            opacity: 1;
            transition-delay: 1.1s;
        }

        /* Prev Slide */

        li.prev_slide .about_image {
            clip: rect(0, 0, 50rem, 0);
        }

        .item_36 .prev,
        .item_36 .next,
        .item_36 .counter {
            vertical-align: middle;
        }

        .item_36 .prev:focus,
        .item_36 .next:focus {
            border: 0px solid #000;
            appearance: none;
            -webkit-appearance: none;
        }

        .item_36 .prev,
        .item_36 .next {
            position: relative;
            display: inline-block;
            height: 5rem;
            width: 5rem;
            border: 0;
            cursor: pointer;
            background: transparent;
            appearance: none;
            -webkit-appearance: none;
        }

        .item_36 .prev::before {
            content: url("images/icon/arrow_b.svg");
            position: absolute;
            /* top: 50%; */
            left: 0;
            transform: translateY(-50%);
            border-left-width: 0;
            width: 40px;
            z-index: 1000;
        }

        .item_36 .next::before {
            content: url("images/icon/arrow2_b.svg");
            position: absolute;
            left: 0;
            transform: translateY(-50%);
            width: 40px;

        }

        .item_36 .prev::after,
        .item_36 .next::after {
            position: absolute;
            top: 50%;
            transform: translateY(-50%) translateZ(0);
            left: .5rem;
            background: #000;
            height: .1rem;
            min-height: 1px;
            width: 2.5rem;
            transition: width .3s;
        }

        .item_36 .next::before {
            right: 0;
            left: auto;
            border-left-width: .5rem;
            border-left-color: #000;
            border-right-width: 0;
        }

        .item_36 .next::after {
            right: .5rem;
            left: auto;
        }

        .counter {
            display: inline-block;
            font-size: 30px;
            font-family: 'Playfair Display';
            font-style: italic;
        }

        .counter span:last-child::before {
            content: '/';
            margin: 0 1rem;
        }

        .item_36 prev:hover::after,
        .item_36 next:hover::after {
            width: 3.5rem;
        }

        @media screen and ( max-width: 550px) {
            .about_image {
                width: 100%;
            }
            .about_content {
                padding-right: 2rem;
            }
            nav {
                left: 0;
                right: auto;
            }
        }

        /* contact */

        .about_contact {
            margin-top: 200px;
            width: 100%;
        }

        .about_contact h2 {
            color: #d1c0a5;
            font-family: 'Playfair Display';
            font-weight: 700;
            letter-spacing: 5px;
            font-size: 60px;
            line-height: 100%;
        }

        .about_contact h3 {
            color: #000;
            font-family: 'SourceHanSerifTC-Bold';
            letter-spacing: 5px;
            font-size: 30px;
            line-height: 100%;
            margin: 10px 0 80px 0;
        }

        .about_contact h4 {
            color: #d1c0a5;
            font-family: 'Playfair Display';
            font-weight: 700;
            letter-spacing: 5px;
            font-size: 30px;
            line-height: 100%;
            margin-bottom: 10px;
        }

        .about_contact p {
            letter-spacing: 5px;
            font-size: 14px;
            margin: 2px 0;
        }

        /* contact form */

        .about_info {
            margin-bottom: 21%;
        }

        .about_contact img {
            width: 60%;
        }

        .item_36 #form {
            font-family: 'Roboto', 'Noto Sans TC';
            position: relative;
            width: 400px;
            margin: -45% 0 5% 65%;
        }

        .about_contact input::placeholder,
        .about_contact textarea::placeholder {
            color: #aca49c;
            font-size: 0.875em;
        }

        .about_contact input:focus::placeholder,
        .about_contact textarea:focus:placeholder {
            color: #bbb5af;
        }

        .about_contact input:hover::placeholder,
        .about_contact textarea:hover::placeholder {
            color: #fff;
            font-size: 0.875em;
        }

        .about_contact input:hover:focus::placeholder,
        .about_contact textarea:hover:focus::placeholder {
            color: #cbc6c1;
        }

        header .item_36 .about_contact {
            position: relative;
            margin: 100px 0 25px 0;
            font-size: 2.3em;
            text-align: center;
        }

        .about_contact input {
            font-size: 0.875em;
            width: 400px;
            height: 50px;
            background: transparent;
            outline: none;
            color: #726659;
            border: solid 1px #b3aca7;
            transition: all 0.3s ease-in-out;
            margin: 2% 0;
        }

        .about_contact input:hover {
            background: #b3aca7;
            color: #e2dedb;
        }

        .about_contact textarea {
            width: 400px;
            padding: 7px 23px 20px 20px;
            background: transparent;
            font-size: 0.875em;
            border: solid 1px #b3aca7;
            transition: all 0.3s ease-in-out;
            margin: 2% 0;
        }

        .about_contact textarea:hover {
            background: #b3aca7;
            color: #e2dedb;
        }

        .about_contact #submit {
            color: #b3aca7;
            cursor: pointer;
            border: solid 1px #b3aca7;
        }

        .about_contact #submit:hover {
            color: #e2dedb;
        }
    </style>

</head>
<!-- 頁面ID -->
<body id="about" class="">

     <!-- top -->
    <div class="index_top">
        <?php include 'page_item/header.php';?> 
    </div>

    <!-- main -->
    <div class="index_main">
        <!-- 麵包屑 -->
        <section class="bread_crumbs bread_crumbs_b" style="background:none">
            <ul>
                <li>
                    <a href="#">home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>
        </section>

        <!-- 頁面內容 -->
        <section class="item_36">
            <div class="about_box1">
                <figure>
                    <img src="images/about/_VLX6006.jpg" alt="">
                </figure>
                <div class="about_box2"></div>
                <div class="about_box3"></div>
                <div class="about_box4"></div>
                <div class="about_title">
                    <h2>ABOUT</h2>
                    <h3>關於我們</h3>
                    <h4>BETTER LIVING THOUGHT COLOR</h4>
                </div>
            </div>

            <div class="index_conten">

                <div class="about_catalog flex">
                    <div class="w_catalog1">
                        <a href="#w_about" class="palette_btn about_click">About</a>
                    </div>
                    <div class="w_catalog2">
                        <a href="#w_designer" class="palette_btn designer_click">Designer</a>
                    </div>
                    <div class="w_catalog3">
                        <a href="#w_policy" class="palette_btn policy_click">Policy</a>
                    </div>
                    <div class="w_catalog4">
                        <a href="#w_contact" class="palette_btn contact_click">Contact</a>
                    </div>
                </div>
                <div id="w_about"></div>
                <div class="about_us">
                    <div class="about_slider_box">
                        <div class="about_slider">
                            <ul>
                                <li>
                                    <div class="about_image" style="background:url(images/about/41652216105_5fd10f9ef8_k.jpg) no-repeat;background-size: cover;"></div>
                                </li>
                                <li>
                                    <div class="about_image" style="background:url(images/about/kasthall_gabrielle_gold_750_ls18.jpg) no-repeat center -75px; background-size: cover;"></div>
                                </li>
                                <li>
                                    <div class="about_image" style="background:url(images/about/28680114308_27d5d126d9_b.jpg) no-repeat center center;background-size: cover;"></div>
                                </li>
                                <li>
                                    <div class="about_image" style="background:url(images/about/41831733034_77a85c49fe_k.jpg) no-repeat;background-size: cover;"></div>
                                </li>
                                <li>
                                    <div class="about_image" style="background:url(images/about/40745889000_96ba023acb_k.jpg) no-repeat center -75px;background-size: cover;"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="about_box6"></div>
                    </div>

                    <div class="about_box5"></div>

                    <!-- about start-->
                    <div class="about_article1">
                        <h2>THE</h2>
                        <h2>PALETTE</h2>
                        <div class="about_left1">
                            <p>THE PALETTE 家具以更細緻深入的專業能力，重新詮釋家具歷史，進而將不同的文化，內化成家具甚至空間規劃設計的一部份。「空間完美的演出」是關乎如何引導人們如何去體驗自己生活的空間，從家飾家用品、單品家具、沙發、模組化家具到空間規劃設計，追求整體概念的連貫，嘗試各種組合的可能。
                            </p>
                            <br>
                            <p>美是設計的最高準則，對於設計有情門主張：「特別而順」。透過設計闡述「特別」的意義：突破以往、挑戰自己、審視約定俗成的積習。人和空間是主軸，家具是協助使用空間的道具，兼顧人與空間的需求，家具才有靈魂。「順」方能與人性呼應並令人安心適意。從研發設計、生產製造、門市銷售到物流配送安裝與售後保固維修…藉由各個環節「專業」的要求，從消費者角度出發，以臻於品牌「存真、取善、顯美」的經營理念。
                            </p>
                            <br>
                            <br>
                            <p>THE PALETTE 成立於 2005 年，主要代理、經銷與銷售世界知名品牌與設計師家飾的線上購物平台。我們挑選設計精美的家具，注重設計以及家俱的實用性。功能設計要方便於消費者生活多樣的收納性，形式風格以能符合現代空間簡約、時尚的美學品味，卻不失家具實用的本質，是我們努力的主張與態度。
                            </p>
                            <br>
                            <p>如果你喜歡線條明快、有色彩性的居家佈置。衷心希望您能夠從THE PALETTE平台，輕鬆擁有知名設計師精心設計的物品。在購物的同時，提供給您輕鬆、便利、雅致的購物環境，並且增添生活中的幽雅氣息與時尚品味。
                            </p>
                        </div>
                        <div class="about_right1">
                            <div class="about_img1">
                                <img src="images/about/1532947292018879720.jpg" alt="">
                            </div>
                            <div class="about_img2">
                                <img src="images/about/1532946633455684891.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- about end-->
                </div>

                <!-- designer start-->
                <div class="about_designer">
                    <div id="w_designer"></div>

                    <h2>DESIGNER</h2>
                    <h3>關於設計師</h3>
                    <div class="about_left2">
                        <div class="about_member_l">
                            <div class="about_animate_l about_prsal"></div>
                        </div>
                        <div class="about_box7"></div>

                        <p>CARL HANSEN擅長活用建築中的結構、力學等概念，他的設計經過精密計算，並以簡潔的線條表現出來。不僅如此，他的作品也散發著濃濃的北歐之情和自然主義，「像是Ant Chair、蛋椅、天鵝椅，都是以有機的造型為主。」在形隨機能之餘，取法自然，CARL
                            HANSEN 的作品歷經半個世紀至今依然清新無比，深具吸引力。
                        </p>
                        <h4 class="about_name">Y</h4>
                    </div>

                    <div class="about_right2 ">
                        <div class="about_member_r">
                            <div class="about_animate_r about_sandra"></div>
                        </div>
                        <p>La Rambla 從小對藝術求知若渴，相當迷戀抽象畫與雕塑。他的設計不僅貫徹功能性及實用主義，更是大膽地重新組合形式與表現抽象的概念。
                            <br>
                            <br> 他認為家具的線條與細緻的手工藝是該被強調的，並嘗試透過不同的素材創造形態與功能的平衡。La Rambla 的作品相較其他幾位大師，更顯得自由無拘束、極具實驗性質，讓人過目難忘，卻難以仿效。</p>
                        <h4 class="about_name">S</h4>
                    </div>

                    <div class="about_left3">
                        <div class="about_member_l">
                            <div class="about_animate_l about_orange"></div>
                        </div>

                        <p>VITRA 像是家具界的藝術家一樣，創作相對稀少珍貴，成為收藏家眼中的夢幻逸品，1973年，他遇見工匠 Niels Vodder，兩人攜手合作，打造出許多在當年製作流程相當困難的作品，替北歐設計定義了全新的當代風格，並推向全世界。
                            <br>
                            <br> 她的知名作品包括：有「 世界上最美的扶手椅 」之稱的 ｢ 45 Chair ｣、充滿原始部落意象的｢ Chieftain's Chair ｣（酋長椅）、｢ Poet Sofa ｣或是｢
                            Pelican Chair ｣（鵜鶘椅）等。
                        </p>
                        <h4 class="about_name">O</h4>
                    </div>

                    <div class="about_right3">
                        <div class="about_member_r">
                            <div class="about_animate_r about_weiwei"></div>
                        </div>
                        <div class="about_box8"></div>
                        <p>當代建築大師 DE PADOVA，他提倡簡約式的設計風格，為丹麥機能主義的倡導人。「他將自己獨特的建築觀念及見解，帶入到家具、家飾的設計上。」</p>
                        <h4 class="about_name">W</h4>
                    </div>
                </div>
                <!-- designer end-->
            </div>
            <!-- slider start -->
            <!-- <div class="about_box9">
                <div class="about_slider">

                    <div class="about_polite">
                        <img src="images/about/slider1.png" alt="" />
                    </div>
                    <div class="about_polite">
                        <img src="images/about/slider1.png" alt="" />
                    </div>
                </div>
            </div> -->
            <!-- slider end -->


            <div class="index_conten">
                <!-- policy start-->
                <div class="about_policy">
                    <div id="w_policy"></div>

                    <h2>POLICY</h2>
                    <h3>服務條款及隱私權政策</h3>
                    <h6>關於個人資料保護，請會員詳細閱讀以下 THE PALETTE家具的隱私權聲明</h6>
                    <p>THE PALETTE家具為 THE PALETTE家具所經營；為了維護個人隱私權與支持個人資料保護， THE PALETTE家具行謹以下列聲明，向您說明 THE PALETTE家具蒐集個人資料之目的、類別、利用範圍及方式、以及您所得行使之權利等事項；如果您對於
                        THE PALETTE家具的隱私權聲明、以下相關告知事項、或與個人資料保護有關之相關事項有任何疑問，可以和 THE PALETTE家具客服中心聯絡， THE PALETTE家具將儘快回覆說明。</p>

                    <h6>適用範圍</h6>
                    <p>THE PALETTE家具隱私權聲明及其所包含之告知事項，僅適用於 THE PALETTE家具所擁有及經營的網站。 THE PALETTE家具網站內可能包含許多連結、或其他合作夥伴及個別開店店家所提供的商品或服務，關於該等連結網站、合作夥伴網站或個別開店店家之網路店家的隱私權聲明及與個人資料保護有關之告知事項，請參閱各該連結網站、合作夥伴網站或個別開店店家之網路店家。</p>

                    <h6>個人資料蒐集之目的與類別</h6>
                    <p>THE PALETTE家具為了提供電子商務服務、售後服務、履行法定或合約義務、保護當事人及相關利害關係人之權益、行銷、客戶管理與服務、以及經營合於營業登記項目或組織章程所定之業務等目的，依照各服務之性質，有可能會蒐集您的姓名、連絡方式(包括但不限於電話、E-MAIL及地址等)、為完成收款或付款所需之資料、ＩＰ位址、及其他得以直接或間接識別使用者身分之個人資料。此外，為提升服務品質，
                        THE PALETTE家具會依照所提供服務之性質，記錄使用者的IP位址、以及在 THE PALETTE家具相關網站或APP內的瀏覽活動(例如，使用者所使用的軟硬體、所點選的網頁、下載的APP)等資料，但是這些資料僅供作流量分析和網路行為調查，以便於改善
                        THE PALETTE家具相關網站的服務品質，不會和特定個人相連繫。</p>

                    <h6>個人資料的利用</h6>
                    <p>THE PALETTE家具所蒐集的足以識別使用者身分的個人資料、消費與交易資料，或日後經您同意而提供之其他個人資料，都僅供 THE PALETTE家具於其內部、依照蒐集之目的進行處理和利用、或為完成提供服務或履行合約義務之必要、或依照相關法令規定或有權主管機關（包括但不限於法院或台灣票據交換所）之命令或要求，否則
                        THE PALETTE家具不會將足以識別使用者身分的個人資料提供給第三人（包括境內及境外）、或移作蒐集目的以外之使用。THE PALETTE家具會持續保管、處理及利用相關資料。在上開蒐集目的範圍內，本商店會將所蒐集的個人資料，提供予合作廠商（包括但不限提供本服務之91APP、宅配貨運業者或其他）以協助交易完成或終止。若選擇以信用卡方式支付，僅限信用卡持卡人本人使用，且得就此交易資料向發卡銀行、收單行及持卡人照會並確認是否屬實，於核對無誤後付款程序才算完成。</p>

                    <h6>資料安全</h6>
                    <p>THE PALETTE家具將以合於產業標準之合理技術及程序，維護THE PALETTE家具個人資料之安全。</p>

                    <h6>資料當事人之權利</h6>
                    <p>資料當事人可以請求查詢、閱覽本人的個人資料或要求給予複本。若您的個人資料有變更、或發現您的個人資料不正確，可以向THE PALETTE家具要求修改或更正。當蒐集個人資料之目的消失或期限屆滿時，您可要求刪除、停止處理或利用個人資料。但因
                        THE PALETTE 家具執行職務或業務所必須者，不在此限。
                    </p>

                    <h6>Cookie</h6>
                    <p>為了便利使用者， THE PALETTE家具網站可能會讀取儲存在使用者電腦中的cookie資料。使用者可以經由瀏覽器的設定，取消、或限制此項功能，但可能因此無法使用部份網站功能。若您想知道如何取消、或限制此項功能，請與
                        THE PALETTE家具客服中心聯絡。</p>

                    <h6>Google Analyics(分析)廣告功能</h6>
                    <p>本服務已安裝 Google Analytics (分析) 廣告功能。本功能僅用於提供 THE PALETTE家具分析廣告投放效益及優化使用流程，如您欲停用 Google Analytics (分析)廣告功能，建議您可參考Google所提供
                        不透露資訊的方式以停用該服務。
                    </p>

                    <h6>影響</h6>
                    <p>若您不願意提供各服務或交易所要求的相關個人資料予 THE PALETTE家具，並同意 THE PALETTE家具就該等個人資料依法令規定、以及本隱私權聲明及其相關告知內容為相關之個人資料蒐集、處理、利用及國際傳輸，THE
                        PALETTE家具將尊重您的決定，但依照各該服務之性質或條件，您可能因此無法使用該等服務或完成相關交易， THE PALETTE家具並保留是否同意提供該等相關服務或完成相關交易之權利。</p>

                    <h6>修訂之權利</h6>
                    <p>THE PALETTE家具有權隨時修訂本隱私權聲明及相關告知事項，並得於修訂後公佈在 THE PALETTE家具網站，不另行個別通知，您可以隨時在 THE PALETTE家具網站上詳閱修訂後的隱私權聲明及相關告知事項。</p>
                </div>
                <!-- policy end-->

                <!-- contact start-->
                <div class="about_contact">
                    <div id="w_contact"></div>

                    <h2>CONTACT US</h2>
                    <h3>聯絡我們</h3>

                    <img src="images/about/41652301865_d68404f4ec_k.jpg" alt="">


                    <div class="about_submit">
                        <form id="form" class="topBefore">
                            <h4>THE PALETTE</h4>
                            <div class="about_info">
                                <p>台北市中山北路二段20巷2號1F</p>
                                <p>客服電話 2658-4833</p>
                                <p>營業時間 MON-SAT 11:00-21:00</p>
                            </div>
                            <h4>GET IN TOUCH</h4>
                            <input id="name" type="text" placeholder="姓名">
                            <input id="email" type="text" placeholder="電子郵件">
                            <textarea id="message" type="text" placeholder="訊息"></textarea>
                            <input id="submit" type="submit" value="送出">
                        </form>
                    </div>
                </div>

                <!-- contact end-->
            </div>
            <img src="images/about/store.png" style="width: 100%;" alt="">
        </section>
    </div>
    <div class="index_footer">
        <?php include 'page_item/footer.php';?>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        // 滑動指定區域
        $('.about_click').click(function () {
            $('html,body').animate({
                scrollTop: $('#w_about').offset().top
            }, 800);
        });

        $('.designer_click').click(function () {
            $('html,body').animate({
                scrollTop: $('#w_designer').offset().top
            }, 800);
        });

        $('.policy_click').click(function () {
            $('html,body').animate({
                scrollTop: $('#w_policy').offset().top
            }, 800);
        });

        $('.contact_click').click(function () {
            $('html,body').animate({
                scrollTop: $('#w_contact').offset().top
            }, 800);
        });


        // 家具輪播
        // let pos = 0;
        // let speed = 1;
        // function draw() {
        //     requestAnimationFrame(draw); $('.about_polite').css({
        //         left: pos -= speed
        //     });
        //     if (pos < -$('.about_polite').width()) {
        //         pos = 0;
        //     }
        // }
        // draw();


        // 輪播特效
        (function () {

            function init(item) {
                var items = item.querySelectorAll('li'),
                    current = 0,
                    autoUpdate = true,
                    timeTrans = 3000;

                //create nav
                var nav = document.createElement('nav');
                nav.className = 'nav_arrows';

                // create button prev
                var prevbtn = document.createElement('button');
                prevbtn.className = 'prev';
                prevbtn.setAttribute('aria-label', 'Prev');

                //create button next
                var nextbtn = document.createElement('button');
                nextbtn.className = 'next';
                nextbtn.setAttribute('aria-label', 'Next');

                //create counter
                var counter = document.createElement('div');
                counter.className = 'counter';
                counter.innerHTML = "<span>1</span><span>" + items.length + "</span>";

                if (items.length > 1) {
                    nav.appendChild(prevbtn);
                    nav.appendChild(counter);
                    nav.appendChild(nextbtn);
                    item.appendChild(nav);
                }

                items[current].className = "current";
                if (items.length > 1) items[items.length - 1].className = "prev_slide";

                var navigate = function (dir) {
                    items[current].className = "";

                    if (dir === 'right') {
                        current = current < items.length - 1 ? current + 1 : 0;
                    } else {
                        current = current > 0 ? current - 1 : items.length - 1;
                    }

                    var nextCurrent = current < items.length - 1 ? current + 1 : 0,
                        prevCurrent = current > 0 ? current - 1 : items.length - 1;

                    items[current].className = "current";
                    items[prevCurrent].className = "prev_slide";
                    items[nextCurrent].className = "";

                    //update counter
                    counter.firstChild.textContent = current + 1;
                }

                item.addEventListener('mouseenter', function () {
                    autoUpdate = false;
                });

                item.addEventListener('mouseleave', function () {
                    autoUpdate = true;
                });

                setInterval(function () {
                    if (autoUpdate) navigate('right');
                }, timeTrans);

                prevbtn.addEventListener('click', function () {
                    navigate('left');
                });

                nextbtn.addEventListener('click', function () {
                    navigate('right');
                });

                //keyboard navigation
                document.addEventListener('keydown', function (ev) {
                    var keyCode = ev.keyCode || ev.which;
                    switch (keyCode) {
                        case 37:
                            navigate('left');
                            break;
                        case 39:
                            navigate('right');
                            break;
                    }
                });

                // swipe navigation
                // from http://stackoverflow.com/a/23230280
                item.addEventListener('touchstart', handleTouchStart, false);
                item.addEventListener('touchmove', handleTouchMove, false);
                var xDown = null;
                var yDown = null;
                function handleTouchStart(evt) {
                    xDown = evt.touches[0].clientX;
                    yDown = evt.touches[0].clientY;
                };
                function handleTouchMove(evt) {
                    if (!xDown || !yDown) {
                        return;
                    }

                    var xUp = evt.touches[0].clientX;
                    var yUp = evt.touches[0].clientY;

                    var xDiff = xDown - xUp;
                    var yDiff = yDown - yUp;

                    if (Math.abs(xDiff) > Math.abs(yDiff)) {/*most significant*/
                        if (xDiff > 0) {
                            /* left swipe */
                            navigate('right');
                        } else {
                            navigate('left');
                        }
                    }
                    /* reset values */
                    xDown = null;
                    yDown = null;
                };
            }

            [].slice.call(document.querySelectorAll('.about_slider')).forEach(function (item) {
                init(item);
            });
        })();


    </script>
</body>

</html>