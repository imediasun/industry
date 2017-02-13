
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
            <?
            dump($goods['akcionniy']);?>
            <?
            foreach($goods['akcionniy'] as $key=>$val){
                echo "<pre>";
                print_r($val['original']);echo "</pre>";
            }
            ?>
                <div class="row">
                <div class="col-md-1" style="height:auto;"><h3 class="vertical_text mar-hor">Акционный товар</h3></div>


                    <?
                    foreach($goods['akcionniy'] as $key=>$val){


                        ?>
                        <div class="col-md-2">
                            <div class="panel">
                                <div class="panel-body np">

                                    <div class="col-md-12 col-sm-12 pad-no">
                                        <h5 class=""><?=$val['original']['name']?></h5>
                                        <img style="width:95%;margin:0 auto;" src="<?=$val['original']['photo']?>">

                                        <p class="mar-hor"><?='Артікул '.$val['original']['articul']?></p>
                                        <img style="width:26px;display:inline-block;float:left;" src="/img/cat_icon.png">
                                        <h5 style="display:inline-block;float:left;" class=""><?

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







                     <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body np">

                              <div class="col-md-12 col-sm-12 pad-no">
                                    <h3 class="mar-hor">Statistical</h3>
                                    <p class="mar-hor">Status : live</p>
                                    <!--================================-->
  


                               </div>

                            </div>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body np">

                              <div class="col-md-12 col-sm-12 pad-no">
                                    <h3 class="mar-hor">Statistical</h3>
                                    <p class="mar-hor">Status : live</p>
                                    <!--================================-->
  


                               </div>

                            </div>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body np">

                              <div class="col-md-12 col-sm-12 pad-no">
                                    <h3 class="mar-hor">Statistical</h3>
                                    <p class="mar-hor">Status : live</p>
                                    <!--================================-->
  


                               </div>

                            </div>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body np">

                              <div class="col-md-12 col-sm-12 pad-no">
                                    <h3 class="mar-hor">Statistical</h3>
                                    <p class="mar-hor">Status : live</p>
                                    <!--================================-->
  


                               </div>

                            </div>
                        </div>
                    </div>


                  
                </div>
            </div>



</div>