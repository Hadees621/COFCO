function submitForm(event) {
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
            var toastSuccess = new bootstrap.Toast(document.getElementById('toastSuccess'));
            toastSuccess.show();
            $('#signupModal').hide();
            $('.modal-backdrop').hide();
        })
        .catch(error => {
            var toastError = new bootstrap.Toast(document.getElementById('toastError'));
            document.querySelector('#toastError .toast-body').innerText = error.message;
            toastError.show();
        });
}

function submitSigninForm(event) {

    var email = $("#emaillogin").val();
    var password = $("#Passwordlogin").val();

    event.preventDefault();

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

            console.log(token, user);
            $.ajax({
                url: 'session.php',
                method: 'post',
                data: {
                    token: token,
                    user: user
                },
                success: function (response) {
                    console.log(response);
                    window.location.href = '/cofco/auth-user-profile.php';
                    console.log('success', response);
                },
                error: function (xhr, status, error) {
                    console.error('AJAX request failed:', status, error);
                    showToast('AJAX request failed: ' + error);
                }
            });

        })
        .catch(error => {
            console.error(error);
            showToast(error.message);
        });
}

function showToast(message) {
    var toast = document.getElementById('toast');
    toast.textContent = message;
    toast.className = 'toast show';

    setTimeout(function () {
        toast.className = 'toast';
    }, 3000);
}

function submitUserProfileForm(event, id) {

    event.preventDefault();

    const formData = {
        Title: document.getElementById('Title').value,
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
            console.log("Data submitted successfully", data);
            showToast('Profile submitted successfully');
        })
        .catch(error => {
            showToast('error: ' + error.message);
        });
}

function getUserById(userId) {
    console.log('getUserById called');
    fetch(`https://dev.zeeteck.com/projects/cofco/api/v1/userinfo/${userId}`)
        .then(response => response.json())
        .then(data => {
            if (data.id) {
                populateFormFields(data);
                console.log(data);
            } else {
                console.error('User data not found:', data);
            }
        })
        .catch(error => console.error('Error fetching user data:', error));
}

function populateFormFields(data) {
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
        document.getElementById('housenumber').value = data.DeliveryAddress.HouseNumber || '';
        document.getElementById('housename').value = data.DeliveryAddress.HouseName || '';
        document.getElementById('streetname').value = data.DeliveryAddress.StreetName || '';
        document.getElementById('cityname').value = data.DeliveryAddress.City || '';
        document.getElementById('postcode').value = data.DeliveryAddress.Postcode || '';
        document.getElementById('gps').value = data.DeliveryAddress.GPS || '';
    }

    if (data.BillingAddress) {
        document.getElementById('billinghousenumber').value = data.BillingAddress.HouseNumber || '';
        document.getElementById('billinghousename').value = data.BillingAddress.HouseName || '';
        document.getElementById('billingstreetname').value = data.BillingAddress.StreetName || '';
        document.getElementById('billingcityname').value = data.BillingAddress.City || '';
        document.getElementById('billingpostcode').value = data.BillingAddress.Postcode || '';
        document.getElementById('billinggps').value = data.BillingAddress.GPS || '';
    }
}
