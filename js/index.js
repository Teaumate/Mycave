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
        modal.find('input[name=name]').val($.trim($(button.parent().siblings()[1]).text()));
        modal.find('input[name=year]').val($.trim($(button.parent().siblings()[2]).text()));
        modal.find('input[name=grapes]').val($.trim($(button.parent().siblings()[3]).text()));
        modal.find('input[name=country]').val($.trim($(button.parent().siblings()[4]).text()));
        modal.find('input[name=region]').val($.trim($(button.parent().siblings()[5]).text()));
        modal.find('input[name=description]').val($.trim($(button.parent().siblings()[6]).text()));
        modal.find('input[name=picture]').val($.trim($(button.parent().siblings()[7]).text()));
    });

        // if(!($(this).val()>0)){alert('seulement des chiffres')}
});