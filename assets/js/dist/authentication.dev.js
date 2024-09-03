"use strict";

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
  }).then(function (response) {
    if (!response.ok) {
      return response.json().then(function (err) {
        var errorMessage = err.message || "Something went wrong!";

        if (err.errors) {
          for (var key in err.errors) {
            if (err.errors[key] && err.errors[key].length > 0) {
              errorMessage += " ".concat(err.errors[key].join(' '));
            }
          }
        }

        throw new Error(errorMessage);
      });
    }

    return response.json();
  }).then(function (data) {
    var toastSuccess = new bootstrap.Toast(document.getElementById('toastSuccess'));
    toastSuccess.show();
    $('#signupModal').hide();
    $('.modal-backdrop').hide();
  })["catch"](function (error) {
    var toastError = new bootstrap.Toast(document.getElementById('toastError'));
    document.querySelector('#toastError .toast-body').innerText = error.message;
    toastError.show();
  });
}

function submitSigninForm(event) {
  var email = $("#email").val();
  var password = $("#password").val();
  event.preventDefault(); // console.log('LOGGED IN ')

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
  }).then(function (response) {
    if (!response.ok) {
      return response.json().then(function (err) {
        var errorMessage = err.message || "Incorrect Credentials";

        if (err.errors) {
          for (var key in err.errors) {
            if (err.errors[key] && err.errors[key].length > 0) {
              errorMessage += " ".concat(err.errors[key].join(' '));
            }
          }
        }

        throw new Error(errorMessage);
      });
    }

    return response.json();
  }).then(function (data) {
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
      success: function success(response) {
        console.log(response);
        window.location.href = '/cofco/auth-user-profile.php';
        console.log('success', response);
      },
      error: function error(xhr, status, _error) {
        console.error('AJAX request failed:', status, _error);
      }
    });
  })["catch"](function (error) {
    console.error(error);
  });
}