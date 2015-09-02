<!-- BEGIN MEGA MENU -->
<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
<div class="hor-menu ">
    <ul class="nav navbar-nav">
        <li class="active">
            {!! Html::link('/', 'Dashboard') !!}
        </li>

        <!-- BEGIN CLASSIC MENU DROP DOWN - MASTER DATA -->

        <li class="menu-dropdown classic-menu-dropdown ">
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
            Master Data <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-left">
                <li class=" dropdown-submenu">
                    <a href="religion">
                    <i class="icon-briefcase"></i>
                    Religions </a>
                    <ul class="dropdown-menu">
                        <li>
                            {!! Html::link('religion/create', 'Add New Religion') !!}
                        </li>
                    </ul>
                </li>
                <li class=" dropdown-submenu">
                    <a href="location">
                    <i class="icon-briefcase"></i>
                    Locations </a>
                    <ul class="dropdown-menu">
                        <li>
                            {!! Html::link('location/create', 'Add New Location') !!}
                        </li>
                    </ul>
                </li>

            </ul>
        </li>

        <!-- END CLASSIC MENU DROP DOWN - MASTER DATA -->

        <!-- BEGIN CLASSIC MENU DROP DOWN - EVENT -->

        <li class="menu-dropdown classic-menu-dropdown ">
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
            Event <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-left">
                <li class=" dropdown-submenu">
                    <a href="event">
                    <i class="icon-briefcase"></i>
                    Event Page </a>
                    <ul class="dropdown-menu">
                        <li>
                            {!! Html::link('religion/create', 'Add New Event') !!}
                        </li>
                    </ul>
                </li>
                <li class=" dropdown-submenu">
                    <a href="event-item">
                    <i class="icon-briefcase"></i>
                    Event Item Page </a>
                    <ul class="dropdown-menu">
                        <li>
                            {!! Html::link('location/create', 'Add New Location') !!}
                        </li>
                    </ul>
                </li>

            </ul>
        </li>

        <!-- END CLASSIC MENU DROP DOWN - EVENT -->

        <!-- BEGIN CLASSIC MENU DROP DOWN - TIMELINE -->

        <li class="menu-dropdown classic-menu-dropdown ">
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
            Timeline <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-left">
                <li class=" dropdown-submenu">
                    <a href="timeline">
                    <i class="icon-briefcase"></i>
                    Timeline Page </a>
                    <ul class="dropdown-menu">
                        <li>
                            {!! Html::link('timeline/create', 'Add New Timeline') !!}
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- END CLASSIC MENU DROP DOWN - TIMELINE -->

        <!-- BEGIN CLASSIC MENU DROP DOWN - MEMBER -->

        <li class="menu-dropdown classic-menu-dropdown ">
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
            Member <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-left">
                <li class=" dropdown-submenu">
                    <a href="member">
                    <i class="icon-briefcase"></i>
                    Member </a>
                    <ul class="dropdown-menu">
                        <li>
                            {!! Html::link('member/create', 'Add New Member') !!}
                        </li>
                    </ul>
                </li>
                <li class=" dropdown-submenu">
                    <a href="member/profile">
                    <i class="icon-briefcase"></i>
                    Member Profile </a>
                </li>
            </ul>
        </li>

        <!-- END CLASSIC MENU DROP DOWN - MEMBER -->

        <li class="menu-dropdown mega-menu-dropdown ">
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
            Features <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu" style="min-width: 710px">
                <li>
                    <div class="mega-menu-content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>eCommerce</h3>
                                    </li>
                                    <li>
                                        <a href="ecommerce_index.html" class="iconify">
                                        <i class="icon-home"></i>
                                        eCommerce </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_orders.html" class="iconify">
                                        <i class="icon-basket"></i>
                                        Manage Orders </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_orders_view.html" class="iconify">
                                        <i class="icon-tag"></i>
                                        Order View </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_products.html" class="iconify">
                                        <i class="icon-handbag"></i>
                                        Manage Products </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_products_edit.html" class="iconify">
                                        <i class="icon-pencil"></i>
                                        Product Edit </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>Layouts</h3>
                                    </li>
                                    <li>
                                        <a href="layout_fluid.html" class="iconify">
                                        <i class="icon-cursor-move"></i>
                                        Fluid Layout </a>
                                    </li>
                                    <li>
                                        <a href="layout_mega_menu_fixed.html" class="iconify">
                                        <i class="icon-pin"></i>
                                        Fixed Mega Menu </a>
                                    </li>
                                    <li>
                                        <a href="layout_top_bar_fixed.html" class="iconify">
                                        <i class="icon-bar-chart"></i>
                                        Fixed Top Bar </a>
                                    </li>
                                    <li>
                                        <a href="layout_light_header.html" class="iconify">
                                        <i class="icon-paper-plane"></i>
                                        Light Header Dropdowns </a>
                                    </li>
                                    <li>
                                        <a href="layout_blank_page.html" class="iconify">
                                        <i class="icon-doc"></i>
                                        Blank Page Layout </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>More Layouts</h3>
                                    </li>
                                    <li>
                                        <a href="layout_click_dropdowns.html" class="iconify">
                                        <i class="icon-speech"></i>
                                        Click vs. Hover Dropdowns </a>
                                    </li>
                                    <li>
                                        <a href="layout_fontawesome_icons.html" class="iconify">
                                        <i class="icon-link"></i>
                                        Layout with Fontawesome </a>
                                    </li>
                                    <li>
                                        <a href="layout_glyphicons.html" class="iconify">
                                        <i class="icon-settings"></i>
                                        Layout with Glyphicon </a>
                                    </li>
                                    <li>
                                        <a href="layout_language_bar.html" class="iconify">
                                        <i class="icon-globe"></i>
                                        Language Switch Bar </a>
                                    </li>
                                    <li>
                                        <a href="layout_disabled_menu.html" class="iconify">
                                        <i class=" icon-lock"></i>
                                        Disabled Menu Links </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="menu-dropdown mega-menu-dropdown mega-menu-full ">
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
            UI Components <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <div class="mega-menu-content">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>UI Components</h3>
                                    </li>
                                    <li>
                                        <a href="ui_general.html">
                                        <i class="fa fa-angle-right"></i>
                                        General </a>
                                    </li>
                                    <li>
                                        <a href="ui_buttons.html">
                                        <i class="fa fa-angle-right"></i>
                                        Buttons </a>
                                    </li>
                                    <li>
                                        <a href="ui_icons.html">
                                        <i class="fa fa-angle-right"></i>
                                        Font Icons </a>
                                    </li>
                                    <li>
                                        <a href="ui_colors.html">
                                        <i class="fa fa-angle-right"></i>
                                        Flat UI Colors </a>
                                    </li>
                                    <li>
                                        <a href="ui_typography.html">
                                        <i class="fa fa-angle-right"></i>
                                        Typography </a>
                                    </li>
                                    <li>
                                        <a href="ui_tabs_accordions_navs.html">
                                        <i class="fa fa-angle-right"></i>
                                        Tabs, Accordions & Navs </a>
                                    </li>
                                    <li>
                                        <a href="ui_tree.html">
                                        <i class="fa fa-angle-right"></i>
                                        Tree View </a>
                                    </li>
                                    <li>
                                        <a href="ui_page_progress_style_1.html">
                                        <i class="fa fa-angle-right"></i>
                                        Page Progress Bar <span class="badge badge-roundless badge-warning">new</span></a>
                                    </li>
                                    <li>
                                        <a href="ui_blockui.html">
                                        <i class="fa fa-angle-right"></i>
                                        Block UI </a>
                                    </li>
                                    <li>
                                        <a href="ui_bootstrap_growl.html">
                                        <i class="fa fa-angle-right"></i>
                                        Bootstrap Growl Notifications <span class="badge badge-roundless badge-warning">new</span></a>
                                    </li>
                                    <li>
                                        <a href="ui_notific8.html">
                                        <i class="fa fa-angle-right"></i>
                                        Notific8 Notifications </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>More UI Components</h3>
                                    </li>
                                    <li>
                                        <a href="ui_toastr.html">
                                        <i class="fa fa-angle-right"></i>
                                        Toastr Notifications </a>
                                    </li>
                                    <li>
                                        <a href="ui_alert_dialog_api.html">
                                        <i class="fa fa-angle-right"></i>
                                        Alerts & Dialogs API <span class="badge badge-roundless badge-danger">new</span></a>
                                    </li>
                                    <li>
                                        <a href="ui_session_timeout.html">
                                        <i class="fa fa-angle-right"></i>
                                        Session Timeout </a>
                                    </li>
                                    <li>
                                        <a href="ui_idle_timeout.html">
                                        <i class="fa fa-angle-right"></i>
                                        User Idle Timeout </a>
                                    </li>
                                    <li>
                                        <a href="ui_modals.html">
                                        <i class="fa fa-angle-right"></i>
                                        Modals </a>
                                    </li>
                                    <li>
                                        <a href="ui_extended_modals.html">
                                        <i class="fa fa-angle-right"></i>
                                        Extended Modals </a>
                                    </li>
                                    <li>
                                        <a href="ui_tiles.html">
                                        <i class="fa fa-angle-right"></i>
                                        Tiles </a>
                                    </li>
                                    <li>
                                        <a href="ui_datepaginator.html">
                                        <i class="fa fa-angle-right"></i>
                                        Date Paginator </a>
                                    </li>
                                    <li>
                                        <a href="ui_nestable.html">
                                        <i class="fa fa-angle-right"></i>
                                        Nestable List </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>Form Stuff</h3>
                                    </li>
                                    <li>
                                        <a href="form_controls_md.html">
                                        <i class="fa fa-angle-right"></i>
                                        Material Design<br>
                                        Form Controls </a>
                                    </li>
                                    <li>
                                        <a href="form_controls.html">
                                        <i class="fa fa-angle-right"></i>
                                        Bootstrap<br>
                                        Form Controls </a>
                                    </li>
                                    <li>
                                        <a href="form_icheck.html">
                                        <i class="fa fa-angle-right"></i>
                                        iCheck Controls </a>
                                    </li>
                                    <li>
                                        <a href="form_layouts.html">
                                        <i class="fa fa-angle-right"></i>
                                        Form Layouts </a>
                                    </li>
                                    <li>
                                        <a href="form_editable.html">
                                        <i class="fa fa-angle-right"></i>
                                        Form X-editable <span class="badge badge-roundless badge-success">new</span></a>
                                    </li>
                                    <li>
                                        <a href="form_wizard.html">
                                        <i class="fa fa-angle-right"></i>
                                        Form Wizard </a>
                                    </li>
                                    <li>
                                        <a href="form_validation.html">
                                        <i class="fa fa-angle-right"></i>
                                        Form Validation </a>
                                    </li>
                                    <li>
                                        <a href="form_image_crop.html">
                                        <i class="fa fa-angle-right"></i>
                                        Image Cropping </a>
                                    </li>
                                    <li>
                                        <a href="form_fileupload.html">
                                        <i class="fa fa-angle-right"></i>
                                        Multiple File Upload </a>
                                    </li>
                                    <li>
                                        <a href="form_dropzone.html">
                                        <i class="fa fa-angle-right"></i>
                                        Dropzone File Upload </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>Form Components</h3>
                                    </li>
                                    <li>
                                        <a href="components_pickers.html">
                                        <i class="fa fa-angle-right"></i>
                                        Date & Time Pickers </a>
                                    </li>
                                    <li>
                                        <a href="components_context_menu.html">
                                        <i class="fa fa-angle-right"></i>
                                        Context Menu </a>
                                    </li>
                                    <li>
                                        <a href="components_dropdowns.html">
                                        <i class="fa fa-angle-right"></i>
                                        Custom Dropdowns </a>
                                    </li>
                                    <li>
                                        <a href="components_form_tools.html">
                                        <i class="fa fa-angle-right"></i>
                                        Form Widgets & Tools </a>
                                    </li>
                                    <li>
                                        <a href="components_form_tools2.html">
                                        <i class="fa fa-angle-right"></i>
                                        Form Widgets & Tools 2 </a>
                                    </li>
                                    <li>
                                        <a href="components_editors.html">
                                        <i class="fa fa-angle-right"></i>
                                        Markdown & WYSIWYG Editors </a>
                                    </li>
                                    <li>
                                        <a href="components_ion_sliders.html">
                                        <i class="fa fa-angle-right"></i>
                                        Ion Range Sliders </a>
                                    </li>
                                    <li>
                                        <a href="components_noui_sliders.html">
                                        <i class="fa fa-angle-right"></i>
                                        NoUI Range Sliders </a>
                                    </li>
                                    <li>
                                        <a href="components_jqueryui_sliders.html">
                                        <i class="fa fa-angle-right"></i>
                                        jQuery UI Sliders </a>
                                    </li>
                                    <li>
                                        <a href="components_knob_dials.html">
                                        <i class="fa fa-angle-right"></i>
                                        Knob Circle Dials </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="menu-dropdown mega-menu-dropdown mega-menu-full ">
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
            Pages <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <div class="mega-menu-content">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>User Pages</h3>
                                    </li>
                                    <li>
                                        <a href="page_timeline.html">
                                        <i class="fa fa-angle-right"></i>
                                        New Timeline <span class="badge badge-warning">2</span></a>
                                    </li>
                                    <li>
                                        <a href="extra_profile.html">
                                        <i class="fa fa-angle-right"></i>
                                        New User Profile <span class="badge badge-success badge-roundless">new</span></a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                        <i class="fa fa-angle-right"></i>
                                        Todo & Tasks <span class="badge badge-danger">4</span></a>
                                    </li>
                                    <li>
                                        <a href="inbox.html">
                                        <i class="fa fa-angle-right"></i>
                                        User Inbox <span class="badge badge-success">4</span></a>
                                    </li>
                                    <li>
                                        <a href="page_calendar.html">
                                        <i class="fa fa-angle-right"></i>
                                        User Calendar <span class="badge badge-warning">14</span></a>
                                    </li>
                                    <li>
                                        <a href="page_timeline_old.html">
                                        <i class="fa fa-angle-right"></i>
                                        Old Timeline <span class="badge badge-warning">2</span></a>
                                    </li>
                                    <li>
                                        <a href="extra_profile_old.html">
                                        <i class="fa fa-angle-right"></i>
                                        Old User Profile </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>General Pages</h3>
                                    </li>
                                    <li>
                                        <a href="extra_faq.html">
                                        <i class="fa fa-angle-right"></i>
                                        FAQ Page </a>
                                    </li>
                                    <li>
                                        <a href="page_portfolio.html">
                                        <i class="fa fa-angle-right"></i>
                                        Portfolio </a>
                                    </li>
                                    <li>
                                        <a href="page_timeline.html">
                                        <i class="fa fa-angle-right"></i>
                                        Timeline <span class="badge badge-info">4</span></a>
                                    </li>
                                    <li>
                                        <a href="page_coming_soon.html">
                                        <i class="fa fa-angle-right"></i>
                                        Coming Soon </a>
                                    </li>
                                    <li>
                                        <a href="extra_invoice.html">
                                        <i class="fa fa-angle-right"></i>
                                        Invoice </a>
                                    </li>
                                    <li>
                                        <a href="page_blog.html">
                                        <i class="fa fa-angle-right"></i>
                                        Blog </a>
                                    </li>
                                    <li>
                                        <a href="page_blog_item.html">
                                        <i class="fa fa-angle-right"></i>
                                        Blog Post </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>Custom Pages</h3>
                                    </li>
                                    <li>
                                        <a href="page_news.html">
                                        <i class="fa fa-angle-right"></i>
                                        News <span class="badge badge-success">9</span></a>
                                    </li>
                                    <li>
                                        <a href="page_news_item.html">
                                        <i class="fa fa-angle-right"></i>
                                        News View </a>
                                    </li>
                                    <li>
                                        <a href="page_about.html">
                                        <i class="fa fa-angle-right"></i>
                                        About Us </a>
                                    </li>
                                    <li>
                                        <a href="page_contact.html">
                                        <i class="fa fa-angle-right"></i>
                                        Contact Us </a>
                                    </li>
                                    <li>
                                        <a href="extra_search.html">
                                        <i class="fa fa-angle-right"></i>
                                        Search Results </a>
                                    </li>
                                    <li>
                                        <a href="extra_pricing_table.html">
                                        <i class="fa fa-angle-right"></i>
                                        Pricing Tables </a>
                                    </li>
                                    <li>
                                        <a href="login.html">
                                        <i class="fa fa-angle-right"></i>
                                        Login Form 1 </a>
                                    </li>
                                    <li>
                                        <a href="login_2.html">
                                        <i class="fa fa-angle-right"></i>
                                        Login Form 2 </a>
                                    </li>
                                    <li>
                                        <a href="login_3.html">
                                        <i class="fa fa-angle-right"></i>
                                        Login Form 3 </a>
                                    </li>
                                    <li>
                                        <a href="login_soft.html">
                                        <i class="fa fa-angle-right"></i>
                                        Login Form 4 </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="mega-menu-submenu">
                                    <li>
                                        <h3>Miscellaneous</h3>
                                    </li>
                                    <li>
                                        <a href="extra_lock.html">
                                        <i class="fa fa-angle-right"></i>
                                        Lock Screen 1 </a>
                                    </li>
                                    <li>
                                        <a href="extra_lock2.html">
                                        <i class="fa fa-angle-right"></i>
                                        Lock Screen 2 </a>
                                    </li>
                                    <li>
                                        <a href="extra_404_option1.html">
                                        <i class="fa fa-angle-right"></i>
                                        404 Page Option 1 </a>
                                    </li>
                                    <li>
                                        <a href="extra_404_option2.html">
                                        <i class="fa fa-angle-right"></i>
                                        404 Page Option 2 </a>
                                    </li>
                                    <li>
                                        <a href="extra_404_option3.html">
                                        <i class="fa fa-angle-right"></i>
                                        404 Page Option 3 </a>
                                    </li>
                                    <li>
                                        <a href="extra_500_option1.html">
                                        <i class="fa fa-angle-right"></i>
                                        500 Page Option 1 </a>
                                    </li>
                                    <li>
                                        <a href="extra_500_option2.html">
                                        <i class="fa fa-angle-right"></i>
                                        500 Page Option 2 </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- END MEGA MENU -->