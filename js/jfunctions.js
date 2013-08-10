$(function() {
    $('#headlines').prepend('<ul id="pic_ul"></ul>');
    
    $('#wrapper h2').each(function(i) {
        $(this).attr('id', 'headline_' + i);
        $('#pic_ul').append('<li><a href="#' 
                + 'headline_' + i + '">' 
                + $(this).html() + '</a></li>');
    });
    
    $('.slideshow li').hide();
    $('.slideshow li').eq(0).show().addClass('active');
    $('.slideshow').wrap('<div class="slideshowcontainer"></div>').
            parent().after(
                '<a href="#" id="back">Back</a>\n\
                    &nbsp;<a href="#" id="forward">Forward</a>'
                ); 
                    
    $('#forward').click(function() {
        $('li.active').removeClass('active').fadeOut(2000).next().addClass('active').fadeIn(2000);
        // return false ist eine Anweisung an den Browser, das Ansteuern eines
        // Hyperlink abzubrechen.
        return false;
    })
    
    $('#back').click(function() {
        
        if ($('li.active').next().length == 0) {
            $('li.active').removeClass('active').fadeOut(2000).
                    parent().find('li').eq(0).addClass('active');
        } else {
            $('li.active').removeClass('active').fadeOut(2000).prev().addClass('active').fadeIn(2000);       
        }
        
        return false;       
    })
}) 