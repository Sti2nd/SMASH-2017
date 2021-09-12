google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Kjønn', 'Antall'],
          ['Kvinner',     162],
          ['Menn',    133]
        ]);

        var options = {
          legend: 'none',
          pieSliceText: 'label',
        };

        var chart = new google.visualization.PieChart(document.getElementById("kjonn"));

        chart.draw(data, options);
      }