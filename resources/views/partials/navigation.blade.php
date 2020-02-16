<a class="navbar-brand" href="/">Ski Shop & Rental</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul  class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link" href="/skis">Skis</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="/snowboards">Snowboard</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="/skiboots">Skiboots</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/boots">Boots</a>
        </li>
        @auth
        <li class="nav-item ">
            <a class="nav-link text-primary" href="/admin">Admin</a>
        </li>
        @endauth
    </ul>
</div>