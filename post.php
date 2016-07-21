<?php

include('config.php');
include('meta.php');
include('header.php');
include('top_header.php');

?>
<section>

    <article class="post article">

        <div class="thumb">
            <a href="#">
                <div class="placeholder" data-large="img/image.jpg">
                    <img src="img/image_small.jpg" class="img-small">
                    <div class="placeholder-bottom"></div>
                </div>
            </a>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <div class="inner">
                    <h3 class="panel-title title">Challenge - Recreating Clear with Pure JavaScript Challenge - Recreating Clear with Pure JavaScript</h3>
                    <div class="extra clearfix">
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

                            <div class="author-meta">
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    Mar 1st, 2016
                                </div>

                                <div class="tags">
                                    <i class="fa fa-tags"></i>
                                    <a href="#">javascript</a>, <a href="#">challenge</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dolores eos in ipsum modi nostrum officia recusandae sapiente vero voluptates?
                    </p>
                    <p>
                        Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit. Delectus, dolores eos in ipsum modi nostrum officia recusandae sapiente vero voluptates?
                    </p>

                        <pre>
                           <code class="language-css">
                               .post .more:hover,
                               .post .more:focus,
                               .post .more:active {
                                    color: #FF8392;
                               }
                           </code>
                        </pre>
                    <p>HTML</p>
                        <pre>
                           <code class="language-js">
                               .post .more:hover,asdfkalsd mfkans djf najksd fnajksdn fjkasdn fjkasnd fjkansdj
                               .post .more:focus,
                               .post .more:active {
                                    color: #FF8392;
                               }
                           </code>
                        </pre>

                </div>
            </div>
        </div>


    </article>

    <div class="share-buttons">
        <button class="goodshare btn-fb" data-type="fb">
            <i class="fa fa-facebook"></i>
            <span data-counter="fb"></span>
        </button>
        <button class="goodshare btn-vk" data-type="vk">
            <i class="fa fa-vk"></i>
            <span data-counter="vk"></span>
        </button>
        <button class="goodshare btn-ok" data-type="ok">
            <i class="fa fa-odnoklassniki"></i>
            <span data-counter="ok"></span>
        </button>
        <button class="goodshare btn-gp" data-type="gp">
            <i class="fa fa-google-plus"></i>
            <span data-counter="gp"></span>
        </button>
        <button class="goodshare btn-tw" data-type="tw">
            <i class="fa fa-twitter"></i>
            <span data-counter="tw"></span>
        </button>
    </div>


</section>

<?php include('footer.php'); ?>

<script src="js/prism.js"></script>
<script src="js/goodshare.js"></script>
<script>
    $(document).ready(function(){
        $('.goodshare').each(function(){
            var span = $(this).children('span');
            var counter = span.text();
            if((counter==0) || (counter=='')){
                $(this).addClass('empty');
            }
        });
    });
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
                imgLarge.dataset.action = 'zoom';
            };
            placeholder.appendChild(imgLarge);
        });
    }
</script>

</body>
</html>