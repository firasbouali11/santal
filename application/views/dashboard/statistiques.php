<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Statistiques</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Statistiques</li>
            <!-- <li class="breadcrumb-item">Chart.js</li> -->
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Les revenues</div>
                    </div>
                    <div class="ibox-body">
                        <div>
                            <canvas id="line_chart" style="height:200px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Somme reçue par type</div>
                    </div>
                    <div class="ibox-body">
                        <div>
                            <canvas id="bar_chart" style="height:200px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Quantité de vente de chaque produit</div>
                    </div>
                    <div class="ibox-body">
                        <div>
                            <canvas id="bar_chart2" style="height:200px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Radar Chart</div>
            </div>
            <div class="ibox-body">
                <div>
                    <canvas id="radar_chart" style="height:200px;"></canvas>
                </div>
            </div>
        </div> -->
    </div>
    <!-- END PAGE CONTENT-->
    <?php
    // echo "<script>";
    // echo "tab = []";
    // foreach($all_products as $prod){
    //     echo "tab.push(".$prod['title'].")";
    // }
    // echo "</sctipt>";
    ?>
    <script>
        $(function() {
            // Line Chart example

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                        label: "Revenue",
                        backgroundColor: 'rgba(67,174,168,0.5)',
                        borderColor: 'rgba(67,174,168,0.7)',
                        pointBackgroundColor: 'rgba(67,174,168,1)',
                        pointBorderColor: "#fff",
                        data: [<?= $m1 ?>, <?= $m2 ?>, <?= $m3 ?>, <?= $m4 ?>, <?= $m5 ?>, <?= $m6 ?>, <?= $m7 ?>, <?= $m8 ?>, <?= $m9 ?>, <?= $m10 ?>, <?= $m11 ?>, <?= $m12 ?>],
                        //fill: false, // for removing background
                    },
                    /*{
                                       // label: "Data 2",
                                       // backgroundColor: 'rgba(213,217,219, 0.5)',
                                       // borderColor: 'rgba(213,217,219, 1)',
                                       // pointBorderColor: "#fff",
                                       // data: [0, 59, 80, 0, 0, 55, 40],
                                       //fill: false,
                                   }*/
                ]
            };
            var lineOptions = {
                responsive: true,
                maintainAspectRatio: false
            };
            var ctx = document.getElementById("line_chart").getContext("2d");
            new Chart(ctx, {
                type: 'line',
                data: lineData,
                options: lineOptions
            });

            // Bar Chart example

            var barData = {
                datasets: [{
                        label: "Homme",
                        backgroundColor: '#DADDE0', //'rgba(220, 220, 220, 0.5)',
                        data: [<?= $num_homme ?>]
                    },
                    {
                        label: "Femme",
                        //backgroundColor:'#84cac6',// 'rgba(26,179,148,0.5)',
                        backgroundColor: '#18C5A9', // '#30C8B3'
                        borderColor: "#fff",
                        data: [<?= $num_femme ?>]
                    }
                ]
            };
            var barOptions = {
                responsive: true,
                maintainAspectRatio: false
            };

            var ctx = document.getElementById("bar_chart").getContext("2d");
            new Chart(ctx, {
                type: 'bar',
                data: barData,
                options: barOptions
            });
            // barchart 2 


            // Polar area example

            var polarData = {
                datasets: [{
                    data: [
                        300, 130, 180
                    ],
                    backgroundColor: [
                        "#3bceb6", "#bdc3c7", "#8995c7"
                    ],
                    label: [
                        "My Radar chart"
                    ]
                }],
                labels: [
                    "App", "Software", "Laptop"
                ]
            };

            var polarOptions = {
                segmentStrokeWidth: 2,
                responsive: true

            };

            // var ctx3 = document.getElementById("polar_chart").getContext("2d");
            new Chart(ctx3, {
                type: 'polarArea',
                data: polarData,
                options: polarOptions
            });

            // doughnut chart example


            var doughnutData = {
                labels: ["firas","ezfkjfhzkef"],
                datasets: [{
                    data: [200, 40, 60],
                    backgroundColor: ["#3bceb6", "#bdc3c7", "#8995c7", "ffffff"]
                }]
            };


            var doughnutOptions = {
                responsive: true
            };


            var ctx4 = document.getElementById("doughnut_chart").getContext("2d");
            new Chart(ctx4, {
                type: 'doughnut',
                data: doughnutData,
                options: doughnutOptions
            });

           

        });
    </script>
    <?php
    // $colors = array("#125487");
    $x = "
          var barData = {
            // labels: ['homme'],
            datasets: [";

    foreach ($all_products as $i => $prod) {

        $x .= "{
                    label: '" . explode(" ", $prod->title)[0] . "',
                    backgroundColor: '#125487', //'rgba(220, 220, 220, 0.5)',
                    data: [" . ($prod->quatityTotale - $prod->quantity) . "]
                },";
    }
    $x .= "]
        };
        var barOptions = {
            responsive: true,
            maintainAspectRatio: false
        };

        var ctx = document.getElementById('bar_chart2').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: barData,
            options: barOptions
        });";
    echo "<script>$x</script>";
    ?>