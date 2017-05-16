@extends('layouts.init')

@section('content')
    <div class="admin-form theme-info mw700" style="margin-top: 3%;" id="login1">

        <div class="row mb15 table-layout">

            <div class="col-xs-6 va-m pln">
                <a href="/home" title="Return to Dashboard">
                    <img src="assets/img/logo.png" title="Logo" class="img-responsive" height="200" width="162">
                </a>
            </div>

            <div class="col-xs-6 text-right va-b pr5">
                <div class="login-links">
                    <a href="{{ url('login') }}" class="" title="Sign In">Acceder</a>
                    <span class="text-white"> | </span>
                    <a href="{{ url('register') }}" class="active" title="Register">Registrarse</a>
                </div>

            </div>

        </div>

        <div class="panel panel-info mt10 br-n">

            <div class="panel-heading heading-border bg-white">
                <div class="section row mn hidden">
                    <div class="col-sm-4">
                        <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                    <span>
                      <i class="fa fa-facebook"></i>
                    </span>Facebook</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                    <span>
                      <i class="fa fa-twitter"></i>
                    </span>Twitter</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="button btn-social googleplus span-left btn-block">
                    <span>
                      <i class="fa fa-google-plus"></i>
                    </span>Google+</a>
                    </div>
                </div>
            </div>

            <form method="post"  id="account2" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="panel-body p25 bg-light">
                    <div class="section-divider mt10 mb40">
                        <span>Registre su cuenta</span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section row">
                        <div class="col-md-12">
                            <label for="name" class="field prepend-icon">
                                <input type="text" name="name" id="name" class="gui-input" placeholder="Nombre">
                                <label for="firstname" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                            </label>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif



                        <!-- end section -->
                    </div>
                    <!-- end .section row section -->

                    <div class="section">
                        <label for="email" class="field prepend-icon">
                            <input type="email" name="email" id="email" class="gui-input" placeholder="Correo electrónico">
                            <label for="email" class="field-icon">
                                <i class="fa fa-envelope"></i>
                            </label>
                        </label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- end section -->

                    <div class="section">

                        <label for="username" class="field prepend-icon">
                            <input type="text" name="username" id="username" class="gui-input" placeholder="Escriba su nombre de usuario">
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

                    <div class="section">
                        <label for="password" class="field prepend-icon">
                            <input type="password" name="password" id="password" class="gui-input" placeholder="Escriba su contraseña">
                            <label for="password" class="field-icon">
                                <i class="fa fa-unlock-alt"></i>
                            </label>
                        </label>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    <!-- end section -->

                    <div class="section">
                        <label for="password_confirmation" class="field prepend-icon">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="gui-input" placeholder="Confirme su contraseña">
                            <label for="password_confirmation" class="field-icon">
                                <i class="fa fa-lock"></i>
                            </label>
                        </label>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- end section -->

                    <div class="section-divider mv40 hidden">
                        <span>Terminos y servicios</span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section mb15 hidden">

                        <label class="option block mt15">
                            <input type="checkbox" name="terms">
                            <span class="checkbox"></span>Acepto los
                            <a href="/term-service" class="theme-link"> términos de uso. </a>
                        </label>
                    </div>
                    <!-- end section -->

                </div>
                <!-- end .form-body section -->
                <div class="panel-footer clearfix">
                    <button type="submit" class="button btn-primary pull-right">Crear Cuenta</button>
                </div>
                <!-- end .form-footer section -->
            </form>
        </div>
    </div>
@endsection
