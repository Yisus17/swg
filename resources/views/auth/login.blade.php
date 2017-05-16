@extends('layouts.init')

@section('content')
<div class="admin-form theme-info" id="login1">
    <div class="row mb15 table-layout">

        <div class="col-xs-6 va-m pln">
            <a href="{{ url('/') }}" title="Tablero de Control">
                <img src="{{ url('assets/img/logo.png') }}" title="Logo" class="img-responsive" width="162" height="200">
            </a>
        </div>

        <div class="col-xs-6 text-right va-b pr5">
            <div class="login-links">
                <a href="/login" class="active" title="Acceder">Acceder</a>
                <span class="text-white"> | </span>
                <a href="register" class="" title="Registrarse">Registrarse</a>
            </div>

        </div>

    </div>

    <div class="panel panel-info mt10 br-n">

        <div class="panel-heading heading-border bg-white">
            <span class="panel-title hidden">
                <i class="fa fa-sign-in"></i>Register
            </span>
            <div class="section row mn hidden">
                <div class="col-sm-4">
                    <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                        <span>
                            <i class="fa fa-facebook"></i>
                        </span>Facebook
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                        <span>
                            <i class="fa fa-twitter"></i>
                        </span>Twitter
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="button btn-social googleplus span-left btn-block">
                        <span>
                            <i class="fa fa-google-plus"></i>
                        </span>Google+
                    </a>
                </div>
            </div>
        </div>

        <!-- end .form-header section -->
        <form   method="POST" action="{{ url('/login') }}" id="contact">
            {{ csrf_field() }}
            <div class="panel-body bg-light p30">
                <div class="row">
                    <div class="col-sm-7 pr30">

                        <div class="section row hidden">
                            <div class="col-md-4">
                                <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                                  <span>
                                    <i class="fa fa-facebook"></i>
                                  </span>Facebook
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                                  <span>
                                    <i class="fa fa-twitter"></i>
                                  </span>Twitter
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="button btn-social googleplus span-left btn-block">
                                  <span>
                                    <i class="fa fa-google-plus"></i>
                                  </span>Google+
                                </a>
                            </div>
                        </div>

                        <div class="section {{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="field-label text-muted fs18 mb10">Usuario</label>
                            <label for="username" class="field prepend-icon">
                                <input type="text" name="username" id="username" class="gui-input"  placeholder="Usuario">
                                <label for="username" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                            </label>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <!-- end section -->

                        <div class="section {{ $errors->has('password') ? ' has-error' : '' }}" >
                            <label for="username" class="field-label text-muted fs18 mb10">Contraseña</label>
                            <label for="password" class="field prepend-icon">
                                <input type="password" name="password" id="password" class="gui-input"
                                       placeholder="Contraseña">
                                <label for="password" class="field-icon">
                                    <i class="fa fa-lock"></i>
                                </label>
                            </label>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <!-- end section -->
                        <!-- forgot passwords Links -->
                        <div class="theme-link">
                            <p>
                                <a href="{{ url('/password/reset') }}" class="" title="Sign In">¿Olvidó su contraseña?</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 br-l br-grey pl30 hidden">
                        <h3 class="mb25"> You'll Have Access To Your:</h3>

                        <p class="mb15">
                            <span class="fa fa-check text-success pr5"></span> Unlimited Email Storage</p>

                        <p class="mb15">
                            <span class="fa fa-check text-success pr5"></span> Unlimited Photo
                            Sharing/Storage</p>

                        <p class="mb15">
                            <span class="fa fa-check text-success pr5"></span> Unlimited Downloads</p>

                        <p class="mb15">
                            <span class="fa fa-check text-success pr5"></span> Unlimited Service Tickets</p>
                    </div>
                </div>
            </div>
            <!-- end .form-body section -->
            <div class="panel-footer clearfix p10 ph15">
                <button type="submit" class="button btn-primary mr10 pull-right">Ingresar</button>
                <label class="switch ib switch-primary pull-left input-align mt10">
                    <input type="checkbox" name="remember" id="remember" >
                    <label for="remember" data-on="SI" data-off="NO"></label>
                    <span>Recordarme</span>
                </label>
            </div>
            <!-- end .form-footer section -->

        </form>

    </div>
</div>



@endsection