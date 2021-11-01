//LOGIN
document.addEventListener('DOMContentLoaded', function (e) {

    var loginForm = document.getElementById('loginForm');
    if (typeof (loginForm) != 'undefined' && loginForm != null) {

        const login = FormValidation.formValidation(
            loginForm, {
                fields: {
                    email: {
                        validators: {
                            emailAddress: {
                                message: 'The value is not a valid email address'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
                            stringLength: {
                                min: 3,
                                message: 'The password must have at least 3 characters',
                            },
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                    submitButton: new FormValidation.plugins.DefaultSubmit(),
                    icon: new FormValidation.plugins.Icon({
                        valid: 'fa fa-check',
                        invalid: 'fa fa-times',
                        validating: 'fa fa-refresh',
                    }),
                    recaptcha: new FormValidation.plugins.Recaptcha({
                        element: 'captchaContainer',
                        message: 'The captcha is not valid',
                        siteKey: $('meta[name="g-recaptcha-sitekey"]').attr('content'),
                        theme: 'light',
                    }),
                },
            });

        $('#loginForm').submit(function (e) {
            var form = $(this);
            e.preventDefault();
            login.validate().then(function (status) {
                // status can be one of the following value
                // 'NotValidated' (FormValidation.Status.NotValidated): The form is not yet validated
                // 'Valid' (FormValidation.Status.Valid): The form is valid
                // 'Invalid' (FormValidation.Status.Invalid): The form is invalid
                if (status.valid) {
                    form.submit();
                }
            });
        })
    }

    var registerForm = document.getElementById('registerForm');
    if (typeof (registerForm) != 'undefined' && registerForm != null) {
        const register = FormValidation.formValidation(
            registerForm, {
                fields: {
                    firstname: {
                        validators: {
                            notEmpty: {
                                message: 'Your Firstname is required'
                            },
                        },
                    },
                    lastname: {
                        validators: {
                            notEmpty: {
                                message: 'Your Lastname is required'
                            },
                        },
                    },
                    email: {
                        validators: {
                            emailAddress: {
                                message: 'The value is not a valid email address'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
                            stringLength: {
                                min: 3,
                                message: 'The password must have at least 3 characters',
                            },
                        }
                    },
                    password_confirmation: {
                        validators: {
                            notEmpty: {
                                message: 'The confirmation password is required'
                            },
                            identical: {
                                compare: function () {
                                    return registerForm.querySelector('[name="password"]').value;
                                },
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                    submitButton: new FormValidation.plugins.DefaultSubmit(),
                    icon: new FormValidation.plugins.Icon({
                        valid: 'fa fa-check',
                        invalid: 'fa fa-times',
                        validating: 'fa fa-refresh',
                    }),
                    recaptcha: new FormValidation.plugins.Recaptcha({
                        element: 'captchaContainer',
                        message: 'The captcha is not valid',
                        siteKey: $('meta[name="g-recaptcha-sitekey"]').attr('content'),
                        theme: 'light',
                    }),
                },
            });

        $('#registerForm').submit(function (e) {
            var form = $(this);
            e.preventDefault();
            register.validate().then(function (status) {
                // status can be one of the following value
                // 'NotValidated' (FormValidation.Status.NotValidated): The form is not yet validated
                // 'Valid' (FormValidation.Status.Valid): The form is valid
                // 'Invalid' (FormValidation.Status.Invalid): The form is invalid
                if (status.valid) {
                    form.submit();
                }
            });
        });
    }

    var forgotForm = document.getElementById('forgotForm');
    if (typeof (forgotForm) != 'undefined' && forgotForm != null) {
        const forgot = FormValidation.formValidation(
            forgotForm, {
                fields: {
                    email: {
                        validators: {
                            emailAddress: {
                                message: 'The value is not a valid email address'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                    submitButton: new FormValidation.plugins.DefaultSubmit(),
                    icon: new FormValidation.plugins.Icon({
                        valid: 'fa fa-check',
                        invalid: 'fa fa-times',
                        validating: 'fa fa-refresh',
                    }),
                    recaptcha: new FormValidation.plugins.Recaptcha({
                        element: 'captchaContainer',
                        message: 'The captcha is not valid',
                        siteKey: $('meta[name="g-recaptcha-sitekey"]').attr('content'),
                        theme: 'light',
                    }),
                },
            });

        $('#forgotForm').submit(function (e) {
            var form = $(this);
            e.preventDefault();
            forgot.validate().then(function (status) {
                if (status.valid) {
                    form.submit();
                }
            });
        });
    }
});