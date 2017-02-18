
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
                <h3><i class="fa fa-home"></i> Головна сторінка </h3>
                <div style="width:600px;top:-30px;margin:0 auto;" class="input-group mar-btm">
                                            <input placeholder="Пошук" class="form-control" type="text">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-labeled fa fa-search" type="button">Пошук</button>
                                            </span>
                </div>
                <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Головна </a> </li>
                        <li class="active"> Головна сторінка </li>
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
                    $i=0;
                    foreach($goods['akcionniy'] as $key=>$val){


                        if($i==0){
                        ?>
                        <div style="margin-left:-40px;" class="col-md-2">
                        <?
                        }
                        else{
                        ?> 
                         <div style="margin-left:-10px;" class="col-md-2">          
                        <?
                        }

                        ?>    <div class="panel">
                                <div class="panel-body np">

                                    <div class="col-md-12 col-sm-12 pad-no">
                                        <h5 class=""><?=$val['original']['name']?></h5>
                                        <img style="width:95%;margin:0 auto;" src="<?=$val['original']['photo']?>">

                                        <p style="position:relative;top:10px;" class="articul mar-hor"><?='Артикул '.$val['original']['articul']?></p>
                                        
                                        <h5 style="display:block" class=""><?

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
                        $i++;
                    }
                    ?>
                    


                  
                </div>
                <div class="row">
                    <div class="col-md-1" style="height:auto;margin-left:-40px"><h3 class="vertical_text mar-hor">Оптовий товар</h3></div>


                    <?
                    $z=0;
                    foreach($goods['optoviy'] as $key=>$val){
                          if($z==0){
                        ?>
                        <div style="margin-left:-40px;" class="col-md-2">
                        <?
                        }
                        else{
                        ?> 
                         <div style="margin-left:-10px;" class="col-md-2">          
                        <?
                        }

                        ?>
                        
                            <div class="panel">
                                <div class="panel-body np">

                                    <div class="col-md-12 col-sm-12 pad-no">
                                        <h5 class=""><?=$val['original']['name']?></h5>
                                        <img style="width:95%;margin:0 auto;" src="<?=$val['original']['photo']?>">

                                        <p style="position:relative;top:10px;" class="articul mar-hor"><?='Артикул '.$val['original']['articul']?></p>
                                        
                                        <h5 style="" class=""><?

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
                    $z++;
                    }
                    ?>




                </div>
                <div class="row">
                    <div class="col-md-1" style="height:auto;margin-left:-40px"><h3 class="vertical_text mar-hor">Роздрібний товар</h3></div>


                    <?
                    $i=0;
                    foreach($goods['rozdribniy'] as $key=>$val){
                          if($i==0){
                        ?>
                        <div style="margin-left:-40px;" class="col-md-2">
                        <?
                        }
                        else{
                        ?> 
                         <div style="margin-left:-10px;" class="col-md-2">          
                        <?
                        }

                        ?>
                        
                            <div class="panel">
                                <div class="panel-body np">

                                    <div class="col-md-12 col-sm-12 pad-no">
                                        <h5 class=""><?=$val['original']['name']?></h5>
                                        <img style="width:95%;margin:0 auto;" src="<?=$val['original']['photo']?>">

                                        <p style="position:relative;top:10px;" class="mar-hor"><?='Артикул '.$val['original']['articul']?></p>
                                        
                                        <h5 style="" class=""><?

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
                        $i++;
                    }
                    ?>




                </div>
            </div>



</div>