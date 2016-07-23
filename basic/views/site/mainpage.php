<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Прокат автомобильных боксов и багажных систем';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-6 text-center">    
        <h1><?= $this->title?></h1>
    </div>
    <div class="col-md-6 text-center">    
        <div class="header_contact">
            <span><i class="fa fa-phone" aria-hidden="true"></i> 424-50-24</span>
            <br>
            <span><i class="fa fa-mobile-phone" aria-hidden="true"></i> +7-910-385-21-44</span>
        </div>
    </div>
</div>

<hr>

<div class="row">
<div class="col-md-12">
    <p class=""> Предлагаем Вам воспользоваться услугой проката автомобильных боксов и багажных систем (поперечин на крышу автомобиля). Предлагаемые нами к прокату автобоксы марки "Satellite" идеально подойдут для дальних путешествий, перевозки грузов, горнолыжного снаряжения и других вещей. Так же осуществляем подбор качественных поперечин, непосредственно, для Вашего автомобиля. Мы не предлагаем к установке дешевые универсальные багажники, так как это может привести к повреждению лакокрасочного покрытия автомобиля и просто небезопасно. Для клиентов, воспользовавшихся услугами аренды, предлагаеся система скидок по выкупу заинтересовавшего оборудования. Всю интересующую Вас информацию Вы можете получить по телефонам: </p>
