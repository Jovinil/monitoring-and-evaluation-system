

<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.html" class="brand-link"> <!--begin::Brand Image--> <img src="{{ asset("dist/assets/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper" data-overlayscrollbars="host"><div class="os-size-observer os-size-observer-appear"><div class="os-size-observer-listener ltr"></div></div><div data-overlayscrollbars-viewport="scrollbarHidden" style="margin-right: -16px; margin-bottom: -16px; margin-left: 0px; top: -8px; right: auto; left: -8px; width: calc(100% + 16px); padding: 8px; overflow-y: scroll;">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                FOR ADMIN
                <li class="nav-item">
                  <a href="{{ route('admin.index', Auth::id()) }}" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.student-list') }}" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Student List
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route("admin.student-weekly-report") }}" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Student Weekly Report
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route("admin.ojt-coordinator-info") }}" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      OJT Coordinator Info
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route("admin.hte-info") }}" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Host Training Establishment Info
                    </p>
                  </a>
                </li>

                FOR HTE
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Student List
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Student Weekly Tasks
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Student Weekly Submission
                    </p>
                  </a>
                </li>

                FOR OJT COORDINATOR
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Student List
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Student Weekly Report
                    </p>
                  </a>
                </li>

                FOR STUDENT
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Internship Requirements
                      <!-- available only if the student doesn't have an HTE yet -->
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Weekly Tasks
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>
                      Weekly Submission
                    </p>
                  </a>
                </li>

                {{-- <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="../index.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v1</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../index2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v2</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../index3.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v3</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Widgets
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="../widgets/small-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Small Box</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../widgets/info-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>info Box</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../widgets/cards.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-clipboard-fill"></i>
                        <p>
                            Layout Options
                            <span class="nav-badge badge text-bg-secondary me-3">6</span> <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="../layout/unfixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Default Sidebar</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../layout/fixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Fixed Sidebar</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../layout/fixed-complete.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Fixed Complete</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../layout/sidebar-mini.html" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../layout/collapsed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini <small>+ Collapsed</small></p>
                            </a> </li>
                        <li class="nav-item"> <a href="../layout/logo-switch.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini <small>+ Logo Switch</small></p>
                            </a> </li>
                        <li class="nav-item"> <a href="../layout/layout-rtl.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Layout RTL</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-tree-fill"></i>
                        <p>
                            UI Elements
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="../UI/general.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>General</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../UI/timeline.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Timeline</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-pencil-square"></i>
                        <p>
                            Forms
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="../forms/general.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>General Elements</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-table"></i>
                        <p>
                            Tables
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="../tables/simple.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Simple Tables</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Auth
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Version 1
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../examples/login.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Login</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../examples/register.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Register</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Version 2
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="../examples/login-v2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Login</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../examples/register-v2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                        <p>Register</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="../examples/lockscreen.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Lockscreen</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-header">DOCUMENTATIONS</li>
                <li class="nav-item"> <a href="../docs/introduction.html" class="nav-link"> <i class="nav-icon bi bi-download"></i>
                        <p>Installation</p>
                    </a> </li>
                <li class="nav-item"> <a href="../docs/layout.html" class="nav-link"> <i class="nav-icon bi bi-grip-horizontal"></i>
                        <p>Layout</p>
                    </a> </li>
                <li class="nav-item"> <a href="../docs/color-mode.html" class="nav-link"> <i class="nav-icon bi bi-star-half"></i>
                        <p>Color Mode</p>
                    </a> </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-ui-checks-grid"></i>
                        <p>
                            Components
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="../docs/components/main-header.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Main Header</p>
                            </a> </li>
                        <li class="nav-item"> <a href="../docs/components/main-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Main Sidebar</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-filetype-js"></i>
                        <p>
                            Javascript
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="../docs/javascript/treeview.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Treeview</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="../docs/browser-support.html" class="nav-link"> <i class="nav-icon bi bi-browser-edge"></i>
                        <p>Browser Support</p>
                    </a> </li>
                <li class="nav-item"> <a href="../docs/how-to-contribute.html" class="nav-link"> <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>
                        <p>How To Contribute</p>
                    </a> </li>
                <li class="nav-item"> <a href="../docs/faq.html" class="nav-link"> <i class="nav-icon bi bi-question-circle-fill"></i>
                        <p>FAQ</p>
                    </a> </li>
                <li class="nav-item"> <a href="../docs/license.html" class="nav-link"> <i class="nav-icon bi bi-patch-check-fill"></i>
                        <p>License</p>
                    </a> </li>
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>Level 1</p>
                    </a> </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Level 1
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Level 2</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>
                                    Level 2
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                        <p>Level 3</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                        <p>Level 3</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                        <p>Level 3</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Level 2</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>Level 1</p>
                    </a> </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a> </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                        <p>Warning</p>
                    </a> </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-info"></i> --}}
                        <p>Informational</p>
                    </a> </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-cornerless os-scrollbar-unusable os-scrollbar-auto-hide-hidden os-theme-light"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%;"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hide os-scrollbar-handle-interactive os-scrollbar-track-interactive os-scrollbar-visible os-scrollbar-cornerless os-scrollbar-auto-hide-hidden os-theme-light"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 24.843%;"></div></div></div></div> <!--end::Sidebar Wrapper-->
</aside>
