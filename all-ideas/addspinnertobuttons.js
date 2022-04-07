$(document)
  .bind("ajaxSend", function () {
    $(":button").html('<i class="fa fa-spinner fa-spin"></i> Loading');
    $(":button").attr("disabled", "disabled");
  })
  .bind("ajaxComplete", function () {
    $(":button").html('<i class="fa fa-heart"></i> Show');
    $(":button").removeAttr("disabled", "disabled");
  });
