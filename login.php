<?php 
$pageTitle = "Login - Scrap Venture";
include 'includes/header.php'; 
?>

<section class="section" style="min-height: 80vh;">
    <div class="container">
        <div class="login-container" style="max-width: 500px; margin: 0 auto;">
            <div class="section-title">
                <h2>Login to Your Account</h2>
                <p>Access your scrap pickup history and manage your account</p>
            </div>
            
            <div class="contact-form">
                <form action="process-login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    
                    <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="forgot-password.php" style="color: var(--primary);">Forgot password?</a>
                    </div>
                    
                    <button type="submit" class="btn" style="width: 100%;">Login</button>
                    
                    <p style="text-align: center; margin-top: 20px;">
                        Don't have an account? <a href="register.php" style="color: var(--primary); font-weight: 500;">Register here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>