




//$(document).ready(function(){
//   $(".box_sub").hover(function(){
//        $(".box_sub + div ").slideToggle(200);
//    });
//               
//});

$(document).ready(function(){
   $(".box_sub").hover(function(){
        $(this).next().slideToggle(200);
    });
               
});

//$(document).ready(function(){
//   $(".box_sub").hover(function(){
//        $(this).next().slideToggle(200);
//    });
//               
//});