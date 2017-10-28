<div class="kode_team_detail_wrap">
    <div class="container">
        <div class="kode_team_detail_des">
            <div class="row">
                <div class="col-md-6">
                    <div class="kode_team_detail_fig">
                        <figure>
                            <img src="images/blog/<?= $blogItem[0]['img_link']?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kode_team_detail_email">
                        <h2><?= $blogItem[0]['title']?></h2>
                        <span><?= $blogItem[0]['created_at']?></span>
                        <ul class="kode_addres_list">
                            <li><?= $blogItem[0]['short_descr']?></li>
<!--                            <li><span>Address</span><a href="our-team-detail.html">9th Avenue parklane South wales London, Uk</a></li>-->
<!--                            <li><span>Phone</span><a href="our-team-detail.html">(+088) 11744548</a></li>-->
<!--                            <li><span>Email</span><a href="our-team-detail.html">micheljorden@noreply.com</a></li>-->
<!--                            <li><span>D.O.B</span><a href="our-team-detail.html">25 December 1990</a></li>-->
<!--                            <li><span>Gender</span><a href="our-team-detail.html">Male</a></li>-->
                        </ul>
                        <ul class="kode_addres_icon">
                            <li><a href="https://www.facebook.com/stoleshka.com.ua"  data-toggle="tooltip" data-placement="bottom" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/stoleshka.com.ua/" data-toggle="tooltip" data-placement="bottom" title="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.olx.ua/i2/account/?ref%5B0%5D%5Baction%5D=myaccount&ref%5B0%5D%5Bmethod%5D=index"  data-toggle="tooltip" data-placement="bottom" title="olx"><i class="fa fa-olx">olx</i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCr0EEJjROSVMuogSxvLU-_A?view_as=subscriber"  data-toggle="tooltip" data-placement="bottom" title="youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// KODE TEAM DETAIL WRAP END //-->

<!--// KODE BIOGRAPHY WRAP START //-->
<div class="kode_biography_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kode_biography_content">
                    <h4>Основная новость</h4>
                    <p><?= $blogItem[0]['full_descr']?></p>
                </div>
            </div>
        </div>
    </div>
</div>
