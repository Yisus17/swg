@extends('layouts.init')

@section('content')
    <div class="admin-form theme-info mw500" style="margin-top: 10%;" id="login">
        <div class="row mb15 table-layout">

            <div class="col-xs-6 pln">
                <a href="dashboard.html" title="Return to Dashboard">
                    <img src="assets/img/logos/logo_white.png" title="TemplateMonster Logo" class="img-responsive w250">
                </a>
            </div>

            <div class="col-xs-6 va-b">
                <div class="login-links text-right">
                    <a href="#" class="" title="False Credentials">Password Reset</a>
                </div>
            </div>
        </div>

        <div class="panel panel-info heading-border br-n">

            <form method="post" action="/" id="contact">
                <div class="panel-body p15 pt25">

                    <div class="alert alert-micro alert-border-left alert-info pastel alert-dismissable mn">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-info pr10"></i> Enter your
                        <b>Email</b> and instructions will be sent to you!
                    </div>

                </div>
                <!-- end .form-body section -->
                <div class="panel-footer p25 pv15">

                    <div class="section mn">

                        <div class="smart-widget sm-right smr-80">
                            <label for="email" class="field prepend-icon">
                                <input type="text" name="email" id="email" class="gui-input" placeholder="Your Email Address">
                                <label for="email" class="field-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </label>
                            </label>
                            <label for="email" class="button">Reset</label>
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
