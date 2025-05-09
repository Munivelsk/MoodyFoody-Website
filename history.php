<?php
session_start();
if(isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Order History</title>
    <!-- Add your stylesheets and scripts here -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
</head>

<body>

<div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>MoodyFoody</h1>
                    <h3 style="color: white;" >Hello, <?php echo $_SESSION['username']; ?></h3>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="menu.php" class="nav-item nav-link active">Menu</a>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Order History</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
<h2 style="text-align: center; color: #FEA116;">Your Orders</h2>
<?php
// Replace these credentials with your MySQL credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moodyfoody";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch orders only for the logged-in user
$logged_in_username = $_SESSION['username'];
$sql = "SELECT id, username, food, price, date, time FROM orderd WHERE username = '$logged_in_username'";
$result = $conn->query($sql);

$total = 0;

if ($result->num_rows > 0) {
    echo "<table border=1>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Food</th>
                <th>Price</th>
                <th>Date</th>
                <th>Time</th>
            </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["username"]."</td>
                <td>".$row["food"]."</td>
                <td>".$row["price"]."</td>
                <td>".$row["date"]."</td>
                <td>".$row["time"]."</td>
            </tr>";
        $total += $row['price'];
    }
    echo "</table>";
    echo "<p style='text-align: center;'>Total Money Spent: $total</p>";
} else {
    echo "<p style='text-align: center;'>No results found.</p>";
}
$sql_monthly = "SELECT SUM(price) AS total_monthly_spending, MONTH(date) AS month FROM orderd WHERE username = '$logged_in_username' GROUP BY MONTH(date)";
$result_monthly = $conn->query($sql_monthly);
?>
<br><hr><br>
<?php
if ($result_monthly->num_rows > 0) {
    echo "<h2 style='color: #FEA116;;text-align: center;'>Total Money Spent Monthly</h2>";
    echo "<table border=1>
            <tr>
                <th>Month</th>
                <th>Total Money Spent</th>
            </tr>";
    while($row_monthly = $result_monthly->fetch_assoc()) {
        $month = date("F", mktime(0, 0, 0, $row_monthly["month"], 1));
        echo "<tr>
                <td>".$month."</td>
                <td>".$row_monthly["total_monthly_spending"]."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align: center;'>No monthly spending data found.</p>";
}
$conn->close();
?>
 <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Campus</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Christ(Deemed to be University) Bangalore Central Campus Hosur Road, Near Dairy Circle, Bangalore Karnataka-560029</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://x.com/ChristBangalore?t=0SndNRvn-iP1Ksdxwyuh1w&s=08"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/share/b2SXcqfNB7MswRjZ/?mibextid=qi2Omg"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://christuniversity.in/"><i class="fas fa-globe"></i></a>

                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A15115108&keywords=christ%20university%2C%20bangalore&origin=RICH_QUERY_SUGGESTION&position=0&searchId=bcd0145e-f3bf-4462-8a90-3a3c0346d9af&sid=djX&spellCorrectionEnabled=false"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>mahi2108@gmail.com</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>adarsh220@gmail.com</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>Munivel.sk@gmail.com</p>
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
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
<?php
}
?>
