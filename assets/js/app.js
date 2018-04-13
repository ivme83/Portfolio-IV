$("#gmail-link").toggle();
$("#linkedin-link").toggle();
$("#github-link").toggle();

$("#gmail-btn").click(function(){
    $("#gmail-link").animate({
        width: 'toggle'
    });
});

$("#linkedin-btn").click(function(){
    $("#linkedin-link").animate({
        width: 'toggle'
    });
});

$("#github-btn").click(function(){
    $("#github-link").animate({
        width: 'toggle'
    });
});