<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'solita') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="{{ asset('fontawesome-free-6.3.0-web/css/all.css') }}" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">
    
    <style>
        .logo {
            font-size: 36px;
            letter-spacing: 2px;
            font-weight: 800;
            font-family: "Raleway", sans-serif;
        }

        .logo a,
        .logo a:visited {
            -webkit-transition: all 150ms ease-in;
            -moz-transition: all 150ms ease-in;
            -o-transition: all 150ms ease-in;
            transition: all 150ms ease-in;
            color: #8a77be;
            text-decoration: none !important;
            outline: 0;
            opacity: .9;
        }

        .logo a:hover,
        .logo a:focus {
            opacity: 1;
        }

        .dataTables_length,
        .dataTables_filter {
            display: flex;
        }

        .dataTables_filter {
            justify-content: flex-end;
        }

        .dataTables_length label,
        .dataTables_filter label {
            display: flex;
            gap: 10px;
        }

        .dataTables_paginate {
            display: flex;
            justify-content: flex-end;
        }

        @media (width < 768px) {

            .dataTables_filter,
            .dataTables_paginate {
                justify-content: flex-start;
            }

            .dataTables_filter {
                margin: 10px 0;
            }

            .dataTables_paginate {
                margin-top: 10px;
            }
        }

        .ck-editor__editable_inline { min-height: 200px }
    </style>

    @stack('styles')

</head>

