$(document).ready(function() {

    var active_box = null;
    var active_place = null;

    var boxes = {
        400: {
            'name' : 'Satellite 400',
            1: 1000,
            2: 200,
            3: 150
        },
        460: {
            'name' : 'Satellite 460',
            1: 1000,
            2: 200,
            3: 150
        },
        520: {
            'name' : 'Satellite 520',
            1: 1250,
            2: 250,
            3: 200
        },
    }

    var places = {
        1: {
            'name': 'Штатное место',
            1: 100,
            2: 50
        },
        2: {
            'name': 'Рейлинг',
            1: 150,
            2: 100
        }
    }

    $(".btn-color").click(function() {

        if ($(this).hasClass('btn-primary')) {
            $(".btn-color").removeClass('btn-primary');
            $(".btn-color").html("Выбрать");
            $(this).addClass('btn-default');
            active_box = null;
        } else {
            $(".btn-color").removeClass('btn-primary');
            $(".btn-color").html("Выбрать");
            $(this).addClass('btn-primary');
            $(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
            active_box = $(this).attr('id');
        }
        checkCalculation();
    });

    $(".btn-place").click(function() {

        if ($(this).hasClass('btn-primary')) {
            $(".btn-place").removeClass('btn-primary');
            $(".btn-place").html("Выбрать");
            $(this).addClass('btn-default');
            active_place = null;
        } else {
            $(".btn-place").removeClass('btn-primary');
            $(".btn-place").html("Выбрать");
            $(this).addClass('btn-primary');
            $(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
            active_place = $(this).attr('id');
        }
        checkCalculation();

    });


    $('.input-daterange').datepicker({
        'language': 'ru-RU',
        'autoclose': true
    });

    $(".date-to").change(function() {
        checkCalculation();
    });

    $(".date-from").change(function() {
        checkCalculation();
    });

    $(".btn-rent").click(function() {

    });

    function toDate(dateStr) {
        var parts = dateStr.split(".");
        return new Date(parts[2], parts[1] - 1, parts[0]).getTime();
    }

    function checkCalculation() {
        if (active_box !== null && active_place !== null && $(".date-to").val() != "" && $(".date-from").val() !== "") {
            $(".resultCalculator").slideDown();
            $(".beforeCalculated").slideUp();
            var result = Calculate();
            $(".priceRent").html(result.priceRent);
            $(".activeBox").html(boxes[active_box]['name']);
            $(".activePlace").html(places[active_place]['name']);
            $(".rangeDay").html(result.rangeDay);
        } else {
            $(".resultCalculator").slideUp();
            $(".beforeCalculated").slideDown();

        }
    }

    function Calculate() {
        var dateTo = toDate($(".date-to").val());
        var dateFrom = toDate($(".date-from").val());
        var range = dateFrom - dateTo;
        var rangeDay = range / (1000 * 60 * 60 * 24);

        if (rangeDay < 6) {
            priceCategory = 1;
        } else if (rangeDay > 5 && rangeDay < 16) {
            priceCategory = 2;
        } else {
            priceCategory = 3;
        }


        rangeDay < 31 ? placeCategory = 1 : placeCategory = 2;

        priceBox = (priceCategory == 1 ? boxes[active_box][priceCategory] : boxes[active_box][priceCategory] * rangeDay);

        pricePlace = places[active_place][placeCategory] * rangeDay;

        var data = {
            'priceCategory': priceCategory,
            'priceBox': priceBox,
            'pricePlace': pricePlace,
            'rangeDay': rangeDay,
            'priceRent': priceBox + pricePlace,
        }

        return data;
    }

});
