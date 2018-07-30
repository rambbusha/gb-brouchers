function openChat() {
  $('.chat-open').removeClass('chat-hide');
  $('.chat-close').addClass('chat-hide');
}

function closeChat() {
  $('.chat-open').addClass('chat-hide');
  $('.chat-close').removeClass('chat-hide');
}

function sendChat() {
  var message = $('.chat-open textarea').val();
  $('.chat-open .body-container').html($('.chat-open .body-container').html() +
    '<div class="part part-right">' +
    '  <div class="dialog">' +
    '    ' + message +
    '  </div>' +
    '  <div class="user">Me</div>' +
    '</div>'
  );
  $('.chat-open .body-container').animate({
    scrollTop: $(".body-container")[0].scrollHeight,
  }, 500);
  $('.chat-open textarea').val('');
}

$(document).ready(function() {
  $('.chat-close .left').click(openChat);
  $('.chat-close .right').click(openChat);
  $('.chat-open .close').click(closeChat);
  $('.chat-open .button').click(sendChat);
});
