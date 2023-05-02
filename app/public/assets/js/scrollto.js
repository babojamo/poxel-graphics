jQuery(function($){
    // local url of page (minus any hash, but including any potential query string)
    var url = location.href.replace(/#.*/,'');
  
    // Find all anchors
    $('#navbar').find('a[href]').each(function(i,a){
      var $a = $(a);
      var href = $a.attr('href');
  
      // check is anchor href starts with page's URI
      if (href.indexOf(url+'#') == 0) {
        // remove URI from href
        href = href.replace(url,'');
        // update anchors HREF with new one
        $a.attr('href',href);
      }
  
      // Now refresh scrollspy
      $('[data-spy="scroll"]').each(function (i,spy) {
         $(spy).scrollspy('refresh');
      });
    });
  
  });