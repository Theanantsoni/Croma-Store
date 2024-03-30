<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Add your CSS stylesheets here -->
    <title>Add To Cart List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap link -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .center {
            margin: auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 2px solid red;
            padding: 8px;
            text-align: center;
        }
        body{
            background:#e4e0f0;
        }
            .increase-button {
            background-color: green;
            font-size: 20px;
            color: white; /* Text color to make it visible */
            /* Add any additional styling as needed */
        }
            .decrease-button {
            background-color: red;
            font-size: 20px;
            color: white; /* Text color to make it visible */
            /* Add any additional styling as needed */
        }   
        /* Custom CSS for additional styling */
    .custom-heading {
      background-color: blue; /* Bootstrap primary color */
      color: #fff; /* White text color */
      border: 5px solid white; /* Border color */
      border-radius: 10px; /* Border radius */
      padding: 10px; /* Padding */
      font-family: Arial, sans-serif; /* Font family */
      font-weight: bold; /* Bold text */
      text-transform: uppercase; /* Uppercase text */
    }
    </style>
</head>
<body>

    <div class="container">
        <center>
                <h1 class="text-center custom-heading">Add To Cart List</h1><br>

                <button class="btn btn-primary" id="empty-cart" style="background: red; border: 5px solid white; margin-right: 34%;  border-radius: 5px; color: white; text-decoration: none; font-size: 35px;">
                  <span class="fas fa-trash mr-2"></span> <!-- Added trash icon -->
                  Empty Cart List
                </button>


            <button class="btn btn-primary" style="background: green; border: 5px solid white; margin-left: 34%; border-radius: 5px;">
              <a href="../index1.php" style="color: white; text-decoration: none; font-size: 35px;">
                <i class="bi bi-house-door-fill"></i> Home
              </a>
            </button>

            
        </center>

            <br><br>
        <?php
session_start();
include "../Admin/croma_sql.php";

function updateCountInSession($productId, $count) {
    $_SESSION['cart'][$productId] = $count;
}

if (isset($_GET['action']) && isset($_GET['id'])) {
    $productId = $_GET['id'];
    if ($_GET['action'] == 'add') {
        if (!isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] = 1;
        } else {
            $_SESSION['cart'][$productId]++;
        }
    } elseif ($_GET['action'] == 'remove') {
        if (isset($_SESSION['cart'][$productId])) {
            if ($_SESSION['cart'][$productId] > 1) {
                $_SESSION['cart'][$productId]--;
            } else {
                unset($_SESSION['cart'][$productId]);
            }
        }
    }
    header("Location: cart.php");
    exit();
}

if (isset($_GET['action']) && $_GET['action'] == 'empty') {
    unset($_SESSION['cart']);
    header("Location: cart.php");
    exit();
}

