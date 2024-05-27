document.addEventListener("DOMContentLoaded", function () {
    const myJour = document.getElementById("myJour");

    const barChart = new Chart(myJour, {
        type: "doughnut",
        data: {
            labels: ["Beijing", "Burkina Faso", "Mali", "Mauritanie"],
            datasets: [{
                data: [240, 140, 150, 200, 0],
                backgroundColor: ["crimson", "lightgreen", "lightblue", "violet"],
            }]
        },
        options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
    });
});