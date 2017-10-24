$(document).ready(function() {
$("#navi li").hover(function(e){
    if((e.pageX - this.offsetLeft) < $(this).width() / 2)
        $('#hv').css('margin-left', '0px');
    else
        $('#hv').css('margin-left', '0px');
}, function(e){
    if((e.pageX - this.offsetLeft) < $(this).width() / 2)
        $('#hv').css('margin-left', '-100%');
    else
        $('#hv').css('margin-left', '100%');
});
}) ;