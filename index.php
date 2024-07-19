<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Trip planner</title>

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>
<body>
    





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>T</span>ravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#book">  <u> Inquiry </u></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#packages">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li>
              
              </li>
             
            </ul>
            <a id="home" href="login.php" onclick="login()" 
            style="text-decoration: none;background-color: orange;color: whitesmoke; padding: 10px; border-radius: 10px;"
            
            
            > <btn> Login </btn></a>
          </div>
        </div>
      </nav>
    <!-- Navbar End -->





    <!-- Home Section Start -->
    <div class="home">
        <div class="content">
            <h5>Welcome To My Trip Planner</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>My Trip Planner: Your key to seamless travel experiences. - Highlighting the convenience and ease of using the trip planning service.</p>
            <a href="#book">Book Place</a>
        </div>
    </div>
    <!-- Home Section End -->





    <!-- Section Book Start -->
    <section class="book" id="book">
      <div class="container">

        <div class="main-text">
          <h1><span>I</span>nquiry</h1>
        </div>
        
        <div class="row">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="book-img.png" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <form action="" method="post">
              <div class="wrapper">
            </div>
              <input type="text" class="form-control" name="Name" placeholder="Name" required><br>
              <input type="text" class="form-control" name="Number" placeholder="Phone Number" required><br>
              <input type="text" class="form-control" name="Email" placeholder="Enter your email id" required><br>
              <input type="text" class="form-control"name="From" placeholder="From" required><br>
              <input type="text" class="form-control"name="Destination" placeholder="Your Destination" required><br>
              <input type="text" class="form-control" name="How_Many_Days" placeholder="How Many tour Days" required><br>
              <input type="text" class="form-control"name="How_Many_Fax" placeholder="How many people do you want to travel?" required><br>
              <button type="submit" name="btn_submit">Submit</button>

            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- Section Book End -->








    <!-- Section Packages Start -->
    <section class="packages" id="packages">
      <div class="container">
        
        <div class="main-txt">
          <h1><span>P</span>ackages</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="uk.png" alt="">
              <div class="card-body">
                <h3>United Kingdom</h3>
                <p>The United Kingdom comprises the whole of the island of Great Britain—which contains England.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>₹2,65,724</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="france.png" alt="">
              <div class="card-body">
                <h3>France</h3>
                <p>France is one of the oldest nations on Earth and the most ethnically diverse country in Europe.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>₹1,80,456</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="australia.png" alt="">
              <div class="card-body">
                <h3>Australia</h3>
                <p>The explorer Matthew Flinders named the land Terra Australis, which was later abbreviated to the current form.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>₹1,11,745</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>



        </div>



        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="italy.png" alt="">
              <div class="card-body">
                <h3>Italy</h3>
                <p>italy  - Just do it.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>₹1,95,230</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="india.png" alt="">
              <div class="card-body">
                <h3>India</h3>
                <p>Next stop, india .</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>₹ 99,999</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="us.png" alt="">
              <div class="card-body">
                <h3>United States</h3>
                <p>Come Fly The Friendly United States .</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>₹2,65,724</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>



        </div>


      </div>
    </section>
    <!-- Section Packages End -->







    <!-- Section Services Start -->
    <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span>S</span>ervices</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Affordable Hotel</h3>
                <p>Our dedicated and friendly staff at Sunset View Hotel is committed to delivering exceptional service. From the moment you step into our elegant lobby, our team is ready to assist with any request or inquiry.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Food & Drinks</h3>
                <p>What you’ll get on a food tour varies with each company or guide. Typically, tours include a mix of guided walks and tastings of local foods and drinks, ensuring you get a hearty experience of the local cuisine. The amount and variety of food depend on the tour and location, but the aim is always to leave you happily satisfied.
                </p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Flight Tickets</h3>
                <p>Find the best deals on flight tickets with our convenient booking platform. Save time and money on your next trip with our reliable services.You contact My Trip Planner for your air tickets once and enjoy</p>
              </div>
            </div>

          </div>



        </div>


        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Around The World</h3>
                <p>Explore the wonders of the world with our comprehensive travel guides and tips. Plan your next adventure with Around The World.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-plane"></i>
              <div class="card-body">
                <h3>Fastest Travel</h3>
                <p>Plan your trips with the fastest travel options available. Get expert advice and recommendations for efficient and speedy journeys.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Adventures</h3>
                <p>Discover a world of adventure on our website. Get tips, recommendations, and resources for all your travel needs. Start your next journey today!</p>
              </div>
            </div>

          </div>



        </div>

      </div>
    </section>
    <!-- Section Services End -->




    <!-- Section Gallary Start -->
    <section class="gallary" id="gallary">
      <div class="container">

        <div class="main-txt">
          <h1><span>G</span>allary</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="g1.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="g2.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="g3.png" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="g4.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="g5.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="g6.png" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Section Gallary End -->







    <!-- About Start -->
    <section class="about" id="about">
      <div class="container">

        <div class="main-txt">
          <h1>About <span>Us</span></h1>
        </div>

        <div class="row" style="margin-top: 50px;">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="about-img.png" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <h2>How Travel Agency Work</h2>
            <p>A travel agent is a highly organized professional who is passionate about travel and helping others. They are focused on creating the best possible experiences, directly catered to their clients. They work with hotels, airlines, and other vendors to create travel packages and experiences that their clients will love. Travel agents can work with large groups, individuals, families, professional organizations, and others to help create seamless travel experiences that help create memories.</p>
          </div>

        </div>

      </div>
    </section>
    <!-- About End -->








    <!-- Footer Start -->
    <footer id="footer">
      <h1><span>T</span>ravel</h1>
      <p>My Trip Planner: Your key to seamless travel experiences. - Highlighting the convenience and ease of using the trip planning service.</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
      </div>
      <div class="credit">
        <p>Designed By <a href="../xplore project/index.php">Meet developers</a></p>
      </div>
      <div class="copyright">
        <p>&copy;Copyright My Trip Planner. All Rights Reserved</p>
      </div>
    </footer>
    <!-- Footer End -->







    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="one.js   "></script>
</body>
</html>


