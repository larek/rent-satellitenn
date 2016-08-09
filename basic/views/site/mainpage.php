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
            <br>
            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Нижний Новгород</span>
        </div>
    </div>
</div>

<hr>
<div class="row">

    <div class="col-md-6">
        <div class="fotorama"
             data-width="100%"
             data-ratio="600/400">
          <img src="/images/2 (1).jpg">
          <img src="/images/2 (3).jpg">
          <img src="/images/2 (4).jpg">
          <img src="/images/2 (5).jpg">
          <img src="/images/2 (6).jpg">
          <img src="/images/2 (7).jpg">
          <img src="/images/2 (8).jpg">
          <img src="/images/2 (9).jpg">
          <img src="/images/2 (10).jpg">
          <img src="/images/2 (11).jpg">
          <img src="/images/2 (12).jpg">
          <img src="/images/2 (13).jpg">
          <img src="/images/2 (14).jpg">
          <img src="/images/2 (15).jpg">
          <img src="/images/2 (16).jpg">
          <img src="/images/2 (17).jpg">
          <img src="/images/2 (18).jpg">
          <img src="/images/2 (19).jpg">
          <img src="/images/2 (20).jpg">
          <img src="/images/2 (21).jpg">
          <img src="/images/2 (22).jpg">
          <img src="/images/2 (23).jpg">
          <img src="/images/2 (24).jpg">
          <img src="/images/2 (25).jpg">
          <img src="/images/2 (26).jpg">
          <img src="/images/2 (27).jpg">
          <img src="/images/2 (28).jpg">
          <img src="/images/2 (29).jpg">
          <img src="/images/2 (30).jpg">
        </div>
    </div>
<div class="col-md-6">
    <div class='alert alert-warning'> 
        Предлагаем Вам воспользоваться услугой проката автомобильных боксов и багажных систем (поперечин на крышу автомобиля). 
    </div>
    <div class='alert alert-warning'> 
        Предлагаемые нами к прокату автобоксы марки "Satellite" идеально подойдут для дальних путешествий, перевозки грузов, горнолыжного снаряжения и других вещей. 
    </div>
    <div class='alert alert-warning'> 
        Так же осуществляем подбор качественных поперечин, непосредственно, для Вашего автомобиля. Мы не предлагаем к установке дешевые универсальные багажники, так как это может привести к повреждению лакокрасочного покрытия автомобиля и просто небезопасно. Для клиентов, воспользовавшихся услугами аренды, предлагаеся система скидок по выкупу заинтересовавшего оборудования.
    </div>
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

        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-400 color-img img-responsive' src="/images/400.jpg" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Satellite 400"</h3>
                    <table class="table table-striped">

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

                    <p><span class="btn btn-default btn-color" id='400' role="button">Выбрать</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-460 color-img img-responsive' src="/images/460.JPG" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Satellite 460"</h3>
                    <table class="table table-striped">

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

                    <p><span class="btn btn-default btn-color" id='460' role="button">Выбрать</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-520 color-img img-responsive' src="/images/520.JPG" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Satellite 520"</h3>
                    <table class="table table-striped">

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

                    <p><span class="btn btn-default btn-color" id='520' role="button">Выбрать</span></p>
                </div>
            </div>
        </div>
    </div>

    

    <div class="alert alert-info">
    	2. Присутствуют ли у вас поперечины?
    </div>

    <div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-12">
    		<div class="col-md-4 col-sm-4 col-xs-4">
    			<img src="/images/bez_pop.jpg" class='img-responsive' alt="">
    		</div>
    		<div class="col-md-8 col-sm-8 col-xs-8">
    			<h4>Отсутствуют</h4>
    			<span class='btn btn-default btn-sm btn-place' id='1'>Выбрать</span>
    		</div>
    	</div>
    	   <div class="col-md-6 col-sm-6 col-xs-12">
    		<div class="col-md-4 col-sm-4 col-xs-4">
    			<img src="/images/pop.jpg" class='img-responsive' alt="">
    		</div>
    		<div class="col-md-8 col-sm-8 col-xs-8">
    			<h4>Присутствуют</h4>
    			<span class='btn btn-default btn-sm btn-place' id='2'>Выбрать</span>
    		</div>
    	</div>

    </div>
	<br><br>

    <div class="alert alert-info">
        3. Даты аренды    
    </div>
    <div class="row">
        
                

                <div class="input-daterange input-group" id="datepicker">
                    <div class="col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> От</span>
                            <input type="text" class="input-sm form-control date-to" name="start" placeholder='Начало аренды' />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> До</span>
                            <input type="text" class="input-sm form-control date-from" name="end" placeholder="Конец аренды" />
                        </div>
                    </div>
                </div>
        

    </div>
    
    <br><br>
        <div class="alert alert-warning beforeCalculated">
            Чтобы забронировать автобокс, выберете необходимый бокс, место установки и даты аренды
        </div>
    <div class="row resultCalculator" style='display:none'>
    <div class="col-md-12">
        <table class='table table-striped table-bordered'>
            <tbody>
                <tr>
                    <th colspan='2' class='text-center'>
                        Ваш выбор
                    </th>
                </tr>
                <tr>
                    <td>Автобокс</td>
                    <td><span class="activeBox"></span></td>
                </tr>
                <tr>
                    <td>Место установки</td>
                    <td><span class="activePlace"></span></td>
                </tr>
                <tr>
                    <td style='width:50%'>Срок аренды</td>
                    <td><span class="rangeDay"></span></td>
                </tr>
                
                <tr>
                    <td colspan='2' class='text-center'>
                        <span class="priceRent"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' class='text-center'>
                         <a class="btn btn-link" data-toggle="modal" data-target="#myModal"><i class="fa fa-file-text-o" aria-hidden="true"></i> Прочитать условия аренды</a> 
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
        
        
        
        
    
    <br><br>
    <div class="col-md-12">
        <div class="alert alert-info">3. Заполните данные о себе и о вашем автомобиле</div>
    </div>
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
                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Марка автомобиля">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Модель автомобиля">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Год выпуска автомобиля">
            </div>

            

            <div style="margin-bottom: 25px" class="input-group">
            	
            </div>

        </div>



            <div class="col-xs-12 col-ms-12 col-sm-12 controls">
                <a id="btn-fblogin" class="btn btn-primary btn-lg btn-rent"><i class="fa fa-check" aria-hidden="true"></i> Забронировать</a>
            </div>

    </form>
    </div>

    