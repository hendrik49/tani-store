$(document).ready(function() {
  /* Resize iframe to fit the canvas */
  var iframe = $('.gs-play-iframe'),
      cardPlay = $('.card-play'),
      cardPlayHeight = cardPlay.height() + 'px';

  if($(window).width() < 767) {
    iframe.css('height', cardPlayHeight);
  }

  $(window).resize(function() {
    
    if($(this).width() < 768) {
      /* Adjust iframe height */
      var cardPlay = $('.card-play'),
          cardPlayHeight = cardPlay.height() + 'px';

      iframe.css('height', cardPlayHeight);  

      /* Hide top products */
      $('.mobile-visible').hide();
    } else {
      /* Display top products */
      $('.gs-top-products').show();

      /* Revert iframe height */
      iframe.css('height', '480px');
    }
  });

  /* Hide card-play while click close button */
  var showBtn = $('.card-play__icon-show'),
      mobileElements = $('.mobile-visible');

  showBtn.on('click', function() {
    mobileElements.toggle();
  });
});