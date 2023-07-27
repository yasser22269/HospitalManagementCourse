<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('Dashboard/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
                    <span class="mb-0 text-muted">{{ Auth::user()->email }}</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">{{trans('Dashboard/main-sidebar_trans.Main')}}</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('dashboard.admin') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                    <span class="side-menu__label">{{trans('Dashboard/main-sidebar_trans.index')}}
                </a>
            </li>
            <li class="side-item side-item-category">General</li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                         viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/>
                        <path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2
                        2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
                    <span class="side-menu__label">
                        {{trans('Dashboard/main-sidebar_trans.sections')}}
                    </span>
                    <i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('Sections.index') }}">عرض الكل</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='chart-flot') }}">Flot Charts</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='chart-chartjs') }}">ChartJS</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='chart-echart') }}">Echart</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='chart-sparkline') }}">Sparkline</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='chart-peity') }}">Chart-peity</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                    <span class="side-menu__label">{{trans('main-sidebar_trans.doctors')}}</span>
                    <i class="angle fe fe-chevron-down"></i>
                </a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('Doctors.index') }}">{{trans('main-sidebar_trans.view_all')}}</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='product-details') }}">Product-Details</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='product-cart') }}">Cart</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">{{trans('main-sidebar_trans.Services')}}</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{route('Service.index')}}">{{trans('main-sidebar_trans.Single_service')}}</a></li>
                    <li><a class="slide-item" href="{{ route('Add_GroupServices') }}">{{trans('main-sidebar_trans.group_services')}}</a></li>
{{--                    <li><a class="slide-item" href="{{ route('insurance.index') }}">{{trans('main-sidebar_trans.Insurance')}}</a></li>--}}
{{--                    <li><a class="slide-item" href="{{route('Ambulance.index')}}">{{trans('main-sidebar_trans.ambulance')}}</a></li>--}}
{{--                    <li><a class="slide-item" href="{{ url('/' . $page='calendar') }}">{{trans('main-sidebar_trans.Ambulance_calls')}}</a></li>--}}
                </ul>
            </li>
            <li class="side-item side-item-category">WEB APPS</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='cards') }}">Cards</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='darggablecards') }}">Darggablecards</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='rangeslider') }}">Range-slider</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='calendar') }}">Calendar</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='contacts') }}">Contacts</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='image-compare') }}">Image-compare</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='notification') }}">Notification</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='widget-notification') }}">Widget-notification</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='treeview') }}">Treeview</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">Elements</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='alerts') }}">Alerts</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='avatar') }}">Avatar</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='breadcrumbs') }}">Breadcrumbs</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='buttons') }}">Buttons</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='badge') }}">Badge</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='dropdown') }}">Dropdown</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='thumbnails') }}">Thumbnails</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='list-group') }}">List Group</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='navigation') }}">Navigation</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='images') }}">Images</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='pagination') }}">Pagination</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='popover') }}">Popover</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='progress') }}">Progress</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='spinners') }}">Spinners</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='media-object') }}">Media Object</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='typography') }}">Typography</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='tooltip') }}">Tooltip</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='toast') }}">Toast</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='tags') }}">Tags</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='tabs') }}">Tabs</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg><span class="side-menu__label">Advanced UI</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/' . $page='accordion') }}">Accordion</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='carousel') }}">Carousel</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='collapse') }}">Collapse</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='modals') }}">Modals</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='timeline') }}">Timeline</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='sweet-alert') }}">Sweet Alert</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='rating') }}">Ratings</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='counters') }}">Counters</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='search') }}">Search</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='userlist') }}">Userlist</a></li>
                    <li><a class="slide-item" href="{{ url('/' . $page='blog') }}">Blog</a></li>
                </ul>
            </li>

        </ul>
    </div>
</aside>
<!-- main-sidebar -->
