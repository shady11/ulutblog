<?php

include('config.php');
include('header.php');
include('top_header.php');

?>
<section class="clearfix">

    <ul class="social">
        <li>
            <a href="#" title="Facebook" data-toggle="tooltip" data-placement="left">
                <i class="fa fa-facebook"></i>
            </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#" title="Twitter" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-twitter"></i>
            </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a rel="tooltip" href="#" title="Github" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-github"></i>
            </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="mailto:ulutsoft@gmail.com" title="Mail" data-toggle="tooltip" data-placement="right">
                <i class="fa fa-envelope"></i>
            </a>
        </li>
    </ul>

    <article class="post">

        <div class="thumb">
            <a href="#">
                <div class="placeholder" data-large="img/image.jpg">
                    <img src="img/image_small.jpg" class="img-small">
                    <div></div>
                </div>
            </a>
        </div>

        <div class="media">
            <div class="media-body">
                <h2 class="title">
                    <a href="#">Challenge - Recreating Clear with Pure JavaScript</a>
                </h2>
                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dolores eos in ipsum modi nostrum officia recusandae sapiente vero voluptates?</p>
                <a href="#" class="more">Кененирээк...</a>
            </div>
            <div class="media-right">
                <div class="author-thumb">
                    <a href="#">
                        <img src="img/authors/1.jpg" alt=""/>
                    </a>
                </div>
                <aside>
                    <div class="author-name">
                        <a href="#">
                            Stradivarus
                        </a>
                    </div>

                    <div class="date">
                        <i class="fa fa-clock-o"></i>
                        Mar 1st, 2016
                    </div>

                    <div class="tags">
                        <i class="fa fa-tags"></i>
                        <a href="#">javascript</a>, <a href="#">challenge</a>
                    </div>
                </aside>
            </div>
        </div>
    </article>

    <article class="post post-red">

        <div class="thumb">
            <a href="#">
                <div class="placeholder" data-large="img/image.jpg">
                    <img src="img/image_small.jpg" class="img-small">
                    <div></div>
                </div>
            </a>
        </div>

        <div class="media">
            <div class="media-body">
                <h2 class="title">
                    <a href="#">Challenge - Recreating Clear with Pure JavaScript Challenge - Recreating Clear with Pure JavaScript</a>
                </h2>
                <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dolores eos in ipsum modi nostrum officia recusandae sapiente vero voluptates?</p>
                <a href="#" class="more">Кененирээк...</a>
            </div>
            <div class="media-right">
                <div class="author-thumb">
                    <a href="#">
                        <img src="img/authors/1.jpg" alt=""/>
                    </a>
                </div>
                <aside>
                    <div class="author-name">
                        <a href="#">
                            Stradivarus
                        </a>
                    </div>

                    <div class="date">
                        <i class="fa fa-clock-o"></i>
                        Mar 1st, 2016
                    </div>

                    <div class="tags">
                        <i class="fa fa-tags"></i>
                        <a href="#">javascript</a>, <a href="#">challenge</a>
                    </div>
                </aside>
            </div>
        </div>
    </article>
</section>

<?php include('footer.php'); ?>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script>
    window.onload = function() {

        var placeholders = document.querySelectorAll('.placeholder');

        [].forEach.call(placeholders, function (placeholder) {

            var small = placeholder.querySelector('.img-small');

            // 1: load small image and show it
            var img = new Image();
            img.src = small.src;
            img.onload = function () {
                small.classList.add('loaded');
            };


            // 2: load large image
            var imgLarge = new Image();
            imgLarge.src = placeholder.dataset.large;
            imgLarge.onload = function () {
                imgLarge.classList.add('loaded');
                imgLarge.classList.add('cd-main');
            };
            placeholder.appendChild(imgLarge);
        });
    }
</script>

</body>
</html>