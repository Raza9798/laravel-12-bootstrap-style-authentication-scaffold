<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark"
    style="width: 210px; height: 100vh; background-color: #2B3035 !important;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="fs-4 fab fa-bootstrap"></i>
        <span class="fs-4 ms-2">{{ env('APP_NAME') }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="fas fa-table"></i>
                Orders
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="fas fa-th"></i>
                Products
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="fas fa-user-circle"></i>
                Customers
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">Sign
                        out</a></li>
            </form>
        </ul>
    </div>
</div>
