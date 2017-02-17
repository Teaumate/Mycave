$(document).ready(function () {
    var d = new Date();
    var y = d.getFullYear();
    $('.year').attr('max',y);

    $(".update").on("click", function (e) {
        if ($(this).hasClass('disabled')) {
            e.stopPropagation();
            bootbox.alert({
                message: "Login required",
                size: 'small'
            });
        }
    });

    $(".delete").on("click", function (e) {
        e.preventDefault();
        if ($(this).hasClass('disabled')) {
            bootbox.alert({
                message: "Login required",
                size: 'small'
            });
        }else{
            bootbox.confirm("Are you sure?", function (response) {        
            if(response) {
                $('#Dform').submit();
            }
    });
        }
    });
    $("#create").on("click", function () {
        if ($(this).hasClass('disabled')) {
            bootbox.alert({
                message: "Login required",
                size: 'small'
            });
        } else {
            $("#newRow").toggle(400);
        }
    });
    $("#myModal").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);

        modal.find('input[name=id]').val($.trim($(button.parent().siblings()[0]).text()));
        modal.find('input[name=name]').val($.trim($(button.parent().siblings()[3]).text()));
        modal.find('input[name=year]').val($.trim($(button.parent().siblings()[4]).text()));
        modal.find('input[name=grapes]').val($.trim($(button.parent().siblings()[5]).text()));
        modal.find('input[name=country]').val($.trim($(button.parent().siblings()[6]).text()));
        modal.find('input[name=region]').val($.trim($(button.parent().siblings()[7]).text()));
        modal.find('input[name=description]').val($.trim($(button.parent().siblings()[8]).text()));
        modal.find('input[name=picture]').val($.trim($(button.parent().siblings()[1]).text()));
    });

  //  $('.fa-arrow-circle-right').click();

function detectswipe(el,func) {
      swipe_det = new Object();
      swipe_det.sX = 0;
      swipe_det.sY = 0;
      swipe_det.eX = 0;
      swipe_det.eY = 0;
      var min_x = 20;  //min x swipe for horizontal swipe
      var max_x = 40;  //max x difference for vertical swipe
      var min_y = 40;  //min y swipe for vertical swipe
      var max_y = 50;  //max y difference for horizontal swipe
      var direc = "";
      ele = document.getElementById(el);
      ele.addEventListener('touchstart',function(e){
        var t = e.touches[0];
        swipe_det.sX = t.screenX; 
        swipe_det.sY = t.screenY;
      },false);
      ele.addEventListener('touchmove',function(e){
        e.preventDefault();
        var t = e.touches[0];
        swipe_det.eX = t.screenX; 
        swipe_det.eY = t.screenY;    
      },false);
      ele.addEventListener('touchend',function(e){
        //horizontal detection
        if ((((swipe_det.eX - min_x > swipe_det.sX) || (swipe_det.eX + min_x < swipe_det.sX)) && ((swipe_det.eY < swipe_det.sY + max_y) && (swipe_det.sY > swipe_det.eY - max_y)))) {
          if(swipe_det.eX > swipe_det.sX) direc = "r";
          else direc = "l";
        }
        //vertical detection
        if ((((swipe_det.eY - min_y > swipe_det.sY) || (swipe_det.eY + min_y < swipe_det.sY)) && ((swipe_det.eX < swipe_det.sX + max_x) && (swipe_det.sX > swipe_det.eX - max_x)))) {
          if(swipe_det.eY > swipe_det.sY) direc = "d";
          else direc = "u";
        }
    
        if (direc != "") {
          if(typeof func == 'function') func(el,direc);
        }
        direc = "";
      },false);  
    }

    function myfunction(el,d) {
      //alert("you swiped on element with id '"+el+"' to "+d+" direction");
        switch (d) {
        case "l":
            $('.fa-arrow-circle-right').click();
            break;
        case "r":
            $('.fa-arrow-circle-left').click();
            break;
        // case "u":
        //     $('.fa-arrow-circle-right').click();
        //     break;
        // case "d":
        //     $('.fa-arrow-circle-right').click();
        //     break;
        default:
            //Statements executed when none of the values match the value of the expression
            break;
        }
    }
    detectswipe('SwipeScreen',myfunction);
});