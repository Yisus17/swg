<!-- Start: Sidebar Header -->

<header class="sidebar-header">





    <!-- Sidebar Widget - Search (hidden) -->

    <div class="sidebar-widget search-widget hidden">

        <div class="input-group">

              <span class="input-group-addon">

                <i class="fa fa-search"></i>

              </span>

            <input type="text" id="sidebar-search" class="form-control" placeholder="Búsqueda...">

        </div>

    </div>



</header>

<!-- End: Sidebar Header -->



<!-- Start: Sidebar Menu -->

<ul class="nav sidebar-menu">

    <li class="sidebar-label pt36">Seguridad</li>

    <li>

        <a href="{{ url('/usuario') }}">

            <span class="fa fa-user"></span>

            <span class="sidebar-title">Administración de Usuarios</span>

        </a>

    </li>

    <li class="sidebar-label pt36">Administración</li>

    <li>

        <a class="accordion-toggle" href="#">

            <span class="fa fa-gear"></span>

            <span class="sidebar-title">Manipulación de Archivos</span>

            <span class="caret"></span>

        </a>

        <ul class="nav sub-nav">

            <li>

                <a href="{{ url('canal') }}">

                    <span class="fa fa-gears"></span>Canal

                </a>

            </li>

            <li>

                <a href="{{ url('subcanal') }}">

                    <span class="fa fa-gears"></span>Sub-Canal

                </a>

            </li>

            <li>

                <a href="{{ url('colaborador') }}">

                    <span class="fa fa-gears"></span>Colaborador

                </a>

            </li>

            <li>

                <a href="{{ url('categoria') }}">

                    <span class="fa fa-gears"></span>Categoría

                </a>

            </li>

            <li>

                <a href="{{ url('subcategoria') }}">

                    <span class="fa fa-gears"></span>Sub-Categoría

                </a>

            </li>

            <li>

                <a href="{{ url('tipo') }}">

                    <span class="fa fa-gears"></span>Tipo

                </a>

            </li>

            <li>

                <a href="{{ url('subtipo') }}">

                    <span class="fa fa-gears"></span>Sub-Tipo

                </a>

            </li>

            <li>

                <a href="{{ url('cliente') }}">

                    <span class="fa fa-gears"></span>Cliente

                </a>

            </li>

        </ul>



    </li>

    <li class="sidebar-label pt36">Menu</li>

    <li>
        <a href="{{url('/calendario')}}">
            <span class="fa fa-calendar"></span>
            <span class="sidebar-title">Calendario</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('/')}}">
            <span class="glyphicon glyphicon-home"></span>
            <span class="sidebar-title">Tablero de Control</span>
        </a>
    </li>
</ul>



<!-- End: Sidebar Menu -->