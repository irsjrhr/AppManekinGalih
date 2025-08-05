    <div class="decorative-elements"></div>
    
    <div class="register-container">
        <div class="brand-logo">
            <i class="fas fa-cut"></i>
            <div class="brand-title">Barber</div>
            <div class="brand-subtitle">Premium Cut</div>
        </div>

        <h2 class="form-title">Login Your Account</h2>

        <?php if(isset($error)): ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form id="registerForm" method="POST" action="<?php echo base_url('auth/register'); ?>">
            <div class="form-group">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-input" placeholder="Choose a username" required>
                <div class="error-message">Username must be at least 3 characters</div>
            </div>

            <div class="form-group" style="position: relative;">
                <label class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Create a strong password" required>
                <i class="fas fa-eye password-toggle" onclick="togglePassword('password')"></i>
            </div>

            <button type="submit" class="register-btn">
                <i class="fas fa-door" style="margin-right: 8px;"></i>
                Login
            </button>
        </form>

        <div class="divider">
            <span>or</span>
        </div>

        <div class="login-link">
            Dont have an account? 
            <a href="<?php echo base_url('Auth/sign'); ?>">Sign In</a>
        </div>
    </div>