</div>
</div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Условия аренды</h4>
                </div>
                <div class="modal-body">

                    <ul class="list-group">
                        <li class="list-group-item">Оборудование предоставляется в аренду под залог денежных средств.</li>
                        <li class="list-group-item">Плата за аренду взимается до начала использования оборудования исходя из предполагаемого срока аренды.</li>
                        <li class="list-group-item">Расчет количества дней аренды производится следующим способом: количество календарных дней, которое оборудование находилось у клиента, плюс день установки оборудования. День возврата при этом не учитывается.</li>
                        <li class="list-group-item">При аренде оборудования на срок до 5 дней, стоимость аренды равна сумме аренды за 5 дней.</li>
                        <li class="list-group-item">При первом сеансе аренды взимается залог в размере 5000 рублей. При повторном обращении залоговая стоимость не взимается.</li>
                        <li class="list-group-item">В случае возврата оборудования раньше оговоренной даты, перерасчет стоимости аренды по фактическому количеству дней аренды не производится, за исключением случаев, когда условия досрочного возврата были оговорены отдельно.</li>
                        <li class="list-group-item">Возврат оборудования позже оговоренной даты допускается только при условии согласования изменения даты по телефону или любым другим способом.</li>
                        <li class="list-group-item">В случае возврата оборудования позже оговоренной даты, производится перерасчет стоимости аренды по фактическому количеству дней аренды. Стоимость каждых последующих суток аренды остается неизменной.</li>
                        <li class="list-group-item">При повреждении оборудования, в результате которого не возможна его дальнейшая безопасная эксплуатация, из суммы залога будет удержана стоимость восстановительного ремонта и поврежденных деталей.</li>
                        <li class="list-group-item">В случае повреждения оборудования, в результате которого невозможен восстановительный ремонт или невозврата оборудования, арендатор обязуется оплатить разницу между фактической розничной стоимостью оборудования, указанной в договоре аренды, и суммой залога.</li>
                        <li class="list-group-item">Часы работы проката с 10:00 до 19:00. Прием и выдача оборудования в нерабочие часы производится только по предварительной договоренности.</li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class='alert alert-info'>1. Выберете бокс, который вы хотите забронировать</div>
    <div class="row">

        <div class="col-md-4 ">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-400 color-img img-responsive' src="/images/460grey.JPG" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Satellite 400"</h3>
                    <table class="table table-striped">
                        <tr>
                            <td>Цвет</td>
                            <td>
                                <span class='color color-silver' id='400' data-color='grey'></span>
                                <span class='color color-white' id='400' data-color='white'></span>
                                <span class='color color-black' id='400' data-color='black'></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Объем</td>
                            <td>400 литров</td>
                        </tr>
                        <tr>
                            <td>Габариты</td>
                            <td>175x82x45</td>
                        </tr>
                        <tr>
                            <td>Масса</td>
                            <td>13 кг</td>
                        </tr>
                        <tr>
                            <td>Грузоподъемность</td>
                            <td>до 60 кг.</td>
                        </tr>
                    </table>

                    <p><span class="btn btn-default btn-color" role="button">Выбрать</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-460 color-img img-responsive' src="/images/460grey.JPG" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Satellite 460"</h3>
                    <table class="table table-striped">
                        <tr>
                            <td>Цвет</td>
                            <td>
                                <span class='color color-silver' id='460' data-color='grey'></span>
                                <span class='color color-white' id='460' data-color='white'></span>
                                <span class='color color-black' id='460' data-color='black'></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Объем</td>
                            <td>460 литров</td>
                        </tr>
                        <tr>
                            <td>Габариты</td>
                            <td>175x82x45</td>
                        </tr>
                        <tr>
                            <td>Масса</td>
                            <td>13 кг</td>
                        </tr>
                        <tr>
                            <td>Грузоподъемность</td>
                            <td>до 60 кг.</td>
                        </tr>
                    </table>

                    <p><span class="btn btn-default btn-color" role="button">Выбрать</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-520 color-img img-responsive' src="/images/520grey.JPG" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Satellite 520"</h3>
                    <table class="table table-striped">
                        <tr>
                            <td>Цвет</td>
                            <td>
                                <span class='color color-silver' id='520' data-color='grey'></span>
                                <span class='color color-white' id='520' data-color='white'></span>
                                <span class='color color-black' id='520' data-color='black'></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Объем</td>
                            <td>520 литров</td>
                        </tr>
                        <tr>
                            <td>Габариты</td>
                            <td>195x78x43</td>
                        </tr>
                        <tr>
                            <td>Масса</td>
                            <td>15 кг</td>
                        </tr>
                        <tr>
                            <td>Грузоподъемность</td>
                            <td>до 80 кг.</td>
                        </tr>
                    </table>

                    <p><span class="btn btn-default btn-color" role="button">Выбрать</span></p>
                </div>
            </div>
        </div>
    </div>

    <div id="loginbox" style="margin-top:50px; display:none" class="col-md-12 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Что хотите бронировать?</div>

            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <div class="color-img-wrapper">
                            <img class='color-img-400 color-img img-responsive' src="/images/460grey.JPG" alt="...">
                        </div>
                        <div class="caption">
                            <h3>Автобокс "Satellite 400"</h3>
                            <table class="table table-striped">
                                <tr>
                                    <td>Цвет</td>
                                    <td>
                                        <span class='color color-silver' id='400' data-color='grey'></span>
                                        <span class='color color-white' id='400' data-color='white'></span>
                                        <span class='color color-black' id='400' data-color='black'></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Объем</td>
                                    <td>400 литров</td>
                                </tr>
                                <tr>
                                    <td>Габариты</td>
                                    <td>175x82x45</td>
                                </tr>
                                <tr>
                                    <td>Масса</td>
                                    <td>13 кг</td>
                                </tr>
                                <tr>
                                    <td>Грузоподъемность</td>
                                    <td>до 60 кг.</td>
                                </tr>
                            </table>

                            <p><span class="btn btn-default btn-color" role="button">Выбрать</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <div class="color-img-wrapper">
                            <img class='color-img-460 color-img img-responsive' src="/images/460grey.JPG" alt="...">
                        </div>
                        <div class="caption">
                            <h3>Автобокс "Satellite 460"</h3>
                            <table class="table table-striped">
                                <tr>
                                    <td>Цвет</td>
                                    <td>
                                        <span class='color color-silver' id='460' data-color='grey'></span>
                                        <span class='color color-white' id='460' data-color='white'></span>
                                        <span class='color color-black' id='460' data-color='black'></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Объем</td>
                                    <td>460 литров</td>
                                </tr>
                                <tr>
                                    <td>Габариты</td>
                                    <td>175x82x45</td>
                                </tr>
                                <tr>
                                    <td>Масса</td>
                                    <td>13 кг</td>
                                </tr>
                                <tr>
                                    <td>Грузоподъемность</td>
                                    <td>до 60 кг.</td>
                                </tr>
                            </table>

                            <p><span class="btn btn-default btn-color" role="button">Выбрать</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <div class="color-img-wrapper">
                            <img class='color-img-520 color-img img-responsive' src="/images/520grey.JPG" alt="...">
                        </div>
                        <div class="caption">
                            <h3>Автобокс "Satellite 520"</h3>
                            <table class="table table-striped">
                                <tr>
                                    <td>Цвет</td>
                                    <td>
                                        <span class='color color-silver' id='520' data-color='grey'></span>
                                        <span class='color color-white' id='520' data-color='white'></span>
                                        <span class='color color-black' id='520' data-color='black'></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Объем</td>
                                    <td>520 литров</td>
                                </tr>
                                <tr>
                                    <td>Габариты</td>
                                    <td>195x78x43</td>
                                </tr>
                                <tr>
                                    <td>Масса</td>
                                    <td>15 кг</td>
                                </tr>
                                <tr>
                                    <td>Грузоподъемность</td>
                                    <td>до 80 кг.</td>
                                </tr>
                            </table>

                            <p><span class="btn btn-default btn-color" role="button">Выбрать</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="alert alert-info">
    	2. Выберете место установки бокса
    </div>

    <div class="row">
    	<div class="col-md-6">
    		<div class="col-md-4 col-sm-4 col-xs-4">
    			<img src="http://placehold.it/150x150" class='img-responsive' alt="">
    		</div>
    		<div class="col-md-8 col-sm-8 col-xs-8">
    			<h4>Штатное место</h4>
    			<span class='btn btn-default btn-place'>Выбрать</span>
    		</div>
    	</div>
    	   <div class="col-md-6">
    		<div class="col-md-4 col-sm-4 col-xs-4">
    			<img src="http://placehold.it/150x150" class='img-responsive' alt="">
    		</div>
    		<div class="col-md-8 col-sm-8 col-xs-8">
    			<h4>Рейлинг</h4>
    			<span class='btn btn-default btn-place'>Выбрать</span>
    		</div>
    	</div>

    </div>
	<br><br>
    <div class="alert alert-info">3. Заполните данные о себе и о вашем автомобиле</div>

    <form id="loginform" class="form-horizontal" role="form">

        <div class="col-md-6">
            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="ФИО">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                <input id="login-username" type="tel" class="form-control" name="username" value="" placeholder="Телефон">
            </div>

        </div>

        <div class="col-md-6">

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Марка, модель и год выпуска автомобиля">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>

                <div class="input-daterange input-group" id="datepicker">

                    <input type="text" class="input-sm form-control" name="start" placeholder='Начало аренды' />
                    <span class="input-group-addon">До</span>
                    <input type="text" class="input-sm form-control" name="end" placeholder="Конеч аренды" />
                </div>
            </div>

            <div style="margin-bottom: 25px" class="input-group">
            	
            </div>

        </div>

        <div class="input-group">
            

        </div>

        <div style="margin-top:10px" class="input-group col-md-12">
            <!-- Button -->

            <div class="col-sm-12 controls">

                <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-file-text-o" aria-hidden="true"></i>
 Прочитать условия аренды</a> <a id="btn-fblogin" class="btn btn-primary btn-lg"><i class="fa fa-check" aria-hidden="true"></i>
 Забронировать</a>

            </div>
        </div>

    </form>

    <div id="loginbox" style="margin-top:50px; display:none" class="col-md-12 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Ваши данные </div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="ФИО">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <input id="login-username" type="tel" class="form-control" name="username" value="" placeholder="Телефон">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Марка, модель и год выпуска автомобиля">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>

                        <div class="input-daterange input-group" id="datepicker">

                            <input type="text" class="input-sm form-control" name="start" placeholder='Начало аренды' />
                            <span class="input-group-addon">До</span>
                            <input type="text" class="input-sm form-control" name="end" placeholder="Конеч аренды" />
                        </div>
                    </div>

                    <div class="input-group">
                        

                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">

                            <a id="btn-fblogin" class="btn btn-primary">Забронировать</a>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>