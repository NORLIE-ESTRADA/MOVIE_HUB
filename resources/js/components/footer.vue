<template>
    <div class="main-footer">
        <div class="container">
            <div class="container-footer">
                <div class="footer-logo">
                    <img src="/img/logo.PNG" alt="" />
                </div>
                <div class="footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <br />
                        <li><a href="#">Movie</a></li>
                        <br />
                        <li><a href="#">Contact</a></li>
                        <br />
                        <li><a href="#">About</a></li>
                        <br />
                    </ul>
                </div>
                <div class="footer-genre">
                    <h4>Movie/Genre</h4>
                    <div class="container-genre">
                        <ul>
                            <li><a href="#">Action</a></li>
                            <br />
                            <li><a href="#">Drama</a></li>
                            <br />
                            <li><a href="#">Comedy</a></li>
                            <br />
                            <li><a href="#">Science</a></li>
                            <br />
                            <li><a href="#">Horror</a></li>
                            <br />
                            <li><a href="#">Romance</a></li>
                            <br />
                        </ul>
                        <ul>
                            <li><a href="#">Crime</a></li>
                            <br />
                            <li><a href="#">Epic</a></li>
                            <br />
                            <li><a href="#">Fantasy</a></li>
                            <br />
                            <li><a href="#">War</a></li>
                            <br />
                            <li><a href="#">Music</a></li>
                            <br />
                            <li><a href="#">Documentary</a></li>
                            <br />
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>

<style>
a {
    text-decoration: none;
    color: #fff;
}
ul {
    list-style: none;
}
h4 {
    color: #ff001a;
}
.main-footer {
    width: 100%;
    height: 700px;
    background-color: #000;
    z-index: 2;
}
.main-footer .container .container-footer {
    display: grid;
    grid-template-columns: 3fr 2fr 2fr;
    padding: 3rem;
}
.main-footer .container .container-footer .footer-logo img {
    width: 200px;
    display: block;
    justify-content: center;
}
.main-footer .container .container-footer .footer-logo .footer-social {
    display: grid;
    grid-template-columns: 20px 20px 20px 20px 20px;
    justify-content: left;
    margin-left: 3rem;
}
.main-footer .container .container-footer .footer-logo .footer-social a {
    color: #ff001a;
}
.main-footer .container .container-footer .footer-links {
    padding: 1rem;
    color:#ff001a;
}
.main-footer .container .container-footer .footer-links h4 {
    font-size: 1.5rem;
}
.main-footer .container .container-footer .footer-links a {
    color: #fff;
    float: left;
}
.main-footer .container .container-footer .footer-links a:hover {
    color: #ff001a;
}
.main-footer .container .container-footer .footer-genre {
    padding: 1rem;
}
.main-footer .container .container-footer .footer-genre h4 {
    color: #ff001a;
    font-size: 1.5rem;
}
.main-footer .container .container-footer .footer-genre .container-genre {
    display: grid;
    grid-template-columns: 2fr 2fr;
    text-align: center;
}
.main-footer .container .container-footer .footer-genre .container-genre a {
    color: #fff;
    float: left;
}
.main-footer
    .container
    .container-footer
    .footer-genre
    .container-genre
    a:hover {
    color: #ff001a;
}
.main-footer .container .copyright-section {
    background-color: #ff001a;
    padding: 1rem;
    margin-bottom: 2rem;
}
.main-footer .container .copyright-section > p {
    text-align: center;
}
</style>
