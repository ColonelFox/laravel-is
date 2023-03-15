
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid text-center">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand" href="http://localhost:8000/">Home</a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="col">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Log-in</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

            <div class="col">
                <form action="/logout" method="get">
                    <button type="submit" class="btn btn-primary">Log-out</button>
                </form>
            </div>

        </div>
    </div>
</nav>
