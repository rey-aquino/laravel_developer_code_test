<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">Customers @php $customers = DB::table('customers')->count(); echo $customers; @endphp</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('/add-customers') }}">Add Customer</a></li>
                        <li><a href="{{ url('/manage-customers') }}">Manage Customer</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">Suppliers @php $suppliers = DB::table('suppliers')->count(); echo $suppliers; @endphp</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('/add-suppliers') }}">Add Suppliers</a></li>
                        <li><a href="{{ url('/manage-suppliers') }}">Manage Suppliers</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">Users @php $users = DB::table('users')->count(); echo $users; @endphp</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('/manage-users') }}">Manage Users</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>