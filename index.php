<html>
<head>
<title>Highcharts Tutorial</title>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script>
</head>
<body>
<div id="container" style="width: 100%; height: 400px; margin: 0 auto"></div>
<script language="JavaScript">

$(document).ready(function() {

  var tables;
  $.getJSON("tables.php", function(jsonTables) {
    tables = jsonTables;
  });

  $.getJSON("orders.php", function(orders) {
   
   var chart = {
            type: 'bar'
   };
   var title = {
      text: 'Table Order Progress' 
   };
   var subtitle = {
      text: ''
   };
   var xAxis = tables;
   
   var yAxis = {
      title: {
         text: 'Time'
      },
      plotLines: [{
         value: 0,
         width: 1,
         color: '#808080'
      }]
   };   

   var tooltip = {
      valueSuffix: '\xB0C'
   }

   var legend = {
      layout: 'vertical',
      align: 'right',
      verticalAlign: 'middle',
      borderWidth: 0
   };
   var json = {};
   json.title = title;
   json.subtitle = subtitle;
   json.xAxis = xAxis;
   json.yAxis = yAxis;
   json.tooltip = tooltip;
   json.legend = legend;
   json.series = orders;

   $('#container').highcharts(json);
})});
</script>
</body>
</html>
