<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Register Your Outlet : <br>Start your free 14-day trial of Marketify</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
        <button class="btn btn-facebook"><i class="fa fa-facebook"></i> | Connect with Facebook</button>

            <form class="form-horizontal" method="post" id="outlet-register" role="form">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">EMAIL</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">PASSWORD</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">OUTLET NAME</label>
                    <div class="col-sm-9">
                        <input type="text" name="outlet_name" class="form-control" id="inputPassword3" placeholder="Yor Shop/Outlet name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">Create Your Online Outlet Now</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h2>Get New Customers</h2>

            Marketify guarantees new customers through exposure on our website and Facebook fanpage. 
            This gives your business access to our fan-base and exposure to your brand amongst the right market. 
            These customers are not just looking for the best deals in town but also something new. 
            Marketify makes sure that the subscribers get to your business and also keep coming back for more.
        </div>
    </div>
</div>
<script >
    $(document).ready(function() {
        $('#outlet-register').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    target: 'outlets/signup',
                    success: function() {
                        $('#outlet-register').slideUp('fast');
                    }
                });
            },
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and cannot be empty'
                        },
                        emailAddress: {
                            message: 'The email address is not a valid'
                        },
                        remote: {
                            message: 'The email address is already registered',
                            url: '/signup/validate_outlet_email/'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and cannot be empty'
                        },
                        stringLength: {
                            min: 6,
                            message: 'The password must have at least 6 characters'
                        }
                    }
                },
                outlet_name: {
                    validators: {
                        notEmpty: {
                            message: 'The Outlet Name is required and cannot be empty'
                        },
                        remote: {
                            message: 'The Outlet Name is not available',
                            url: '/signup/validate_outlet_name/'
                        }

                    }
                },

            }
        });
    });
</script>