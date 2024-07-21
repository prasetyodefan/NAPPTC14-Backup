<aside :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}" class="fixed z-30 inset-y-0 left-0 w-64 bg-gray-800 text-white transform transition duration-200 ease-in-out lg:translate-x-0 lg:static lg:inset-0 h-full">
    <div class="p-6 relative">
        <button @click="sidebarOpen = !sidebarOpen" class="text-white hover:text-gray-300 focus:outline-none absolute top-4 -right-8 transform translate-x-1/2 bg-gray-800 p-2 rounded-full lg:hidden">
            <svg x-show="!sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
            <svg x-show="sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <nav>
            <ul>
                <li class="mb-4">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center text-gray-300 hover:text-white">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6a4 4 0 00-4 4h7l1-1 2 2-9 9-9-9 1-1h6a4 4 0 004-4V5m0 0l-7-7-7 7m0 0L5 12m0 0l-2-2"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.news') }}" class="flex items-center text-gray-300 hover:text-white">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"></path>
                        </svg>
                        Manage News
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.categories') }}" class="flex items-center text-gray-300 hover:text-white">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 6h-6v6h6V6zM4 14h6v6H4v-6zM4 6h6v6H4V6zM14 14h6v6h-6v-6z"></path>
                        </svg>
                        Manage Categories
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.settings') }}" class="flex items-center text-gray-300 hover:text-white">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.992 2c-.784 0-1.45.663-1.45 1.454v1.492c-1.152.226-2.25.713-3.236 1.443l-1.052-1.053c-.567-.567-1.486-.567-2.052 0-.566.566-.566 1.486 0 2.053l1.053 1.052c-.73.986-1.216 2.084-1.442 3.236H2.454C1.663 11.993 1 12.66 1 13.444c0 .784.663 1.451 1.454 1.451h1.492c.226 1.152.713 2.25 1.443 3.236l-1.053 1.052c-.567.567-.567 1.486 0 2.052.566.566 1.486.566 2.053 0l1.052-1.053c.986.73 2.084 1.216 3.236 1.442v1.492c0 .784.666 1.454 1.451 1.454.784 0 1.451-.67 1.451-1.454v-1.492c1.152-.226 2.25-.713 3.236-1.443l1.052 1.053c.567.567 1.486.567 2.053 0 .566-.566.566-1.486 0-2.052l-1.053-1.052c.73-.986 1.216-2.084 1.442-3.236h1.492c.784 0 1.454-.667 1.454-1.451 0-.784-.67-1.451-1.454-1.451h-1.492c-.226-1.152-.713-2.25-1.443-3.236l1.053-1.052c.566-.566.566-1.486 0-2.053-.567-.567-1.486-.567-2.052 0l-1.053 1.053c-.986-.73-2.084-1.216-3.236-1.442V3.454C13.443 2.663 12.775 2 11.992 2zM12 8.6c-1.88 0-3.4 1.521-3.4 3.4 0 1.879 1.521 3.4 3.4 3.4 1.879 0 3.4-1.521 3.4-3.4 0-1.879-1.521-3.4-3.4-3.4z"></path>
                        </svg>
                        Settings
                    </a>
                </li>
                <li class="lg:hidden mb-4">
                    <a href="{{ route('logout') }}" class="flex items-center text-gray-300 hover:text-white">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2h6a2 2 0 002-2v-1"></path>
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
