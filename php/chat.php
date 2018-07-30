<link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/chat.css">

<!--PureChat Script-->
<script type='text/javascript' data-cfasync='false'>
  window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '0ca7bf65-c156-48e8-b59f-44939709fbf5', f: true }); done = true; } }; })();
</script>
<script type="text/javascript" src="<?php echo $pathPrefix; ?>js/chat.js"></script>
<script>
  $(document).ready(function() {
    function checkChatImage() {
      if (!$('.purechat-collapsed-image').css('background-image')) {
        setTimeout(function() {
          checkChatImage();
        }, 100);
        return;
      }
      setTimeout(function() {
        $('.purechat-collapsed-image').css('background-image', 'url(\'' + pathPrefix + 'img/chat.png' + '\') !important');
      }, 100);
    }
    checkChatImage();
  });
</script>
