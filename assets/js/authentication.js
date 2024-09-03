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
    var email = $("#email").val();
    var password = $("#password").val();

    event.preventDefault();

    // console.log('LOGGED IN ')

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
                }
            });

        })
        .catch(error => {
            console.error(error);
        });
}
