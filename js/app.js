$('.progress-bar').each(function() {

  var valueNow = $(this).attr('aria-valuenow');

  $(this).animate({
    
    width: valueNow + '%',

    percent: 100

  }, {

    progress: function(a, p, n) {

      $(this)
        .css('width', (valueNow * p + '%'))
        .html(Math.round(valueNow * p) + '%');

    }

  });

});