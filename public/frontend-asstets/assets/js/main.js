 /* Main Slider Active */
 $(".owl-carousel").owlCarousel({
     'items': 1,
     'loop': true,
     'autoplay': true
 });



 /*charts rounds*/




 /*Cumulative  profit*/
 var ctx = $("#myChart_profit");
 var myChart_profit = new Chart(ctx, {
     type: 'line',
     data: {
         labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
         datasets: [{
             label: "2015",
             data: [10, 8, 6, 5, 12, 8, 16, 17, 6, 7, 6, 10],
             backgroundColor: [
                 '#36cbba'
             ],
         }]

     }
 });

 /*aos Animate On*/

 AOS.init();

 /*scroll*/
 smoothScroll.init();


 /*--------------------------
 scrollUp
 ---------------------------- */
 // ===== Scroll to Top ==== 
 $(window).scroll(function() {
     if ($(this).scrollTop() >= 100) {
         $('#return-to-top').fadeIn(200);
     } else {
         $('#return-to-top').fadeOut(200);
     }
 });
 $('#return-to-top').click(function() {
     $('body,html').animate({
         scrollTop: 0
     }, 500);
 });


 //Single page scroll js
 $('.wd_single_index_menu ul li a').on('click', function(e) {
     $('.wd_single_index_menu ul li').removeClass('active');
     $(this).parent().addClass('active');
     var target = $('[section-scroll=' + $(this).attr('href') + ']');
     e.preventDefault();
     var targetHeight = target.offset().top - parseInt('80', 10);
     $('html, body').animate({
         scrollTop: targetHeight
     }, 1000);
 });

 $(window).scroll(function() {
     var windscroll = $(window).scrollTop();
     var target = $('.wd_single_index_menu ul li');
     if (windscroll >= 0) {
         $('[section-scroll]').each(function(i) {
             if ($(this).position().top <= windscroll + 90) {
                 target.removeClass('active');
                 target.eq(i).addClass('active');
             }
         });
     } else {
         target.removeClass('active');
         $('.wd_single_index_menu ul li:first').addClass('active');
     }

 });


 //Single page scroll js
 $('#cssmenu ul li a').on('click', function(e) {
     $('#cssmenu ul li').removeClass('active');
     $(this).parent().addClass('active');
     var target = $('[section-scroll=' + $(this).attr('href') + ']');
     e.preventDefault();
     var targetHeight = target.offset().top - parseInt('80', 10);
     $('html, body').animate({
         scrollTop: targetHeight
     }, 1000);
 });

 $(window).scroll(function() {
     var windscroll = $(window).scrollTop();
     var target = $('#cssmenu ul li');
     if (windscroll >= 0) {
         $('[section-scroll]').each(function(i) {
             if ($(this).position().top <= windscroll + 90) {
                 target.removeClass('active');
                 target.eq(i).addClass('active');
             }
         });
     } else {
         target.removeClass('active');
         $('#cssmenu ul li:first').addClass('active');
     }

 });