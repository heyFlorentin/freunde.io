// +------------------------------------------------------------------------+
// | @author: Freunde.io
// | @author_url: https://www.freunde.io
// | @author_email: support@freunde.io
// +------------------------------------------------------------------------+
// | Freunde.io - Social Media Made in Germany
// | Copyright (c) 2017 Freunde.io. All rights reserved.
// +------------------------------------------------------------------------+

jQuery(document).ready(function ($) {
  $(document).on("click", ".delete-reply", function (event) {
    event.preventDefault();
    $("#delete-reply").attr("data-reply-ident", $(this).attr("id")).modal("show");
  });

  $(document).on("click", ".delete-thread", function (event) {
    event.preventDefault();
    $("#delete-thread").attr("data-thread-ident", $(this).attr("id")).modal("show");
  });
});