<body class="sidebar-mini layout-fixed" style="height: auto;">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center logo" style="height: 0;">
            <a class="brand-text font-weight-light" href="{{ url('/') }}">Solita</a>
        </div>


        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4" tabIndex="0">
            <div class="brand-link logo">
                <a href="{{ url('/') }}" class="brand-text pl-2" style="font-size: 1.8rem">
                    <img src="{{ asset('images/Solita_logo_white.png') }}" alt="Solita" height="50">
                </a>
            </div>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="javascript:void(0)"
                            class="d-block">{{ auth()->user()->name . ' (' . auth()->user()->email . ')' }}</a>
                    </div>
                </div>
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sidebar-search-results">
                        <div class="list-group"><a href="#" class="list-group-item">
                                <div class="search-title"><strong class="text-light"></strong>N<strong
                                        class="text-light"></strong>o<strong class="text-light"></strong> <strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                        class="text-light"></strong>t<strong class="text-light"></strong> <strong
                                        class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                                        class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                                        class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                                        class="text-light"></strong></div>
                                <div class="search-path"></div>
                            </a></div>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-header">
                            {{ __('menu.menu') }}
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('puslapiai.index') }}"
                                class="nav-link @if (str_contains(url()->current(), 'puslapiai')) active @endif">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    {{ __('menu.pages') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kontaktai.index') }}"
                                class="nav-link @if (str_contains(url()->current(), 'kontaktai')) active @endif">
                                <i class="fa-solid fa-address-book mr-2" style="margin-left: 6px"></i>
                                <p>
                                    {{ __('menu.contacts') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pranesimai.index') }}"
                                class="nav-link @if (str_contains(url()->current(), 'pranesimai')) active @endif">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    {{ __('menu.messages') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="nav-link">
                                @csrf
                                <a class="col-12 d-inline-block" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); confirm('{{ __('messages.confirmLogout') }}') && document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket mr-1 pr-1"></i>
                                    <p>
                                        {{ __('menu.logout') }}
                                    </p>
                                </a>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-language ml-1 mr-2"></i>
                                <p>
                                    {{ config('app.locales.'.app()->getLocale()) }}
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                @foreach (config('app.locales') as $key => $locale)
                                    <li class="nav-item">
                                        <a href="/{{ $key }}" class="nav-link @if ($key == app()->getLocale()) active @endif">
                                            <p>{{ $locale }}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <strong>{{ __('footer.allRightsReserved') . ' © 2018-2023 UAB "Solita"' }}</strong>
        </footer>

        <aside class="control-sidebar control-sidebar-dark" style="display: none; top: 57px; height: 798px;">

            <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"
                style="height: 798px;">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: -16px; width: 0px; height: 0px;"></div>
                <div class="os-padding">
                    <div
                        class="os-viewport os-viewport-native-scrollbars-invisible os-viewport-native-scrollbars-overlaid">
                        <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">
                            <h5>Customize AdminLTE</h5>
                            <hr class="mb-2">
                            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark
                                    Mode</span></div>
                            <h6>Header Options</h6>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Fixed</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown
                                    Legacy Offset</span></div>
                            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No
                                    border</span></div>
                            <h6>Sidebar Options</h6>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Collapsed</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                                    class="mr-1"><span>Fixed</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                                    class="mr-1"><span>Sidebar Mini</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar
                                    Mini MD</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar
                                    Mini XS</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat
                                    Style</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav
                                    Legacy Style</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav
                                    Compact</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child
                                    Indent</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child
                                    Hide on Collapse</span></div>
                            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable
                                    Hover/Focus Auto-Expand</span></div>
                            <h6>Footer Options</h6>
                            <div class="mb-4"><input type="checkbox" value="1"
                                    class="mr-1"><span>Fixed</span></div>
                            <h6>Small Text Options</h6>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Body</span></div>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Navbar</span></div>
                            <div class="mb-1"><input type="checkbox" value="1"
                                    class="mr-1"><span>Brand</span></div>
                            <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar
                                    Nav</span></div>
                            <div class="mb-4"><input type="checkbox" value="1"
                                    class="mr-1"><span>Footer</span></div>
                            <h6>Navbar Variants</h6>
                            <div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white">
                                    <option class="bg-primary">Primary</option>
                                    <option class="bg-secondary">Secondary</option>
                                    <option class="bg-info">Info</option>
                                    <option class="bg-success">Success</option>
                                    <option class="bg-danger">Danger</option>
                                    <option class="bg-indigo">Indigo</option>
                                    <option class="bg-purple">Purple</option>
                                    <option class="bg-pink">Pink</option>
                                    <option class="bg-navy">Navy</option>
                                    <option class="bg-lightblue">Lightblue</option>
                                    <option class="bg-teal">Teal</option>
                                    <option class="bg-cyan">Cyan</option>
                                    <option class="bg-dark">Dark</option>
                                    <option class="bg-gray-dark">Gray dark</option>
                                    <option class="bg-gray">Gray</option>
                                    <option class="bg-light">Light</option>
                                    <option class="bg-warning">Warning</option>
                                    <option class="bg-white">White</option>
                                    <option class="bg-orange">Orange</option>
                                </select></div>
                            <h6>Accent Color Variants</h6>
                            <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                                <option>None Selected</option>
                                <option class="bg-primary">Primary</option>
                                <option class="bg-warning">Warning</option>
                                <option class="bg-info">Info</option>
                                <option class="bg-danger">Danger</option>
                                <option class="bg-success">Success</option>
                                <option class="bg-indigo">Indigo</option>
                                <option class="bg-lightblue">Lightblue</option>
                                <option class="bg-navy">Navy</option>
                                <option class="bg-purple">Purple</option>
                                <option class="bg-fuchsia">Fuchsia</option>
                                <option class="bg-pink">Pink</option>
                                <option class="bg-maroon">Maroon</option>
                                <option class="bg-orange">Orange</option>
                                <option class="bg-lime">Lime</option>
                                <option class="bg-teal">Teal</option>
                                <option class="bg-olive">Olive</option>
                            </select>
                            <h6>Dark Sidebar Variants</h6>
                            <div class="d-flex"></div><select
                                class="custom-select mb-3 text-light border-0 bg-primary">
                                <option>None Selected</option>
                                <option class="bg-primary">Primary</option>
                                <option class="bg-warning">Warning</option>
                                <option class="bg-info">Info</option>
                                <option class="bg-danger">Danger</option>
                                <option class="bg-success">Success</option>
                                <option class="bg-indigo">Indigo</option>
                                <option class="bg-lightblue">Lightblue</option>
                                <option class="bg-navy">Navy</option>
                                <option class="bg-purple">Purple</option>
                                <option class="bg-fuchsia">Fuchsia</option>
                                <option class="bg-pink">Pink</option>
                                <option class="bg-maroon">Maroon</option>
                                <option class="bg-orange">Orange</option>
                                <option class="bg-lime">Lime</option>
                                <option class="bg-teal">Teal</option>
                                <option class="bg-olive">Olive</option>
                            </select>
                            <h6>Light Sidebar Variants</h6>
                            <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                                <option>None Selected</option>
                                <option class="bg-primary">Primary</option>
                                <option class="bg-warning">Warning</option>
                                <option class="bg-info">Info</option>
                                <option class="bg-danger">Danger</option>
                                <option class="bg-success">Success</option>
                                <option class="bg-indigo">Indigo</option>
                                <option class="bg-lightblue">Lightblue</option>
                                <option class="bg-navy">Navy</option>
                                <option class="bg-purple">Purple</option>
                                <option class="bg-fuchsia">Fuchsia</option>
                                <option class="bg-pink">Pink</option>
                                <option class="bg-maroon">Maroon</option>
                                <option class="bg-orange">Orange</option>
                                <option class="bg-lime">Lime</option>
                                <option class="bg-teal">Teal</option>
                                <option class="bg-olive">Olive</option>
                            </select>
                            <h6>Brand Logo Variants</h6>
                            <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                                <option>None Selected</option>
                                <option class="bg-primary">Primary</option>
                                <option class="bg-secondary">Secondary</option>
                                <option class="bg-info">Info</option>
                                <option class="bg-success">Success</option>
                                <option class="bg-danger">Danger</option>
                                <option class="bg-indigo">Indigo</option>
                                <option class="bg-purple">Purple</option>
                                <option class="bg-pink">Pink</option>
                                <option class="bg-navy">Navy</option>
                                <option class="bg-lightblue">Lightblue</option>
                                <option class="bg-teal">Teal</option>
                                <option class="bg-cyan">Cyan</option>
                                <option class="bg-dark">Dark</option>
                                <option class="bg-gray-dark">Gray dark</option>
                                <option class="bg-gray">Gray</option>
                                <option class="bg-light">Light</option>
                                <option class="bg-warning">Warning</option>
                                <option class="bg-white">White</option>
                                <option class="bg-orange">Orange</option><a href="#">clear</a>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
        </aside>

        <div id="sidebar-overlay"></div>
    </div>

    <script src="{{ asset('AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('ckeditor5-36.0.1-8lty87utdzw3/build/ckeditor.js') }}"></script>

    <script>
        $(function() {
            $('#datatable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        document.getElementById('sidebar-overlay').addEventListener('click', () => {
            const body = document.querySelector('body');
            body.classList.remove('sidebar-open')
            body.classList.add('sidebar-closed')
            body.classList.add('sidebar-collapse')
        });
    </script>

    @stack('scripts')

</body>

</html>
