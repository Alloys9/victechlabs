<!DOCTYPE html>
<html lang="en">

<head>
    @include('defaults.head')
</head>

<body>

    @include('home.cgoogle')

    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-left">
            <div class="nav-logo">{{ config('app.name') }}</div>
            <div class="nav-location">
                <i class="bx bx-map"></i>
                <span>Deliver to Kenya</span>
            </div>
        </div>
        <div class="nav-search">
            <select class="search-category">
                <option value="all">All</option>
            </select>
            <input type="text" placeholder="Search {{ config('app.name') }}">
            <button><i class="bx bx-search"></i></button>
        </div>
        <div class="hamburger-menu">
            <i class="bx bx-menu"></i>
        </div>

        <div class="nav-right">
            <div class="nav-language dropdown">
                <span class="dropdown-toggle">KSH<i class="bx bx-chevron-down"></i></span>
                <ul class="dropdown-menu">
                    <li><a href="#">Kenyan Shilling</a></li>
                    <li><a href="#">Español</a></li>
                </ul>
            </div>
            @if (!Auth::check())
                <div class="nav-account dropdown"> <span class="dropdown-toggle">Hello, sign in <i
                            class="bx bx-chevron-down"></i></span>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Sign up</a></li>
                    </ul>
                </div>
            @else
                <div class="nav-account dropdown"> <span class="dropdown-toggle">Hello, <i
                            class="bx bx-chevron-down"></i></span>
                    <ul class="dropdown-menu">
                        <li><a href="#">Your Account</a></li>
                        <li><a href="#">Your Orders</a></li>
                        <li><a href="#">Your Wish List</a></li>
                        <li><a href="{{ url('logout') }}">Sign Out</a></li>

                    </ul>
                </div>
            @endif

            <div class="nav-orders"> <span>Returns</span> <span><strong>& Orders</strong></span> </div>
            <div class="nav-cart">
                <i class="bx bx-cart"></i>
                <span class="cart-count">0</span>
            </div>

        </div>

    </nav>


    <!-- Popup for nav links -->
    <div class="navpopup" id="navPopup">
        <div class="navpopup-content">
            <button class="navclose-popup"><i class="bx bx-x"></i></button>
            <a href="#">Today's Deals</a>
            <a href="#">Gift Cards</a>
            <a href="#">Customer Service</a>
            @if (!Auth::check())
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Sign up</a>
            @endif
        </div>
    </div>



    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>SHOP COMPUTERS & ACCESSORIES</h1>
            <p>Shop latest desktops, monitors, tablets, PC-related devices, and accessories.</p>
            <button>More Info</button>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/pc.jpg') }}" alt="Headphones Placeholder">
        </div>
    </section>

    <!-- User Recommendations -->
    <section class="recommendations">
        <div class="rec-item"><i class="bx bx-user"></i> Hi, user</div>
        <div class="rec-item"><i class="bx bx-box"></i> Your Orders</div>
        <div class="rec-item"><i class="bx bx-laptop"></i> Electronics - Big Sale 30%</div>
        <div class="rec-item"><i class="bx bx-home"></i> Home & Kitchen - Big Sale 30%</div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <h2>Shop by Categories</h2>
        <a href="#" class="all-categories">All Categories <i class="bx bx-right-arrow-alt"></i></a>
        <div class="category-container">
            <div class="category-item"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>Storage Expansion</p>
            </div>
            <div class="category-item"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>Computers & Accessories</p>
            </div>
            <div class="category-item"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>Service</p>
            </div>

        </div>
    </section>

    <!-- Delivers Section -->
    <section class="delivers">
        <div class="deliver-section">
            <div>
                <h2>Fast Delivery</h2>
                <button>Shop Now</button>
            </div>
            <img src="{{ asset('images/pc.jpg') }}" alt="Fast Delivery">
        </div>
        <div class="deliver-section">
            <div>
                <h2>Special Offers</h2>
                <button>View Deals</button>
            </div>
            <img src="{{ asset('images/pc.jpg') }}" alt="Special Offers">
        </div>

    </section>

    <section class="products">
        <a href="#" class="all-products">All Products <i class="bx bx-right-arrow-alt"></i></a>
        <div class="product-grid">
            <div class="product"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>$150.99</p>
            </div>
            <div class="product"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>$86.00</p>
            </div>
            <div class="product"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>$79.97</p>
            </div>
            <div class="product"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>$68.99</p>
            </div>
            <div class="product"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>$59.94</p>
            </div>
            <div class="product"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>$59.94</p>
            </div>
            <div class="product"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>$59.94</p>
            </div>
            <div class="product"><img src="{{ asset('images/pc.jpg') }}" alt="">
                <p>$59.94</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <!-- Back to Top Button -->
        <div class="back-to-top" onclick="scrollToTop()">Back to Top</div>

        <div class="footer-content">
            <div class="footer-section">
                <h3>Get to Know Us</h3>
                <p><i class="bx bx-info-circle"></i> About Us</p>
                <p><i class="bx bx-bookmark"></i> Careers</p>
            </div>
            <div class="footer-section">
                <h3>Customer Service</h3>
                <p><i class="bx bx-help-circle"></i> Help Center</p>
                <p><i class="bx bx-truck"></i> Shipping & Delivery</p>
                <p><i class="bx bx-lock"></i> Returns & Refunds</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <p><i class="bx bxl-facebook"></i> Facebook</p>
                <p><i class="bx bxl-twitter"></i> Twitter</p>
                <p><i class="bx bxl-instagram"></i> Instagram</p>
            </div>
        </div>

        <p class="footer-bottom">&copy; 2025 {{ config('app.name') }}. All rights reserved.</p>
    </footer>


    <script src="{{ asset('js/hamburger.js') }}"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
</body>

</html>
