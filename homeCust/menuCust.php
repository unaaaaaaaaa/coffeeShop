<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Bliss - Menu</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="../style.css" rel="stylesheet">
</head>

<body>
    <div class="page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand me-auto" href="homeCust.php"><img src="../img/logo.png" alt="Logo"></a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../img/logo.png" alt="Logo"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="homeCust.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2 active" aria-current="page"href="#menu">Menu</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="reservationCust.php">Reservation</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="deliveryCust.php">Delivery</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" href="aboutCust.php">About</a></li>
                            <li class="nav-item"><a class="nav-link mx-lg-2" id="contact-link"
                                    href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <a href="../logout.php" class="Lightbtn">Sign Out</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- carousel Herader -->
        <section class="menuCarousel">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/CaroselMenu1.1.png" class="d-block w-100" alt="First slide">
                        <div class="carousel-caption d-flex justify-content-center align-items-end"
                            style="height: 100%;">
                            <a href="#displayMenu-hotCoffee" class="Lightbtn">Hot Coffee</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/CaroselMenu2.2.png" class="d-block w-100" alt="Second slide">
                        <div class="carousel-caption d-flex justify-content-center align-items-end"
                            style="height: 100%;">
                            <a href="#displayMenu-icedCoffee" class="Lightbtn">Ice Coffee</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="../img/CaroselMenu3.3.png" class="d-block w-100" alt="Third slide">
                        <div class="carousel-caption d-flex justify-content-center align-items-end"
                            style="height: 100%;">
                            <a href="#displayMenu-pastires" class="Lightbtn">Pastries</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="../img/CaroselMenu4.4.png" class="d-block w-100" alt="Third slide">
                        <div class="carousel-caption d-flex justify-content-center align-items-end"
                            style="height: 100%;">
                            <a href="#displayMenu-snacks" class="Lightbtn">Snacks</a>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!--Display Menu-->
        <section calss="displayMenu-hotCoffee" id="displayMenu-hotCoffee">
            <div class="heading">
                <span>Hot Coffee Selection</span>
                <h1>"Indulge in the Warmth of Every Sip"</h1>
            </div>
            <div class="displayMenu-container">
                <div class="card" id="cardHotCoffe1">
                    <img src="../img/menuHotCoffee1.png" class="card-img-top" alt="menuHotCoffee1">
                    <div class="card-body">
                        <h5 class="card-title">Cappuccino</h5>
                        <p class="card-text">A coffee made with equal parts of espresso, steamed milk, and milk foam,
                            often topped with a sprinkle of cocoa powder or cinnamon roll.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardHotCoffee2">
                    <img src="../img/menuHotCoffee2.png" class="card-img-top" alt="menuHotCoffee2">
                    <div class="card-body">
                        <h5 class="card-title">Latte</h5>
                        <p class="card-text">Made with a shot of espresso and steamed milk, topped with a small amount
                            of milk foam. Lattes have a smooth and creamy texture.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardHotCoffee3">
                    <img src="../img/menuHotCoffee3.png" class="card-img-top" alt="menuHotCoffee3">
                    <div class="card-body">
                        <h5 class="card-title">Mocha</h5>
                        <p class="card-text">A combination of espresso, steamed milk, and chocolate syrup or cocoa
                            powder, often topped with whipped cream. It has a rich and chocolatey flavor.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardHotCoffee4">
                    <img src="../img/menuHotCoffee4.png" class="card-img-top" alt="menuHotCoffee4">
                    <div class="card-body">
                        <h5 class="card-title">Hot Chocolate</h5>
                        <p class="card-text">Combines espresso with steamed milk and chocolate syrup or cocoa powder. It
                            is often topped with whipped cream, offering a rich sweetness.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardHotCoffee5">
                    <img src="../img/menuHotCoffee5.png" class="card-img-top" alt="menuHotCoffee5">
                    <div class="card-body">
                        <h5 class="card-title">Americano</h5>
                        <p class="card-text">Made by diluting a shot of espresso with hot water, giving it a similar
                            strength to drip coffee but with a different flavor profile.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardHotCoffee6">
                    <img src="../img/menuHotCoffee6.png" class="card-img-top" alt="menuHotCoffee6">
                    <div class="card-body">
                        <h5 class="card-title">Espresso</h5>
                        <p class="card-text">A concentrated coffee brewed by forcing a small amount of nearly boiling
                            water through finely ground coffee beans.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardHotCoffee7">
                    <img src="../img/menuHotCoffee7.png" class="card-img-top" alt="menuHotCoffee7">
                    <div class="card-body">
                        <h5 class="card-title">Macchiato</h5>
                        <p class="card-text">A shot of espresso "stained" with a small amount of steamed milk, creating
                            a strong coffee flavor with a hint of creaminess.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardHotCoffee8">
                    <img src="../img/menuHotCoffee8.png" class="card-img-top" alt="menuHotCoffee8">
                    <div class="card-body">
                        <h5 class="card-title">Flat White</h5>
                        <p class="card-text">Similar to a latte but with a higher ratio of coffee to milk and a velvety
                            texture. It originated in Australia and New Zealand.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section calss="displayMenu-icedCoffee" id="displayMenu-icedCoffee">
            <div class="heading">
                <span>Iced Coffee Selection</span>
                <h1>"Refresh and cool down"</h1>
            </div>
            <div class="displayMenu-container">
                <div class="card" id="cardIcedCoffee1">
                    <img src="../img/menuIcedCoffee1.png" class="card-img-top" alt="menuIcedCoffee1">
                    <div class="card-body">
                        <h5 class="card-title">Vietnamese Iced Coffee</h5>
                        <p class="card-text">Strong coffee (often using a dark roast) brewed with a metal drip filter,
                            mixed with sweetened condensed milk, and poured over ice. It's rich, sweet, and bold.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardIcedCoffee2">
                    <img src="../img/menuIcedCoffee2.png" class="card-img-top" alt="menuIcedCoffee2">
                    <div class="card-body">
                        <h5 class="card-title">Cold Brew</h5>
                        <p class="card-text">Made by steeping coarse coffee grounds in cold water for an extended period
                            (usually 12-24 hours), then straining. It's less acidic and smoother than regular iced
                            coffee.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardIcedCoffee3">
                    <img src="../img/menuIcedCoffee3.png" class="card-img-top" alt="menuIcedCoffee3">
                    <div class="card-body">
                        <h5 class="card-title">Iced Coffee</h5>
                        <p class="card-text">Chilled brewed coffee served over ice, often with milk or cream and
                            sweeteners like sugar or flavored syrups.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardIcedCoffee4">
                    <img src="../img/menuIcedCoffee4.png" class="card-img-top" alt="menuIcedCoffee4">
                    <div class="card-body">
                        <h5 class="card-title">Iced Cappuccino</h5>
                        <p class="card-text">Similar to a traditional cappuccino but served over ice. It has a strong
                            coffee flavor and a frothy milk texture.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardIcedCoffee5">
                    <img src="../img/menuIcedCoffee5.png" class="card-img-top" alt="menuIcedCoffee5">
                    <div class="card-body">
                        <h5 class="card-title">Iced Americano</h5>
                        <p class="card-text">Espresso shots diluted with cold water and poured over ice. It's strong and
                            bold with a slightly bitter taste.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardIcedCoffee5">
                    <img src="../img/menuIcedCoffee6.png" class="card-img-top" alt="menuIcedCoffee6">
                    <div class="card-body">
                        <h5 class="card-title">Iced Latte</h5>
                        <p class="card-text">Made with a shot of espresso, cold milk, and ice. It has a creamy texture
                            and a balanced coffee flavor.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardIcedCoffee7">
                    <img src="../img/menuIcedCoffee7.png" class="card-img-top" alt="menuIcedCoffee7">
                    <div class="card-body">
                        <h5 class="card-title">Mocha Frappuccino</h5>
                        <p class="card-text">A blended iced coffee drink made with espresso, milk, chocolate syrup, and
                            ice, topped with whipped cream.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardIcedCoffee8">
                    <img src="../img/menuIcedCoffee8.png" class="card-img-top" alt="menuIcedCoffee8">
                    <div class="card-body">
                        <h5 class="card-title">Caramel Macchiato</h5>
                        <p class="card-text">Made with espresso, vanilla syrup, milk, and caramel drizzle, served over
                            ice. It's sweet, creamy, and has a caramel flavor.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section calss="displayMenu-pastries" id="displayMenu-pastires">
            <div class="heading">
                <span>Pastries</span>
                <h1>"Savor the Flaky Layers of Delight!"</h1>
            </div>
            <div class="displayMenu-container">
                <div class="card" id="cardPastries1">
                    <img src="../img/menuPastries1.png" class="card-img-top" alt="menuPastries1">
                    <div class="card-body">
                        <h5 class="card-title">Croissant</h5>
                        <p class="card-text"> A type of pastry, similar to a croissant, often filled with various sweet
                            or savory fillings.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardPastries2">
                    <img src="../img/menuPastries2.png" class="card-img-top" alt="menuPastries2">
                    <div class="card-body">
                        <h5 class="card-title">Donut</h5>
                        <p class="card-text">A deep-fried piece of dough, typically sweet and ring-shaped, glazed or
                            topped with icing, powdered sugar, or sprinkles.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardPastries3">
                    <img src="../img/menuPastries3.png" class="card-img-top" alt="menuPastries3">
                    <div class="card-body">
                        <h5 class="card-title">Cookies</h5>
                        <p class="card-text">Sweet baked treats made from dough, with added ingredients like chocolate
                            chips, nuts, or dried fruits.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardPastries4">
                    <img src="../img/menuPastries4.png" class="card-img-top" alt="menuPastries4">
                    <div class="card-body">
                        <h5 class="card-title">Waffle</h5>
                        <p class="card-text">A batter-based cake cooked in a waffle iron. Served with toppings like
                            syrup, fruit, or whipped cream.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section calss="displayMenu-snacks" id="displayMenu-snacks">
            <div class="heading">
                <span>Snacks Selection</span>
                <h1>"Crave-worthy Crunchiness, Every Bite a Delight!"</h1>
            </div>
            <div class="displayMenu-container">
                <div class="card" id="cardSnacks1">
                    <img src="../img/menuSnacks1.png" class="card-img-top" alt="menuSnacks1">
                    <div class="card-body">
                        <h5 class="card-title">Sandwich</h5>
                        <p class="card-text">Consisting of two slices of bread with a filling between them, such as
                            meat, cheese, vegetables, or spreads.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardSnacks2">
                    <img src="../img/menuSnacks2.png" class="card-img-top" alt="menuSnacks2">
                    <div class="card-body">
                        <h5 class="card-title">Fortune Cookie</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardSnacks3">
                    <img src="../img/menuSnacks3.png" class="card-img-top" alt="menuSnacks3">
                    <div class="card-body">
                        <h5 class="card-title">Chips</h5>
                        <p class="card-text">Thin slices of potato that are deep-fried or baked until crispy, seasoned
                            with salt or other flavorings.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>

                <div class="card" id="cardSnacks4">
                    <img src="../img/menuSnacks4.png" class="card-img-top" alt="menuSnacks4">
                    <div class="card-body">
                        <h5 class="card-title">French Fries</h5>
                        <p class="card-text">Long, thin strips of potato that are deep-fried until crispy and golden
                            brown.</p>
                        <a href="deliveryCust.php" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <section class="footer" id="footer">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="footer-container my-5">
                <div class="logo">
                    <img src="../img/logo1.png" class="img">
                </div>
                <div class="location">
                    <h5>Our Location</h5>
                    <p>123 Coffee Street, Jakarta, Indonesia</p>
                </div>
                <div class="Info">
                    <h5>Contact Information</h5>
                    <p>Email: info@beanbliss.com</p>
                    <p>Phone: +62 123 456 7890</p>
                </div>
            </div>
            <div class="kelompok">
                <div class="row mt-4">
                    <hr /><br />
                    <div class="col-md-12">
                        <div class="text-left">
                            <h5>© 2024 Kelompok 2</h5>
                        </div>
                        <div class="anggota">
                            <div class="text-center flex-grow-1">
                                <p class="members">Nisaul Husna</p>
                                <p class="numbers">2210511055</p>
                            </div>
                            <div class="text-center flex-grow-1">
                                <p class="members">Adinda Rizki Sya'bana Diva</p>
                                <p class="numbers">2210511056</p>
                            </div>
                            <div class="text-center flex-grow-1">
                                <p class="members">Mahira Afifa Mulia</p>
                                <p class="numbers">2210511071</p>
                            </div>
                            <div class="text-center flex-grow-1">
                                <p class="members">Edwina Martha Putri</p>
                                <p class="numbers">2210511072</p>
                            </div>
                            <div class="text-right">
                                <a href="https://www.upnvj.ac.id/" target="_blank"><img src="../img/upn.png"
                                        class="logo-upn">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="../script.js"></script>
</body>

</html>