    <script>
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = passwordInput.nextElementSibling;
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        function checkPasswordStrength(password) {
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');
            
            let strength = 0;
            let feedback = '';
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/)) strength++;
            if (password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;
            
            strengthBar.className = 'strength-fill';
            
            switch (strength) {
                case 0:
                case 1:
                strengthBar.classList.add('strength-weak');
                feedback = 'Weak password';
                break;
                case 2:
                strengthBar.classList.add('strength-fair');
                feedback = 'Fair password';
                break;
                case 3:
                case 4:
                strengthBar.classList.add('strength-good');
                feedback = 'Good password';
                break;
                case 5:
                strengthBar.classList.add('strength-strong');
                feedback = 'Strong password';
                break;
                default:
                feedback = 'Enter a password';
            }
            
            strengthText.textContent = feedback;
            strengthText.style.color = strength < 2 ? '#e74c3c' : strength < 4 ? '#f39c12' : '#27ae60';
        }

        function validateForm() {
            let isValid = true;
            const form = document.getElementById('registerForm');
            const inputs = form.querySelectorAll('.form-input');
            
            inputs.forEach(input => {
                const errorMsg = input.parentElement.querySelector('.error-message');
                
                if (!input.value.trim()) {
                    input.classList.add('error');
                    errorMsg.style.display = 'block';
                    isValid = false;
                } else {
                    input.classList.remove('error');
                    errorMsg.style.display = 'none';
                }
                
                // Specific validations
                if (input.name === 'email' && input.value) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(input.value)) {
                        input.classList.add('error');
                        errorMsg.style.display = 'block';
                        errorMsg.textContent = 'Please enter a valid email address';
                        isValid = false;
                    }
                }
                
                if (input.name === 'username' && input.value && input.value.length < 3) {
                    input.classList.add('error');
                    errorMsg.style.display = 'block';
                    isValid = false;
                }
                
                if (input.name === 'password' && input.value && input.value.length < 8) {
                    input.classList.add('error');
                    errorMsg.style.display = 'block';
                    isValid = false;
                }
                
                if (input.name === 'confirm_password' && input.value) {
                    const password = form.querySelector('[name="password"]').value;
                    if (input.value !== password) {
                        input.classList.add('error');
                        errorMsg.style.display = 'block';
                        isValid = false;
                    }
                }
            });
            
            // Check terms checkbox
            const termsCheckbox = document.getElementById('terms');
            if (!termsCheckbox.checked) {
                alert('Please agree to the Terms of Service and Privacy Policy');
                isValid = false;
            }
            
            return isValid;
        }

        function signInWithGoogle() {
            // This would integrate with Google OAuth
            // You can redirect to your Google OAuth endpoint
            window.location.href = '<?php echo base_url("auth/google_login"); ?>';
        }

        // Event listeners
        document.getElementById('password').addEventListener('input', function() {
            checkPasswordStrength(this.value);
        });

        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const errorMsg = this.parentElement.querySelector('.error-message');
            
            if (this.value && this.value !== password) {
                this.classList.add('error');
                errorMsg.style.display = 'block';
            } else {
                this.classList.remove('error');
                errorMsg.style.display = 'none';
            }
        });

        // Form submission
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            if (!validateForm()) {
                e.preventDefault();
                return false;
            }
            
            // Add loading state
            const submitBtn = document.querySelector('.register-btn');
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin" style="margin-right: 8px;"></i>Creating Account...';
            submitBtn.disabled = true;
        });

        // Real-time validation
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('blur', function() {
                const errorMsg = this.parentElement.querySelector('.error-message');
                
                if (!this.value.trim()) {
                    this.classList.add('error');
                    errorMsg.style.display = 'block';
                } else {
                    this.classList.remove('error');
                    errorMsg.style.display = 'none';
                }
            });
            
            input.addEventListener('focus', function() {
                this.classList.remove('error');
                const errorMsg = this.parentElement.querySelector('.error-message');
                errorMsg.style.display = 'none';
            });
        });

        // Add some interactive effects
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</htm>