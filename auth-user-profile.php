<?php $id = isset($_SESSION['id']) ? $_SESSION['id'] : null; ?>

<?php include_once './components/authenticated-header.php' ?>

<body onload="getUserById(<?php echo htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>)">

    <div id="customAlert" class="custom-alert">
        <span id="alertMessage"></span>
        <button onclick="hideCustomAlert()" class="close-alert">x</button>
    </div>

    <section>
        <div class="main-container my-5">
            <h2 class="text-bold">User Profile <?php echo htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?> </h2>

            <form id="userprofileform" class="my-5"
                onsubmit="submitUserProfileForm(event,<?php echo htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>)">

                <div class="grid-cols-2">

                    <div class="form-group">
                        <label for="Title">Title</label>
                        <select id="Title" name="Title">
                            <option value="">Select Title</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <option value="Ms">Ms</option>
                        </select>
                    </div>

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

                    <div class="form-group">
                        <label for="EmailSecondary">Secondary Email</label>
                        <input type="email" id="EmailSecondary" name="EmailSecondary">
                    </div>

                    <div class="form-group">
                        <label for="Tel">Telephone</label>
                        <input type="text" id="Tel" name="Tel" required>
                    </div>

                    <div class="form-group">
                        <label for="TelSecondary">Secondary Telephone</label>
                        <input type="text" id="TelSecondary" name="TelSecondary">
                    </div>

                    <div class="form-group">
                        <label for="Mobile">Mobile</label>
                        <input type="text" id="Mobile" name="Mobile">
                    </div>

                    <div class="form-group">
                        <label for="PaymentMethod">Payment Method</label>
                        <input type="text" id="PaymentMethod" name="PaymentMethod">
                    </div>

                </div>

                <h4 class="text-bold my-4">Delivery Address</h4>

                <div class="grid-cols-2">
                    <div class="form-group">
                        <label for="housenumber">House Number</label>
                        <input type="text" id="housenumber" name="housenumber" required>
                    </div>

                    <div class="form-group">
                        <label for="housename">House Name</label>
                        <input type="text" id="housename" name="housename" required maxlength="255">
                    </div>

                    <div class="form-group">
                        <label for="streetname">Street Name</label>
                        <input type="text" id="streetname" name="streetname" maxlength="255">
                    </div>

                    <div class="form-group">
                        <label for="cityname">City Name</label>
                        <input type="text" id="cityname" name="cityname" required maxlength="255">
                    </div>

                    <div class="form-group">
                        <label for="postcode">Postcode</label>
                        <input type="text" id="postcode" name="postcode" required maxlength="20">
                    </div>

                    <div class="form-group">
                        <label for="gps">GPS</label>
                        <input type="text" id="gps" name="gps" maxlength="50">
                    </div>
                </div>

                <h4 class="text-bold my-4">Billing Address</h4>

                <div class="grid-cols-2">
                    <div class="form-group">
                        <label for="billinghousenumber">House Number</label>
                        <input type="text" id="billinghousenumber" name="billinghousenumber" required>
                    </div>

                    <div class="form-group">
                        <label for="billinghousename">House Name</label>
                        <input type="text" id="billinghousename" name="billinghousename" required maxlength="255">
                    </div>

                    <div class="form-group">
                        <label for="billingstreetname">Street Name</label>
                        <input type="text" id="billingstreetname" name="billingstreetname" maxlength="255">
                    </div>

                    <div class="form-group">
                        <label for="billingcityname">City Name</label>
                        <input type="text" id="billingcityname" name="billingcityname" required maxlength="255">
                    </div>

                    <div class="form-group">
                        <label for="billingpostcode">Postcode</label>
                        <input type="text" id="billingpostcode" name="billingpostcode" required maxlength="20">
                    </div>

                    <div class="form-group">
                        <label for="billinggps">GPS</label>
                        <input type="text" id="billinggps" name="billinggps" maxlength="50">
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="submit-btn w-25">Submit</button>
                </div>

            </form>
        </div>
    </section>
</body>

<?php include_once './components/footer.php' ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>