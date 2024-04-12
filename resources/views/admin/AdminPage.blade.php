@extends('layouts.main')

@section('content')



<nav class="sb-topnav navbar navbar-expand navbar-dark ">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="">
        <img src="WMS-logo.png" alt="navbar-brand " class="brand-logo">
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>

    
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <ul class="menu-nav list-unstyled ">

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                &nbsp;<i class="menu-icon fas fa-users-cog" data-toggle="tooltip" title="Super Admin"></i>
                                <br>
                                <span class="menu-text" data-toggle="tooltip" title="SuperAdmin"
                                    style="font-size: 12px;">Super<br>Admin</span>
                            </a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                &nbsp;<i class="fas fa-tachometer-alt"></i>
                                <br>
                                <span class="menu-text" data-toggle="tooltip" title="Dashboard"
                                    style="font-size: 12px;">Dashboard</span>
                            </a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                aria-expanded="true" aria-controls="collapsePages" style="position: absoulte;">
                                &nbsp; <i class="fas fa-tools"></i>
                                <br>
                                <span class="menu-text" data-toggle="tooltip" title="Admin" style="font-size: 12px;"
                                    style="position: relative;">Admin</span>
        
        
                            </a>
                            <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                                data-parent="#accordionSidebar">
                                <div class="bg-white collapse-inner rounded">
                                    <a class="collapse-item" href="login.html"><i class="fas fa-user"></i> Client</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-network-wired"></i>
                                        Channel
                                        Identifications</a>
                                    <a class="collapse-item" href="register.html"><i class="fas fa-users"></i>
                                        Role/User</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-map-marker-alt"></i>
                                        Location</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-shipping-fast"></i>
                                        Couriers</a>
                                    <a class="collapse-item" href="404.html"><i class="fas fa-envelope"></i> Auto
                                        Mailer</a>
                                </div>
                            </div>
        
                        </li>
        
        
        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasters"
                                aria-expanded="true" aria-controls="collapseMasters">
                                &nbsp;<i class="fas fa-atlas"></i><br>
                                <span class="menu-text" data-toggle="tooltip" title="Masters"
                                    style="font-size: 12px;">Masters</span>
                            </a>
                            <div id="collapseMasters" class="collapse" aria-labelledby="headingMasters"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="login.html"><i class="fas fa-tags"></i> SKU</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-barcode"></i>
                                        Barcode</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-truck"></i>
                                        Vendor</a>
                                    <a class="collapse-item" href="register.html"><i class="fas fa-users"></i>
                                        Customers</a>
                                    <a class="collapse-item" href="forgot-password.html"><i
                                            class="fas fa-file-invoice-dollar"></i> Tax
                                        Masters</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-warehouse"></i>
                                        Warehouse</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-home"></i> Hub</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-file-invoice"></i>
                                        Billings</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-cog"></i> Other
                                        Masters</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-shipping-fast"></i>
                                        Courier Masters</a>
                                    <a class="collapse-item" href="404.html"><i class="fas fa-code"></i> API
                                        Masters</a>
                                    <a class="collapse-item" href="blank.html"><i class="fas fa-box"></i> Packaging
                                        Master</a>
                                </div>
                            </div>
                        </li>
        
        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                data-target="#collapseInbound" aria-expanded="true" aria-controls="collapseInbound">
                                &nbsp;<i class="fas fa-sign-in-alt"></i>
                                <br>
                                <span class="menu-text" data-toggle="tooltip" title="Inbound"
                                    style="font-size: 12px;">Inbound</span>
                            </a>
                            <div id="collapseInbound" class="collapse" aria-labelledby="headingInbound"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="login.html"><i class="fas fa-shopping-cart"></i>
                                        Purchase
                                        Order</a>
                                    <a class="collapse-item" href="register.html"><i class="fas fa-truck"></i>
                                        ASN</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-door-open"></i>
                                        Gate
                                        Entry</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-globe"></i>
                                        Global
                                        Count</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-check-circle"></i>
                                        GRN</a>
                                    <a class="collapse-item" href="404.html"><i class="fas fa-truck-loading"></i>
                                        Putaway</a>
                                    <a class="collapse-item" href="blank.html"><i class="fas fa-exchange-alt"></i>
                                        STO</a>
                                </div>
                            </div>
                        </li>
        
        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                data-target="#collapseOutbound" aria-expanded="true" aria-controls="collapseOutbound">
                                &nbsp;<i class="fas fa-sign-out-alt"></i>
                                <br>
                                <span class="menu-text" data-toggle="tooltip" title="Outbound"
                                    style="font-size: 12px;">Outbound</span>
                            </a>
                            <div id="collapseOutbound" class="collapse" aria-labelledby="headingOutbound"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="login.html"><i class="fas fa-shopping-cart"></i>
                                        Orders</a>
                                    <a class="collapse-item" href="register.html"><i class="fas fa-hand-pointer"></i>
                                        Pick</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-sort"></i>
                                        Sorting</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-box"></i>
                                        Pack</a>
                                    <a class="collapse-item" href="404.html"><i class="fas fa-file-alt"></i>
                                        Manifest</a>
                                    <a class="collapse-item" href="blank.html"><i class="fas fa-shipping-fast"></i>
                                        Ship</a>
                                </div>
                            </div>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                data-target="#collapseReturns" aria-expanded="true" aria-controls="collapseReturns">
                                &nbsp;<i class="fas fa-undo fa-flip-horizontal"></i>
                                <br>
                                <span class="menu-text" data-toggle="tooltip" title="Returns"
                                    style="font-size: 12px;">Returns</span>
                            </a>
                            <div id="collapseReturns" class="collapse" aria-labelledby="headingReturns"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="404.html"><i class="fas fa-arrow-left fa-rotate-60"></i>
                                        Purchase
                                        Returns</a>
                                    <a class="collapse-item" href="blank.html"><i class="fas fa-arrow-right"></i>
                                        Sales
                                        Returns</a>
                                </div>
                            </div>
                        </li>
        
        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                data-target="#collapseInventory" aria-expanded="true" aria-controls="collapseInventory">
                                &nbsp;<i class="fas fa-archive"></i><br>
                                <span class="menu-text" data-toggle="tooltip" title="Inventory"
                                    style="font-size: 12px;">Inventory</span>
                            </a>
                            <div id="collapseInventory" class="collapse" aria-labelledby="headingInventory"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="login.html"><i class="fas fa-boxes"></i> Full
                                        Inventory</a>
                                    <a class="collapse-item" href="register.html"><i class="fas fa-warehouse"></i>
                                        Storage Wise
                                        Inventory</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-cube"></i>
                                        LPN
                                        Inventory</a>
                                    <a class="collapse-item" href="login.html"><i class="fas fa-adjust"></i>
                                        Adjustment</a>
                                    <a class="collapse-item" href="register.html"><i class="fas fa-sync"></i>
                                        Replenishment</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-toolbox"></i>
                                        Kitting</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-arrows-alt"></i>
                                        Bin
                                        Movement</a>
                                    <a class="collapse-item" href="404.html"><i class="fas fa-sync-alt"></i> Cycle
                                        Count</a>
                                    <a class="collapse-item" href="blank.html"><i class="fas fa-cubes"></i> LPN
                                        Count</a>
                                    <a class="collapse-item" href="404.html"><i class="fas fa-file-invoice"></i> Item
                                        Ledger</a>
                                    <a class="collapse-item" href="blank.html"><i class="fas fa-check"></i>
                                        Approvals</a>
                                </div>
                            </div>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTools"
                                aria-expanded="true" aria-controls="collapseTools">
                                &nbsp;<i class="fas fa-tools"></i>
                                <br>
                                <span class="menu-text" data-toggle="tooltip" title="Tools"
                                    style="font-size: 12px;">Tools</span>
                            </a>
                            <div id="collapseTools" class="collapse" aria-labelledby="headingTools"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="login.html"><i class="fas fa-tag"></i> Et Order
                                        Labelling</a>
                                    <a class="collapse-item" href="register.html"><i class="fas fa-calendar-alt"></i>
                                        Daily
                                        Register</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-file-alt"></i>
                                        Manual
                                        Delivery Note</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-comment-alt"></i>
                                        SMS</a>
                                    <a class="collapse-item" href="forgot-password.html"><i class="fas fa-box"></i>
                                        HD
                                        Order</a>
                                    <a class="collapse-item" href="404.html"><i class="fas fa-map-marker-alt"></i>
                                        Tracking</a>
                                    <a class="collapse-item" href="blank.html"><i class="fas fa-road"></i> Eway</a>
                                </div>
                            </div>
                        </li>
        
        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#">
                                &nbsp;<i class="fas fa-chart-line"></i>
        
                                <br>
                                <span class="menu-text" data-toggle="tooltip" title="Reports"
                                    style="font-size: 12px;">Reports</span>
                            </a>
        
                        </li>
        
        
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#">
                                &nbsp;<i class="fas fa-mobile-alt"></i>
                                <br>
                                <span class="menu-text"data-toggle="tooltip" title="Device"
                                    style="font-size: 12px;">Device</span>
                            </a>
        
                        </li>
        
                        
                    </ul>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
  
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Bar Chart Example
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
  
        
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
  </div>
  
    
@endsection