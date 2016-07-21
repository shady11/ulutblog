<div class="center-column">
    <h2>Новостная лента</h2>
    <div class="blue-line"></div>


    <?php

    $result = $db ->select("news");

    $max_posts = 3;
    $num_posts = $db ->select_count("news");
    $num_pages = intval(($num_posts -1 )/ $max_posts)+1; ?>

    <?
    if (isset($_GET['page'])){
        $page = $_GET['page'];
        if($page < 1)
            $page = 1;
        elseif ($page > $num_pages)
            $page = $num_pages;
    }else{
        $page = 1;
    } ?>



    <?
    if (isset($_GET['lang'])){
        $lang = $_GET['lang'];
        $data = $db ->select("news","lang='".$lang."'");
    }else{
        $data = $db ->select("news");
    }


    foreach($data as $one){

    $year13 = date("Y",strtotime($one['news_date']));
    $day13 = date("d",strtotime($one['news_date']));
    $month13 = date("m",strtotime($one['news_date']));

    $month1 = "Января";
    $month2 = "Февраля";
    $month3 = "Марта";
    $month4 = "Апреля";
    $month5 = "Мая";
    $month6 = "Июня";
    $month7 = "Июля";
    $month8 = "Августа";
    $month9 = "Сентбяря";
    $month10 = "Октября";
    $month11 = "Ноября";
    $month12 = "Декабря";

    if ($month13 == 1){
        $month = $month1;
    }elseif($month13 == 2){
        $month = $month2;
    }elseif($month13 == 3){
        $month = $month3;
    }elseif($month13 == 4){
        $month = $month4;
    }elseif($month13 == 5){
        $month = $month5;
    }elseif($month13 == 6){
        $month = $month6;
    }elseif($month13 == 7){
        $month = $month7;
    }elseif($month13 == 8){
        $month = $month8;
    }elseif($month13 == 9){
        $month = $month9;
    }elseif($month13 == 10){
        $month = $month10;
    }elseif($month13 == 11){
        $month = $month11;
    }elseif($month13 == 12){
        $month = $month12;
    }

    //printf("<table><tr><td>%s</td></tr>/table>",$ads['name']);
    ?>

    <?
    if(($one['news_id'] > ($page * $max_posts - $max_posts)) && ($one['news_id'] <= $page * $max_posts)){ ?>

    <div class='news-item'>
        <div class='news-item__date'>
            <?=$day13;?> <?=$month;?> <?=$year13;?>
        </div>
                <div class='vews-item__text'>
                    <a href='adverts.php?ads_id=<?=$one['news_id'];?>'><?=$one['news_name'];?></a>
                </div>
                <div class='news-item__icons'>
                    <i class='com'> 34</i>
                </div>
            </div>
        <? }
    } // foreach end ?>


        <div class="banner-content">
            <a href="#"><img src="sources/banner02.png" alt=""></a>
        </div>

        <div class="page-navigations">
            <?
            for($i = 1; $i<=$num_pages; $i++){
                if($_GET['page'] == $i){
                    echo "<a class='active' href='/index.php?page=$i'>".$i."</a>";
                }else{
                    echo "<a href='/index.php?page=$i'>".$i."</a>";
                }


            }
            if (isset($_GET['page'])){
                $page = $_GET['page'];
                if($page < 1)
                    $page = 1;
                elseif ($page > $num_pages)
                    $page = $num_pages;
            }else{
                $page = 1;
            } ?>
        </div>



    </div>
    <div class="right-column">
        <div class="banner-right">
            <a href="#"><img src="sources/banner3.png" alt=""></a>
        </div>

        <div class="banner-right">
            <a href="#"><img src="sources/banner4.png" alt=""></a>
        </div>
    </div>
</div><!-- end center column -->