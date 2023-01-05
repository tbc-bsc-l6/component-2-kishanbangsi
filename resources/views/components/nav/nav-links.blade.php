@auth
    <p class="hidden lg:block">Welcome, {{ auth()->user()->name }}</p>
    
    @can('access-user-dashboard')
        @if(auth()->user()->role != 'admin')
            <li>
                <a href="{{ route('dashboard.user', ['id' => auth()->user()->id]) }}" class="navlinks">Dashboard</a>
            </li>
        @else
            <li>
                <button class="navlinks" id="dropdown">Dashboard</button>
                <div class="dropdown-links absolute flex flex-col">
                    <a href="{{ route('dashboard.users-list') }}" class="navlinks">Users List</a>
                    <a href="{{ route('dashboard.products-list') }}" class="navlinks">Products List</a>
                </div>
            </li>
        @endif
    @endcan
@endauth

<li>
    <a href="{{ route('product.index') }}" class="navlinks">Home</a>
</li>

@auth
    <li>
        <a href="{{ route('product.all') }}" class="navlinks">All Products</a>
    </li>
    <li>
        <a href="{{ route('product.create') }}" class="navlinks">Add Product</a>
    </li>
    <li>
    <form action="{{ route('user.logout') }}" class="navlinks" method="POST">
        @csrf
        <button type="submit">
            Logout
        </button>
    </form>
    </li>
@else
    <li>
        <a href="{{ route('user.login') }}" class="navlinks">Login</a>
    </li>
    <li>
        <a href="{{ route('user.register') }}" class="navlinks">Register</a>
    </li>
@endauth