<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrap Venture - Eco-Friendly Recycling Service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2ecc71;
            --primary-dark: #27ae60;
            --secondary: #3498db;
            --dark: #2c3e50;
            --light: #ecf0f1;
            --danger: #e74c3c;
            --warning: #f39c12;
            --gray: #95a5a6;
            --white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            background-color: var(--light);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo img {
            height: 50px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            margin-left: 10px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 30px;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
            position: relative;
            padding: 5px 0;
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition);
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--dark);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), url('assets/hero-bg.jpg') no-repeat center center/cover;
            color: var(--white);
            padding: 180px 0 100px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .hero .btn {
            margin: 0 10px;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--white);
            color: var(--white);
        }

        .btn-outline:hover {
            background-color: var(--white);
            color: var(--primary);
        }

        /* How It Works Section */
        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        .steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .step {
            flex: 0 0 calc(33.333% - 30px);
            background-color: var(--white);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
            margin-bottom: 30px;
        }

        .step:hover {
            transform: translateY(-10px);
        }

        .step-icon {
            width: 80px;
            height: 80px;
            background-color: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 30px;
        }

        .step h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--dark);
        }

        /* Why Choose Us Section */
        .why-us {
            background-color: var(--primary);
            color: var(--white);
        }

        .why-us .section-title h2,
        .why-us .section-title p {
            color: var(--white);
        }

        .features {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .feature {
            flex: 0 0 calc(25% - 30px);
            background-color: var(--white);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
            margin-bottom: 30px;
            color: var(--dark);
        }

        .feature:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        /* Testimonials */
        .testimonials {
            background-color: #f9f9f9;
        }

        .testimonial-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .testimonial {
            flex: 0 0 calc(33.333% - 30px);
            background-color: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }

        .testimonial-name {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .testimonial-role {
            color: var(--gray);
            font-size: 14px;
        }

        .testimonial-text {
            font-style: italic;
            color: var(--gray);
        }

        /* Blog Section */
        .blog-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .blog-card {
            flex: 0 0 calc(33.333% - 30px);
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
            transition: var(--transition);
        }

        .blog-card:hover {
            transform: translateY(-10px);
        }

        .blog-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-content {
            padding: 20px;
        }

        .blog-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .blog-excerpt {
            color: var(--gray);
            margin-bottom: 15px;
        }

        .read-more {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
        }

        .read-more i {
            margin-left: 5px;
            transition: var(--transition);
        }

        .read-more:hover i {
            transform: translateX(5px);
        }

        /* Contact Form */
        .contact-form {
            background-color: var(--white);
            padding: 40px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(46, 204, 113, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: var(--white);
            padding: 60px 0 20px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .footer-col {
            flex: 0 0 calc(25% - 30px);
            margin-bottom: 30px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .footer-logo img {
            height: 40px;
        }

        .footer-logo-text {
            font-size: 20px;
            font-weight: 700;
            color: var(--white);
            margin-left: 10px;
        }

        .footer-about p {
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            color: var(--white);
            text-decoration: none;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary);
        }

        .footer-col h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--gray);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .contact-info {
            list-style: none;
        }

        .contact-info li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .contact-info i {
            margin-right: 10px;
            color: var(--primary);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--gray);
            font-size: 14px;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .step,
            .feature,
            .testimonial,
            .blog-card,
            .footer-col {
                flex: 0 0 calc(50% - 20px);
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: var(--white);
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu li {
                margin: 10px 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }
        }

        @media (max-width: 576px) {
            .step,
            .feature,
            .testimonial,
            .blog-card,
            .footer-col {
                flex: 0 0 100%;
            }

            .hero h1 {
                font-size: 28px;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .contact-form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="index.php" class="logo">
                <img src="assets/logo.png" alt="Scrap Venture Logo">
                <span class="logo-text">Scrap Venture</span>
            </a>
            
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
            
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="scrap-rates.php">Scrap Rates</a></li>
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#why-us">Why Us?</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php" class="btn">Login</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Sell Your Recyclables Online with Scrap Venture!</h1>
            <p>Paper - Plastics - Metals - Electronics. Serving you with the easiest pickup experience in Bangladesh.</p>
            <a href="#schedule-pickup" class="btn">Schedule a Pickup</a>
            <a href="scrap-rates.php" class="btn btn-outline">View Scrap Rates</a>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="section" id="how-it-works">
        <div class="container">
            <div class="section-title">
                <h2>How It Works</h2>
                <p>Our simple 3-step process makes recycling convenient and rewarding</p>
            </div>
            
            <div class="steps">
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Book a Pickup</h3>
                    <p>Submit your phone number and we'll call to confirm a convenient pickup time that works for you.</p>
                </div>
                
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>We Come to You</h3>
                    <p>Our professional team arrives at your address and collects the recyclables right from your doorstep.</p>
                </div>
                
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Get Paid Instantly</h3>
                    <p>Receive quick, fair payments for your scrap without any hassle. Cash or mobile payment options available.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section why-us" id="why-us">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Scrap Venture?</h2>
                <p>We're committed to providing the best recycling experience in Bangladesh</p>
            </div>
            
            <div class="features">
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Top Payouts</h3>
                    <p>Get the best price for your scrap, powered by our extensive local recycling network.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Flexible Scheduling</h3>
                    <p>Book pickups at your preferred time - we work around your schedule, not the other way around.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Trusted Team</h3>
                    <p>Our staff are background-checked and trained to provide safe, professional service every time.</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Eco Commitment</h3>
                    <p>We ensure your waste is properly recycled to minimize environmental impact and create sustainable value.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Customers Say</h2>
                <p>Hear from people who have used our services</p>
            </div>
            
            <div class="testimonial-container">
                <div class="testimonial">
                    <div class="testimonial-header">
                        <img src="assets/testimonial1.jpg" alt="Shamima Akter" class="testimonial-img">
                        <div>
                            <h4 class="testimonial-name">Shamima Akter</h4>
                            <p class="testimonial-role">Housewife, Mirpur</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"Very happy with Scrap Venture's service. The team came to my home in Mirpur on time and paid fairly for all the scrap. Highly recommended!"</p>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-header">
                        <img src="assets/testimonial2.jpg" alt="Hasan Mahmud" class="testimonial-img">
                        <div>
                            <h4 class="testimonial-name">Hasan Mahmud</h4>
                            <p class="testimonial-role">Shop Owner, Chattogram</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"As a small shop owner, I used to struggle with electronics waste. Scrap Venture made the process smooth and trustworthy with proper documentation."</p>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-header">
                        <img src="assets/testimonial3.jpg" alt="Farzana Rahman" class="testimonial-img">
                        <div>
                            <h4 class="testimonial-name">Farzana Rahman</h4>
                            <p class="testimonial-role">Office Worker, Uttara</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"Loved the professionalism! They arrived with a digital scale and the whole pickup was done in 15 minutes. No haggling—just honest service."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Our Recycling Blog</h2>
                <p>Learn more about recycling and sustainability in Bangladesh</p>
            </div>
            
            <div class="blog-container">
                <div class="blog-card">
                    <img src="assets/blog1.jpg" alt="Plastic Recycling" class="blog-img">
                    <div class="blog-content">
                        <h3 class="blog-title">Plastic Scrap Prices in Dhaka – Daily Update</h3>
                        <p class="blog-excerpt">Stay informed about plastic scrap rates in your area and learn how to get the best value for your recyclables.</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="blog-card">
                    <img src="assets/blog2.jpg" alt="Local Kabadiwalas" class="blog-img">
                    <div class="blog-content">
                        <h3 class="blog-title">The Role of Local Scrap Vendors</h3>
                        <p class="blog-excerpt">How local scrap collectors in Dhaka play a crucial role in Bangladesh's circular economy and waste management.</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="blog-card">
                    <img src="assets/blog3.jpg" alt="Green Bangladesh" class="blog-img">
                    <div class="blog-content">
                        <h3 class="blog-title">Green Bangladesh Starts with You</h3>
                        <p class="blog-excerpt">Discover how your everyday recycling habits can contribute to a cleaner, greener Bangladesh for future generations.</p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Pickup Section -->
    <section class="section" id="schedule-pickup" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="section-title">
                <h2>Ready to Recycle?</h2>
                <p>Schedule a pickup today and join our mission for a cleaner Bangladesh</p>
            </div>
            
            <div class="contact-form">
                <form action="schedule-pickup.php" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Mobile Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+8801XXXXXXXXX" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Pickup Address</label>
                        <textarea id="address" name="address" class="form-control" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="materials">Materials to Recycle</label>
                        <select id="materials" name="materials" class="form-control" required>
                            <option value="">Select Materials</option>
                            <option value="paper">Paper/Cardboard</option>
                            <option value="plastic">Plastic</option>
                            <option value="metal">Metal</option>
                            <option value="electronics">Electronics</option>
                            <option value="mixed">Mixed Materials</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="date">Preferred Pickup Date</label>
                        <input type="date" id="date" name="date" class="form-control" required>
                    </div>
                    
                    <button type="submit" class="btn" style="width: 100%;">Schedule Pickup</button>
                </form>
                
                <p style="text-align: center; margin-top: 20px; color: #666;">
                    Facing problems? Call us at <a href="tel:+8801234567890" style="color: var(--primary); font-weight: 500;">+8801234567890</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <div class="footer-logo">
                        <img src="assets/logo-white.png" alt="Scrap Venture Logo">
                        <span class="footer-logo-text">Scrap Venture</span>
                    </div>
                    <div class="footer-about">
                        <p>We're committed to making recycling easy, profitable and environmentally responsible for households and businesses across Bangladesh.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="scrap-rates.php">Scrap Rates</a></li>
                        <li><a href="#how-it-works">How It Works</a></li>
                        <li><a href="#why-us">Why Choose Us</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Household Recycling</a></li>
                        <li><a href="#">Business Recycling</a></li>
                        <li><a href="#">E-Waste Collection</a></li>
                        <li><a href="#">Paper Recycling</a></li>
                        <li><a href="#">Plastic Recycling</a></li>
                        <li><a href="#">Metal Recycling</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>House #123, Road #12, Mirpur DOHS, Dhaka - 1216, Bangladesh</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span>+8801234567890</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>support@scrapventure.com</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Mon-Sat: 9:00 AM - 7:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; <?php echo date("Y"); ?> Scrap Venture. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');
        
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.innerHTML = navMenu.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });
        
        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (navMenu.classList.contains('active')) {
                        navMenu.classList.remove('active');
                        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                    }
                }
            });
        });
        
        // Form Validation
        const contactForm = document.querySelector('.contact-form form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                const phoneInput = document.getElementById('phone');
                const phoneRegex = /^\+8801[3-9]\d{8}$/;
                
                if (!phoneRegex.test(phoneInput.value)) {
                    e.preventDefault();
                    alert('Please enter a valid Bangladeshi mobile number starting with +880');
                    phoneInput.focus();
                }
            });
        }
        
        // Set minimum date for pickup scheduling to tomorrow
        const dateInput = document.getElementById('date');
        if (dateInput) {
            const today = new Date();
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);
            
            const yyyy = tomorrow.getFullYear();
            const mm = String(tomorrow.getMonth() + 1).padStart(2, '0');
            const dd = String(tomorrow.getDate()).padStart(2, '0');
            
            dateInput.min = `${yyyy}-${mm}-${dd}`;
        }
    </script>
</body>
</html>