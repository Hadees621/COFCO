function submitForm(event) {
    var firstname = $("#firstName").val();
    var secondname = $("#secondName").val();
    var email = $("#email").val();
    var password = $("#password").val();
    event.preventDefault();

    fetch('https://dev.zeeteck.com/projects/cofco/api/v1/signup', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json', // Sending JSON data
            'Accept': 'application/json' // Expecting JSON response
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
                // If the response is not OK, parse the response to JSON to get error details
                return response.json().then(err => {
                    // Extract and format the error message
                    let errorMessage = err.message || "Something went wrong!";
                    if (err.errors) {
                        for (let key in err.errors) {
                            if (err.errors[key] && err.errors[key].length > 0) {
                                errorMessage += ` ${err.errors[key].join(' ')}`;
                            }
                        }
                    }
                    throw new Error(errorMessage); // Throw error with formatted message
                });
            }
            return response.json(); // Convert response to JSON
        })
        .then(data => {
            var toastSuccess = new bootstrap.Toast(document.getElementById('toastSuccess'));
            toastSuccess.show();
            $('#signupModal').hide();
            $('.modal-backdrop').hide();
        })
        .catch(error => {
            // Show error toast with the concatenated message
            var toastError = new bootstrap.Toast(document.getElementById('toastError'));
            document.querySelector('#toastError .toast-body').innerText = error.message;
            toastError.show();
        });
}

function submitSigninForm() {
    var email = $("#email").val();
    var password = $("#password").val();

    fetch('https://dev.zeeteck.com/projects/cofco/api/v1/signin', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json', // Sending JSON data
            'Accept': 'application/json' // Expecting JSON response
        },
        body: JSON.stringify({
            Email: email,
            Password: password,
        })
    }).then(response => {
        if (!response.ok) {
            // If the response is not OK, parse the response to JSON to get error details
            return response.json().then(err => {
                // Extract and format the error message
                let errorMessage = err.message || "Incorrect Credentials";
                if (err.errors) {
                    for (let key in err.errors) {
                        if (err.errors[key] && err.errors[key].length > 0) {
                            errorMessage += ` ${err.errors[key].join(' ')}`;
                        }
                    }
                }
                throw new Error(errorMessage); // Throw error with formatted message
            });
        }
        return response.json(); // Convert response to JSON
    }).then(data => {
        var token = data.token;
        var userinfo = data.user;
        console.log(token, userinfo);
    }).catch(error => {
        console.error(error)
    });

    event.preventDefault();
}

