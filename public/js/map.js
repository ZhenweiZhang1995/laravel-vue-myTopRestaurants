$(document).ready(function() {
  $("address").each(function() {
    var embed =
      "<iframe width='425' height='350' frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'   src='https://www.google.com/maps/embed/v1/place?keHuoYfkQ &q=" +
      encodeURIComponent($(this).text()) +
      "&amp;output=embed'></iframe>";
    $(this).html(embed);

  });
});
