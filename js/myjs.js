$(document).ready(function(){
    $('.uploadform').hide();
    $('.info-form').hide();
    $('.care-order').hide();
    $('.care-info').hide();
    $(".main").css("opacity",'0.1')


    $(".btnorder1").click(function () { 
        $(".uploadform").show(); 
    });

    $('.nextbtn1').click(function(){
        $(".uploadform").hide();   
        $('.info-form').show();
    });

    $('.btncare').click(function(){
        $('.uploadform').hide();
         $('.info-form').hide();
        $('.care-order').show();
    });

    $('.nextbtn-care').click(function(){
        $('.care-info').show();
        $('.care-order').hide();
        $('.uploadform').hide();
        $('.info-form').hide();
    })

    $('.btnclose').click(function(){
        $('.uploadform').hide();
        $('.info-form').hide();
        $('.care-order').hide();
        $('.care-info').hide();
    });
    
    $(".gencus-btn").click(function(){
        $(".userpopup").hide();
        $(".main").css("opacity","1")
    });
   
    $(".who-btn").click(function(){
        $(".userpopup").hide();
        $(".form").show();
        $(".main").css("opacity","0.1");
        
       // console.log("form is submitted1");
    });

    /*$(".wholesaler").submit(function(e){
        $(".form").hide();

        $(".main").css("opacity","1")
        console.log("form submitted");
        e.preventDefault();
    });*/
    $(".medico").mouseenter(function () { 
        $(".count").each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        
    });
});
