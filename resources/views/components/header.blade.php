<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{url('/')}}" active = true>Workopia</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link url="/jobs" :active="request()->is('/jobs')" icon='briefcase'>All Jobs</x-nav-link>
            <x-nav-link url="/jobs/saved" :active="request()->is('/jobs/saved')">Saved Jobs</x-nav-link>
            <x-nav-link url="/login" :active="request()->is('/login')" icon='user'>Login</x-nav-link>
            <x-nav-link url="/registration" :active="request()->is('/registration')" icon='registered'>Registration</x-nav-link>
            <x-nav-link url="/dashboard" :active="request()->is('/dashboard')" icon='gauge'>Dashboard</x-nav-link>
            <x-button-link url="/jobs/create" icon="edit">Create Jobs</x-button-link> 
        </nav>
        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/" :active="request()->is('/')" :mobile="true">Home</x-nav-link>
        <x-nav-link url="/jobs" :active="request()->is('/jobs')" icon='briefcase' :mobile="true">All Jobs</x-nav-link>
        <x-nav-link url="/jobs/saved" :active="request()->is('/jobs/saved')" :mobile="true">Saved Jobs</x-nav-link>
        <x-nav-link url="/login" :active="request()->is('/login')" icon='user' :mobile="true">Login</x-nav-link>
        <x-nav-link url="/registration" :active="request()->is('/registration')" icon='registered' :mobile="true">Registration</x-nav-link>
        <x-nav-link url="/dashboard" :active="request()->is('/dashboard')" icon='gauge' :mobile="true">Dashboard</x-nav-link>
        <x-button-link url="/jobs/create" icon="edit" :block="true">Create Jobs</x-button-link>
    </nav>
</header>