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
  fetch("https://dev.zeeteck.com/projects/cofco/api/v1/userinfo/".concat(id), {
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
    showToast('error: ' + error.message);
  });
}

function getUserById(userId) {
  console.log('getUserById called');
  fetch("https://dev.zeeteck.com/projects/cofco/api/v1/userinfo/".concat(userId)).then(function (response) {
    return response.json();
  }).then(function (data) {
    if (data.id) {
      populateFormFields(data);
      console.log(data);
    } else {
      console.error('User data not found:', data);
    }
  })["catch"](function (error) {
    return console.error('Error fetching user data:', error);
  });
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