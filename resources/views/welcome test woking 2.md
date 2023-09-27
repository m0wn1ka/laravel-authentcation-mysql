
<!doctype html>
<html lang="en">
  <head>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>3AS Research</title>
	  <style>
        .hidden-list {
            display: none;
        }
        .navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
    background-color: #d7211f;
}	  
  @media only screen and (min-width: 600px), screen and (max-width: 701px)
  {
   .login_body {

        background-image:url('https://3asresearchsolutions.in/PMT/resources/views/5-3-768x531.png');
	    height:"500px";
              }
}    

        /* CSS to show the list when the button is hovered */
        .show-on-hover:hover + .hidden-list {
            display: block;
        }
         .background-div {
            background-image: url('https://3asresearchsolutions.in/PMT/resources/views/5-3-768x531.png');
            background-size: cover; 
            width: 100%;
            height: 150%;
        }
	.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
    background-color: #d7211f;
}	  
  @media only screen and (min-width: 600px), screen and (max-width: 701px)
  {
   .login_body {

        background-image:url('https://3asresearchsolutions.in/PMT/resources/views/5-3-768x531.png');
	    height:"500px";
              }
}    
	
        .navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
    background-color: #d7211f;
}	  
  @media only screen and (min-width: 600px), screen and (max-width: 701px)
  {
   .login_body {

        background-image:url('https://3asresearchsolutions.in/PMT/resources/views/5-3-768x531.png');
	    height:"500px";
              }
}  
        iframe {
    border: none;
}
.dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
        }


               .slider-container {
                overflow: hidden;
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
            margin: 0auto;
            padding: 0;
            
            height:100px;
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
        .image1{
           height:275px;
           width:100%;
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
  <section style=" margin-top: 10px;">
	  
	  <!---------------------Nav bar start---------------------------------->
<section>
  
<div class="navbar">
<a class="nav-link h6 active" aria-current="page" href="index.php">HOME</a>
<a class="nav-link h6 active"  aria-current="page " href="about.php">ABOUT US</a>
<a class="nav-link h6 active " href="#"  aria-current="page ">SERVICES</a>
<a class="nav-link h6  active" href="#" aria-current="page">RESOURCES</a>
<a class="nav-link h6  active " href="#" aria-current="page" >CONTACT US</a>
<a class="nav-link h6  active " href="/register" aria-current="page" target="iframe">REGISTER
</a>

    <!-- login -->
    <div class="container mt-5">
    <button class="btn btn-primary" id="loginButton">Login</button>
    <div id="list1" class="mt-3" style="display: none;">
   <a class="dropdown-item" href="https://3asresearchsolutions.in/PMT/resources/views/panellogin.blade.php">Panel/User Login</a> 
    </div>
    <div id="list2" class="mt-3" style="display: none;">
    <a class="dropdown-item" href="https://3asresearchsolutions.in/PMT/public/login">Admin Login</a>
       
    </div>
</div>
</div>
</section>
  <!--------Navigation Bar ends----------------->
	  
  <!--------Slider start----------------->	
  
<div class="slider-container">
<section >	  
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://3asresearchsolutions.in/PMT/resources/views/5-4-800x350.png" class="d-block" alt="Brand" height="300px"width="1550px">
      <div class="carousel-caption d-none d-md-block">
		<!--  <font color=red><h3>BRAND INSIGHTS</h3></font> -->
       <font color=red><h4> <p>Brand insights are all about how well you know and understand your brand and how it aligns with your target audience's needs</p></h4></font>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://3asresearchsolutions.in/PMT/resources/views/5-5-800x350.png" class="d-block "alt="..." height="300px"width="1550px">
      <div class="carousel-caption d-none d-md-block">
		 <!-- <font color=red><h3>B2B2C AUDIENCE </h3></font> -->
       <font color=red><h4> <p>Understanding B2B with the B2C insights.</p></h4></font>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://3asresearchsolutions.in/PMT/resources/views/5-2-768x336.png" class="d-block " alt="..."height="300px"width="1550px">
      <div class="carousel-caption d-none d-md-block">
		<!--  <font color=red><h3>RESEARCH CONSULTANCY</h3></font> -->
       <font color=red><h4>  <p>Research consultants conduct specialised and targeted research on behalf of a client and produce a final analysis of key findings. <!--Consulting involves into one of five main as: Strategy Consulting, Operations Consulting, Financial Consulting, Information Technology Consulting and Human Resources consulting. --> </p></h4></font>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ asset('image_slider.jpg') }}" class="d-block "alt="..." min-height="10px"width="1400px" style="object-fit:cover">
      <div class="carousel-caption d-none d-md-block">
		<!--  <font color=red><h3>HEALTHCARE INSIGHTS</h3></font> -->
       <font color=red><h4>  <p>HC Insights provides solutions for the complex challenges that healthcare sector—involving HC specialities, hospitals, and medtech—face in patient care.</p></h4></font>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://3asresearchsolutions.in/PMT/resources/views/5-7-800x350.png" class="d-block " alt="..."height="300px"width="1550px">
      <div class="carousel-caption d-none d-md-block">
		<!--  <font color=red><h3>GEOGRAPHY INSIGHTS</h3></font> -->
     <font color=red><h4>    <p>Geographic Insights is an interdisciplinary research ti get the fine analysed data using Quant/Qual methodology</p></h4></font>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://3asresearchsolutions.in/PMT/resources/views/5-6-800x350.png" class="d-block " alt="..."height="300px"width="1550px">
      <div class="carousel-caption d-none d-md-block">
		<!--  <font color=red><h3>INSIGHTS PLATEFORM</h3></font> -->
    <font color=red><h4>    <p>A customer insight platform is an online tool or a forum created for B2B2C to enable to have 2-way communication with their customers. <!--Gaining, nurturing, and retaining valuable customer relationships needs a strong and robust customer insight platform.--></p></h4></font>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://3asresearchsolutions.in/PMT/resources/views/5-8-800x350.png" class="d-block " alt="..."height="300px"width="1550px">
      <div class="carousel-caption d-none d-md-block">
		  <!-- <font color=red><h3>TEAM WORK</h3></font> -->
      <font color=red><h4>   <p>A group of researchers or individuals working toward a common goal: INSIGHTS. Here, the shared goal between team members is the successful research, data analysis, publication and dissemination of meaningful findings.</p></h4></font>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </section>
  
    </div>  
 
  
  <!--------Slider ends----------------->	  


<!-----------Login Start------------------>

    <!-- Element Start -->
    <div class="row" >
    <div class="column">
        <img src="https://3asresearchsolutions.in/PMT/resources/views/5-3-768x531.png" class="image1">
    </div>
    <div class="column" >
        
        <iframe src="/iframe" height="550" width="100%" name="iframe"></iframe>
    
    
</div>
</div>
<!-----------Login ends------------------>





    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.getElementById('loginButton').addEventListener('click', function() {
        var list1 = document.getElementById('list1');
        var list2 = document.getElementById('list2');

        if (list1.style.display === 'none') {
            list1.style.display = 'block';
            list2.style.display = 'block';
        } else {
            list1.style.display = 'none';
            list2.style.display = 'none';
        }
    });
</script>
  </body>
</html>