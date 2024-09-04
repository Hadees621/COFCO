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
    console.log("from submiutted")

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


    fetch(`https://dev.zeeteck.com/projects/cofco/api/v1/${id}`, {
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
            console.log("Data submitted successfully", data); // For debugging
            showToast('Profile submitted successfully');
        })
        .catch(error => {
            showToast('error: ' + error.message);
        });
}
