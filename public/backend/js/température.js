var ctx = document.getElementById("temp");
var myineChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Lundi", "Mardi", "Mercredi", "Jeudi","Vendredi", "Samedi", "Dimanche"],
            datasets: [{
                label: "La température du champ",
                data: [240, 140, 150, 200,123,233,213, 0],
                backgroundColor: ["crimson", "lightgreen", "lightblue", "violet"],
                borderWidth: 1,
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

