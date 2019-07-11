
$(document).ready(function(){
    reader  = new ReaderJs();
});

    




class ReaderJs{
    constructor() {
        this.initEvents();
        checkHasChildMenu();
    }

    initEvents(){
         $(".menu-item").click(this.toggleChildMenuCategory);
         $(".open-button").click(this.toggleFormComunity);
         $(".icon-show-more").click(this.toggleChildMenuCategoryOfChild);

          $(".menu-mobile .icon-search").click(function(){
                  $(".box-search-mobile").toggle();
                  $(".categories-mobile").hide();
                  $(".menu-top-mobile ").hide();
          });

          $(".menu-mobile .icon-bar").click(function(){
                  $(".box-search-mobile").hide();
                  $(".categories-mobile").toggle();
                  $(".menu-top-mobile ").hide();
           
            });
          $(".menu-mobile .icon-menu").click(function(){
                $(".box-search-mobile").hide();
                $(".categories-mobile").hide();
                $(".menu-top-mobile ").toggle();
               
        });




    }
    toggleChildMenuCategory(){
        $(".category").toggle(1000);
    }
    
    toggleChildMenuCategoryOfChild()
    {
        if($(this).find("span").html() == '+'){
            $(this).find("span").html("-");
            $(this).parent().find(".category-child").slideDown(500);
        }else {
            $(this).find("span").html("+");
            $(this).parent().find(".category-child").slideUp(500);
        }
    }


    toggleFormComunity(){
        $("#myForm").toggle(300);
    }
    

    //backToTop() {
    //    event.preventDefault();
    //    $('body,html').animate({
    //        scrollTop: 0,
    //    }, scroll_top_duration
    //    );

    //}

}


//Description : check xem menu đó có menu con không nếu ko có thì ẩn dấu + đi
function checkHasChildMenu() {
    var a = $(".category-item");
    for (var i = 0; i < a.length; i++) {
        var t = $(a[i]);
        if (t.find(".category-child").length > 0) {
            t.find(".icon-show-more").show();

        }
    }
}

function checkDiscount() {

}

//Back-to-top of page

var offset = 300,
 //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
 offset_opacity = 1200,
 //duration of the top scrolling animation (in ms)
 scroll_top_duration = 700,
 //grab the "back to top" link
 $back_to_top = $('.cd-top');
//hide or show the "back to top" link
$(window).scroll(function () {

    ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
    if ($(this).scrollTop() > offset_opacity) {
        $back_to_top.addClass('cd-fade-out');
    }
});
//smooth scroll to top
$back_to_top.on('click', function (event) {
    event.preventDefault();
    $('body,html').animate({
        scrollTop: 0,
    }, scroll_top_duration
    );
});


//------end back to top-------