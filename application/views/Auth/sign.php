    <div class="decorative-elements"></div>
    
    <div class="register-container">
        <div class="brand-logo">
            <i class="fas fa-cut"></i>
            <div class="brand-title">Barber</div>
            <div class="brand-subtitle">Premium Cut</div>
        </div>

        <h2 class="form-title">Create Your Account</h2>

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

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-input" placeholder="your.email@example.com" required>
                <div class="error-message">Please enter a valid email address</div>
            </div>

            <div class="form-group" style="position: relative;">
                <label class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Create a strong password" required>
                <i class="fas fa-eye password-toggle" onclick="togglePassword('password')"></i>
                <div class="password-strength">
                    <div class="strength-bar">
                        <div class="strength-fill" id="strengthBar"></div>
                    </div>
                    <span id="strengthText">Enter a password</span>
                </div>
                <div class="error-message">Password must be at least 8 characters</div>
            </div>

            <div class="form-group" style="position: relative;">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirmPassword" class="form-input" placeholder="Confirm your password" required>
                <i class="fas fa-eye password-toggle" onclick="togglePassword('confirmPassword')"></i>
                <div class="error-message">Passwords do not match</div>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">
                    I agree to the <a href="#" target="_blank">Terms of Service</a> and 
                    <a href="#" target="_blank">Privacy Policy</a>
                </label>
            </div>

            <button type="submit" class="register-btn">
                <i class="fas fa-user-plus" style="margin-right: 8px;"></i>
                Create Account
            </button>
        </form>

        <div class="divider">
            <span>or</span>
        </div>

        <div class="login-link">
            Already have an account? 
            <a href="<?php echo base_url('Auth'); ?>">Log In</a>
        </div>
    </div>