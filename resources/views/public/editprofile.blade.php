<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Register | Products</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ ('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ ('assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ ('assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ ('assets/css/style.css') }}" rel="stylesheet">
    </head>
    <body class="signup-page">
        <div class="signup-box">
            <div class="logo">
            <div class="login-box-msg">
                <img src="{{ asset('img_game/logo.png') }}" width="100" height="100" alt="User Image">
            </div>
            <a href="javascript:void(0);">Edit Profile</b></a>
            <small>Herbal Store - Happy to Play</small>
                </div>
                <div class="row clearfix">
                        <div class="card">
                            <div class="body">
                                <form  role="form" method="POST" action="{{ url('/updateprofile') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="name">Name</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <div class="form-line">
                                                    <input id="name" type="text" class="form-control" value="{{$user->name }}" name="name" placeholder="Input Your Name">
                                                        @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="birhdate">Birth Date</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                                <div class="form-line">
                                                    <input id="birthdate"  value="{{ $user->birhdate }}" type="date" class="form-control" name="birthdate">
                                                        @if ($errors->has('birthdate'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('birthdate') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="sex">Sex</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" name="sex">
                                                        <option value="">-- Please select --</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                        @if ($errors->has('sex'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('sex') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <div class="form-line">
                                                    <input id="password" type="password" class="form-control" name="password" placeholder="Input Your Password">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password">Confirm Password</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                <div class="form-line">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Input Your Password Confirmation">
                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="img">Profil Image</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div >
                                                    <img class="img-circle" style="margin-bottom:10px;" width="100" height="100" id="avatar" src="{{$user->img }}">
                                                    <input type="file" id="img" name="img" accept="image/x-png,image/gif,image/jpeg">
                                                    @if ($errors->has('img'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('img') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                    <div class="form-group">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-btn fa-user"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Custom Content -->
        </div>
    <!-- Jquery Core Js -->
    <script src="{{ ('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ ('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ ('assets/plugins/node-waves/waves.js') }}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{ ('assets/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ ('assets/js/admin.js') }}"></script>
    <script src="{{ ('assets/js/pages/examples/sign-in.js') }}"></script>
        <script>
    document.getElementById("birthdate").valueAsDate = new Date();
    var loadFile = function(event) {
        var output = document.getElementById('avatar');
        output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

</body>

</html>