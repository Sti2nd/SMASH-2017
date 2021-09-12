google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["instrument", "Antall", { role: "style" } ],
        ["Banjo", 1, "grey"],
        ["Baryton/Eufonium", 18, "blue"],
        ["Dans", 2, "orange"],
        ["Dirigent", 1, "red"],
        ["Fanebærer", 2, "green"],
        ["Fløyte/Pikkolo", 28, "purple"],
        ["Horn", 6, "grey"],
        ["Klarinett", 34, "blue"],
        ["Lyre", 1, "orange"],
        ["Saksofon", 44, "red"],
        ["Slagverk", 43, "green"],
        ["Trombone", 37, "purple"],
        ["Trompet/Kornett", 59, "grey"],
        ["Tuba", 16, "blue"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       // { calc: "stringify",
                       //   sourceColumn: 1,
                       //   type: "string",
                       //   role: "annotation" },
                       2]);

      var options = {
        title:"Klikk på søylene for detaljer",
        bar: {groupWidth: "90%"},
        legend: { position: "none" },
        vAxis: {
            ticks: [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60]
          }
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("instrument"));
      chart.draw(view, options);
  }