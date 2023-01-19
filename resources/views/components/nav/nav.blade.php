<nav>
    <div class="flex justify-between items-center py-4 px-16">
        <!-- Logo -->
        <div>
            <h1 class="text-2xl font-bold text-gray-600">SmallMart</h1>
        </div>
        <!-- Menu -->
        <div>
            <img src="{{ asset('icons/menu.svg') }}" alt="menu" class="open w-8 h-8 cursor-pointer lg:hidden" id="menu">
        </div>
        <!-- Links -->
        <div class="hidden lg:block">
            <ul class="flex flex-col items-center space-x-4 lg:flex-row">
                <x-nav.nav-links/>
            </ul>
        </div>
    </div>
    <div class="py-4 hidden transition ease-in-out duration-500" id="navlinks">
        <ul class="flex flex-col justify-content items-center space-y-5 lg:space-x-10 lg:flex-row">
            <x-nav.nav-links/>
        </ul>
    </div>
</nav>