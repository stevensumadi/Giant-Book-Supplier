<nav>
    <ul class="navbar nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/publisher">Publisher</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
        </li>
    </ul>
</nav>