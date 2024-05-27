var ctx = document.getElementById("humid");
var myineChart = new Chart(ctx, {
        type: "bubble",
        data: {
            labels: ["Lundi", "Mardi", "Mercredi", "Jeudi","Vendredi", "Samedi", "Dimanche"],
            datasets: [{
                label: "Le taux d'humidité dans le champ",
                data: [{x:10, y:20, r:12}, {x:15, y:11, r:13} , {x:9, y:11, r:14}, {x:2, y:5, r:12}, {x:7, y:8, r:9}, {x:10, y:12, r:23}],
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

