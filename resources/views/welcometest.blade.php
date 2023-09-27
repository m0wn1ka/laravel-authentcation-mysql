<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Page</title>
    <style>
        iframe {
    border: none;
}
               .slider-container {
            position: relative;
            max-width: 800px;
            margin: auto;
            overflow: hidden;
            border: 1px solid #ccc;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
        }

        img {
            width: 100%;
            height: auto;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
             justify-content: space-between;
            background-color: #333;
            overflow: hidden;   
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            flex: 1;
         color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .slider {
            width: 100%;
            height: 300px;
            background-image: url('slider-image.jpg'); /* Replace with your slider image */
            background-size: cover;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        .column {
            flex: 50%;
            padding: 10px;
            box-sizing: border-box;
        }
        @media screen and (max-width: 600px) {
            .column {
                flex: 100%;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
<a class="nav-link h6 active" aria-current="page" href="index.php">HOME</a>
<a class="nav-link h6 active"  aria-current="page " href="about.php">ABOUT US</a>
<a class="nav-link h6 active " href="#"  aria-current="page ">SERVICES</a>
<a class="nav-link h6  active" href="#" aria-current="page">RESOURCES</a>
<a class="nav-link h6  active " href="#" aria-current="page" >CONTACT US</a>
<a class="nav-link h6  active " href="/register" aria-current="page" target="iframe">REGISTER</a>
<a class="nav-link h6  active " href="#" aria-current="page" >LOGIN</a>
</div>

<div class="slider-container">
    <div class="slides">
        <div class="slide">
            <img src="https://3asresearchsolutions.in/PMT/resources/views/5-4-800x350.png" alt="Image 1">
        </div>
        <div class="slide">
            <img src="https://3asresearchsolutions.in/PMT/resources/views/5-5-800x350.png" alt="Image 2">
        </div>
        <div class="slide">
            <img src="https://3asresearchsolutions.in/PMT/resources/views/5-2-768x336.png" alt="Image 3">
        </div>
    </div>

    <div class="prev">&#10094;</div>
    <div class="next">&#10095;</div>
</div>

<div class="row">
    <div class="column">
        <center><h2>GLOBAL MR</h2></center>
        <div> &emsp; &emsp; Market Research Solutions : We specialize 
            in Innovative Technology Enabled Solutions,
            deployed quickly and with reliable results. 
            Global MR Online plays a central role in our
             ability to find, balance and manage respondents
              around the globe quickly and reliable.</div>
    </div>
    <div class="column">
        <iframe src="/iframe" height="150" width="100%" name="iframe"></iframe>
    </div>
</div>

<script>
    let slideIndex = 1;

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");

        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    showSlides(slideIndex);

    document.querySelector('.prev').addEventListener('click', () => {
        plusSlides(-1);
    });

    document.querySelector('.next').addEventListener('click', () => {
        plusSlides(1);
    });
</script>


</body>
</html>
