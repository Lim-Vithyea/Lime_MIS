<?php
echo viewHelper::getViewTestTag('dashboard');
?>


<?php 
$data = Yii::app()->db->createCommand()
    ->select('COUNT(id) as total')
    ->from('lime_survey_629881')
    ->queryAll();
$total = $data[0]['total']-1;

$data2 = Yii::app()->db->createCommand()
    ->select('COUNT(id) as total')
    ->from('lime_survey_159699')
    ->queryAll();
$total2 = $data2[0]['total'];

$data = Yii::app()->db->createCommand()
    ->select('*')
    ->from('lime_province')
    ->queryAll();
    foreach ($data as $datas) {
        // echo $datas['province'] . "<br>";
}

$data = Yii::app()->db->createCommand()
    ->select('u.users_name, d.district, p.province')
    ->from('lime_users u')
    ->leftJoin('lime_district d', 'u.dt_id = d.dt_id')
    ->leftJoin('lime_province p', 'd.pro_id = p.pid')
    ->queryAll();

foreach ($data as $row) {
    echo $row['users_name'] . ' - ' . $row['district'] . ' - ' . $row['province'] . '<br>';
}


?>

<style>
    .card {
        border-radius: 0.75rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }
    .chart-container {
        background: #fff;
        border-radius: 0.75rem;
        padding: 10px;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        margin: 5px;
    }
</style>

<div class="container mt-5">
    <h2 class="text-center mb-4">Admin Dashboard</h2>
    <!-- Summary Cards -->
    <div class="row text-white">
        <div class="col-md-3 mb-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Surveys</h5>
                    <p class="card-text fs-3"><?= Survey::model()->count(); ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-success">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text fs-3"><?= User::model()->count(); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-info">
                <div class="card-body">
                    <h5 class="card-title">629881 Survey response </h5>
                    <p class="card-text fs-3"><?php echo $total ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-info">
                <div class="card-body">
                    <h5 class="card-title">159699 Survey response </h5>
                    <p class="card-text fs-3"><?php echo $total2 ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="card bg-info">
                <div class="card-body">
                    <h5 class="card-title"> </h5>
                    <p class="card-text fs-3"><?php $data?></p>
                </div>
            </div> -->
    <!-- Chart Section -->
    <div class="row flex justify-content-center">
        <div class="col-md-5 chart-container">
            <canvas id="barChart" width="300px" height="300px"></canvas>
        </div>
        <div class="col-md-3 chart-container">
            <canvas id="donutChart"  width="300px" height="300px"></canvas>
        </div>
        <div class="col-md-3 chart-container">
            <canvas id="pieChart"  width="300px" height="300px"></canvas>
        </div>
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const total = <?php echo $total?>;
    const total2 = <?php echo $total2?>;
    
    // Bar Chart
    new Chart(document.getElementById('barChart').getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['Response 629881', 'Survey B', 'Survey C'],
            datasets: [{
                label: 'Responses',
                data: [total, 19, total2 ],
                backgroundColor: ['#007bff', '#28a745', '#ffc107']
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Pie Chart
    new Chart(document.getElementById('donutChart').getContext('2d'), {
    type: 'doughnut',
    data: {
        labels: ['Completed', 'Pending', 'Rejected'],
        datasets: [{
            label: 'Status',
            data: [60, 30, 10],
            backgroundColor: ['#28a745', '#ffc107', '#dc3545']
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,  // Important to allow canvas size control
    }
    
}   
);
new Chart(document.getElementById('pieChart').getContext('2d'), {
    type: 'line',
    data: {
        labels: ['Completed', 'Pending', 'Rejected'],
        datasets: [{
            label: 'Status',
            data: [20, 30, 10],
            backgroundColor: ['#28a745', '#ffc107', '#dc3545']
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,  // Important to allow canvas size control
    }
    
});
    
</script>

