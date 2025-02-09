<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKAY UKAY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Added Bootstrap Icons CSS -->
    <style>
       body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f5f5;
    background-image: linear-gradient(to bottom, #d3d3d3, #f5f5f5);
    padding-top: 100px;
    text-align: center;
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Ensures the body takes at least the full screen height */
}

.footer {
    margin-top: auto; /* Pushes footer to the bottom */
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
}

.social-icons {
    margin-top: 10px;
}

.social-icons a {
    color: white;
    margin: 0 10px;
    font-size: 30px; /* Makes the icons bigger */
    text-decoration: none;
}

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100px;
            padding: 15px 0;
        }
        .navbar .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
    .shop-title {
    color: #000;
    font-weight: 700;
    letter-spacing: 4px;
}
        .cart-button {
            margin-top: 10px;
        }
        .logo {
    height: 120px; /* Already increased size */
    width: auto;
    margin-right: 10px; /* Reduced margin to bring the logo closer */
}


       /* Landing Page */
    #landing-page {
    width: 100%;
    height: 100vh; /* Full screen height */
    background: url('https://pin.it/6t5ONOtc5') no-repeat center center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}
#landing-page img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image fills the container without distortion */
    z-index: -1; /* Puts the image behind the text */
}


#landing-page::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Dark overlay */
}
.landing-text {
    position: relative;
    color: white;
    font-size: 2rem;
    font-weight: bold;
    z-index: 1;
}


        /* Product Section */
        .container.mt-4 {
            margin-top: 50px; /* Space after landing page */
        }
        .product {
            background-color: #ffffffb5;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.28);
            padding: 15px;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        .product img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            border-radius: 18px;
            margin-bottom: 20px;
        }
        .sale {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(221, 198, 198, 0.766);
            padding: 5px 10px;
            border-radius: 6px;
        }
        .btn-custom {
            margin-top: 10px;
            width: 100%;
            font-weight: 800;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <img src="pic/download__8_-removebg-preview.png" alt="LOGO" class="logo">
            <h1 class="shop-title m-0">Gent's Wardrobe</h1>
            <button class="btn btn-success cart-button" onclick="viewCart()">View Cart (<span id="cart-count">0</span>)</button>
        </div>
    </nav>

    <!-- Landing Page -->
    <section id="landing-page">
        <div class="landing-text">Welcome to Gent's Wardrobe</div>
        <img src="pic/download (8).jpg" alt="Landing">
    </section>
    <footer class="footer">
        <p>&copy; 2025 Gent's Wardrobe. All rights reserved.</p>
        <div class="social-icons">
            <!-- Replace "#" with your social media URLs -->
            <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.tiktok.com" target="_blank"><i class="bi bi-tiktok"></i></a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Product Section (ALL PRODUCTS ARE BACK) -->
    <div class="container mt-4">
        <div class="row g-4">
        <?php
   $products = [
       [
           "image" => "https://happygentleman.com/wp-content/uploads/2020/06/ws22-brown-4.jpg",
           "colors" => ["Brown", "Black", "Navy"],
           "sizes" => ["S", "M", "L", "XL"],
           "material" => "Wool Blend"
       ],
       [
           "image" => "https://happygentleman.com/wp-content/uploads/2019/11/469-mens-classic-black-3-piece-suit-1.jpg",
           "colors" => ["Black", "Gray", "White"],
           "sizes" => ["M", "L", "XL"],
           "material" => "Cotton Blend"
       ],
       [
           "image" => "https://cdn.shopify.com/s/files/1/0118/6706/2330/products/5875-dark_green_a9a64dea-f4e5-4521-9d5b-9fbe31a8efbf_1200x1200.jpg?v=1571788894",
           "colors" => ["Dark Green", "Black"],
           "sizes" => ["S", "M", "L"],
           "material" => "Polyester"
       ],
       [
           "image" => "https://happygentleman.com/wp-content/uploads/2019/11/mens-black-vintage-1920s-suit.jpg",
           "colors" => ["Black", "Navy"],
           "sizes" => ["M", "L", "XL"],
           "material" => "Cotton Blend"
       ],
       [
           "image" => "https://www.fjackets.com/au/product_images/c/586/Peaky_Blinder_Grey_Suit__01168_zoom.jpg",
           "colors" => ["Gray", "Black", "Brown"],
           "sizes" => ["S", "M", "L", "XL"],
           "material" => "Tweed Fabric"
       ],
       [
           "image" => "https://happygentleman.com/wp-content/uploads/2019/11/mens-navy-blue-peaky-blinders-wool-suit-1.jpg",
           "colors" => ["Navy Blue", "Black"],
           "sizes" => ["S", "M", "L"],
           "material" => "Wool Blend"
       ],
       [
           "image" => "https://happygentleman.com/wp-content/uploads/2019/11/469-mens-classic-black-3-piece-suit-1.jpg",
           "colors" => ["Black", "Gray", "White"],
           "sizes" => ["M", "L", "XL"],
           "material" => "Cotton Blend"
       ],
       [
           "image" => "https://cdn.shopify.com/s/files/1/0118/6706/2330/products/5875-dark_green_a9a64dea-f4e5-4521-9d5b-9fbe31a8efbf_1200x1200.jpg?v=1571788894",
           "colors" => ["Dark Green", "Black"],
           "sizes" => ["S", "M", "L"],
           "material" => "Polyester"
       ],
       [
           "image" => "https://happygentleman.com/wp-content/uploads/2019/11/mens-black-vintage-1920s-suit.jpg",
           "colors" => ["Black", "Navy"],
           "sizes" => ["M", "L", "XL"],
           "material" => "Cotton Blend"
       ]
   ];
    
            foreach ($products as $index => $product): ?>
                <div class="col-md-4">
                    <div class="product position-relative">
                        <img src="<?= $product['image'] ?>" alt="Product Image">
                        <div class="sale">20% OFF</div>
                        <button class="btn btn-primary btn-custom" onclick="addToCart(<?= $index ?>)">ADD TO CART</button>
                        <button class="btn btn-dark btn-custom" onclick="buyProduct('<?= $product['image'] ?>')">BUY</button>
                        <button class="btn btn-warning btn-custom" onclick="showInfo(<?= $index ?>)">INFO</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        let products = <?= json_encode($products); ?>;
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        document.getElementById("cart-count").innerText = cart.length;

        function addToCart(index) {
            let product = products[index];
            let color = prompt("Available Colors: " + product.colors.join(", ") + "\nEnter your chosen color:");
            if (!color || !product.colors.includes(color)) return alert("Invalid color!");
            
            let size = prompt("Available Sizes: " + product.sizes.join(", ") + "\nEnter your chosen size:");
            if (!size || !product.sizes.includes(size)) return alert("Invalid size!");
            
            cart.push({ image: product.image, color, size, material: product.material });
            localStorage.setItem("cart", JSON.stringify(cart));
            document.getElementById("cart-count").innerText = cart.length;
            alert("Item added to cart!");
        }

        function buyProduct(imageLink) {
            window.location.href = imageLink;
        }

        function viewCart() {
            if (cart.length === 0) {
                alert("Your cart is empty.");
            } else {
                let cartItems = cart.map((item, i) => `${i + 1}. Color: ${item.color}, Size: ${item.size}, Material: ${item.material}`).join("\n");
                alert("Your Cart:\n" + cartItems);
            }
        }

        function showInfo(index) {
            let product = products[index];
            alert(`Available Colors: ${product.colors.join(", ")}\nSizes: ${product.sizes.join(", ")}\nMaterial: ${product.material}`);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
