<nav class="navbar navbar-expand-lg bg-dark mb-3 -outline-light">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="">{{ __('Todo-List') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="/">{{ __('Home') }}</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="text-light" href="#">
                    {{ __('Logout')}}
                </a>
            </form>
        </div>
    </div>
</nav>
