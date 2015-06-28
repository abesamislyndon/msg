
  <!-- include jQuery -->
  <script src="<?php echo base_url(); ?>assets/libs/jquery.min.js"></script>
  <!-- Include the plug-in -->
  <script src="<?php echo base_url(); ?>assets/jquery.wookmark.js"></script>
    

  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">
    (function ($){
      var handler = $('#tiles li');

      handler.wookmark({
          // Prepare layout options.
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 15, // Optional, the distance between grid items
          outerOffset: 10, // Optional, the distance to the containers border
          itemWidth: 270 // Optional, the width of a grid item
      });

      // Capture clicks on grid items.
      handler.click(function(){
        // Randomize the height of the clicked item.
        var newHeight = $('img', this).height() + Math.round(Math.random() * 300 + 30);
        $(this).css('height', newHeight+'px');

        // Update the layout.
        handler.wookmark();
      });
    })(jQuery);
  </script>

<script>
//check for browser support
if(typeof(EventSource)!=="undefined") {
  //create an object, passing it the name and location of the server side script
  var eSource = new EventSource("<?php echo base_url()?>/messageboard");
  //detect message receipt
  eSource.onmessage = function(event) {
    //write the received data to the page
    document.getElementById("serverData").innerHTML = event.data;
  };
}
else {
  document.getElementById("serverData").innerHTML="Whoops! Your browser doesn't receive server-sent events.";
}
</script>

<script>
  $(function() {
    setInterval(function() {
        $.ajax({
            type: "GET",

            url: "<?php echo base_url();?>messageboard",
            success: function(html) {
                 // html is a string of all output of the server script.
                $("#element").html(html).fadeOut(900);
           }

        })
    }, 1000);
});
</script>


</body>
</html>