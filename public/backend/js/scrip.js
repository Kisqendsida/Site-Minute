var ctx = document.getElementById("barCanvas");
var myineChart = new Chart(ctx, {
  type: "line",
  data: {
      labels: ["Beijing", "Burkina Faso", "Mali", "Mauritanie", "cote", "France", "Algérie"],
      datasets: [{
          label: "Mon niveau d'eau",
          backgroundColor: "#4e73df", // Couleur de fond avec opacité
          borderColor: "#4e73df", // Couleur de la ligne
          data: [240, 140, 150, 200 ,120, 125, 190],
          fill: 'start',     
      }]
  },
  options: {
    animations: {
      tension: {
        duration: 800,
        easing: 'linear',
        from: 1,
        to: 0,
        loop: true
      }
    },
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },

});
