<?php include_once './components/authenticated-header.php' ?>

<section>
    <div class="main-container my-5">
        <h1 class="text-bold">User Profile</h1>
        <form class="responsive-form my-5">


            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" id="Title" name="Title">
            </div>

            <div class="form-group">
                <label for="FirstName">First Name</label>
                <input type="text" id="FirstName" name="FirstName" required>
            </div>

            <div class="form-group">
                <label for="SecondName">Second Name</label>
                <input type="text" id="SecondName" name="SecondName">
            </div>

            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" id="Password" name="Password" required>
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" id="Email" name="Email" required>
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
                <label for="BillingAddress">Billing Address</label>
                <textarea type="text" id="BillingAddress" name="BillingAddress"></textarea>
            </div>

            <div class="form-group">
                <label for="DeliveryAddress">Delivery Address</label>
                <textarea type="text" id="DeliveryAddress" name="DeliveryAddress"></textarea>
            </div>

            <div class="form-group">
                <label for="Notes">Notes</label>
                <input type="text" id="Notes" name="Notes">
            </div>

            <div class="form-group">
                <label for="CreatedDate">Created Date</label>
                <input type="date" id="CreatedDate" name="CreatedDate">
            </div>

            <div class="form-group">
                <label for="PreferredComs">Preferred Communication</label>
                <select id="PreferredComs" name="PreferredComs">
                    <option value="email">Email</option>
                    <option value="phone">Phone</option>
                    <option value="sms">SMS</option>
                </select>
            </div>

            <div class="form-group">
                <label for="EmailTemplate1">Email Template 1</label>
                <textarea rows="2" type="text" id="EmailTemplate1" name="EmailTemplate1"></textarea>
            </div>

            <!-- <div class="form-group">
                <label for="EmailSent">Email Sent</label>
                <input type="checkbox" id="EmailSent" name="EmailSent">
            </div> -->

            <div class="form-group">
                <label for="CRMTicketID">CRM Ticket ID</label>
                <input type="text" id="CRMTicketID" name="CRMTicketID">
            </div>

            <div class="form-group">
                <label for="CRMTicketDate">CRM Ticket Date</label>
                <input type="date" id="CRMTicketDate" name="CRMTicketDate">
            </div>

            <div class="form-group">
                <label for="CRMStatus">CRM Status</label>
                <input type="text" id="CRMStatus" name="CRMStatus">
            </div>

            <div class="form-group">
                <label for="PaymentMethod">Payment Method</label>
                <input type="text" id="PaymentMethod" name="PaymentMethod">
            </div>

            <div class="form-group">
                <label for="OrderDate">Order Date</label>
                <input type="date" id="OrderDate" name="OrderDate">
            </div>

            <div class="form-group">
                <label for="DeliveryDate">Delivery Date</label>
                <input type="date" id="DeliveryDate" name="DeliveryDate">
            </div>

            <div class="form-group">
                <label for="DeliveryStatus">Delivery Status</label>
                <input type="text" id="DeliveryStatus" name="DeliveryStatus">
            </div>

            <div class="form-group">
                <label for="OrderNotes">Order Notes</label>
                <input type="text" id="OrderNotes" name="OrderNotes">
            </div>

            <div class="form-group">
                <label for="PaymentStatus">Payment Status</label>
                <input type="text" id="PaymentStatus" name="PaymentStatus">
            </div>

            <div class="form-group">
                <label for="OrderID">Order ID</label>
                <input type="text" id="OrderID" name="OrderID">
            </div>

            <div class="form-group">
                <label for="OrderValue">Order Value</label>
                <input type="number" step="0.01" id="OrderValue" name="OrderValue">
            </div>

            <div class="form-group">
                <label for="route">Route</label>
                <input type="text" id="route" name="route">
            </div>

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

            <div class="form-group">
                <label for="accountreference">Account Reference</label>
                <input type="text" id="accountreference" name="accountreference">
            </div>

        </form>
        <div class="d-flex justify-content-end">
            <button type="submit" class="submit-btn w-25">Submit</button>
        </div>
    </div>
</section>

<?php include_once './components/footer.php' ?>