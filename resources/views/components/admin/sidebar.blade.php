<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="index.html">
                            <i data-feather="monitor"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('Admin.Category.index') }}">
                            <i data-feather="monitor"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                   
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="inbox"></i>
                            <span>SubCategories</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('Admin.Subcategory.index') }}"><i class="icon-Commit"><span class="path1"></span><span
                                class="path2"></span></i>List</a></li>
                                <li><a href="{{ route('Admin.Subcategory.create') }}"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Create</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="pie-chart"></i>
                            <span>Brands</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('Admin.Brand.index') }}"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>List</a></li>
                            <li><a href="{{ route('Admin.Brand.create') }}"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Create</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="grid"></i>
                            <span>Apps</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Calendar</a></li>
                            <li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Contact List</a></li>
                            <li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Chat</a></li>
                            <li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Todo</a></li>
                            <li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Mailbox</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="edit"></i>
                            <span>Widgets</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Blog</a></li>
                            <li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Chart</a></li>
                            <li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>List</a></li>
                            <li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Social</a></li>
                            <li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Statistic</a></li>
                            <li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Weather</a></li>
                            <li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Widgets</a></li>
                            <li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Emails</a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Maps
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="map_google.html"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Google Map</a>
                                    </li>
                                    <li><a href="map_vector.html"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Vector Map</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Modals
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="component_modals.html"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Modals</a></li>
                                    <li><a href="component_sweatalert.html"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Sweet Alert</a>
                                    </li>
                                    <li><a href="component_notification.html"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Toastr</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="shopping-cart"></i>
                            <span>Ecommerce</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="ecommerce_products.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Products</a></li>
                            <li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Products Cart</a></li>
                            <li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
                            <li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Product Details</a></li>
                            <li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Product Orders</a></li>
                            <li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Products Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="cast"></i>
                            <span>Pages</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Invoice</a></li>
                            <li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Invoice List</a></li>
                            <li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Support Ticket</a></li>
                            <li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>User Profile</a></li>
                            <li><a href="contact_userlist_grid.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Userlist Grid</a></li>
                            <li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Userlist</a></li>
                            <li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>FAQs</a></li>
                            <li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Blank</a></li>
                            <li><a href="sample_coming_soon.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
                            <li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
                            <li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Gallery</a></li>
                            <li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Lightbox Popup</a></li>
                            <li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Pricing</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="lock"></i>
                            <span>Authentication</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Login</a></li>
                            <li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Register</a></li>
                            <li><a href="auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Lockscreen</a></li>
                            <li><a href="auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Recover password</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="alert-triangle"></i>
                            <span>Miscellaneous</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Error 404</a></li>
                            <li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Error 500</a></li>
                            <li><a href="error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Maintenance</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-widgets">
                    <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                        <div class="text-center">
                            <img src="../images/svg-icon/color-svg/custom-16.svg" class="sideimg p-25" alt="">
                            <h3 class="title-bx text-primary">Find Your Best</h3>
                            <a href="#" class="py-10 fs-16 mb-0 text-primary">
                                Buy or Rent Best Property here <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="copyright text-center m-25">
                        <p><strong class="d-block">WebkitX Admin Dashboard</strong> © 2022 All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>