@extends('layouts.app')

@push('csss')
    <!-- FullCalendar Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('theme/vendor/plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('theme/vendor/plugins/magnific/magnific-popup.css') }}">
@endpush

@section('content')
    <!-- begin: .tray-center -->
    <div class="tray tray-center">

        <!-- dashboard tiles -->
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-tile br-a br-grey">
                    <div class="panel-body">
                        <h1 class="fs36 fw700 mt5 mbn">5,153</h1>
                        <div class="fw300 fs28 mt5">AVANCES</div>
                        <div class="count mt30">
                            +3%
                            <div class="fw300 text-uppercase time">
                                today
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" style="width: 50%">
                            </div>
                            <div class="progress-bar progress-bar-info dark" style="width: 5%">
                            </div>
                        </div>
                        <div class="count mt20">
                            -5%
                            <div class="fw300 text-uppercase time">
                                1 week ago
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" style="width: 40%">
                            </div>
                            <div class="progress-bar progress-bar-info light" style="width: 7%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-tile  br-a br-grey">
                    <div class="panel-body">
                        <h1 class="fs36 fw700 mt5 mbn">42,624</h1>
                        <div class="fw300 fs28 mt5">INDICADORES</div>
                        <div class="count mt30">
                            +4%
                            <div class="fw300 text-uppercase time">
                                hoy
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" style="width: 50%">
                            </div>
                            <div class="progress-bar progress-bar-primary dark" style="width: 8%">
                            </div>
                        </div>
                        <div class="count mt20">
                            +2%
                            <div class="fw300 text-uppercase time">
                                semana pasada
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" style="width: 36%">
                            </div>
                            <div class="progress-bar progress-bar-primary dark" style="width: 4%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-tile  br-a br-grey">
                    <div class="panel-body">
                        <h1 class="fs36 fw700 mt5 mbn">853</h1>
                        <div class="fw300 fs28 mt5">TAREAS PENDIENTES</div>
                        <div class="count mt30">
                            +2%
                            <div class="fw300 text-uppercase time">
                                hoy
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 30%">
                            </div>
                            <div class="progress-bar progress-bar-warning dark" style="width: 3%">
                            </div>
                        </div>
                        <div class="count mt20">
                            +6%
                            <div class="fw300 text-uppercase time">
                                semana pasada
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 50%">
                            </div>
                            <div class="progress-bar progress-bar-warning dark" style="width: 8%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Admin-panels -->
        <div class="admin-panels fade-onload">
            <div class="row">
                <div class="col-sm-6 ">
                    <!-- Calendar Widget -->
                    <div class="panel panel-widget calendar-widget calendar-alt" id="p02">
                        <div class="panel-heading">
                        <span class="panel-icon">
                          <i class="fa fa-calendar-o"></i>
                        </span>
                            <span class="panel-title"> Calendario</span>
                        </div>
                        <div class="panel-body bg-white pt20 pb20">
                            <div id="calendar-widget" class="admin-theme calendar-lg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <!-- Task Widget -->
                    <div class="panel panel-widget task-widget task-alt" id="p05">
                        <div class="panel-heading cursor">
                        <span class="panel-icon">
                          <i class="fa fa-cog"></i>
                        </span>
                            <span class="panel-title"> Tareas</span>
                        </div>
                        <div class="panel-body p15">
                            <h5 class="mtn mb10"><i class="fa fa-bell pr8"></i> Visitas Pendientes</h5>
                            <ul class="task-list task-current">
                                <li class="task-item">
                                    <div class="task-handle">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" id="task1">
                                            <label for="task1"></label>
                                        </div>
                                    </div>
                                    <div class="task-desc">Hotel las Américas</div>
                                    <div class="task-menu"></div>
                                </li>
                                <li class="task-item">
                                    <div class="task-handle">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" id="task3">
                                            <label for="task3"></label>
                                        </div>
                                    </div>
                                    <div class="task-desc">Hotel Hilton</div>
                                    <div class="task-menu"></div>
                                </li>
                                <li class="task-item">
                                    <div class="task-handle">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" id="task4">
                                            <label for="task4"></label>
                                        </div>
                                    </div>
                                    <div class="task-desc">Hotel Intercontinental</div>
                                    <div class="task-menu"></div>
                                </li>

                            </ul>
                            <h5 class="mt15 mb10"><i class="fa fa-check-square-o fs22 pr8"></i>Visitas Realizadas</h5>
                            <ul class="task-list task-completed">
                                <li class="task-item item-checked">
                                    <div class="task-handle">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" checked="" id="task7">
                                            <label for="task7"></label>
                                        </div>
                                    </div>
                                    <div class="task-desc">Decápolis</div>
                                    <div class="task-menu"></div>
                                </li>
                                <li class="task-item item-checked">
                                    <div class="task-handle">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" checked="" id="task8">
                                            <label for="task8"></label>
                                        </div>
                                    </div>
                                    <div class="task-desc">Años Locos</div>
                                    <div class="task-menu"></div>
                                </li>
                                <li class="task-item item-checked">
                                    <div class="task-handle">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" checked="" id="task9">
                                            <label for="task9"></label>
                                        </div>
                                    </div>
                                    <div class="task-desc">Acha</div>
                                    <div class="task-menu"></div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>



                </div>


            </div>
            <!-- end: .row -->

        </div>

    </div>
    <!-- end: .tray-center -->

    <!-- begin: .tray-right -->
    <aside class="tray tray-right tray270 pn hidden" data-tray-height="match">

        <!-- store activity timeline -->
        <ol class="timeline-list pl5 mt5">
            <li class="timeline-item">
                <div class="timeline-icon bg-dark light">
                    <span class="fa fa-tags"></span>
                </div>
                <div class="timeline-desc">
                    <b>Michael</b> Added a new item to his store:
                    <a href="#">Ipod</a>
                </div>
                <div class="timeline-date">1:25am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-dark light">
                    <span class="fa fa-tags"></span>
                </div>
                <div class="timeline-desc">
                    <b>Sara</b> Added a new item to his store:
                    <a href="#">Notebook</a>
                </div>
                <div class="timeline-date">3:05am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-success">
                    <span class="fa fa-usd"></span>
                </div>
                <div class="timeline-desc">
                    <b>Admin</b> created a new invoice for:
                    <a href="#">Software</a>
                </div>
                <div class="timeline-date">4:15am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-warning">
                    <span class="fa fa-pencil"></span>
                </div>
                <div class="timeline-desc">
                    <b>Laura</b> edited her work experience</div>
                <div class="timeline-date">5:25am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-success">
                    <span class="fa fa-usd"></span>
                </div>
                <div class="timeline-desc">
                    <b>Admin</b> created a new invoice for:
                    <a href="#">Apple Inc.</a>
                </div>
                <div class="timeline-date">7:45am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-dark light">
                    <span class="fa fa-tags"></span>
                </div>
                <div class="timeline-desc">
                    <b>Michael</b> Added a new item to his store:
                    <a href="#">Ipod</a>
                </div>
                <div class="timeline-date">8:25am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-dark light">
                    <span class="fa fa-tags"></span>
                </div>
                <div class="timeline-desc">
                    <b>Sara</b> Added a new item to his store:
                    <a href="#">Watch</a>
                </div>
                <div class="timeline-date">9:35am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-system">
                    <span class="fa fa-fire"></span>
                </div>
                <div class="timeline-desc">
                    <b>Admin</b> created a new invoice for:
                    <a href="#">Software</a>
                </div>
                <div class="timeline-date">4:15am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-warning">
                    <span class="fa fa-pencil"></span>
                </div>
                <div class="timeline-desc">
                    <b>Laura</b> edited her work experience</div>
                <div class="timeline-date">5:25am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-success">
                    <span class="fa fa-usd"></span>
                </div>
                <div class="timeline-desc">
                    <b>Admin</b> created a new invoice for:
                    <a href="#">Software</a>
                </div>
                <div class="timeline-date">4:15am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-warning">
                    <span class="fa fa-pencil"></span>
                </div>
                <div class="timeline-desc">
                    <b>Laura</b> edited her work experience</div>
                <div class="timeline-date">5:25am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-success">
                    <span class="fa fa-usd"></span>
                </div>
                <div class="timeline-desc">
                    <b>Admin</b> created a new invoice for:
                    <a href="#">Apple Inc.</a>
                </div>
                <div class="timeline-date">7:45am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-dark light">
                    <span class="fa fa-tags"></span>
                </div>
                <div class="timeline-desc">
                    <b>Michael</b> Added a new item to his store:
                    <a href="#">Ipod</a>
                </div>
                <div class="timeline-date">8:25am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-dark light">
                    <span class="fa fa-tags"></span>
                </div>
                <div class="timeline-desc">
                    <b>Sara</b> Added a new item to his store:
                    <a href="#">Watch</a>
                </div>
                <div class="timeline-date">9:35am</div>
            </li>
        </ol>

    </aside>
    <!-- end: .tray-right -->
@endsection
@push('scripts')


<!-- HighCharts Plugin -->
<script src="{{ url('theme/vendor/plugins/highcharts/highcharts.js')}}"></script>

<!-- JvectorMap Plugin + US Map (more maps in plugin/assets folder) -->
<script src="{{ url('theme/vendor/plugins/jvectormap/jquery.jvectormap.min.js')}}"></script>
<script src="{{ url('theme/vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js')}}"></script>

<!-- Bootstrap Tabdrop Plugin -->
<script src="{{ url('theme/vendor/plugins/tabdrop/bootstrap-tabdrop.js')}}"></script>

<!-- FullCalendar Plugin + Moment Dependency -->
<script src='/theme/vendor/plugins/fullcalendar/lib/moment.min.js'></script>
<script src='/theme/vendor/plugins/fullcalendar/fullcalendar.min.js'></script>

<!-- Theme Javascript -->
<script src="{{ url('theme/assets/js/demo/demo.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Demo JS
        //Demo.init();


        // Init Theme Core
        Core.init();


        // Init Widget Demo JS
        // demoHighCharts.init();

        // Because we are using Admin Panels we use the OnFinish
        // callback to activate the demoWidgets. It's smoother if
        // we let the panels be moved and organized before
        // filling them with content from various plugins

        // Init plugins used on this page
        // HighCharts, JvectorMap, Admin Panels

        // Init Admin Panels on widgets inside the ".admin-panels" container
        $('.admin-panels').adminpanel({
            grid: '.admin-grid',
            draggable: true,
            preserveGrid: true,
            mobile: true,
            onStart: function() {
                // Do something before AdminPanels runs
            },
            onFinish: function() {
                $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                // Init the rest of the plugins now that the panels
                // have had a chance to be moved and organized.
                // It's less taxing to organize empty panels
               // demoHighCharts.init();
                //runVectorMaps(); // function below
            },
            onSave: function() {
                $(window).trigger('resize');
            }
        });


        // Init plugins for ".calendar-widget"
        // plugins: FullCalendar
        //
        $('#calendar-widget').fullCalendar({
            header: {
                left:   'prev',
                center: 'title',
                right:  'next'
            },
            editable: false,
            //events: '/calendario/eventos',
            eventClick: function(event) {
                if (event.cliente_id) {
                    window.location.href = '/vcliente/'+event.cliente_id;
                    return false;
                }
            }

        });


        // Init plugins for ".task-widget"
        // plugins: Custom Functions + jQuery Sortable
        //
        var taskWidget = $('div.task-widget');
        var taskItems = taskWidget.find('li.task-item');
        var currentItems = taskWidget.find('ul.task-current');
        var completedItems = taskWidget.find('ul.task-completed');

        // Init jQuery Sortable on Task Widget
        taskWidget.sortable({
            items: taskItems, // only init sortable on list items (not labels)
            handle: '.task-menu',
            axis: 'y',
            connectWith: ".task-list",
            update: function( event, ui ) {
                var Item = ui.item;
                var ParentList = Item.parent();

                // If item is already checked move it to "current items list"
                if (ParentList.hasClass('task-current')) {
                    Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                }
                if (ParentList.hasClass('task-completed')) {
                    Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                }

            }
        });

        // Custom Functions to handle/assign list filter behavior
        taskItems.on('click', function(e) {
            e.preventDefault();
            var This = $(this);
            var Target = $(e.target);

            if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
                This.remove();
                return;
            }

            if (Target.parents('.task-handle').length) {
                // If item is already checked move it to "current items list"
                if (This.hasClass('item-checked')) {
                    This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                }
                // Otherwise move it to the "completed items list"
                else {
                    This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                }
            }

        });


        var highColors = [bgDanger, bgPrimaryLr, bgWarning, bgPrimary];

        // Chart data
        var seriesData = [{
            name: 'Notebooks',
            data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8],
            color: '#fdde3c',
            shadow: {
                enabled: true,
                color: '#fdde3c',
                width:40,
                offsetY: 5,
                opacity: 0.015
            }
        }, {
            name: 'Phones',
            data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6],
            color: '#fb6820',
            shadow: {
                enabled: true,
                color: '#fb6820',
                width:40,
                offsetY: 5,
                opacity: 0.015
            }
        }, {
            name: 'Desktops',
            data: [15, 19, 22.7, 29.3, 22.0, 17.0, 23.8, 19.1, 22.1, 14.1, 11.6, 7.5],
            color: '#2ae19e',
            shadow: {
                enabled: true,
                color: '#2ae19e',
                width:40,
                offsetY: 5,
                opacity: 0.015
            }
        }];

        var ecomChart = $('#ecommerce_chart1');
        if (ecomChart.length) {
        }
        // Widget VectorMap
        function runVectorMaps() {

            // Jvector Map Plugin
            var runJvectorMap = function() {
                // Data set
                var mapData = [900, 700, 350, 500];
                // Init Jvector Map
                $('#WidgetMap').vectorMap({
                    map: 'us_lcc_en',
                    //regionsSelectable: true,
                    backgroundColor: 'transparent',
                    series: {
                        markers: [{
                            attribute: 'r',
                            scale: [0, 0],
                            values: mapData
                        }]
                    },
                    regionStyle: {
                        initial: {
                            fill: '#dfdfdf'
                        },
                        hover: {
                            fill: '#cbcbcb'
                        }
                    },
                    markers: [{
                        latLng: [37.78, -122.41],
                        name: 'San Francisco,CA'
                    }, {
                        latLng: [36.73, -103.98],
                        name: 'Texas,TX'
                    }, {
                        latLng: [38.62, -90.19],
                        name: 'St. Louis,MO'
                    }, {
                        latLng: [40.67, -73.94],
                        name: 'New York City,NY'
                    }],
                    markerStyle: {
                        initial: {
                            fill: '#a288d5',
                            stroke: '#b49ae0',
                            "fill-opacity": 1,
                            "stroke-width": 10,
                            "stroke-opacity": 0.3,
                            r: 3
                        },
                        hover: {
                            stroke: 'black',
                            "stroke-width": 2
                        },
                        selected: {
                            fill: 'blue'
                        },
                        selectedHover: {}
                    },
                });
                // Manual code to alter the Vector map plugin to
                // allow for individual coloring of countries
                var states = ['US-CA', 'US-TX', 'US-MO',
                    'US-NY'
                ];
                var colors = [bgPrimary, bgInfo, bgDanger, bgWarning];
                var colors2 = [bgPrimaryDr, bgInfoDr, bgDangerDr, bgWarningDr];
                $.each(states, function(i, e) {
                    $("#WidgetMap path[data-code=" + e + "]").css({
                        fill: colors[i]
                    });
                });
                $('#WidgetMap').find('.jvectormap-marker')
                        .each(function(i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
            }

            if ($('#WidgetMap').length) {
                runJvectorMap();
            }
        }


        ecomChart.highcharts({
            credits: false,
            colors: highColors,

            chart: {
                backgroundColor: 'transparent',
                className: '',
                type: 'line',
                zoomType: 'x',
                panning: true,
                panKey: 'shift',
                marginTop: 45,
                marginRight: 1,
            },
            title: {
                text: null
            },
            xAxis: {
                gridLineColor: '#eeefef',
                lineColor: '#d7d7d7',
                tickColor: '#d7d7d7',
                categories: ['Jan', 'Feb', 'Mar', 'Apr',
                    'May', 'Jun', 'Jul', 'Aug',
                    'Sep', 'Oct', 'Nov', 'Dec'
                ],
                tickWidth: 1,
                gridLineWidth: 1
            },
            yAxis: {
                min: 0,
                tickInterval: 5,
                gridLineColor: '#eeefef',
                title: {
                    text: null,
                }
            },
            legend: {
                enabled: true,
                floating: false,
                align: 'right',
                verticalAlign: 'top',
                x: -15
            },
            plotOptions: {
                spline: {
                    lineWidth: 3,
                },
                line: {
                    lineWidth: 3,
                    marker: {
                        enabled: true,
                        symbol: 'circle',
                        radius: 5,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    },
                    shadow: {
//              color: Highcharts.getOptions().colors[0],
//              opacity: 0.03,
//              width: 30,
//              offsetY: 5
                    },
                    states: {
                        hover: {
                            lineWidth: 4
                        }
                    },
                    threshold: null
                }
            },
            series: seriesData

        });
    });
</script>
@endpush