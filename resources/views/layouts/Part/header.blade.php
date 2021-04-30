<div class="app-header header-shadow">
    <div class="app-header__logo">
        <a href="{{url('/')}}">
            <div class="logo-src"></div>
        </a>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" 
                    class="hamburger close-sidebar-btn hamburger--elastic" 
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" 
                class="hamburger hamburger--elastic mobile-toggle-nav">
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
    <div class="app-header__content">
        <div class="app-header-left">
            <ul class="header-menu nav">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link">
                        <!-- <i class="nav-link-icon fa fa-database"> </i> -->
                        Home
                    </a>
                </li>
            </ul>        
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" 
                                    aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" 
                                        src="{{url('assets/images/avatars/1.jpg')}}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" 
                                    class="dropdown-menu dropdown-menu-right">
                                    <a tabindex="0" 
                                        @if(Auth::user()->as == "Patient")
                                            href="{{url('/Patient/profile')}}"
                                        @elseif(Auth::user()->as == "Manager")
                                            href="{{url('/Manager/profile')}}"
                                        @elseif(Auth::user()->as == "Tester")
                                            href="{{url('/Tester/profile')}}"
                                        @endif 
                                        class="dropdown-item">
                                        User Account
                                    </a>
                                    <a href="{{url('/logout')}}" tabindex="0" 
                                        class="dropdown-item">
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{Auth::user()->name}}
                            </div>
                            <div class="widget-subheading">
                                @if(Auth::user()->as == "Patient")
                                    Patient
                                @elseif(Auth::user()->as == "Manager")
                                    Test Centre Manager
                                @elseif(Auth::user()->as == "Tester")
                                    Test Centre Tester
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>