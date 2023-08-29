<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Menu</h6>
                    <ul>
                        <li class="{{ Route::is('home') ? 'active' : '' }} m-2">
                            <a href="{{ route('home') }}"><i data-feather="grid"></i><span>Dashboard</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales</h6>
                    <ul>
                        <li class="{{ Route::is('session.index', 'session.store') ? 'active' : '' }}">
                            <a href="{{ route('session.index') }}"><i data-feather="credit-card"></i><span>Session</span></a>
                        </li>
                        <li class="{{ Route::is('category.index', 'category.store') ? 'active' : '' }}">
                            <a href="{{ route('category.index') }}"><i data-feather="credit-card"></i><span>Category</span></a>
                        </li>
                        <li class="{{ Route::is('product.index', 'product.store') ? 'active' : '' }}">
                            <a href="{{ route('product.index') }}"><i data-feather="box"></i><span>Product</span></a>
                        </li>
                        <li class="{{ Route::is('sales.index') ? 'active' : '' }}">
                            <a href="{{ route('sales.index') }}"><i data-feather="shopping-cart"></i><span>Sales</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">General</h6>
                    <ul>
                        <li class="{{ Route::is('bank.index', 'bank.store') ? 'active' : '' }}">
                            <a href="{{ route('bank.index') }}"><i data-feather="credit-card"></i><span>Payment Mode</span></a>
                        </li>
                        <li class="{{ Route::is('customer.index', 'customer.store', 'customer.edit', 'customer.delete', 'customer.checkduplicate') ? 'active' : '' }}">
                            <a href="{{ route('customer.index') }}"><i data-feather="user"></i><span>Customers</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Delivery</h6>
                    <ul>
                        <li class="{{ Route::is('delivery.area.index', 'delivery.area.store') ? 'active' : '' }}">
                            <a href="{{ route('delivery.area.index') }}"><i data-feather="map"></i><span>Delivery Areas</span></a>
                        </li>
                        <li class="{{ Route::is('delivery.boy.index', 'delivery.boy.store') ? 'active' : '' }}">
                            <a href="{{ route('delivery.boy.index') }}"><i data-feather="user"></i><span>Delivery Boys</span></a>
                        </li>
                        <li class="{{ Route::is('delivery.plan.index', 'delivery.plan.store') ? 'active' : '' }}">
                            <a href="{{ route('delivery.plan.index') }}"><i data-feather="map"></i><span>Delivery Plan</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li class="{{ Route::is('employee.index', 'employee.store', 'employee.edit', 'employee.delete', 'employee.checkduplicate') ? 'active' : '' }}">
                            <a href="{{ route('employee.index') }}"><i data-feather="user"></i><span>Employee</span></a>
                        </li>
                        <li class="{{ Route::is('manager.invite.index', 'manager.invite.store') ? 'active' : '' }}">
                            <a href="{{ route('manager.invite.index') }}"><i data-feather="user-check"></i><span>Manager</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


