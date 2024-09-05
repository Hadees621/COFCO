function submitSignupForm(event) {
    var firstname = $("#firstName").val();
    var secondname = $("#secondName").val();
    var email = $("#email").val();
    var password = $("#password").val();
    event.preventDefault();

    fetch('https://dev.zeeteck.com/projects/cofco/api/v1/signup', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            FirstName: firstname,
            SecondName: secondname,
            Email: email,
            Password: password
        })
    })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => {
                    let errorMessage = err.message || "Something went wrong!";
                    if (err.errors) {
                        for (let key in err.errors) {
                            if (err.errors[key] && err.errors[key].length > 0) {
                                errorMessage += ` ${err.errors[key].join(' ')}`;
                            }
                        }
                    }
                    throw new Error(errorMessage);
                });
            }
            return response.json();
        })
        .then(data => {
            $('#signupModal').hide();
            $('.modal-backdrop').hide();
            Swal.fire({
                title: "Good job!",
                text: "Successfully Created Account",
                icon: "success"
            });
        })
        .catch(error => {
            $('#signupModal').hide();
            $('.modal-backdrop').hide();
            Swal.fire({
                text: `${error.message}`,
                icon: "error"
            });
        });
}

function submitSigninForm(event) {
    event.preventDefault();

    var email = $("#emaillogin").val();
    var password = $("#Passwordlogin").val();

    var signinButton = document.querySelector('button[type="submit"]');
    signinButton.disabled = true;
    signinButton.textContent = 'Signing In...';

    fetch('https://dev.zeeteck.com/projects/cofco/api/v1/signin', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            Email: email,
            Password: password
        })
    })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => {
                    let errorMessage = err.message || "Incorrect Credentials";
                    if (err.errors) {
                        for (let key in err.errors) {
                            if (err.errors[key] && err.errors[key].length > 0) {
                                errorMessage += ` ${err.errors[key].join(' ')}`;
                            }
                        }
                    }
                    throw new Error(errorMessage);
                });
            }
            return response.json();
        })
        .then(data => {
            var token = data.token;
            var user = data.user;

            $.ajax({
                url: 'session.php',
                method: 'post',
                data: {
                    token: token,
                    user: user
                },
                success: function (response) {
                    window.location.href = '/cofco/auth-user-profile.php';
                },
                error: function (xhr, status, error) {
                    console.error('AJAX request failed:', status, error);
                }
            });

        })
        .catch(error => {
            Swal.fire({
                text: `${error.message}`,
                icon: "error"
            });
        })
        .finally(() => {
            signinButton.disabled = false;
            signinButton.textContent = 'Sign In';
        });
}

function submitUserProfileForm(event, id) {
    event.preventDefault();

    const formData = {
        Title: document.getElementById('Title').value,
        FirstName: document.getElementById('firstName').value,
        SecondName: document.getElementById('secondName').value,
        Password: document.getElementById('password').value,
        Email: document.getElementById('email').value,
        EmailSecondary: document.getElementById('EmailSecondary').value,
        Tel: document.getElementById('Tel').value,
        TelSecondary: document.getElementById('TelSecondary').value,
        Mobile: document.getElementById('Mobile').value,
        PaymentMethod: document.getElementById('PaymentMethod').value,
        housenumber: document.getElementById('housenumber').value,
        housename: document.getElementById('housename').value,
        streetname: document.getElementById('streetname').value,
        cityname: document.getElementById('cityname').value,
        postcode: document.getElementById('postcode').value,
        gps: document.getElementById('gps').value,
        billing_housenumber: document.getElementById('billinghousenumber').value,
        billing_housename: document.getElementById('billinghousename').value,
        billing_streetname: document.getElementById('billingstreetname').value,
        billing_cityname: document.getElementById('billingcityname').value,
        billing_postcode: document.getElementById('billingpostcode').value,
        billing_gps: document.getElementById('billinggps').value
    };

    fetch(`https://dev.zeeteck.com/projects/cofco/api/v1/userinfo/${id}`, {
        method: 'PATCH',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify(formData)
    }).then(response => {
        if (!response.ok) {
            return response.json().then(err => {
                let errorMessage = err.message || "Something went wrong!";
                if (err.errors) {
                    for (let key in err.errors) {
                        if (err.errors[key] && err.errors[key].length > 0) {
                            errorMessage += ` ${err.errors[key].join(' ')}`;
                        }
                    }
                }
                throw new Error(errorMessage);
            });
        }
        return response.json();
    }).then(data => {
        Swal.fire({
            text: "User Information Updated",
            icon: "success"
        });
    }).catch(error => {
        Swal.fire({
            text: `${error.message}`,
            icon: "error"
        });
    });
}

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

function populateUserProfileForm(data) {
    document.getElementById('Title').value = data.Title || '';
    document.getElementById('firstName').value = data.FirstName || '';
    document.getElementById('secondName').value = data.SecondName || '';
    document.getElementById('email').value = data.Email || '';
    document.getElementById('EmailSecondary').value = data.EmailSecondary || '';
    document.getElementById('Tel').value = data.Tel || '';
    document.getElementById('TelSecondary').value = data.TelSecondary || '';
    document.getElementById('Mobile').value = data.Mobile || '';
    document.getElementById('password').value = data.Password || '';
    document.getElementById('PaymentMethod').value = data.PaymentMethod || '';

    if (data.DeliveryAddress) {
        document.getElementById('housenumber').value = data.DeliveryAddress.housenumber || '';
        document.getElementById('housename').value = data.DeliveryAddress.housename || '';
        document.getElementById('streetname').value = data.DeliveryAddress.streetname || '';
        document.getElementById('cityname').value = data.DeliveryAddress.cityname || '';
        document.getElementById('postcode').value = data.DeliveryAddress.postcode || '';
        document.getElementById('gps').value = data.DeliveryAddress.gps || '';
    }

    if (data.BillingAddress) {
        document.getElementById('billinghousenumber').value = data.BillingAddress.housenumber || '';
        document.getElementById('billinghousename').value = data.BillingAddress.housename || '';
        document.getElementById('billingstreetname').value = data.BillingAddress.streetname || '';
        document.getElementById('billingcityname').value = data.BillingAddress.streetname || '';
        document.getElementById('billingpostcode').value = data.BillingAddress.postcode || '';
        document.getElementById('billinggps').value = data.BillingAddress.gps || '';
    }
}




