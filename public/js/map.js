$(document).ready(function() {
  $("address").each(function() {
    var embed =
      "<iframe width='425' height='350' align='right' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='https://www.google.com/maps/embed/v1/place?key=AIzaSyBHe3uOWBYiKpzlfrUMoRtqqerXHuoYfkQ&q=" +
      encodeURIComponent($(this).text()) +
      "&amp;output=embed'></iframe>";

    var abc = "hahah this is not working";
    $(this).html(abc);

  });
});
