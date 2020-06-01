$(window).scroll(function () {
        var _scrollTop = $(window).scrollTop();
        console.log('scroll :', _scrollTop); 
        if (_scrollTop>100) {
            $(".navbar").css('background-color', 'yellow');
        }
        else{
          $(".navbar").css('background-color', 'white');
        }              
    });
