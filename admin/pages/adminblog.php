<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 20.07.17
 * Time: 19:11
 */
?>
<div class="container" style="padding: 30px;     overflow: hidden;">
<h3>Добавить новую статью в блог</h3>
<form method="POST" enctype="multipart/form-data" style="margin-bottom: 20px">
    <p style="margin-top: 20px;">Введите название статьи</p><input style="width: 100%" type="text" name="title"><br>
    <p style="margin-top: 20px;">Введите короткое описание</p><textarea style="width: 100%"  name="short_descr"></textarea><br>
    <p style="margin-top: 20px;">Введите дату создания статьи</p><input style="" type="date" name="date"><br>
    <p style="margin-top: 20px;" style="margin-top: 20px;">Выберите картинку</p><input type="file" name="fotoblog"><br>
    <p>Введите полное описание статьи</p><textarea id="blog" name="full_descr"></textarea>
    <script>
        CKEDITOR.replace('blog');
    </script>
    <input style="margin-top: 20px;" type="submit" value="Сохранить" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=newblogitem">
</form>
<h3>Перечень имеющихся статей</h3>

<!-- ------------------------Вывод статей блога-------------------------------------------------------------------- -->
<?php foreach ($blog as $key => $item) { ?>
    <?php $title = mb_substr($item['title'], 0, 60, 'UTF-8') . '...';
    $shortDescr = mb_substr($item['short_descr'], 0, 245, 'UTF-8') . '...';
    ?>
    <div class="col-md-4 col-sm-6">
        <div class="kode_blog_medium medium_2">
            <figure>
                <img src="/images/blog/<?= $item['img_link'] ?>" alt="">
            </figure>
            <div class="kode_blog_grid_content content_2">
                <h6><?= $item['created_at'] ?></h6>
                <h4 id="ppp" class="blog-title"><?= $title ?></h4>
                <p><?= $shortDescr ?></p>
                <a class="kode_readmore" data-toggle="modal"
                   data-target="#n<?= $item['id'] ?>" href="">Редактировать</a><br>
                <!-- Тут кнопка редактирования ----------------->
                <a class="kode_readmore" data-toggle="modal"
                   data-target="#v<?= $item['id'] ?>" href="">Удалить</a>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <!-- ---------------------------------------МОДАЛЬНОЕ ОКНО ДЛЯ БЛОГА--------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <div class="modal fade" id="n<?= $item['id'] ?>" role="dialog">
        <div class="modal-dialog" style="width: 1200px">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">&times;
                    </button>
                    <h4 class="modal-title">Изменение данных о статье</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-sm-5">
                                    <div style="width:230px; height:150px; overflow: hidden;">
                                        <img src="/images/blog/<?= $item['img_link'] ?>"
                                             style="width: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group" style="margin-left: 50px;">

                                        <p style="font-weight: 600; font-size: 12px; ">Изменить
                                            заглавное фото</p>
                                        <input type="file" name="foto">
                                        Изменить дату публикации<br>
                                        <input type="date" name="date">
                                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                        <input type="hidden" name="date_main" value="<?= $item['created_at'] ?>">
                                        <input type="hidden" name="fotomain" value="<?= $item['img_link'] ?>">
                                        <p style="font-weight: 600; font-size: 12px; margin-top: 20px;">Изменить
                                            название
                                            статьи</p>
                                        <div class="form-group">
                                                        <textarea type="text" name="title" rows="3"
                                                                  class="form-control" style="margin-left: 16px;     min-width: 100px;
    max-width: 400px !important; width: 90%; height: 50px"
                                                                  value=""><?= $item['title'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="margin-left: 0; margin-right: 0px;">
                                    <p style="font-weight: 600; font-size: 12px; margin-top: 0px; margin-left: 0px;">
                                        Изменить короткое описание</p>
                                    <textarea type="text" name="short_descr" rows="20"
                                              class="form-control"
                                              style="max-height: 121px!important; width: 80%;"
                                              value=""><?= $item['short_descr'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <textarea id="test<?= $item['id'] ?>"
                                  name="full_descr"><?= $item['full_descr'] ?></textarea>
                        <script>
                            CKEDITOR.replace('test<?= $item['id']?>');
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
    <!--------------------------->
    <!--модальное окно удаления-->
    <!--------------------------->
    <div class="modal fade" id="v<?= $item['id'] ?>" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" style="width: 500px; height: 250px; margin: 0 auto;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Внимание!</b></h4>
                </div>
                <div class="modal-body">
                    <p>Вы точно уверены, что хотите удалить этот блок?</p>
                    <p>Данные возврату не подлежат </p>
                </div>
                <div class="modal-footer">

                    <a href="<?= $_SERVER['PHP_SELF'] ?>?page=deletearticle&id=<?= $item['id']?>">
                        <input type="button" class="btn btn-danger bt_del" value="Удалить">
                    </a>
                    <input type="button" class="btn btn-default bt_del" data-dismiss="modal"
                           value="Закрыть">
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------->
    <!--модальное окно удаления end -->
    <!-------------------------------->
<?php } ?>

<!-- ------------------------конец вывода статей блога------------------------------------------------------------- -->

</div>