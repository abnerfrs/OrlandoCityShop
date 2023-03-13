<?php include_once("header.php"); ?>

<section>

    <div id="call-to-action">

        <div class="row auto-align">
            <h2>Videos</h2>
            <hr>
        </div>

        <div class="row">

            <video src="lib/mp4/highlights.mp4" muted controls poster="assets/Orlando_City_Foundation_2015.jpg"></video>

        </div>




    </div>

    <div id="news" class="container">

        <div class="row thumbnails owl-carousel owl-theme">
            <div class="item">
                <div class="item-inner" data-video="highlights">
                    <img src="assets/highlights.jpg" alt="">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="assets/Orlando_City_Foundation_2015.jpg" alt="">
                    <h3>Orlando City Foundation</h3>
                </div>
            </div>
            <div class="item">
                <div class="item-inner" data-video="highlights">
                    <img src="assets/highlights.jpg" alt="">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="assets/Orlando_City_Foundation_2015.jpg" alt="">
                    <h3>Orlando City Foundation</h3>
                </div>
            </div>
            <div class="item">
                <div class="item-inner" data-video="highlights">
                    <img src="assets/highlights.jpg" alt="">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="assets/Orlando_City_Foundation_2015.jpg" alt="">
                    <h3>Orlando City Foundation</h3>
                </div>
            </div>
            <div class="item">
                <div class="item-inner" data-video="highlights">
                    <img src="assets/highlights.jpg" alt="">
                    <h3>Highlights</h3>
                </div>
            </div>
            <div class="item" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="assets/Orlando_City_Foundation_2015.jpg" alt="">
                    <h3>Orlando City Foundation</h3>
                </div>
            </div>
        </div>
    </div>



</section>


<?php include_once("footer.php"); ?>

<script>
    $(".thumbnails").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["Anterior", "Próximo"],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
</script>