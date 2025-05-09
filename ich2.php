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
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
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
              <a href="#beverage">Beverages</a>
              <a href="#snacks">Snacks</a>
              <a href="#catering">Catering</a>
              <a href="#lunch">Lunch</a>
              <a href="#thali">Thali</a>

            </div>
  
            <?php
               include('php/connection.php'); 
                 
                   $sql = "select DISTINCT food_category from outlet_menu";  
                   $result = mysqli_query($conn, $sql);  
                   $row = mysqli_fetch_all($result, MYSQLI_ASSOC); 
                   $sql2 = "select  * from outlet_menu"; 
                   $result1 = mysqli_query($conn, $sql2);  
                   $row1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);  
                   $sql3 = "SELECT count(DISTINCT food_category) as count FROM `outlet_menu`"; 
                   $result3 = mysqli_query($conn, $sql3);  
                   $row3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
                   $count=$row3[0]['count'];
                // print_r($count);
                   ?>
          
            <div class="menu">

<?php
for($j=0;$j<$count;$j++){
    // print_r($value);
    // echo strtolower($row[$j]['food_category'])
?>

              <!-- Breakfast -->
              <div id="<?php echo strtolower($row[$j]['food_category'])?>" class="menu-section">
                <h2 style="color: #FEA116;"><?php echo ucfirst($row[$j]['food_category'])?></h2><br>
              <?php
              $a=$row[$j]['food_category'];
               $sql3 = "SELECT count(DISTINCT food_name) as count FROM `outlet_menu` where food_category='$a'"; 
              // echo "SELECT count(DISTINCT food_name) as count FROM `outlet_menu` where food_category='$a'";
               $result3 = mysqli_query($conn, $sql3);  
               $row3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
               $count1=$row3[0]['count'];
               $sql4 = "select  * from outlet_menu where food_category='$a'"; 
               $result4 = mysqli_query($conn, $sql4);  
               $row4 = mysqli_fetch_all($result4, MYSQLI_ASSOC); 
              // print_r($count1);
              for($i=0;$i<$count1;$i++){?>
              <div class="menu-item">
                  <img src="image.png" alt="Breakfast 1">
                  <h3><?=$row4[$i]['food_name']?></h3>
                  <div class="rating" style="color: #664200; font-size: 15px;">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span> 
                    <span class="star">&#9733;</span>
                </div>
                  <span class="price"><?=$row1[$i]['price']?></span><br>
                  <div class="add-remove-buttons">
                    <button class="add-to-cart">+</button>
                    <button class="remove-from-cart">-</button>
                  </div>
                </div>
                
                <hr>
                <?php
              }
            }
                ?>    
  </div>
                </div>
              </div>
            </div> 
          </div>
        </link>
    </div>
        </div>
    
    <div class="cart">
      <h2>Cart</h2>
      <ul id="cart-items">
        <!-- Cart items will be displayed here -->
      </ul>
      <p>Total: ₹<span id="total">0.00</span></p>
      <button id="order-now-btn">Order Now</button>
    </div>
    <script>
    const cartItems = [];

    // event listeners to all add buttons
    const addButtons = document.querySelectorAll('.add-to-cart');
    addButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });

    // event listeners to all remove buttons
    const removeButtons = document.querySelectorAll('.remove-from-cart');
    removeButtons.forEach(button => {
        button.addEventListener('click', removeFromCart);
    });

    function addToCart(event) {
        const itemElement = event.target.closest('.menu-item');
        const itemName = itemElement.querySelector('h3').textContent;
        const itemPrice = parseFloat(itemElement.querySelector('.price').textContent.replace('₹', ''));
        const itemImage = itemElement.querySelector('img').src;

        cartItems.push({ name: itemName, price: itemPrice, image: itemImage });
        updateCart();
    }

    function removeFromCart(event) {
        const itemName = event.target.closest('.menu-item').querySelector('h3').textContent;
        const itemIndex = cartItems.findIndex(item => item.name === itemName);

        if (itemIndex !== -1) {
            cartItems.splice(itemIndex, 1);
            updateCart();
        } else {
            alert('Cannot remove something that is not present in the cart.');
        }
    }

    function updateCart() {
        const cartList = document.getElementById('cart-items');
        cartList.innerHTML = '';
        let totalAmount = 0;
        cartItems.forEach((item, index) => {
            const listItem = document.createElement('li');
            listItem.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <span>${item.name} - ₹${item.price.toFixed(2)}</span>
                <button class="remove-from-cart" data-index="${index}">-</button>
            `;
            cartList.appendChild(listItem);
            totalAmount += item.price;
        });
        document.getElementById('total').textContent = "Total: ₹" + totalAmount.toFixed(2);
    }

    function submitOrder() {
    if (cartItems.length === 0) {
        alert('Cart Empty');
        return; // Stop further execution
    }

    let confirmationMessage = 'Your order:\n\n';
    cartItems.forEach(item => {
        confirmationMessage += `${item.name} - ₹${item.price.toFixed(2)}\n`;
    });
    confirmationMessage += `\nTotal: ₹${cartItems.reduce((acc, item) => acc + item.price, 0).toFixed(2)}`;

    if (confirm(confirmationMessage)) {
        const form = document.createElement('form');
        form.method = 'post';
        form.action = 'add_order.php';
        form.style.display = 'none';

        cartItems.forEach((item, index) => {
            const inputName = document.createElement('input');
            inputName.type = 'hidden';
            inputName.name = 'cartItems[' + index + '][name]';
            inputName.value = item.name;

            const inputPrice = document.createElement('input');
            inputPrice.type = 'hidden';
            inputPrice.name = 'cartItems[' + index + '][price]';
            inputPrice.value = item.price;

            form.appendChild(inputName);
            form.appendChild(inputPrice);
        });

        document.body.appendChild(form);
        form.submit();
    }
}


    document.getElementById('order-now-btn').addEventListener('click', submitOrder);
</script>
    

  
          
    <script>
    // Smooth scrolling for category links

    document.addEventListener('DOMContentLoaded', function() {
        const smoothScroll = function(targetId) {
            const targetElement = document.getElementById(targetId);
            const yOffset = -70; 
            const y = targetElement.getBoundingClientRect().top + window.pageYOffset - document.querySelector('.menu').getBoundingClientRect().top + yOffset;

            document.querySelector('.menu').scrollTo({
                top: y,
                behavior: 'smooth'
            });
        };

        const handleCategoryClick = function(event) {
            if (event.target.tagName === 'A' && event.target.classList.contains('categories')) {
                event.preventDefault();
                const targetId = event.target.getAttribute('href').substring(1);
                smoothScroll(targetId);
            }
        };

        document.querySelector('.categories').addEventListener('click', handleCategoryClick);
    });
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
   
        <!-- Footer End -->
         <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <!-- Campus section -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Contact section -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Feedback section -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <!-- Copyright text -->
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!-- Footer menu -->
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
