google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Orchester", "Antall påmeldte", { role: "style" } ],
        ["Berseblæsten", 13, "blue"],
        ["Biørneblæs", 9, "orange"],
        ["Blidern Haarn oc Blaese Orchaester", 2, "red"],
        ["Corpsus Juris", 15, "green"],
        ["Dei Taktlause", 36, "purple"],
        ["Direksjonsmusikken", 33, "grey"],
        ["Dragern", 11, "blue"],
        ["Force Marsjør Juzz-Band", 15, "orange"],
        ["Medicinsk Blæse- et Spadserensemble", 8, "red"],
        ["Medicinsk Paradeorchester", 21, "green"],
        ["Medicinsk Selskabs Orchester", 21, "purple"],
        ["Musikselskabet Larmonien", 6, "grey"],
        ["Ompagniet", 20, "blue"],
        ["Spadser et Blæse-Ensembelet", 16, "orange"],
        ["Strindens Promenade Orchester", 26, "red"],
        ["Taphel & Toddy", 3, "green"],
        ["Teknolikken", 7, "purple"],
        ["Åsblæst'n", 32, "grey"]
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
            ticks: [0, 5, 10, 15, 20, 25, 30, 35, 40]
          }
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("orkester"));
      chart.draw(view, options);
  }