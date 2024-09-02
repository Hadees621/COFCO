"use strict";

/******Input text toggle******/
window.onLoadBundle = [];

window.onLoadBundle['InputToggleInit'] = window.InputToggleInit = function () {
  document.querySelectorAll('.input-text-toggle').forEach(function (element) {
    var btn = element.querySelector(':scope button');

    btn.onclick = function (evt) {
      evt.preventDefault(); //evt.target.previousElementSibling.disabled = false;

      evt.target.closest('.input-text-toggle').classList.toggle('input-edit');
    };
  });
};

window.onLoadBundle['select2Init'] = function () {
  $(function () {
    $('.select2').each(function () {
      var opts = {
        dropdownAutoWidth: true,
        width: 'auto'
      };

      if (this.dataset.search === "false") {
        opts.minimumResultsForSearch = -1;
      }

      $(this).select2(opts);
    });
  });
};

window.onLoadBundle['tabContentInit'] = function () {
  document.querySelectorAll('.tab-content').forEach(function (tabcontainer) {
    tabcontainer.querySelectorAll(':scope .tab-menu').forEach(function (menu) {
      menu.addEventListener('click', function (button) {
        var idx = $(button.target).parent().index();
        $(button.target).closest('.menu').find('a.active').removeClass('active');
        button.target.classList.add('active');
        button.preventDefault();
        var content = $(button.target).closest('.tab-content').children('.content');
        content.children().removeClass('active');
        content.children().eq(idx).addClass('active');
      });
    });
  });
};

window.onLoadBundle['step_form_init'] = function () {
  step_form_next = function step_form_next(button) {
    var parent = button.target.closest('.step-form');
    var activeStep = parent.querySelector('.step.active');
    var activeStepIndex = Array.prototype.indexOf.call(parent.querySelectorAll('.steps > .step'), activeStep);
    activeStep.classList.add('activating-next');
    setTimeout(function () {
      activeStep.classList.remove('active', 'activating-next');
      parent.querySelectorAll('.steps > .step')[activeStepIndex + 1].classList.add('active');
      step_form_onchange(parent);
    }, 300);
  };

  step_form_prev = function step_form_prev(button) {
    var parent = button.closest('.step-form');
    var activeStep = parent.querySelector('.step.active');
    var activeStepIndex = Array.prototype.indexOf.call(parent.querySelectorAll('.steps > .step'), activeStep);
    activeStep.classList.add('activating-prev');
    setTimeout(function () {
      activeStep.classList.remove('active', 'activating-prev');
      parent.querySelectorAll('.steps > .step')[activeStepIndex - 1].classList.add('active');
      step_form_onchange(parent);
    }, 300);
  };

  step_form_onchange = function step_form_onchange(form) {
    //Disable back btn if 1st
    var activeStep = form.querySelector('.step.active');
    var activeStepIndex = Array.prototype.indexOf.call(form.querySelectorAll('.steps > .step'), activeStep);

    if (activeStepIndex === 0) {
      form.querySelector('.step-form-footer .step-btn-back').disabled = true;
    } else {
      form.querySelector('.step-form-footer .step-btn-back').disabled = false;
    }

    if (activeStep.dataset.nextBtnLabel) {
      var nxtBtnLabel = activeStep.dataset.nextBtnLabel;
    }
  };

  document.querySelectorAll('.step-form').forEach(function (form) {
    var step_parent = form;
    form.querySelectorAll('.step').forEach(function (step, idx) {
      if (!step.querySelector('.step-header')) {
        var title = step.getAttribute('data-title') ? step.getAttribute('data-title') : '';
        var headerHtml = document.createElement('div');
        headerHtml.classList.add('step-form-header');
        headerHtml.innerHTML = " <div class=\"row\">\n                        <div class=\"col-md-9\">\n                            <p>".concat(title, "</p>\n                        </div>\n                        <div class=\"col-md-3\">\n                            <h4 class=\"form-step-count\">").concat(idx + 1, " / ").concat(step_parent.querySelectorAll('.step').length, "</h4>\n                        </div>\n                    </div>");
        step.prepend(headerHtml);
      }

      if (step.querySelector(':scope .step-btn-next')) {
        step.querySelector(':scope .step-btn-next').addEventListener('click', function (button) {
          step_form_next(button);
          button.preventDefault();
        });
      }
    });

    if (!form.querySelector('.step-form-footer')) {
      var footerHtml = document.createElement('div');
      footerHtml.classList.add('step-form-footer');
      footerHtml.innerHTML = "\n                <div class=\"row\">\n                    <div class=\"col-md-6\">\n                        <button type=\"button\" onclick=\"step_form_prev(this); return false\" class=\"step-btn-back button bg-transparent\">Back</button>\n                    </div>\n                    <div class=\"col-md-6\">\n                        <button type=\"reset\" class=\"step-btn-reset button bg-transparent\">Reset</button>\n                        &nbsp;\n                        <button type=\"button\" onclick=\"step_form_next(this); return false\" class=\"step-btn-next button\">Next Step</button>\n                    </div>\n                </div>"; //form.append(footerHtml);
    }

    step_form_onchange(form);
  });
};

window.onLoadBundle['dataTables'] = function () {
  $(function () {
    $('table.datatable').each(function () {
      var table = $(this).dataTable();
      $(this).closest('.table-body').find('select').select2({
        minimumResultsForSearch: -1,
        dropdownAutoWidth: true
      });
    });
  });
};

window.onLoadBundle['menuToggle'] = function () {
  document.querySelector('.sidebar-toggle').addEventListener('click', function (btn) {
    btn.preventDefault();
    document.querySelector('.app-container').classList.toggle('sidebar-collapsed');

    if (document.querySelector('.app-container').classList.contains('sidebar-collapsed')) {
      localStorage.setItem('menu-collapsed', true);
    } else {
      localStorage.setItem('menu-collapsed', false);
    }
  });

  if (localStorage.getItem('menu-collapsed') === 'true') {
    document.querySelector('.app-container').classList.add('sidebar-collapsed');
  }
};

window.addEventListener("DOMContentLoaded", function (event) {
  for (var i in onLoadBundle) {
    var currEvt = onLoadBundle[i];

    if (typeof currEvt === "function") {
      currEvt();
    }
  }

  setTimeout(function () {
    document.body.classList.add('init');
  }, 200);
});