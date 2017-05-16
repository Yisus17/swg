@extends('layouts.app')
@push('csss')
<!-- FullCalendar Plugin CSS -->
<link rel="stylesheet" type="text/css" href="{{ url('theme/vendor/plugins/fullcalendar/fullcalendar.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('theme/vendor/plugins/magnific/magnific-popup.css') }}">

@endpush
@section('pagename') calendar-page @endsection
@section('content')
<!-- Begin: Content -->
<section id="content" class="table-layout animated fadeIn">

    <!-- begin: .tray-left -->
    <aside class="tray tray-left tray290" data-tray-mobile="#content > .tray-center" data-tray-height="match">

        <!-- Demo HTML - Via JS we insert a cloned fullcalendar title -->
        <div class="fc-title-clone"></div>

        <!-- Demo HTML - Via JS we insert a sync minicalendar -->
        <div class="section admin-form theme-primary">
            <div class="inline-mp minimal-mp center-block"></div>
        </div>

        <h4 class="mt25"> Visitas del Mes
            <!--<a id="compose-event-btn" href="#calendarEvent" data-effect="mfp-flipInY">
                <span class="fa fa-plus-square"></span>
            </a>-->
        </h4>

        <hr class="mv15 br-light">

        <div id="external-events" class="bg-dotted">

            <!-- Standard Events -->

            @foreach ($actividades as $actividad)
                <div class='fc-event fc-event-success' data-event="success">
                    <div class="fc-event-icon">
                        <span class="fa fa-check"></span>
                    </div>
                    <div class="fc-event-desc">
                        <a href="{{ url("vcliente/$actividad->cliente_id") }}"><b> {{ Carbon\Carbon::parse($actividad->start)->format('d-m-Y H:i A') }} - </b>{{ $actividad->title }}</a></div>
                </div>
            @endforeach


            <!-- Reoccuring Events
            <h6 class="mt20"> Visitas Pendientes - Días anteriores </h6>
            <div class='fc-event fc-event-alert event-recurring' data-event="alert">
                <div class="fc-event-icon">
                    <span class="fa fa-clock-o"></span>
                </div>
                <div class="fc-event-desc">
                    <b>2:30am - </b>Leños y Carbón</div>
            </div>
            <div class='fc-event fc-event-system event-recurring' data-event="system">
                <div class="fc-event-icon">
                    <span class="fa fa-bell-o"></span>
                </div>
                <div class="fc-event-desc">
                    <b>2:30am - </b>Nápoli</div>
            </div>-->

        </div>

        <h4 class="mt30"> Tipos de Cliente </h4>

        <hr class="mv15 br-light">

        <ul class="list-group">
            @foreach ($tiposClientes as $tipoCliente)
            <li class="list-group-item">
                <span class="badge badge-warning">{{ $tipoCliente->total_tipo_cliente }}</span>
                {{ $tipoCliente->descripcion_tipo }}
            </li>
            @endforeach


        </ul>


    </aside>
    <!-- end: .tray-left -->

    <!-- begin: .tray-center -->
    <div class="tray tray-center">

        <!-- Calendar -->
        <div id='calendar' class="admin-theme calendar-lg"></div>

    </div>
    <!-- end: .tray-center -->

</section>
<!-- End: Content -->
@stop

@push('scripts')

<!-- AdminForms Date/Month Pickers -->
<script src="/theme/assets/admin-tools/admin-forms/js/jquery-ui-monthpicker.min.js"></script>
<script src="/theme/assets/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js"></script>

<!-- Magnific Popup Plugin -->
<script src="/theme/vendor/plugins/magnific/jquery.magnific-popup.js"></script>

<!-- FullCalendar Plugin + Moment Dependency -->
<script src='/theme/vendor/plugins/fullcalendar/lib/moment.min.js'></script>
<script src='/theme/vendor/plugins/fullcalendar/fullcalendar.min.js'></script>

<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();

        var Calendar = $('#calendar');
        var Picker = $('.inline-mp');

        // Init FullCalendar Plugin
        Calendar.fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: false,
            events: '/calendario/eventos',
            eventClick: function(event) {
                if (event.cliente_id) {
                    window.location.href = '/vcliente/'+event.cliente_id;
                    return false;
                }
            },
            viewRender: function(view) {
                // If monthpicker has been init update its date on change
                if (Picker.hasClass('hasMonthpicker')) {
                    var selectedDate = Calendar.fullCalendar('getDate');
                    var formatted = moment(selectedDate, 'MM-DD-YYYY').format('MM/YY');
                    Picker.monthpicker("setDate", formatted);
                }
                // Update mini calendar title
                var titleContainer = $('.fc-title-clone');
                if (!titleContainer.length) {
                    return;
                }
                titleContainer.html(view.title);
            },
            droppable: false // this allows things to be dropped onto the calendar


        });

        // Init MonthPicker Plugin and Link to Calendar
        Picker.monthpicker({
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            showButtonPanel: false,
            onSelect: function(selectedDate) {
                var formatted = moment(selectedDate, 'MM/YYYY').format('MM/DD/YYYY');
                Calendar.fullCalendar('gotoDate', formatted)
            }
        });


        // Init Calendar Modal via "inline" Magnific Popup
        $('#compose-event-btn').magnificPopup({
            removalDelay: 500, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function(e) {
                    // we add a class to body indication overlay is active
                    // We can use this to alter any elements such as form popups
                    // that need a higher z-index to properly display in overlays
                    $('body').addClass('mfp-bg-open');
                    this.st.mainClass = this.st.el.attr('data-effect');
                },
                afterClose: function(e) {
                    $('body').removeClass('mfp-bg-open');
                }
            },
            midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
        });

        // Calendar Modal Date picker
        $("#eventDate").datepicker({
            numberOfMonths: 1,
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            showButtonPanel: false,
            beforeShow: function(input, inst) {
                var newclass = 'admin-form';
                var themeClass = $(this).parents('.admin-form').attr('class');
                var smartpikr = inst.dpDiv.parent();
                if (!smartpikr.hasClass(themeClass)) {
                    inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                }
            }

        });


    });
</script>
@endpush