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
        showToast('AJAX request failed: ' + _error);
      }
    });
  })["catch"](function (error) {
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
  console.log("from submiutted");
  event.preventDefault();
  var formData = {
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
  fetch("https://dev.zeeteck.com/projects/cofco/api/v1/".concat(id), {
    method: 'PATCH',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json'
    },
    body: JSON.stringify(formData)
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
    console.log("Data submitted successfully", data);
    showToast('Profile submitted successfully');
  })["catch"](function (error) {
    console.error(error);
    showToast(error.message);
  });
} // function submitUserProfileForm(event, id) {
//     event.preventDefault();
//     fetch(`https://dev.zeeteck.com/projects/cofco/api/v1/${id}`, {
//         method: 'PATCH',
//         headers: {
//             'Content-Type': 'application/json',
//             'Accept': 'application/json'
//         },
//         body: JSON.stringify({
//             FirstName: firstname,
//             SecondName: secondname,
//             Email: email,
//             Password: password
//         })
//     })
//         .then(response => {
//             if (!response.ok) {
//                 return response.json().then(err => {
//                     let errorMessage = err.message || "Something went wrong!";
//                     if (err.errors) {
//                         for (let key in err.errors) {
//                             if (err.errors[key] && err.errors[key].length > 0) {
//                                 errorMessage += ` ${err.errors[key].join(' ')}`;
//                             }
//                         }
//                     }
//                     throw new Error(errorMessage);
//                 });
//             }
//             var response = response.json()
//             console.log(response);
//             return response;
//         })
//         .catch(error => {
//             var toastError = new bootstrap.Toast(document.getElementById('toastError'));
//             document.querySelector('#toastError .toast-body').innerText = error.message;
//             toastError.show();
//         });
// }