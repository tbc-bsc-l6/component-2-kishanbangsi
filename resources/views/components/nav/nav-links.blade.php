@auth
<p class="hidden lg:block">Welcome, {{ auth()->user()->name }}</p>
@endauth
<li>
    <a href="{{ route('index') }}" class="navlinks">Home</a>
</li>
@auth
<li>
    <a href="{{ route('all') }}" class="navlinks">All Products</a>
</li>
<li>
    <a href="{{ route('create') }}" class="navlinks">Add Product</a>
</li>
<li>
<form action="{{ route('logout') }}" class="navlinks" method="POST">
    @csrf
    <button type="submit">
        Logout
    </button>
</form>
</li>
@else
<li>
    <a href="{{ route('login') }}" class="navlinks">Login</a>
</li>
<li>
    <a href="{{ route('register') }}" class="navlinks">Register</a>
</li>
@endauth