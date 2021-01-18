<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">

    <div class="container">
        <a class="navbar-brand" href="#">MyApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="{{ setActive('home') }}" aria-current="page"
                        href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="{{ setActive('about') }}" href="{{ route('about') }}">{{ __('About') }}</a>
                </li>
                <li>
                    <a class="{{ setActive('projects.*') }}"
                        href="{{ route('projects.index') }}">{{ __('Projects') }}</a>
                </li>
                <li>
                    <a class="{{ setActive('contact') }}" href="/contact">{{ __('Contact') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>