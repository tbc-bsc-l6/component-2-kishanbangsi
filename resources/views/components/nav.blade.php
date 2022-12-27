<nav>
    <div class="flex justify-between items-center py-4 px-16">
        <!-- Logo -->
        <div>
            <h1 class="text-2xl font-bold text-gray-600">SmallMart</h1>
        </div>
        <!-- Menu -->
        <div>
            <img src="icons/menu.svg" alt="menu" class="open w-8 h-8 cursor-pointer md:hidden" id="menu">
        </div>
        <!-- Links -->
        <div class="hidden md:block">
            <ul class="flex flex-col items-center space-x-6 md:flex-row">
                <li>
                    <a href="#" class="navlinks">Home</a>
                </li>
                <li>
                    <a href="#" class="navlinks">Categories</a>
                </li>
                <li>
                    <a href="#" class="navlinks">Login</a>
                </li>
                <li>
                    <a href="#" class="navlinks">Register</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="py-4 hidden transition ease-in-out duration-500" id="navlinks">
        <ul class="flex flex-col justify-content items-center space-y-5 md:space-x-10 md:flex-row">
            <li>
                <a href="#" class="navlinks">Home</a>
            </li>
            <li>
                <a href="#" class="navlinks">Categories</a>
            </li>
            <li>
                <a href="#" class="navlinks">Login</a>
            </li>
            <li>
                <a href="#" class="navlinks">Register</a>
            </li>
        </ul>
    </div>
</nav>