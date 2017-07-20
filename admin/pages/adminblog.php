<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 20.07.17
 * Time: 19:11
 */
?>
<h3>Добавить новую статью в блог</h3>
<form method="POST" enctype="multipart/form-data">
    Введите название статьи<input type="text" name="title"><br>
    Введите короткое описание<input type="text" name="short_descr"><br>
    Введите дату создания статьи<input type="date" name="date"><br>
    Выберите картинку<input type="file" name="fotoblog"><br>
    Введите полное описание статьи<textarea id="blog" name="full_descr"></textarea>
    <script>
        CKEDITOR.replace('blog');
    </script>
    <input type="submit" value="Сохранить" formaction="<?= $_SERVER['PHP_SELF']?>?page=newblogitem">
</form>
<h3>Перечень имеющихся статей</h3>
<!-- ------------------------Вывод статей блога-------------------------------------------------------------------- -->
<?php foreach ($blog as $key=>$item){?>
    <?php $title = mb_substr($item['title'], 0, 60, 'UTF-8').'...';
    $shortDescr =mb_substr($item['short_descr'], 0, 245, 'UTF-8').'...';
    ?>
    <div class="col-md-4 col-sm-6">
        <div class="kode_blog_medium medium_2">
            <figure>
                <img src="/images/blog/<?= $item['img_link']?>" alt="">
            </figure>
            <div class="kode_blog_grid_content content_2">
                <h6><?= $item['created_at']?></h6>
                <h4 id="ppp" class="blog-title"><?= $title?></h4>
                <p><?= $shortDescr?></p>
                <a class="kode_readmore" href="<?= $_SERVER['PHP_SELF']?>?page=changearticle&id=<?=$item['id']?>">Редактировать</a><br>
                <a class="kode_readmore" href="<?= $_SERVER['PHP_SELF']?>?page=deletearticle&id=<?=$item['id']?>">Удалить</a>
            </div>
        </div>
    </div>
<?php }?>
<!-- ------------------------конец вывода статей блога------------------------------------------------------------- -->