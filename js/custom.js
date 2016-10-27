jQuery(document).ready(function(){
    /* top-link activation */
    $('.dropit li').hover(function() {
        $(this).find('.dropit-submenu').show();
    }, function() {
        $(this).find('.dropit-submenu').hide();
    })

    /* Mobile Menu */
    $("ul.mobilemenu li.parent").each(function(){
          $(this).append('<span class="head"><a href="javascript:void(0)"></a></span>');
        });
    
    $('ul.mobilemenu').mobilemenu();
    
    $("ul.mobilemenu li.active").each(function(){
      $(this).children().next("ul").css('display', 'block');
    });
      
    //mobile
    $('.btn-navbar').click(function() {
      
      var chk = 0;
      if ( $('#navbar-inner').hasClass('navbar-inactive') && ( chk==0 ) ) {
        $('#navbar-inner').removeClass('navbar-inactive');
        $('#navbar-inner').addClass('navbar-active');
        $('#ma-mobilemenu').css('display','block');
        chk = 1;
      }
      if ($('#navbar-inner').hasClass('navbar-active') && ( chk==0 ) ) {
        $('#navbar-inner').removeClass('navbar-active');
        $('#navbar-inner').addClass('navbar-inactive');     
        $('#ma-mobilemenu').css('display','none');
        chk = 1;
      }
    });  

    /* navbar activation */
    var CUSTOMMENU_POPUP_EFFECT = 0;
    var CUSTOMMENU_POPUP_TOP_OFFSET = 47;

    $("#pt_menu_link ul li").each(function(){
        var url = document.URL;
        $("#pt_menu_link ul li a").removeClass("act");
        $('#pt_menu_link ul li a[href="'+url+'"]').addClass('act');
    }); 
    
    $('.pt_menu_no_child').hover(function(){
        $(this).addClass("active");
    },function(){
        $(this).removeClass("active");
    })
    
    $('.pt_menu').hover(function(){
        if($(this).attr("id") != "pt_menu_link"){
            $(this).addClass("active");
        }
    },function(){
        $(this).removeClass("active");
    })
    
    $('.pt_menu').hover(function(){
       /*show popup to calculate*/
       $(this).find('.popup').css('display','inline-block');
       
       /* get total padding + border + margin of the popup */
       var extraWidth       = 0
       var wrapWidthPopup   = $(this).find('.popup').outerWidth(true); /*include padding + margin + border*/
       var actualWidthPopup = $(this).find('.popup').width(); /*no padding, margin, border*/
       extraWidth           = wrapWidthPopup - actualWidthPopup;    
       
       /* calculate new width of the popup*/
       var widthblock1 = $(this).find('.popup .block1').outerWidth(true);
       var widthblock2 = $(this).find('.popup .block2').outerWidth(true);
       var new_width_popup = 0;
       if(widthblock1 && !widthblock2){
           new_width_popup = widthblock1;
       }
       if(!widthblock1 && widthblock2){
           new_width_popup = widthblock2;
       }
       if(widthblock1 && widthblock2){
            if(widthblock1 >= widthblock2){
                new_width_popup = widthblock1;
            }
            if(widthblock1 < widthblock2){
                new_width_popup = widthblock2;
            }
       }
       var new_outer_width_popup = new_width_popup + extraWidth;
       
       /*define top and left of the popup*/
       var wraper = $('.pt_custommenu');
       var wWraper = wraper.outerWidth();
       var posWraper = wraper.offset();
       var pos = $(this).offset();
       
       var xTop = pos.top - posWraper.top + CUSTOMMENU_POPUP_TOP_OFFSET;
       var xLeft = pos.left - posWraper.left;
       if ((xLeft + new_outer_width_popup) > wWraper) xLeft = wWraper - new_outer_width_popup;

       $(this).find('.popup').css('top',xTop);
       $(this).find('.popup').css('left',xLeft);
       
       /*set new width popup*/
       $(this).find('.popup').css('width',new_width_popup);
       $(this).find('.popup .block1').css('width',new_width_popup);
       
       /*return popup display none*/
       $(this).find('.popup').css('display','none');
       
       /*show hide popup*/
       if(CUSTOMMENU_POPUP_EFFECT == 0) $(this).find('.popup').stop(true,true).slideDown('slow');
       if(CUSTOMMENU_POPUP_EFFECT == 1) $(this).find('.popup').stop(true,true).fadeIn('slow');
       if(CUSTOMMENU_POPUP_EFFECT == 2) $(this).find('.popup').stop(true,true).show();
    },function(){
       if(CUSTOMMENU_POPUP_EFFECT == 0) $(this).find('.popup').stop(true,true).slideUp();
       if(CUSTOMMENU_POPUP_EFFECT == 1) $(this).find('.popup').stop(true,true).fadeOut('slow');
       if(CUSTOMMENU_POPUP_EFFECT == 2) $(this).find('.popup').stop(true,true).hide('fast');
    })

    slideEffectAjax();
});

