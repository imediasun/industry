


                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-control">
                                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                    <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                </div>
                                <h3 class="panel-title">Данні покупця</h3>
                            </div>

                            <!--Block Styled Form -->
                            <!--===================================================-->
                            <?
                            if($user_status==2) {
                                ?>

                                <div class="panel">

                                    <!--Panel heading-->
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#demo-tabs-box-1" data-toggle="tab"><i
                                                            class="fa fa-home"></i>Особисті данні</a></li>
                                                <li><a href="#demo-tabs-box-2" data-toggle="tab"><i
                                                            class="fa fa-user"></i>Юридична особа</a></li>
                                            </ul>
                                        </div>
                                        <h3 class="panel-title">Типи користувача</h3>
                                    </div>
                                    <form>
                                    <!--Panel body-->
                                    <div class="panel-body" style="height:700px">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="demo-tabs-box-1">


                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Тип користувача</label>

                                                                <select style="width:250px;height:30px" class="stl">

                                                                    <?php

                                                                    foreach ($customers_statuses as $status) {


                                                                        if ($status['original']['id'] == $user_status) {
                                                                            ?>
                                                                            <option selected
                                                                                    value=" <?php echo $status['original']['id'] ?>"><?php echo $status['original']['name'] ?></option>
                                                                            <?
                                                                        } else {
                                                                            ?>
                                                                            <option
                                                                                value="<?php echo $status['original']['id'] ?>"> <? echo $status['original']['name'] ?></option>
                                                                            <?
                                                                        }
                                                                    }


                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">ПІБ Користувача</label>
                                                                <input class="form-control" type="text" value="<?php echo $user_information[0]['original']['name']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input class="form-control" type="email" value="<?php echo $user_information[0]['original']['email']?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Новий пароль</label>
                                                                <input class="form-control" type="password" value="">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Пароль
                                                                    підтвердження</label>
                                                                <input class="form-control" type="password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Телефлон мобільний</label>
                                                                <input class="form-control" type="text" value="<?php echo $user_information[0]['original']['mobile']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Додатковий номер</label>
                                                                <input class="form-control" type="text" value="<?php echo $user_information[0]['original']['add_phone']?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label class="control-label">Додаткова інформація</label>
                                                            <textarea placeholder="Message" rows="13"
                                                                      class="form-control"><?php echo $user_information[0]['original']['information']?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                        </div>
                                                        <div class="col-sm-6">
                                                        </div>
                                                    </div>



                                                <!--===================================================-->
                                                <!--End Block Styled Form -->


                                            </div>
                                            <div class="tab-pane fade" id="demo-tabs-box-2">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Назва юридичнох особи</label>
                                                        <input class="form-control" type="text" value="">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Місто</label>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Вулиця</label>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Розрахунковий рахунок</label>
                                                        <input class="form-control" type="email" value="<?php echo $user_information[0]['original']['email']?>">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Банк</label>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="control-label">МФО</label>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="control-label">ЕДРПОУ</label>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label class="control-label">КОД</label>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Будинок</label>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Офіс</label>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Індекс</label>
                                                            <input class="form-control" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                </div>
                                                <div class="col-sm-6">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                </div>
                                                <div class="col-sm-6">
                                                </div>
                                            </div>

                                            <div class="panel-footer text-right">
                                                <button class="btn btn-info" type="submit">Submit</button>
                                            </div>


                                        </div>
                                        </div>
                                    </div>
                                    </form>

                                </div>

                                <?
                            }
                            else{
                                ?>
                                <div class="panel">

                                    <!--Panel heading-->
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#demo-tabs-box-1" data-toggle="tab"><i
                                                            class="fa fa-home"></i> Приватна особа</a></li>

                                            </ul>
                                        </div>
                                        <h3 class="panel-title">Тип користувача</h3>
                                    </div>

                                    <!--Panel body-->
                                    <div class="panel-body" style="height:700px">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="demo-tabs-box-1">
                                                <form>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Тип користувача</label>

                                                                <select style="width:250px;height:30px" class="stl">

                                                                    <?php

                                                                    foreach ($customers_statuses as $status) {


                                                                        if ($status['original']['id'] == $user_status) {
                                                                            ?>
                                                                            <option selected
                                                                                    value=" <?php echo $status['original']['id'] ?>"><?php echo $status['original']['name'] ?></option>
                                                                            <?
                                                                        } else {
                                                                            ?>
                                                                            <option
                                                                                value="<?php echo $status['original']['id'] ?>"> <? echo $status['original']['name'] ?></option>
                                                                            <?
                                                                        }
                                                                    }


                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">

                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">ПІБ Користувача</label>
                                                                <input class="form-control" type="text" value="<?php echo $user_information[0]['original']['name']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input class="form-control" type="email" value="<?php echo $user_information[0]['original']['email']?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Новий Пароль</label>
                                                                <input class="form-control" type="password">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Пароль
                                                                    підтвердження</label>
                                                                <input class="form-control" type="password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Телефлон мобільний</label>
                                                                <input class="form-control" type="text" value="<?php echo $user_information[0]['original']['mobile']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Додатковий номер</label>
                                                                <input class="form-control" type="text" value="<?php echo $user_information[0]['original']['add_phone']?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label class="control-label">Додаткова інформація</label>
                                                            <textarea placeholder="Message" rows="13"
                                                                      class="form-control"><?php echo $user_information[0]['original']['information']?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                        </div>
                                                        <div class="col-sm-6">
                                                        </div>
                                                    </div>

                                                    <div class="panel-footer text-right">
                                                        <button class="btn btn-info" type="submit">Submit</button>
                                                    </div>
                                                </form>
                                                <!--===================================================-->
                                                <!--End Block Styled Form -->


                                            </div>

                                        </div>
                                    </div>
                                </div>



                                <?

                            }
                        ?>




                        </div>

                        <div style="height:100px;" class="panel"></div>





                        <!--===================================================-->
                        <!--End network line chart-->

                    </div>



                </div>
            </div>



</div>

