
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
                <h3><i class="fa fa-home"></i> Dashboard </h3>
                <div style="width:600px;top:-30px;margin:0 auto;" class="input-group mar-btm">
                                            <input placeholder="Пошук" class="form-control" type="text">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-labeled fa fa-search" type="button">Пошук</button>
                                            </span>
                </div>
                <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> Dashboard </li>
                    </ol>
                </div>
            </header>
    </section>        

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                <div class="row">
                <div class="col-md-1" style="height:auto;margin-left:-40px"><h3 class="vertical_text mar-hor">Акційний товар</h3></div>


                    <?
                    foreach($goods['akcionniy'] as $key=>$val){


                        ?>
                        <div class="col-md-2">
                            <div class="panel">
                                <div class="panel-body np">

                                    <div class="col-md-12 col-sm-12 pad-no">
                                        <h5 class=""><?=$val['original']['name']?></h5>
                                        <img style="width:95%;margin:0 auto;" src="<?=$val['original']['photo']?>">

                                        <p class="articul mar-hor"><?='Артікул '.$val['original']['articul']?></p>
                                        <img style="width:26px;display:inline-block;float:left;" src="/img/cat_icon.png">
                                        <h5 style="float:left;" class=""><?

                                        $cetegory=DB::table('categories')
                                            ->where('id', $val['original']['category'])
                                            ->get();    
                                         echo $cetegory[0]->name;   ?></h5>
                                        <p style="display:inline-block" class="mar-hor">ОПТ</p> <h5 style="display:inline-block" class="mar-hor">42млн грн.</h5> <i style="display:inline-block;color:yellow;float:right;"class="fa fa-star fa-2x" aria-hidden="true"></i>

                                        <!--================================-->



                                    </div>

                                </div>
                            </div>
                        </div>



                        <?
                    }
                    ?>
                    


                  
                </div>
                <div class="row">
                    <div class="col-md-1" style="height:auto;"><h3 class="vertical_text mar-hor">Оптовий товар</h3></div>


                    <?
                    foreach($goods['optoviy'] as $key=>$val){


                        ?>
                        <div class="col-md-2">
                            <div class="panel">
                                <div class="panel-body np">

                                    <div class="col-md-12 col-sm-12 pad-no">
                                        <h5 class=""><?=$val['original']['name']?></h5>
                                        <img style="width:95%;margin:0 auto;" src="<?=$val['original']['photo']?>">

                                        <p class="articul mar-hor"><?='Артікул '.$val['original']['articul']?></p>
                                        <img style="width:26px;display:inline-block;float:left;" src="/img/cat_icon.png">
                                        <h5 style="float:left;" class=""><?

                                            $cetegory=DB::table('categories')
                                                ->where('id', $val['original']['category'])
                                                ->get();
                                            echo $cetegory[0]->name;   ?></h5>
                                        <p style="display:inline-block" class="mar-hor">ОПТ</p> <h5 style="display:inline-block" class="mar-hor">42млн грн.</h5> <i style="display:inline-block;color:yellow;float:right;"class="fa fa-star fa-2x" aria-hidden="true"></i>

                                        <!--================================-->



                                    </div>

                                </div>
                            </div>
                        </div>



                        <?
                    }
                    ?>




                </div>
                <div class="row">
                    <div class="col-md-1" style="height:auto;"><h3 class="vertical_text mar-hor">Роздрібний товар</h3></div>


                    <?
                    foreach($goods['rozdribniy'] as $key=>$val){


                        ?>
                        <div class="col-md-2">
                            <div class="panel">
                                <div class="panel-body np">

                                    <div class="col-md-12 col-sm-12 pad-no">
                                        <h5 class=""><?=$val['original']['name']?></h5>
                                        <img style="width:95%;margin:0 auto;" src="<?=$val['original']['photo']?>">

                                        <p class="mar-hor"><?='Артікул '.$val['original']['articul']?></p>
                                        <img style="width:26px;display:inline-block;float:left;" src="/img/cat_icon.png">
                                        <h5 style="float:left;" class=""><?

                                            $cetegory=DB::table('categories')
                                                ->where('id', $val['original']['category'])
                                                ->get();
                                            echo $cetegory[0]->name;   ?></h5>
                                        <p style="display:inline-block" class="mar-hor">ОПТ</p> <h5 style="display:inline-block" class="mar-hor">42млн грн.</h5> <i style="display:inline-block;color:yellow;float:right;"class="fa fa-star fa-2x" aria-hidden="true"></i>

                                        <!--================================-->



                                    </div>

                                </div>
                            </div>
                        </div>



                        <?
                    }
                    ?>




                </div>
            </div>



</div>