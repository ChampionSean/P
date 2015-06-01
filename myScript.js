/*$(document).ready(function(){
$('div.catal img').hover(makeBigger, returnToOriginalSize);

function makeBigger() {
    $(this).css({height: '+=100%', width: '+=100%'});
}
function returnToOriginalSize() {
    $(this).css({height: "300px", width: "450px"});
}});*/

$(document).ready(function(){
  $('.bxslider').bxSlider({
  auto: true,
  autoControls: true
});
});