// activation for top-cart
function slideEffectAjax() {
      $('.top-cart-contain').mouseenter(function() {
            $(this).find(".top-cart-content").stop(true, true).slideDown();
        });
        //hide submenus on exit
        $('.top-cart-contain').mouseleave(function() {
            $(this).find(".top-cart-content").stop(true, true).slideUp();
        });
}

/* Time Sale */
var j =1;
if (typeof(BackColor)=="undefined")
    BackColor = "white";
if (typeof(ForeColor)=="undefined")
    ForeColor= "black";
if (typeof(DisplayFormat)=="undefined")
    DisplayFormat = "<div class='hour box-time-date'><span class='time-num'>%%H%%</span>Hrs</div><div class='min box-time-date'><span class='time-num'>%%M%%</span>Mins</div><div class='sec box-time-date'><span class='time-num'>%%S%%</span>Secs</div><div class='day box-time-date'><span class='time-num time-day'>%%D%%</span>Days</div>";
if (typeof(CountActive)=="undefined")
    CountActive = true;
if (typeof(FinishMessage)=="undefined")
    FinishMessage = "";
if (typeof(CountStepper)!="number")
    CountStepper = -1;
if (typeof(LeadingZero)=="undefined")
    LeadingZero = true;
CountStepper = Math.ceil(CountStepper);
if (CountStepper == 0)
    CountActive = false;
var SetTimeOutPeriod = (Math.abs(CountStepper)-1)*1000 + 990;
function calcage(secs, num1, num2) {
    s = ((Math.floor(secs/num1)%num2)).toString();
    if (LeadingZero && s.length < 2)
        s = "0" + s;
    return s;
}

//function for slider
function CountBack_slider(secs,iid,j_timer) {
    if (secs < 0) {
        document.getElementById(iid).innerHTML = FinishMessage;
        document.getElementById('caption'+j_timer).style.display = "none";
        document.getElementById('heading'+j_timer).style.display = "none";
        return;
    }
    DisplayStr = DisplayFormat.replace(/%%D%%/g, calcage(secs,86400,100000));
    DisplayStr = DisplayStr.replace(/%%H%%/g, calcage(secs,3600,24));
    DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs,60,60));
    DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs,1,60));

var elems = document.getElementsByTagName('*'), i;
for (i in elems) {
if((' ' + elems[i].className + ' ').indexOf(' ' + iid + ' ')
    > -1) {
  elems[i].innerHTML = DisplayStr;
}
}

    $('.'+iid).innerHTML = DisplayStr;
      if (CountActive)
        setTimeout(function(){CountBack_slider((secs+CountStepper),iid,j_timer)}, SetTimeOutPeriod);
}

//function default
function CountBack(secs,iid,j) {
    if (secs < 0) {
        document.getElementById(iid).innerHTML = FinishMessage;
        document.getElementById('caption'+j).style.display = "none";
        document.getElementById('heading'+j).style.display = "none";
        return;
    }
    DisplayStr = DisplayFormat.replace(/%%D%%/g, calcage(secs,86400,100000));
    DisplayStr = DisplayStr.replace(/%%H%%/g, calcage(secs,3600,24));
    DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs,60,60));
    DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs,1,60));
    document.getElementById(iid).innerHTML = DisplayStr;
     if (CountActive)
        setTimeout(function(){CountBack((secs+CountStepper),iid,j)}, SetTimeOutPeriod);
}

