<template>
    <div class="bg-image" style="background-image: url('/img/wallpaper.jpg'); border: 0; height: 100%;background-size: cover; border:0;">
        <div class="py-5" style=" background-color: rgba(251, 192, 147, 0.4);">
            <img class="position-sticky top-50 start-50 translate-middle" width="40%" src="/img/Capture.PNG">
            <form class=" justify-content-center d-flex h-25 py-2" action='/search=' method="get" onsubmit="this.action += this.querySelector('#query').value;">
            <input class="form-control me-2 w-50" type="search" placeholder="Search" aria-label="Search" id="query">
            <button class="btn btn-link position-absolute" style="left:72%">
                <i class="bi bi-search text-dark"></i>
            </button>
            </form>
        </div> 
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
