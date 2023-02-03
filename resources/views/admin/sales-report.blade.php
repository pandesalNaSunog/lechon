<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-links></x-bootstrap-links>
    <x-jquery></x-jquery>
    <x-style></x-style>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <title>Sales</title>
</head>
<body>
    <x-admin-nav :active="$active"/>
    <x-section-cards :active="$active">
    

    <form action="/lolabertarevamp/admin/sales" method="GET">
        <div class="input-group">
            <input type="text" name="year" class="form-control" placeholder="Year">
            <button class="btn btn-outline-danger">Search</button>
        </div>
    </form>
    
    <canvas id="sales" style="width:100%"></canvas>
    <script>
        var months = <?php echo json_encode($sales_data['months']);?>;
    
        var xValues = months;
        var yValues = <?php echo json_encode($sales_data['sales']);?>;
        var barColors = <?php echo json_encode($sales_data['color']);?>;

        new Chart("sales", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
            text: "Sales Report " + <?php echo $sales_data['year']; ?>
            }
        }
        });
    </script>
    </x-section-cards>
        
    
</body>
</html>