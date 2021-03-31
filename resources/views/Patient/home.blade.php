@extends('layouts.default')
@section('content')
<div class="app-main">
    <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" 
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Dashboards</li>
                        <li>
                            <a href="index.html" class="mm-active">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Dashboard Example 1
                            </a>
                        </li>
                        <li class="app-sidebar__heading">UI Components</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Elements
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="elements-buttons-standard.html">
                                        <i class="metismenu-icon"></i>
                                        Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-dropdowns.html">
                                        <i class="metismenu-icon">
                                        </i>Dropdowns
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-icons.html">
                                        <i class="metismenu-icon">
                                        </i>Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-badges-labels.html">
                                        <i class="metismenu-icon">
                                        </i>Badges
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-cards.html">
                                        <i class="metismenu-icon">
                                        </i>Cards
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-list-group.html">
                                        <i class="metismenu-icon">
                                        </i>List Groups
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-navigation.html">
                                        <i class="metismenu-icon">
                                        </i>Navigation Menus
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-utilities.html">
                                        <i class="metismenu-icon">
                                        </i>Utilities
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-car"></i>
                                Components
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="components-tabs.html">
                                        <i class="metismenu-icon">
                                        </i>Tabs
                                    </a>
                                </li>
                                <li>
                                    <a href="components-accordions.html">
                                        <i class="metismenu-icon">
                                        </i>Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="components-notifications.html">
                                        <i class="metismenu-icon">
                                        </i>Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="components-modals.html">
                                        <i class="metismenu-icon">
                                        </i>Modals
                                    </a>
                                </li>
                                <li>
                                    <a href="components-progress-bar.html">
                                        <i class="metismenu-icon">
                                        </i>Progress Bar
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tooltips-popovers.html">
                                        <i class="metismenu-icon">
                                        </i>Tooltips &amp; Popovers
                                    </a>
                                </li>
                                <li>
                                    <a href="components-carousel.html">
                                        <i class="metismenu-icon">
                                        </i>Carousel
                                    </a>
                                </li>
                                <li>
                                    <a href="components-calendar.html">
                                        <i class="metismenu-icon">
                                        </i>Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="components-pagination.html">
                                        <i class="metismenu-icon">
                                        </i>Pagination
                                    </a>
                                </li>
                                <li>
                                    <a href="components-scrollable-elements.html">
                                        <i class="metismenu-icon">
                                        </i>Scrollable
                                    </a>
                                </li>
                                <li>
                                    <a href="components-maps.html">
                                        <i class="metismenu-icon">
                                        </i>Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="tables-regular.html">
                                <i class="metismenu-icon pe-7s-display2"></i>
                                Tables
                            </a>
                        </li>
                        <li class="app-sidebar__heading">Widgets</li>
                        <li>
                            <a href="dashboard-boxes.html">
                                <i class="metismenu-icon pe-7s-display2"></i>
                                Dashboard Boxes
                            </a>
                        </li>
                        <li class="app-sidebar__heading">Forms</li>
                        <li>
                            <a href="forms-controls.html">
                                <i class="metismenu-icon pe-7s-mouse">
                                </i>Forms Controls
                            </a>
                        </li>
                        <li>
                            <a href="forms-layouts.html">
                                <i class="metismenu-icon pe-7s-eyedropper">
                                </i>Forms Layouts
                            </a>
                        </li>
                        <li>
                            <a href="forms-validation.html">
                                <i class="metismenu-icon pe-7s-pendrive">
                                </i>Forms Validation
                            </a>
                        </li>
                        <li class="app-sidebar__heading">Charts</li>
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="metismenu-icon pe-7s-graph2">
                                </i>ChartJS
                            </a>
                        </li>
                        <li class="app-sidebar__heading">PRO Version</li>
                        <li>
                            <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/" target="_blank">
                                <i class="metismenu-icon pe-7s-graph2">
                                </i>
                                Upgrade to PRO
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>    <div class="app-main__outer">
            <div class="app-main__inner">
                <!-- Users history -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Test History 
                                <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm btn-group">
                                        <button class="active btn btn-focus">Last Week</button>
                                        <button class="btn btn-focus">All Month</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th class="text-center">City</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center text-muted">#345</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" 
                                                                src="{{url('assets/images/avatars/4.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">John Doe</div>
                                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">Madrid</td>
                                        <td class="text-center">
                                            <div class="badge badge-warning">Pending</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted">#347</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" 
                                                            src="{{url('assets/images/avatars/3.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Ruben Tillman</div>
                                                        <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">Berlin</td>
                                        <td class="text-center">
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted">#321</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" 
                                                                src="{{url('assets/images/avatars/2.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Elliot Huber</div>
                                                        <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">London</td>
                                        <td class="text-center">
                                            <div class="badge badge-danger">In Progress</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted">#55</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" 
                                                                src="{{url('assets/images/avatars/1.jpg')}}" alt=""></div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                        <div class="widget-subheading opacity-7">UI Designer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">Amsterdam</td>
                                        <td class="text-center">
                                            <div class="badge badge-info">On Hold</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-block text-center card-footer">
                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                <button class="btn-wide btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Users history -->
            </div>  
        </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
@stop