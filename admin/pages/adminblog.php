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
    Введите короткое описание<textarea name="short_descr"></textarea><br>
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

                <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                        data-target="#n<?= $item['id'] ?>">
                <a class="kode_readmore" href="">Редактировать</a>
                </button><br>

                <a class="kode_readmore" href="<?= $_SERVER['PHP_SELF']?>?page=deletearticle&id=<?=$item['id']?>">Удалить</a>
            </div>
        </div>
    </div>
<?php }?>
<!-- ------------------------конец вывода статей блога------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------------------------------ -->
<!-- ---------------------------------------МОДАЛЬНОЕ ОКНО ДЛЯ БЛОГА--------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------ -->
<div class="modal fade" id="n<?= $item['id'] ?>" role="dialog">
    <div class="modal-dialog" style="width: 1200px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Изменение данных о статье</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- ТУТ НАДО ПОДРИХТОВАТЬ ИЗОБРАЖЕНИЕ-->
                            <div class="col-sm-5">
                                <div style="width:230px; height:150px; overflow: hidden;">
                                    <img src="../img/blog/<?= $value['link_foto'] ?>"
                                         style="width: 100%;">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group" style="margin-left: 50px;">

                                    <p style="font-weight: 600; font-size: 12px; ">Изменить
                                        заглавное фото блога</p>
                                    <input type="file" name="foto">
                                    <input type="hidden" name="priceID"  value="<?= $value['id'] ?>">
                                    <input type="hidden" name="fotomain" value="<?= $value['link_foto'] ?>">
                                    <p style="font-weight: 600; font-size: 12px; margin-top: 20px;">Изменить название статьи</p>
                                    <div class="form-group">
                                                        <textarea type="text" name="title" rows="3"
                                                                  class="form-control" style="margin-left: 16px;     min-width: 100px;
    max-width: 400px !important; width: 90%; height: 50px"
                                                                  value=""><?= $value['title'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" style="margin-left: 0; margin-right: 0px;">
                                <p style="font-weight: 600; font-size: 12px; margin-top: 0px; margin-left: 0px;">
                                    Изменить короткое описание</p>
                                <textarea type="text" name="short_description" rows="20"
                                          class="form-control"
                                          style="max-height: 121px!important; width: 80%;"
                                          value=""><?= $value['short_description'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <textarea id="test<?= $value['id'] ?>"
                              name="full_description"><?= $value['full_description'] ?></textarea>
                    <script>
                        CKEDITOR.replace('test<?= $value['id']?>');
                    </script>
                    <input type="submit" class="form-horizontal" value="Сохранить"
                           formaction="<?= $_SERVER['PHP_SELF'] ?>?page=saveBlogItemByID">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ------------------------------------------------------------------------------------------------------------ -->
<!-- --------------------------------КОНЕЦ МОДАЛЬНОГО ОКНА ДЛЯ БЛОГА--------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------ -->