/******Input text toggle******/
window.onLoadBundle = [];

window.onLoadBundle['InputToggleInit'] = window.InputToggleInit = () => {
    document.querySelectorAll('.input-text-toggle').forEach((element) => {
        const btn = element.querySelector(':scope button');
        btn.onclick = (evt) => {
            evt.preventDefault();
            //evt.target.previousElementSibling.disabled = false;
            evt.target.closest('.input-text-toggle').classList.toggle('input-edit');
        }
    });
}

window.onLoadBundle['select2Init'] = () => {
    $(function () {
        $('.select2').each(function () {

            let opts = {
                dropdownAutoWidth: true,
                width: 'auto'
            };

            if (this.dataset.search === "false") {
                opts.minimumResultsForSearch = -1;
            }

            $(this).select2(opts);
        })
    });
}

window.onLoadBundle['tabContentInit'] = () => {
    document.querySelectorAll('.tab-content').forEach((tabcontainer) => {
        tabcontainer.querySelectorAll(':scope .tab-menu').forEach((menu) => {
            menu.addEventListener('click', function (button) {
                const idx = $(button.target).parent().index();
                $(button.target).closest('.menu').find('a.active').removeClass('active');
                button.target.classList.add('active');
                button.preventDefault();

                let content = $(button.target).closest('.tab-content').children('.content');
                content.children().removeClass('active');
                content.children().eq(idx).addClass('active');
            })
        });
    });
}

window.onLoadBundle['step_form_init'] = () => {

    step_form_next = (button) => {
        const parent = button.target.closest('.step-form');
        const activeStep = parent.querySelector('.step.active');
        const activeStepIndex = Array.prototype.indexOf.call(parent.querySelectorAll('.steps > .step'), activeStep);

        activeStep.classList.add('activating-next');
        setTimeout(() => {
            activeStep.classList.remove('active', 'activating-next');
            parent.querySelectorAll('.steps > .step')[activeStepIndex + 1].classList.add('active');
            step_form_onchange(parent);
        }, 300);
    }

    step_form_prev = (button) => {
        const parent = button.closest('.step-form');
        const activeStep = parent.querySelector('.step.active');
        const activeStepIndex = Array.prototype.indexOf.call(parent.querySelectorAll('.steps > .step'), activeStep);

        activeStep.classList.add('activating-prev');
        setTimeout(() => {
            activeStep.classList.remove('active', 'activating-prev');
            parent.querySelectorAll('.steps > .step')[activeStepIndex - 1].classList.add('active');
            step_form_onchange(parent);
        }, 300);
    }

    step_form_onchange = (form) => {
        //Disable back btn if 1st
        const activeStep = form.querySelector('.step.active');
        const activeStepIndex = Array.prototype.indexOf.call(form.querySelectorAll('.steps > .step'), activeStep);
        if (activeStepIndex === 0) {
            form.querySelector('.step-form-footer .step-btn-back').disabled = true;
        } else {
            form.querySelector('.step-form-footer .step-btn-back').disabled = false;
        }

        if (activeStep.dataset.nextBtnLabel) {
            let nxtBtnLabel = activeStep.dataset.nextBtnLabel;
        }

    }

    document.querySelectorAll('.step-form').forEach((form) => {
        const step_parent = form;
        form.querySelectorAll('.step').forEach((step, idx) => {
            if (!step.querySelector('.step-header')) {
                let title = step.getAttribute('data-title') ? step.getAttribute('data-title') : '';

                let headerHtml = document.createElement('div');
                headerHtml.classList.add('step-form-header');
                headerHtml.innerHTML = ` <div class="row">
                        <div class="col-md-9">
                            <p>${title}</p>
                        </div>
                        <div class="col-md-3">
                            <h4 class="form-step-count">${idx + 1} / ${step_parent.querySelectorAll('.step').length}</h4>
                        </div>
                    </div>`;

                step.prepend(headerHtml);
            }


            if (step.querySelector(':scope .step-btn-next')) {
                step.querySelector(':scope .step-btn-next').addEventListener('click', (button) => {
                    step_form_next(button);
                    button.preventDefault();
                });
            }

        });

        if (!form.querySelector('.step-form-footer')) {
            let footerHtml = document.createElement('div');
            footerHtml.classList.add('step-form-footer');
            footerHtml.innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" onclick="step_form_prev(this); return false" class="step-btn-back button bg-transparent">Back</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="step-btn-reset button bg-transparent">Reset</button>
                        &nbsp;
                        <button type="button" onclick="step_form_next(this); return false" class="step-btn-next button">Next Step</button>
                    </div>
                </div>`;
            //form.append(footerHtml);
        }

        step_form_onchange(form);
    });
};

window.onLoadBundle['dataTables'] = () => {
    $(function () {
        $('table.datatable').each(function () {
            const table = $(this).dataTable();
            $(this).closest('.table-body').find('select').select2({
                minimumResultsForSearch: -1,
                dropdownAutoWidth: true
            });
        });
    })
}

window.onLoadBundle['menuToggle'] = () => {
    document.querySelector('.sidebar-toggle').addEventListener('click', (btn) => {
        btn.preventDefault();
        document.querySelector('.app-container').classList.toggle('sidebar-collapsed');
        if (document.querySelector('.app-container').classList.contains('sidebar-collapsed')) {
            localStorage.setItem('menu-collapsed', true)
        } else {
            localStorage.setItem('menu-collapsed', false)
        }
    });
    if (localStorage.getItem('menu-collapsed') === 'true') {
        document.querySelector('.app-container').classList.add('sidebar-collapsed');
    }
}

window.addEventListener("DOMContentLoaded", (event) => {
    for (let i in onLoadBundle) {
        const currEvt = onLoadBundle[i];
        if (typeof currEvt === "function") {
            currEvt();
        }
    }
    setTimeout(() => { document.body.classList.add('init'); }, 200);
});


