$(function() {
    $('.content').hide();
    $('#nav_auto').addClass('active');
    $('#content_auto').show();
    
    $('.navi_cell').click(function() {
        var right_part_of_id = $(this).attr('id').substring(4);
        var identifier = '#content_' + right_part_of_id;
        var clicked_li = '#nav_' + right_part_of_id;
        
        $('.content').hide();
        $('#navi > ul li').removeClass('active');
        
        $(identifier).show();
        $(clicked_li).addClass('active');
    });
});