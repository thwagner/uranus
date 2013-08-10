$(function() {
    
    $('#top_headline').prepend('<ul id="headlines"');
    
    $('h2').each(function(i) {
        $(this).attr('id', 'headline_' + i);
        $('#headlines').append('<li><a href="index.php#' + 
                'headline_' + i + '">' + 
                $(this).html() + '</a></li>');
    });
    
    $('#top_headline').append('</ul');
})