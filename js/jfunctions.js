$(function() {
    fading_duration = 2000;
    image_count = $('.box_image').length;
    j = 0; 
    setDescriber(0);
    
    $('#top_headline').append('<ul "headlines"></ul>'); 
    $('.box_image').hide();
    $('.box_image').eq(0).fadeIn(1000);
    
    $('#wrapper h2').each(function(i) {
        $(this).attr('id', 'headline_' + i);
        $('#headlines').append('<li><a href="#headline_' + 
                i + '">' + $(this).html() + 
                '</a></li>');
    });
    
    $('#back').click(function() { 
        var ct = j--;
               
        if (j < 0) {
            j = image_count - 1;
        } 
        
        $('.box_image').eq(ct).fadeOut(fading_duration);
        $('.box_image').eq(j).fadeIn(fading_duration);
        setDescriber(j);

        return false;
    })
    
    $('#forward').click(function() { 
        var ct;
        
        if (j == image_count - 1) {
            ct = image_count - 1;
            j = 0;
        } else {
            ct = j;
            j++;
        }
   
        $('.box_image').eq(ct).fadeOut(fading_duration);
        $('.box_image').eq(j).fadeIn(fading_duration);
        setDescriber(j);
   
        return false;
    })
}) 

function setDescriber(i) {
    var pic_desc = $('.box_image').eq(i).attr('alt');
    $('#describer').html(pic_desc);
}