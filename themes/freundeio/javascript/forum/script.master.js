// +------------------------------------------------------------------------+
// | @author: Freunde.io
// | @author_url: https://www.freunde.io
// | @author_email: support@freunde.io
// +------------------------------------------------------------------------+
// | Freunde.io - Social Media Made in Germany
// | Copyright (c) 2017 Freunde.io. All rights reserved.
// +------------------------------------------------------------------------+

$(document).ready(function () {
  $(document).on("click", ".show-forums", function () {
    $("div[data-slide=" + $(this).attr("id") + "]").slideToggle("slow");
  });
});
