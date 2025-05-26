<h1 class="text-center p-5">Chart Dashboard</h1>

<!-- Layout container for both charts -->
<div style="display: flex; justify-content: center; gap: 50px; flex-wrap: wrap; padding: 20px;">
  <div>
    <h3 class="text-center">Bar Chart</h3>
    <canvas id="barChart" width="1000" height="700"></canvas>
  </div>
  <div>
    <h3 class="text-center">Pie Chart</h3>
    <canvas id="pieChart" width="800" height="700"></canvas>
  </div>
</div>

<!-- Chart.js and plugin -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

<script>
// Shared data
const labels = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
const maleData = [10, 20, 15, 17, 19, 22, 25, 27];
const colors = ['red', 'blue', 'green', 'black', 'pink', 'yellow', 'brown', 'white'];

// Bar Chart
new Chart(document.getElementById('barChart').getContext('2d'), {
  type: 'bar',
  data: {
    labels: labels,
    datasets: [{
      label: 'Male',
      data: maleData,
      backgroundColor: colors
    }]
  },
  options: {
    responsive: true,
    plugins: {
      tooltip: { enabled: true },
      legend: { display: false },
      datalabels: {
        anchor: 'end',
        align: 'top',
        color: 'black',
        font: { weight: 'bold' }
      }
    },
    scales: {
      y: { beginAtZero: true }
    }
  },
  plugins: [ChartDataLabels]
});

//Pie Chart
new Chart(document.getElementById('pieChart').getContext('2d'), {
  type: 'pie',
  data: {
    labels: labels,
    datasets: [{
      label: 'Male',
      data: maleData,
      backgroundColor: colors
    }]
  },
  options: {
    responsive: true,
    plugins: {
      tooltip: { enabled: true },
      datalabels: {
        color: 'white',
        font: { weight: 'bold' },
        formatter: (value, context) => value
      }
    }
  },
  plugins: [ChartDataLabels]
});

</script>
