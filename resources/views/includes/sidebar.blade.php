<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{route('index')}}" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('assets/images/faces/admin.png')}}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::check() ? Auth::user()->name: "Non User"}}</span>
                    <span class="text-secondary text-small">Management</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}">
                <span class="menu-title">Management</span>
                <i class="mdi mdi-account-badge menu-icon"></i>
            </a>
        </li>
            <div class="Inventory">
                <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-inventory" aria-expanded="false" aria-controls="ui-basic-inventory">
                    <span class="menu-title">Inventory</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-file"></i>
                </a>
                <div class="collapse" id="ui-basic-inventory">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}">products</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Audit Table</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('stock.create')}}">Sold-out Products</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Pre-Order</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('stock.index')}}">Stocks</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">Category</a></li>
                    </ul>
                </div>
            </li>
            </div>
        <div class="Invoice">
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-invoice" aria-expanded="false" aria-controls="ui-basic-invoice">
                    <span class="menu-title">Invoice</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-file"></i>
                </a>
                <div class="collapse" id="ui-basic-invoice">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('stock.invoice')}}">Invoice Issuance</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Item 2</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Item 3</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Item 4</a></li>
                    </ul>
                </div>
            </li>
        </div>

        <div class="Appointment">
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-appointment" aria-expanded="false" aria-controls="ui-basic-appointment">
                    <span class="menu-title">Appointment</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-file"></i>
                </a>
                <div class="collapse" id="ui-basic-appointment">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('assignments.index')}}">All Appointment</a>
                        <li class="nav-item"> <a class="nav-link" href="#">Allocated Appointments</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Appointment Done</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Pending Appointment</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Appointment Missed</a></li>
                    </ul>
                </div>
            </li>
        </div>

        <div class="Registration">
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-registration" aria-expanded="false" aria-controls="ui-basic-registration">
                    <span class="menu-title">Registration</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-file"></i>
                </a>
                <div class="collapse" id="ui-basic-registration">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Registered Admin</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Registered Salesman</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">New Admin Registration</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">New Salesman Registration</a></li>
                    </ul>
                </div>
            </li>
        </div>

        <div class="Customer">
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic-customer" aria-expanded="false" aria-controls="ui-basic-customer">
                    <span class="menu-title">Customer</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-file"></i>
                </a>
                <div class="collapse" id="ui-basic-customer">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('frontend.index')}}">Customer</a></li>
                    </ul>
                </div>
            </li>
        </div>

    </ul>
</nav>
