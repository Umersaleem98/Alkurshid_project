<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ url('dashboard') }}" title="Mono">
                <img src="admin/images/logo.png" alt="Mono" style="width: 50px; height: 50px;">
                <span class="brand-name">MONO</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

            
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#doctor-category"
                        aria-expanded="false" aria-controls="doctor-category">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="nav-text">Doctor Categories</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="doctor-category" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                
                            <li>
                                <a class="sidenav-item-link" href="{{ url('categories_index') }}">
                                    <span class="nav-text">Category List</span>
                                </a>
                            </li>
                
                            <li>
                                <a class="sidenav-item-link" href="{{ url('categories_create') }}">
                                    <span class="nav-text">Add Category</span>
                                </a>
                            </li>
                
                        </div>
                    </ul>
                </li>
                

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#doctor"
                        aria-expanded="false" aria-controls="doctor">
                        <i class="mdi mdi-stethoscope"></i>
                        <span class="nav-text">Doctor</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="doctor" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                
                            <li>
                                <a class="sidenav-item-link" href="{{ url('doctors_index') }}">
                                    <span class="nav-text">Doctor List</span>
                                </a>
                            </li>
                
                            <li>
                                <a class="sidenav-item-link" href="{{ url('doctors_create') }}">
                                    <span class="nav-text">Add Doctor</span>
                                </a>
                            </li>
                
                        </div>
                    </ul>
                </li>
                

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#appointment"
                        aria-expanded="false" aria-controls="appointment">
                        <i class="mdi mdi-calendar-check"></i>
                        <span class="nav-text">Appointment</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="appointment" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                
                            <li>
                                <a class="sidenav-item-link" href="{{ url('appointments_index') }}">
                                    <span class="nav-text">Appointment List</span>
                                </a>
                            </li>
                
                            <li>
                                <a class="sidenav-item-link" href="{{ url('appointments_create') }}">
                                    <span class="nav-text">Add Appointment</span>
                                </a>
                            </li>
                
                        </div>
                    </ul>
                </li>
                
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#services"
                        aria-expanded="false" aria-controls="services">
                        <i class="mdi mdi-comment-account"></i>
                        <span class="nav-text">Services</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="services" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ url('services_index') }}">
                                    <span class="nav-text">Service List</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ url('services_create') }}">
                                    <span class="nav-text">Add Service</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                
                
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#careers"
                        aria-expanded="false" aria-controls="careers">
                        <i class="mdi mdi-briefcase"></i>
                        <span class="nav-text">Careers</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="careers" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                
                            <li>
                                <a class="sidenav-item-link" href="{{ url('careers_index') }}">
                                    <span class="nav-text">Career List</span>
                                </a>
                            </li>
                
                            <li>
                                <a class="sidenav-item-link" href="{{ url('careers_create') }}">
                                    <span class="nav-text">Add Career</span>
                                </a>
                            </li>
                
                        </div>
                    </ul>
                </li>
                
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#contact"
                        aria-expanded="false" aria-controls="contact">
                        <i class="mdi mdi-account-box"></i>
                        <span class="nav-text">Contact</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="contact" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                
                            <li>
                                <a class="sidenav-item-link" href="{{ url('contact_index') }}">
                                    <span class="nav-text">Contact List</span>
                                </a>
                            </li>
                
                            {{-- <li>
                                <a class="sidenav-item-link" href="contact-add.html">
                                    <span class="nav-text">Add Contact</span>
                                </a>
                            </li> --}}
                
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#testimonials"
                        aria-expanded="false" aria-controls="testimonials">
                        <i class="mdi mdi-comment-account"></i>
                        <span class="nav-text">Testimonials</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="testimonials" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ url('testimonials_index') }}">
                                    <span class="nav-text">Testimonials List</span>
                                </a>
                            </li>
                
                            {{-- Uncomment the following section if needed --}}
                             
                            <li>
                                <a class="sidenav-item-link" href="{{ url('testimonials_create') }}">
                                    <span class="nav-text">Add Testimonial</span>
                                </a>
                            </li>
                           
                        </div>
                    </ul>
                </li>
                
                
            </ul>
        </div>
    </div>
</aside>