$totalSum = 0; // Variable to store total sum of product prices

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $productIds = implode(',', array_keys($_SESSION['cart']));
    $sql = "SELECT * FROM media WHERE id IN ($productIds) ORDER BY id DESC"; // Modified query to fetch products in reverse order
    $result = mysqli_query($con, $sql);
    $products = array(); // Initialize an empty array to store products
    while ($row = mysqli_fetch_assoc($result)) {
        $products[$row['id']] = $row; // Store products in an associative array with product ID as key
    }
    echo "<form action='cart.php' method='post'>";
    echo "<div class='table-responsive'>";
    echo "<table class='table table-bordered table-striped center'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>
            <th style='padding-right: 30px; padding-left: 30px;'>No.</th>
            <th>Image</th>
            <th style='padding-right: 50px; padding-left: 50px;'>Product Name</th>
            <th style='padding-right: 25px; padding-left: 25px;'>New Price</th>
            <th>Count</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>";
    echo "</thead>";
    $count = 1;
    foreach ($_SESSION['cart'] as $productId => $countValue) {
        $product = $products[$productId]; // Retrieve product details from the associative array
        $totalPrice = $countValue * $product['new_price'];
        $totalSum += $totalPrice; // Add current product's total price to the total sum
        echo "<tr>";
        echo "<td>" . $count . "</td>";
        echo "<td><img src='../assests/uploads/" . $product['image'] . "' style='height: 100px; border: 2px solid green;'></td>";
        echo "<td>" . $product['productname'] . "</td>";
        echo "<td>$" . $product['new_price'] . "</td>";
        echo "<td>";
        echo "<input type='button' class='btn btn-secondary decrease-button' value='-' onclick='decreaseCount(" . $product['id'] . ")'>";
        echo "<input type='text' class='form-control' id='count_" . $product['id'] . "' value='" . $countValue . "' style='width: 50px; font-size: 20px; text-align: center;' readonly>";
        echo "<input type='button' class='btn btn-secondary increase-button' value='+' onclick='increaseCount(" . $product['id'] . ")'>";
        echo "</td>";
        echo "<td id='total_price_" . $product['id'] . "' data-new-price='" . $product['new_price'] . "'>$" . $totalPrice . "</td>";
        echo "<td><a href='cart.php?action=remove&id=" . $product['id'] . "' class='btn btn-danger' style='text-decoration: none; font-size: 30px; color: white; border: 5px solid white; border-radius: 10px; background: red; padding: 2px; margin: 2px;'>&nbsp;<span class='fas fa-trash' style='padding: 2px; margin: 2px;'></span> Remove&nbsp;</a></td>";
        echo "</tr>";
        $count++;
    }
    echo "<tr><td colspan='5' style='text-align:right;'>All Over Total Price:</td><td id='overall_total' colspan='2' style='padding-right: 50vh'>$" . $totalSum . "</td></tr>"; // Display total sum row
    echo "</table>";
    echo "</div>";
    echo "</form>";
} else {
    echo "<center>";
    echo "<p class='text-center' style='color: red; font-size: 50px;'>----------- : Empty Cart List : -----------</p>";
    echo "</center>";
}
?>

    </div>
    <!-- Add your JavaScript scripts here -->
    <script src="scripts.js"></script>
</body>
</html>







<script>
    // Function to increase count
    function increaseCount(productId) {
        var countField = document.getElementById('count_' + productId);
        var count = parseInt(countField.value);
        count++;
        countField.value = count;
        updateTotalPrice(productId, count);
        updateCountInSession(productId, count); // Update session data
        updateOverallTotal(); // Update overall total price
    }

    // Function to decrease count
    function decreaseCount(productId) {
        var countField = document.getElementById('count_' + productId);
        var count = parseInt(countField.value);
        if (count > 1) {
            count--;
            countField.value = count;
            updateTotalPrice(productId, count);
            updateCountInSession(productId, count); // Update session data
            updateOverallTotal(); // Update overall total price
        }
    }

    // Function to update total price
    function updateTotalPrice(productId, count) {
        var newPrice = parseFloat(document.getElementById('total_price_' + productId).getAttribute('data-new-price'));
        var totalPrice = newPrice * count;
        document.getElementById('total_price_' + productId).innerHTML = "$" + totalPrice.toFixed(2);
    }

    // Function to update count in session storage
    function updateCountInSession(productId, count) {
        // Store the count in session storage
        sessionStorage.setItem('count_' + productId, count);
    }

    // Function to retrieve count from session storage
    function getCountFromSession(productId) {
        // Retrieve count from session storage
        var count = sessionStorage.getItem('count_' + productId);
        // If count exists in session storage, return it. Otherwise, return 1.
        return count ? parseInt(count) : 1;
    }

    // Function to load counts from session storage on page load
    window.onload = function() {
        // Loop through all products to update their counts
        var products = document.querySelectorAll('[id^="count_"]');
        products.forEach(function(product) {
            var productId = product.id.split('_')[1];
            var count = getCountFromSession(productId);
            product.value = count;
            updateTotalPrice(productId, count);
        });
        updateOverallTotal(); // Update overall total price initially
    };

    // Function to update overall total price
    function updateOverallTotal() {
        var totalSum = 0;
        var totalPriceElements = document.querySelectorAll('[id^="total_price_"]');
        totalPriceElements.forEach(function(element) {
            totalSum += parseFloat(element.innerHTML.replace("$", ""));
        });
        document.getElementById('overall_total').innerHTML = "$" + totalSum.toFixed(2);
    }

    //remove all cart in click button empty all cart
    document.getElementById("empty-cart").addEventListener("click", function() {
        if (confirm("Are you sure you want to empty the cart?")) {
            window.location.href = "cart.php?action=empty";
        }
    });
</script>

