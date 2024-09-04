<?php include_once './components/header.php' ?>

<div class="main-container">
    <form class="w-50 my-5" style="margin: auto;" onsubmit="submitSigninForm(event)">
        <h1 class="text-bold" style="text-align: center;">Sign in</h1>
        <div class="form-group">
            <label for="emaillogin">Email</label>
            <input type="email" id="emaillogin" name="emaillogin">
        </div>
        <div class="form-group">
            <label for="Passwordlogin">Password</label>
            <input type="password" id="Passwordlogin" name="Passwordlogin" required>
        </div>
        <div class="d-flex justify-content-end align-items-end w-100" style="align-items: center;">
            <button type="submit" class="submit-btn">
                Sign In
            </button>
        </div>

        <p class="text-center">
            Have not registered yet? <a href="#" class="px-2 cursor-pointer" data-bs-toggle="modal"
                data-bs-target="#signupModal">Sign up</a>
        </p>
    </form>
</div>

<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class="modal-header">
                <h3 class="modal-title text-bold" id="signupModalLabel">Sign Up</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="p-3 ">
                <form id="signupForm" class="w-100" onsubmit="submitForm(event)">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Second Name</label>
                        <input type="text" id="secondName" name="secondName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="submit-btn">Sign Up</button>
                    </div>
                </form>
            </div>
            <div aria-live="polite" aria-atomic="true" class="toast-container position-fixed bottom-0 end-0 p-3">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastError">
                    <div class="toast-header">
                        <strong class="me-auto">Notification</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body text-danger">
                        Something went wrong!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div aria-live="polite" aria-atomic="true" class="toast-container position-fixed bottom-0 end-0 p-3">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastSuccess">
        <div class="toast-header">
            <strong class="me-auto">Notification</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Successfully Created Account
        </div>
    </div>
</div>
<?php include_once './components/footer.php' ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="./assets/js/authentication.js"></script>
</body>

</html>