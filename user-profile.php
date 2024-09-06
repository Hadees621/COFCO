<?php
session_start();
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null; ?>

<?php include_once './components/authenticated-header.php' ?>

<body onload="getUserById(26)">

    <section>
        <div class="main-container my-5">
            <h2 class="text-bold text-black">User Profile : <?php echo htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>
            </h2>

            <table class="user-profile-table my-5" border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th colspan="2">Personal Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Title:</td>
                        <td class="text-black" id="Title"></td>
                    </tr>
                    <tr>
                        <td>First Name:</td>
                        <td id="firstName"></td>
                    </tr>
                    <tr>
                        <td>Second Name:</td>
                        <td id="secondName"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td id="email"></td>
                    </tr>
                    <tr>
                        <td>Secondary Email:</td>
                        <td id="EmailSecondary"></td>
                    </tr>
                    <tr>
                        <td>Telephone:</td>
                        <td id="Tel"></td>
                    </tr>
                    <tr>
                        <td>Secondary Telephone:</td>
                        <td id="TelSecondary"></td>
                    </tr>
                    <tr>
                        <td>Mobile:</td>
                        <td id="Mobile"></td>
                    </tr>
                    <tr>
                        <td>Payment Method:</td>
                        <td id="PaymentMethod"></td>
                    </tr>
                </tbody>
            </table>

            <table class="user-profile-table my-5" border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th colspan="2">Delivery Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>House Number:</td>
                        <td id="housenumber"></td>
                    </tr>
                    <tr>
                        <td>House Name:</td>
                        <td id="housename"></td>
                    </tr>
                    <tr>
                        <td>Street Name:</td>
                        <td id="streetname"></td>
                    </tr>
                    <tr>
                        <td>City Name:</td>
                        <td id="cityname"></td>
                    </tr>
                    <tr>
                        <td>Postcode:</td>
                        <td id="postcode"></td>
                    </tr>
                    <tr>
                        <td>GPS:</td>
                        <td id="gps"></td>
                    </tr>
                </tbody>
            </table>

            <table class="user-profile-table my-5" border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th colspan="2">Billing Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>House Number:</td>
                        <td id="billinghousenumber"></td>
                    </tr>
                    <tr>
                        <td>House Name:</td>
                        <td id="billinghousename"></td>
                    </tr>
                    <tr>
                        <td>Street Name:</td>
                        <td id="billingstreetname"></td>
                    </tr>
                    <tr>
                        <td>City Name:</td>
                        <td id="billingcityname"></td>
                    </tr>
                    <tr>
                        <td>Postcode:</td>
                        <td id="billingpostcode"></td>
                    </tr>
                    <tr>
                        <td>GPS:</td>
                        <td id="billinggps"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</body>

<?php include_once './components/footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- 
<script>
    function getUserById(userId) {
        fetch(`https://dev.zeeteck.com/projects/cofco/api/v1/userinfo/${userId}`)
            .then(response => response.json())
            .then(data => {
                if (data.id) {
                    populateUserProfileForm(data);
                    console.log(data);
                } else {
                    console.error('User data not found:', data);
                }
            })
            .catch(error => console.error('Error fetching user data:', error));
    }

</script> -->