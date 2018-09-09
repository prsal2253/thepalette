<?php
require __DIR__ . '/__db_connect.php';
?>
<?php include 'page_item/head.php';?>

    <style>
        /* contact */

        .about_contact {
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
            letter-spacing: 0.05em;
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
            margin-bottom: 15%;
        }

        .about_contact img {
            width: 60%;
        }

        #form {
            font-family: 'Roboto', 'Noto Sans TC';
            position: relative;
            width: 400px;
            margin: -40% 0 5% 65%;
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
            outline: none;
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
        .contact_title1{
            font-size: 25px;
            letter-spacing: 0.01em;
            font-weight: 700;
            line-height: 35px;
            color: #000;
            font-family: 'Playfair Display';
            margin-top:5%;
        }
        .contact_title2{
            font-size: 20px;
            letter-spacing: 0.1em;
            line-height: 20px;
            color: #000;
            font-family: 'SourceHanSerifTC-SemiBold';
            margin-bottom: 2%;
        }

    </style>

</head>
<body>

<div class="index_conten">
        <h2 class="contact_title1">Contact Us</h2>
        <h3 class="contact_title2">聯絡我們</h3>

        <div class="about_contact">
            <img src="images/about/Store_Sign_Mockup.jpg" alt="">
            <div class="about_submit">
                <form id="form" class="topBefore">
                    <h4>The Palette</h4>
                    <div class="about_info">
                        <p>台北市中山北路二段20巷2號1F</p>
                        <p>客服電話 2658-4833</p>
                        <p>營業時間 MON-SAT 11:00-21:00</p>
                    </div>
                    <h4>Get In Touch</h4>
                    <input id="name" type="text" placeholder="姓名">
                    <input id="email" type="text" placeholder="電子郵件">
                    <textarea id="message" type="text" placeholder="訊息"></textarea>
                    <input id="submit" type="submit" value="送出">
                </form>
            </div>
        </div>
</div>
<img src="images/about/store.png" style="width: 100%;" alt="">

</body>
</html>