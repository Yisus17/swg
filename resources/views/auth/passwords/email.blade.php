@extends('layouts.init')

<!-- Main Content -->
@section('content')
    <div class="admin-form theme-info mw500" style="margin-top: 10%;" id="login">
        <div class="row mb15 table-layout">

            <div class="col-xs-6 pln">
                <a href="dashboard.html" title="Return to Dashboard">
                    <img src="{{ url('assets/img/logo.png') }}" title="Interapss Logo" class="img-responsive" width="162" height="200">
                </a>
            </div>

            <div class="col-xs-6 va-b">
                <div class="login-links text-right">
                    <a href="/login" class="" title="Acceder">Acceder</a>
                    <span class="text-white"> | </span>
                    <a href="{{ url('/password/reset') }}" class="active" title="Reestablecer Contraseña">Reestablecer</a>
                </div>

            </div>
        </div>

        <div class="panel panel-info heading-border br-n">

            <form method="post" action="/" id="contact">
                <div class="panel-body p15 pt25">

                    <div class="alert alert-micro alert-border-left alert-info pastel alert-dismissable mn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-info pr10"></i> Escriba su <b>Correo Electrónico</b> y las instrucciones para recuperar su cuenta le serán enviadas!
                    </div>

                </div>
                <!-- end .form-body section -->
                <div class="panel-footer p25 pv15">

                    <div class="section mn">

                        <div class="smart-widget sm-right smr-80">
                            <label for="email" class="field prepend-icon">
                                <input type="text" name="email" id="email" class="gui-input" placeholder="Su correo electrónico registrado">
                                <label for="email" class="field-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </label>
                            </label>
                            <label for="email" class="button">Enviar</label>
                        </div>
                        <!-- end .smart-widget section -->

                    </div>
                    <!-- end section -->

                </div>
                <!-- end .form-footer section -->

            </form>

        </div>

    </div>
@endsection
