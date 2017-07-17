<div class="kode_banner">
    <div class="container">
        <div class="kode_banner_titile">
            <h2>Work Area 02</h2>
        </div>
    </div>
</div>
<!--// KODE BANNER END//-->

<!------------------------------>
<!--// KODE BLOG GRID START //-->
<!------------------------------>
<div class="kode_blog_grid">
    <div class="container">
        <div class="row">
            <!-------------------------------->
            <!--Вывод отдельной статьи блога-->
            <!-------------------------------->
            <?php foreach ($blog as $key=>$item){?>
                <?php $title = mb_substr($item['title'], 0, 60, 'UTF-8').'...';
                $shortDescr =mb_substr($item['short_descr'], 0, 245, 'UTF-8').'...';
                ?>
            <div class="col-md-4 col-sm-6">
                <div class="kode_blog_medium medium_2">
                    <figure>
                        <img src="images/blog/<?= $item['img_link']?>" alt="">
<!--                        <figcaption>-->
<!--                            <a href="practice-area-01.html#"><i class="fa fa-plus"></i></a>-->
<!--                            <a data-rel="prettyPhoto" href="images/practice.jpg"><i class="fa fa-expand"></i></a>-->
<!--                        </figcaption>-->
                    </figure>
                    <div class="kode_blog_grid_content content_2">
                        <h6><?= $item['created_at']?></h6>
                        <h4 class="blog-title"><?= $title?></h4>
                        <p><?= $shortDescr?></p>
                        <a class="kode_readmore" href="<?= $_SERVER['PHP_SELF']?>?page=article&id=<?=$item['id']?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php }?>
            <!-------------------------------->
            <!--Вывод отдельной статьи блога-->
            <!-------------------------------->
        </div>
    </div>
</div>
<!---------------------------->
<!--// KODE BLOG GRID END //-->
<!---------------------------->

<!------------------------>
<!--// Блок пагинации //-->
<!------------------------>
<div class="kode_blog_pagination">
    <div class="container">
        <div class="kode_pagination_list">
            <a class="pagi-left" href="practice-area-01.html#"><i class="fa fa-arrow-left"></i></a>
            <a href="practice-area-01.html#">1</a>
            <a href="practice-area-01.html#">2</a>
            <a href="practice-area-01.html#">3</a>
            <a href="practice-area-01.html#">4</a>
            <a class="pagi-right" href="practice-area-01.html#"><i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</div>
<!------------------------>
<!--// Блок пагинации //-->
<!------------------------>