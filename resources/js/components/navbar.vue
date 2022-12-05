<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 py-3">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="/">MOVIE<span class="text-danger">HUB</span></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    </ul>
                    <form class="d-flex" action='/search=' method="get" onsubmit="this.action += this.querySelector('#query').value;">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="query">
                            <button class="btn btn-danger">
                                <i class="bi bi-search"></i>
                            </button>
                    </form>
                </div>
            </div>
        </nav>    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>
