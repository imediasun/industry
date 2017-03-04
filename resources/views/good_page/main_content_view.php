
<input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <section id="content-container">
            <header class="pageheader">

                <h3><i class="fa fa-home"></i> <?php echo $good[0]['original']['name']?> </h3>
                <div style="width:600px;top:-30px;margin:0 auto;" class="input-group mar-btm">
                                            <input placeholder="Пошук" class="form-control" type="text">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-labeled fa fa-search" type="button">Пошук</button>
                                            </span>
                </div>
                <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> <?php echo $good[0]['original']['name']?> </li>
                    </ol>
                </div>
            </header>
    </section>        

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                <div class="row">
                    <div class="col-md-4">

                        <!--Network Line Chart-->
                        <!--===================================================-->
                        <div class="panel">

                            <!--Chart information-->
                            <div class="panel-body">

                                <div id="example3" class="slider-pro">
                                    <div style="min-height:400px;" class="sp-slides">
                                        <div class="sp-slide">
                                            <img class="sp-image" src="../src/css/images/blank.gif"


                                                 data-src="/photos/<?php echo $good[0]['original']['image_medium']?>"
                                                 data-small="/photos/<?php echo $good[0]['original']['image_small']?>"
                                                 data-medium="/photos/<?php echo $good[0]['original']['image_medium']?>"
                                                 data-large="/photos/<?php echo $good[0]['original']['image_large']?>"
                                                 data-retina="/photos/<?php echo $good[0]['original']['image_large']?>"/>

                                         <!--   <p class="sp-layer sp-white sp-padding"
                                               data-horizontal="50" data-vertical="50"
                                               data-show-transition="left" data-show-delay="400">
                                                Lorem ipsum
                                            </p>

                                            <p class="sp-layer sp-black sp-padding"
                                               data-horizontal="180" data-vertical="50"
                                               data-show-transition="left" data-show-delay="600">
                                                dolor sit amet
                                            </p>

                                            <p class="sp-layer sp-white sp-padding"
                                               data-horizontal="315" data-vertical="50"
                                               data-show-transition="left" data-show-delay="800">
                                                consectetur adipisicing elit.
                                            </p>-->
                                        </div>



                                            <?php foreach ($photos as $photo){
                                                ?>
                                                <div class="sp-slide">
                                                    <img class="sp-image" src="../src/css/images/blank.gif"
                                                         data-src="/photos/<?php echo $photo['original']['image_medium']?>"
                                                         data-small="/photos/<?php echo $photo['original']['image_small']?>"
                                                         data-medium="/photos/<?php echo $photo['original']['image_medium']?>"
                                                         data-large="/photos/<?php echo $photo['original']['image_large']?>"
                                                         data-retina="/photos/<?php echo $photo['original']['image_large']?>"/>
                                                </div>
                                                <?
                                            }?>


                                           <!-- <h3 class="sp-layer sp-black sp-padding"
                                                data-horizontal="40" data-vertical="40"
                                                data-show-transition="left">
                                                Lorem ipsum dolor sit amet
                                            </h3>

                                            <p class="sp-layer sp-white sp-padding"
                                               data-horizontal="40" data-vertical="100"
                                               data-show-transition="left" data-show-delay="200">
                                                consectetur adipisicing elit
                                            </p>

                                            <p class="sp-layer sp-black sp-padding"
                                               data-horizontal="40" data-vertical="160" data-width="350"
                                               data-show-transition="left" data-show-delay="400">
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>-->



                                    </div>

                                    <div style="margin-top:130px" class="sp-thumbnails">
                                        
                                        <img class="sp-thumbnail" src="/photos/<?php echo $good[0]['original']['thumbnail']?>"/>
                                        <?php foreach ($photos as $photo){
                                            ?>
                                            <img class="sp-thumbnail" src="/photos/<?php echo $photo['original']['thumbnail']?>"/>
                                            <?
                                        }?>

                                        
                                    </div>
                                </div>

                            </div>
                            <div style="margin-top:100px;height:70px" class="panel-body"></div>

                        </div>
                        <!--===================================================-->
                        <!--End network line chart-->
                        <div style="height:150px" class="panel">
                            <a class="btn btn-block btn-social btn-pinterest">

                                    <i class="fa fa-youtube" aria-hidden="true"></i>

 Дивитись товар на Youtube
                            </a>
                            <?php
                            
                            foreach($video as $item){



                            $video ='<iframe width="560" height="315" src='.$item['original']['video'].' frameborder="0" allowfullscreen></iframe>';
                            if (preg_match('/[http|https]+:\/\/(?:www\.|)youtube\.com\/watch\?(?:.*)?v=([a-zA-Z0-9_\-]+)/i', $video, $matches) || preg_match('/(?:www\.|)youtube\.com\/embed\/([a-zA-Z0-9_\-]+)/i', $video, $matches)) {
                            $image = 'http://img.youtube.com/vi/'.$matches[1].'/0.jpg';
                            }else{
                            $image = false;
                            }
                            echo "<div style='display:inline-block';position:relative>";
                            echo "<a href='".$item['original']['video']."' ><img style='width:30px;position:absolute;z-index:999' src='/img/youtube-play.png'></a>";
                            echo "<img style='height:100px' src='$image''>";

                            echo "</div>";

                            }
                            ?>
                        </div>
                        <div class="panel">
                            <div class="panel-heading ui-sortable-handle">
                                <div class="panel-control">
                                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                    <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                </div>
                                <h3 class="panel-title">Запитання</h3>
                            </div>
                            <div class="panel-body" style="display: block;">
                                <blockquote>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                                    <small>Someone famous <cite>Source Title</cite></small>
                                </blockquote>
                                <blockquote class="blockquote-reverse">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite>Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <!--Network Line Chart-->
                        <!--===================================================-->
                        <div class="panel">

                            <!--Chart information-->
                            <div style="height:170px" class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <h3 style ="position:relative;display:inline-block"><?php echo $good[0]['original']['name']?></h3><button style ="margin-left:40px;position:relative;display:inline-block" class="btn btn-success btn-icon icon-lg fa fa-star"></button>
                                        <p>марка Hitachi DC 435666</p>

                                    </div>
                                </div>
                                <div style="margin-top:-10px" class="goods_buttons">
                                    <button style="width:35%;height:50px" class="btn btn-primary"><?php echo $good[0]['original']['price']?> грн</button>

                                    <div style="display:inline-block;position:relative;width:20%;height:50px" class="">
                                        <div style="height:50px;position:absolute;top:28px;left:7px">
                                            <form id="cart_btn" method="get" action="<? echo route('add_to_cart',['id'=>$good[0]['original']['id']])?>">
                                            <?echo csrf_field();?>
                                                <input class="inp_count" name="qnt" style="margin-left:-7px;width:80px;" value="1">
                                            </form>
                                            <i style="padding-left:5px;cursor:pointer;position:absolute" class="up_count fa fa-caret-square-o-up" aria-hidden="true"></i>
                                            <i style="padding-left:5px;cursor:pointer;position:absolute;right:-16px" class="bottom_count fa fa-caret-square-o-down" aria-hidden="true"></i>
                                        </div></div>
                                    <button style="position:relative;left:25px;width:35%;height:50px" class="cart_btn btn btn-warning">

                                        придбати <i class="fa  fa-shopping-cart fa-2x"></i></button>

                                    <script>
                                        $('.cart_btn').click(function(){
                                            $('#cart_btn').submit();
                                            
                                        });
                                        $('.up_count').click(function(){

                                           $('.inp_count').val(+($('.inp_count').val())+1);
                                        })

                                        $('.bottom_count').click(function(){
                                            if($('.inp_count').val()>0){
                                                $('.inp_count').val(+($('.inp_count').val())-1);

                                            }


                                        })

                                    </script>
                                </div>

                            </div>

                        </div>
                        <!--===================================================-->
                        <!--End network line chart-->
                        <div style="" class="panel">
                            <div style="" class="panel-body">
                            <div class="row">
                                <div class="col-xs-10">
                                <h3>Особливі умови придбання</h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div style="" class="panel">
                            <div style="" class="panel-body">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <h3>Опис/характеристика товару</h3>
                                        <p><?php echo $good[0]['original']['description']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading ui-sortable-handle">
                                <div class="panel-control">
                                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                    <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                </div>
                                <h3 class="panel-title">Відгуки</h3>
                            </div>
                            <div class="panel-body" style="display: block;">
                                <blockquote>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                                    <small>Someone famous <cite>Source Title</cite></small>
                                </blockquote>
                                <blockquote class="blockquote-reverse">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite>Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div style="margin-left:100px;" class="col-md-3">

                        <!--List Todo-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Рекламный блок</h3>
                            </div>
                            <img style="width:100%" src="/img/2.png">
                            <div class="pad-ver">
                                <h3 class="panel-title">Купуйте Bosch</h3>
                            </div>

                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End todo list-->

                    </div>

                </div>
            </div>



</div>

