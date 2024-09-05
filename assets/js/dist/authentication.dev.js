"use strict";

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
    $('#signupModal').hide();
    showToast('User Registrated Successfully ', 'success');
  })["catch"](function (error) {
    showToast(error.message, 'error');
    $('#signupModal').hide();
    $('.modal-backdrop').hide();
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
      }
    });
  })["catch"](function (error) {
    console.error(error);
    showToast(error.message, 'error');
  });
}

function submitUserProfileForm(event, id) {
  event.preventDefault();
  var formData = {
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
    showToast('Profile Updated successfully', 'success');
  })["catch"](function (error) {
    showToast(error.message, 'error');
  });
}

function getUserById(userId) {
  console.log('getUserById called');
  fetch("https://dev.zeeteck.com/projects/cofco/api/v1/userinfo/".concat(userId)).then(function (response) {
    return response.json();
  }).then(function (data) {
    if (data.id) {
      populateUserProfileForm(data);
      console.log(data);
    } else {
      console.error('User data not found:', data);
    }
  })["catch"](function (error) {
    return console.error('Error fetching user data:', error);
  });
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

function showToast(message) {
  var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'info';
  var alertBox = document.getElementById('customAlert');
  var alertMessage = document.getElementById('alertMessage');
  alertMessage.textContent = message;
  alertBox.className = "custom-alert ".concat(type);
  alertBox.style.display = 'block';
  setTimeout(hideCustomAlert, 5000);
}

function hideCustomAlert() {
  var alertBox = document.getElementById('customAlert');
  alertBox.style.display = 'none';
}