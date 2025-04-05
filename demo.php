<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Menu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- css file for the menu -->
    <link href="css/ich.css" rel="'stylesheet">

    <style>
      .menu {
          width: 70%;
          overflow-y: auto; /* Add scroll only vertically */
          max-height: 70vh; /* Set maximum height for scroll */
      }
  </style>
    
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>MoodyFoody</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="menu.html" class="nav-item nav-link active">Menu</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="headingcontainer text-center my-5 pt-5 pb-4">
                  <div>
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Indian Coffee House</h1>
                  </div>
                  <div>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center text-uppercase">
                          <li class="breadcrumb-item"><a href="menu.html">Back to Menu Page</a></li>
                      </ol>
                  </nav>
                  </div>
                  
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <link href="css/ich.css" rel="stylesheet">
          <div class="container">
            <div class="categories">
              <h2 style="color: #FEA116;">Categories</h2>
              <a href="#breakfast">Breakfast</a>
              <a href="#starters">Starters</a>
              <a href="#soups">Soups</a>
              <a href="#beverages">Beverages</a>
              <a href="#snacks">Snacks</a>
              <a href="#main-course">Main Course</a>
              <a href="#indian-thali">Indian Thali</a>
              <a href="#rice">Rice</a>
            </div>
          
            <div class="menu">

              <!-- Breakfast -->
              <div id="breakfast" class="menu-section">
                <h2 style="color: #FEA116;">Breakfast</h2><br>
                <div class="menu-item">
                  <img src="img/breakfast.jpg" alt="Breakfast 1">
                  <h3>Masala Dosa</h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> 
                    <span class="star">&#9733;</span>
                </div>
                  <span class="price">₹40</span><br>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
                <hr>

                <br><div class="menu-item">
                  <img src="img/ich/gheeroast.jpg" alt="Breakfast 1">
                  <h3>Ghee Roast</h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> 
                    <span class="star">&#9734;</span>
                </div>
                  <span class="price">₹50</span>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
                <hr>

                <br><div class="menu-item">
                  <img src="img/ich/wheatdosa.jpg" alt="Breakfast 1">
                  <h3>Wheat Dosa</h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> 
                    <span class="star">&#9734;</span>
                </div>
                  <span class="price">₹45</span>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
                <hr>

                <br><div class="menu-item">
                  <img src="img/ich/setdosa.jpg" alt="Breakfast 1">
                  <h3>Set Dosa</h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span> 
                    <span class="star">&#9734;</span>
                </div>
                  <span class="price">₹35</span>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
                <hr>

                <br><div class="menu-item">
                  <img src="img/ich/eggdosa.jpg" alt="Breakfast 1">
                  <h3>Egg Dosa</h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> 
                    <span class="star">&#9734;</span>
                </div>
                  <span class="price">₹45</span>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
                <hr>

                <br><div class="menu-item">
                  <img src="img/ich/idlydosa.jpg" alt="Breakfast 1">
                  <h3>Idly Vada</h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> 
                    <span class="star">&#9734;</span>
                </div>
                  <span class="price">₹35</span>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
                <hr>

                <br><div class="menu-item">
                  <img src="img/ich/pooribhaji.jpg" alt="Breakfast 1">
                  <h3>Poori Bhaji</h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> 
                    <span class="star">&#9734;</span>
                </div>
                  <span class="price">₹40</span>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
                <hr>

                <br><div class="menu-item">
                  <img src="img/ich/upma.jpg" alt="Breakfast 1">
                  <h3>Upma</h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span> 
                    <span class="star">&#9734;</span>
                </div>
                  <span class="price">₹30</span>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
                <hr>

                <br><div class="menu-item">
                  <img src="img/ich/omlette.jpg" alt="Breakfast 1">
                  <h3>Omlette</h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> 
                    <span class="star">&#9734;</span>
                </div>
                  <span class="price">₹25</span>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
              </div>

              <!-- starters  -->
              <div id="starters" class="menu-section">
                <br><div class="menu-item">
                  <div id="starters" class="menu-section">
                    <h2 style="color: #FEA116;">Starters</h2>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/vegcutlet.jpg" alt="Breakfast 1">
                      <h3>Veg Cutlet</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                    </div>
                      <span class="price">₹45</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/chickencutlet.jpg" alt="Breakfast 1">
                      <h3>Chicken Cutlet</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                    </div>
                      <span class="price">₹55</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/vegroll.jpg" alt="Breakfast 1">
                      <h3>Veg Roll</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                    </div>
                      <span class="price">₹50</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/eggroll.jpg" alt="Breakfast 1">
                      <h3>Egg Roll</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                    </div>
                      <span class="price">₹60</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/idly.jpg" alt="Breakfast 1">
                      <h3>Idly</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                    </div>
                      <span class="price">₹30</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/vada.jpg" alt="Breakfast 1">
                      <h3>Vada</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                    </div>
                      <span class="price">₹10</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                  </div>
                  <!-- Repeat similar structure for other categories -->
                </div>
              </div>

              <!-- Soups -->
              <div id="soups" class="menu-section">
                <br><div class="menu-item">
                  <div id="Soups" class="menu-section">
                    <h2 style="color: #FEA116;">Soups</h2>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/sweetcorn.jpg" alt="Breakfast 1">
                      <h3>Sweet corn Soup</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹50</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/hot&sour.jpg" alt="Breakfast 1">
                      <h3>Hot & Sour Soup</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹50</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/nadanmutton.jpg" alt="Breakfast 1">
                      <h3>Nadan Mutton Soup</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹85</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/seafoodkayal.jpg" alt="Breakfast 1">
                      <h3>Seafood Kayal Soup</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹95</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Beverages -->
              <div id="beverages" class="menu-section">
                <br><div class="menu-item">
                  <div id="Beverages" class="menu-section">
                    <h2 style="color: #FEA116;">Beverages</h2>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/tea.jpg" alt="Breakfast 1">
                      <h3>Tea</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹20</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/coffee.jpg" alt="Breakfast 1">
                      <h3>Coffee</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹25</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/milk.jpg" alt="Breakfast 1">
                      <h3>Milk</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹15</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/lemontea.jpg" alt="Breakfast 1">
                      <h3>Lemon Tea</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹20</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/rosemilk.jpg" alt="Breakfast 1">
                      <h3>Rose Milk</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹45</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/coldcoffee.jpg" alt="Breakfast 1">
                      <h3>Cold Coffee</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹50</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/watermilion.jpg" alt="Breakfast 1">
                      <h3>watermilion Juice</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹45</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Snacks -->
              <div id="snacks" class="menu-section">
                <br><div class="menu-item">
                  <div id="Snacks" class="menu-section">
                    <h2 style="color: #FEA116;">Snacks</h2>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/breadtoast.jpg" alt="Breakfast 1">
                      <h3>Bread Toast</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹35</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/bread&jam.jpg" alt="Breakfast 1">
                      <h3>Bread & Jam</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹35</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/grilledvegsandwich.jpg" alt="Breakfast 1">
                      <h3>Grilled veg sandwich</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹55</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/grillednonvegsandwich.jpg" alt="Breakfast 1">
                      <h3>Grilled Nonveg sandwich</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹65</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Main Course -->
              <div id="main-course" class="menu-section">
                <br><div class="menu-item">
                  <div id="Main Course" class="menu-section">
                    <h2 style="color: #FEA116;">Main Course</h2>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/roti.jpg" alt="Breakfast 1">
                      <h3>Roti</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹30</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/dalfryrice.jpg" alt="Breakfast 1">
                      <h3>Dal Fry Rice</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹60</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/chapathieggcurry.jpg" alt="Breakfast 1">
                      <h3>Chapathi Egg Curry</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹65</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/paneerparatha.jpg" alt="Breakfast 1">
                      <h3>Paneer Paratha</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹55</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/vegnoodle.jpg" alt="Breakfast 1">
                      <h3>Veg Noodle</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹70</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/chickennoodle.jpg" alt="Breakfast 1">
                      <h3>Chicken Noodle</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹80</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Indian Thali -->
              <div id="indian-thali" class="menu-section">
                <br><div class="menu-item">
                  <div id="Indian Thali" class="menu-section">
                    <h2 style="color: #FEA116;">Indian Thali</h2>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/vegthali.jpg" alt="Breakfast 1">
                      <h3>Veg Thali</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹90</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/eggthali.jpg" alt="Breakfast 1">
                      <h3>Egg Thali</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹95</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/paneerthali.jpg" alt="Breakfast 1">
                      <h3>Paneer Thali</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹100</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/chickenthali.jpg" alt="Breakfast 1">
                      <h3>Chicken Thali</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9733;</span>
                      </div>
                      <span class="price">₹110</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/keralaparatha.jpg" alt="Breakfast 1">
                      <h3>Kerala Paratha Egg Curry</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹120</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/vegkothuparatha.jpg" alt="Breakfast 1">
                      <h3>Veg Kothu Paratha</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹100</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Rice -->
              <div id="rice" class="menu-section">
                <br><div class="menu-item">
                  <div id="Rice" class="menu-section">
                    <h2 style="color: #FEA116;">Rice</h2>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/lemonrice.jpg" alt="Breakfast 1">
                      <h3>Lemon Rice</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹40</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/tomatorice.jpg" alt="Breakfast 1">
                      <h3>Tomato Rice</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹40</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/curdrice.jpg" alt="Breakfast 1">
                      <h3>Curd Rice</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹40</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <hr>
                    <br><div class="menu-item">
                      <img src="img/ich/dalkichidi.jpg" alt="Breakfast 1">
                      <h3>DaL Kichdi Rice</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹50</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>
                    <br><div class="menu-item">
                      <img src="img/ich/rajmarice.jpg" alt="Breakfast 1">
                      <h3>Rajma Rice</h3>
                      <div class="rating" style="color: #664200; font-size: 15px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span> 
                        <span class="star">&#9734;</span>
                      </div>
                      <span class="price">₹55</span>
                      <div class="add-remove-buttons">
                        <button class="add-to-cart">+</button>
                        <button class="remove-from-cart">-</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div> 
          </div>
        </link>
    </div>
  
          
          <script>
            // Smooth scrolling for category links
            document.querySelectorAll('.categories a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
        
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    const yOffset = -70; 
                    const y = targetElement.getBoundingClientRect().top + window.pageYOffset - document.querySelector('.menu').getBoundingClientRect().top + yOffset;
        
                    document.querySelector('.menu').scrollTo({
                        top: y,
                        behavior: 'smooth'
                    });
                }); })
             
        </script>
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Christ(Deemed to be University) Bangalore Central Campus Hosur Road, Near Dairy Circle, Bangalore Karnataka-560029</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 73532 06655</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>mahima.mahi2108@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Feedback</h4>
                        <p>Please feel free to give feedback and help us get better.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">MoodyFoody</a>, All Right Reserved. 
						            </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Service Start -->
        
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
