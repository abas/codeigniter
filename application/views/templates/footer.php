
    <script src="<?php echo base_url(); ?>/res/js/jquery-2.1.1.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>/res/js/materialize.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>/res/js/materialize.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        Materialize.updateTextFields();
      });

      function printTime() {
        var d = new Date();
        var hours = d.getHours();
        var mins = d.getMinutes();
        var secs = d.getSeconds();
        document.getElementById("jam").innerHTML = "<b>"+hours+":"+mins+":"+secs+"</b>";
      }
      setTimeout(printTime, 1);
      setInterval(printTime, 1000);

      $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 20});
      });

      $(document).ready(function(){
        $('.collapsible').collapsible();
      });
      $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 240
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
      });

      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
      });
      $(document).ready(function() {
        Materialize.updateTextFields();
      });
    </script>

  </body>
</html>
