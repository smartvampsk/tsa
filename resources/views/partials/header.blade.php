<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="" style="height: 40px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto custom-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('task1*') ? 'active' : '' }}" href="{{ route('task1') }}">Task
                            1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('task2*') ? 'active' : '' }}" href="{{ route('task2') }}">Task
                            2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('task3*') ? 'active' : '' }}" href="{{ route('task3') }}">Task
                            3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('task4*') ? 'active' : '' }}" href="{{ route('task4') }}">Task
                            4</a>
                    </li>

                    <li class="nav-item ms-5">
                        <a class="nav-link {{ request()->is('my-cart') ? 'active' : '' }}"
                           href="{{ route('my-cart') }}"><i class="fas fa fa-shopping-cart pr-1"></i> My Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
