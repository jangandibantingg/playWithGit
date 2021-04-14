<script src="<?php echo $server; ?>/library/assets/bundles/lib.vendor.bundle.js"></script>


<script src="<?php echo $server; ?>/library/assets/bundles/knobjs.bundle.js"></script>
<script src="<?php echo $server; ?>/library/assets/bundles/counterup.bundle.js"></script>
<script src="<?php echo $server; ?>/library/assets/bundles/nestable.bundle.js"></script>
<script src="<?php echo $server; ?>/library/assets/bundles/c3.bundle.js"></script>
<script src="<?php echo $server; ?>/library/assets/bundles/apexcharts.bundle.js"></script>

<script src="<?php echo $server; ?>/library/assets/js/core.js"></script>
<script src="<?php echo $server; ?>/library/assets/js/page/sortable-nestable.js"></script>
<script src="<?php echo $server; ?>/library/assets/js/chart/knobjs.js"></script>
<script src="<?php echo $server; ?>/library/form.js" ></script>

<script >
$(function() {
"use strict";

$('.counter').counterUp({
  delay: 10,
  time: 1000
});
$('.knob').knob({
  draw: function () {
  }
});

// Current Ticket Status
$(document).ready(function(){
  var chart = c3.generate({
      bindto: '#chart-combination', // id of chart wrapper
      data: {
          columns: [
              // each columns data
              ['data1', 1,2,4,9,6,3,2,5,8,7],
              ['data2', 7,5,2,1,6,4,9,8,3,2],
              ['data3', 7,5,3,1,5,9,8,5,2,6],
              ['data4', 1,2,3,5,4,8,5,2,6,1],
          ],
          type: 'bar', // default type of chart
          types: {
              'data2': "line",
              'data3': "spline",
          },
          groups: [
              [ 'data1', 'data4']
          ],
          colors: {
              'data1': '#18BADD',
              'data2': '#3039A1',
              'data3': '#8BBEE1',
              'data4': '#676A86',
          },
          names: {
              // name of each serie
              'data1': 'Development',
              'data2': 'Marketing',
              'data3': 'Design',
              'data4': 'Sales'
          }
      },
      axis: {
          x: {
              type: 'category',
              // name of each category
              categories: ['Jun 1','Jun 2','Jun 3','Jun 4','Jun 5','Jun 6','Jun 7','Jun 8','Jun 9','Jun 10']
          },
      },
      bar: {
          width: 16
      },
      legend: {
          show: false, //hide legend
      },
      padding: {
          bottom: 0,
          top: 0
      },
  });
});

});
</script>
