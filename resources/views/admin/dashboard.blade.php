@extends('admin.index')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('admin/img/icon.ico')}}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('admin/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
            urls: [{
                {
                    asset('admin/css/fonts.min.css')
                }
            }]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/atlantis.min.css')}}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('admin/css/demo.css')}}">
</head>

<body>
    <div class="wrapper">
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <h4 class="page-title">Dashboard Transactions</h4>
                    <div class="page-category">Ini merupakan halaman dashboard transaksi Kosts
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Data user penyewa kost</div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Data pendapatan kosts</div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Jumlah data penyewa kost menurut gender</div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="pieChart" style="width: 50%; height: 50%"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Doughnut Chart</div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="doughnutChart" style="width: 50%; height: 50%"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Chart with HTML Legends</div>
                                </div>
                                <div class="card-body">
                                    <div class="card-sub">
                                        Sometimes you need a very complex legend. In these cases, it makes sense to
                                        generate an HTML legend. Charts provide a generateLegend() method on their
                                        prototype that returns an HTML string for the legend.
                                    </div>
                                    <div class="chart-container">
                                        <canvas id="htmlLegendsChart"></canvas>
                                    </div>
                                    <div id="myChartLegend"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                            href="https://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>



    <!--   Core JS Files   -->
    <script src="{{asset('admin/js/core/jquery.3.2.1.min.js')}}"></script>


    <!-- Chart JS -->
    <script src="{{asset('admin/js/plugin/chart.js/chart.min.js')}}"></script>

    <script>
    var lineChart = document.getElementById('lineChart').getContext('2d'),
        barChart = document.getElementById('barChart').getContext('2d'),
        pieChart = document.getElementById('pieChart').getContext('2d'),
        doughnutChart = document.getElementById('doughnutChart').getContext('2d');

    var myLineChart = new Chart(lineChart, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Active Users",
                borderColor: "#1d7af3",
                pointBorderColor: "#FFF",
                pointBackgroundColor: "#1d7af3",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                backgroundColor: 'transparent',
                fill: true,
                borderWidth: 2,
                data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    padding: 10,
                    fontColor: '#1d7af3',
                }
            },
            tooltips: {
                bodySpacing: 4,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            layout: {
                padding: {
                    left: 15,
                    right: 15,
                    top: 15,
                    bottom: 15
                }
            }
        }
    });



    var myBarChart = new Chart(barChart, {
        type: 'bar',
        data: {
            labels: [@foreach($data_users as $dk)
                '{{$dk->name}}',
                @endforeach
            ],

            datasets: [{
                label: "Price Kost",
                backgroundColor: 'rgb(23, 125, 255)',
                borderColor: 'rgb(23, 125, 255)',
                data: [@foreach($data_kost as $dk)
                    '{{$dk->total_bayar}}', 
                    @endforeach
                ],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
        }
    });

    var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: {
            datasets: [{
                data: [50, 35, 15],
                backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b"],
                borderWidth: 0
            }],
            labels: ['New Visitors', 'Subscribers', 'Active Users']
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(154, 154, 154)',
                    fontSize: 11,
                    usePointStyle: true,
                    padding: 20
                }
            },
            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                fontSize: 14,
            },
            tooltips: false,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    })

    var myDoughnutChart = new Chart(doughnutChart, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [10, 20, 30],
                backgroundColor: ['#f3545d', '#fdaf4b', '#1d7af3']
            }],

            labels: [
                'Red',
                'Yellow',
                'Blue'
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom'
            },
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    });


    // Chart with HTML Legends

    var gradientStroke = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, '#177dff');
    gradientStroke.addColorStop(1, '#80b6f4');

    var gradientFill = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill.addColorStop(0, "rgba(23, 125, 255, 0.7)");
    gradientFill.addColorStop(1, "rgba(128, 182, 244, 0.3)");

    var gradientStroke2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke2.addColorStop(0, '#f3545d');
    gradientStroke2.addColorStop(1, '#ff8990');

    var gradientFill2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill2.addColorStop(0, "rgba(243, 84, 93, 0.7)");
    gradientFill2.addColorStop(1, "rgba(255, 137, 144, 0.3)");

    var gradientStroke3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke3.addColorStop(0, '#fdaf4b');
    gradientStroke3.addColorStop(1, '#ffc478');

    var gradientFill3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill3.addColorStop(0, "rgba(253, 175, 75, 0.7)");
    gradientFill3.addColorStop(1, "rgba(255, 196, 120, 0.3)");

    var myHtmlLegendsChart = new Chart(htmlLegendsChart, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                "Dec"
            ],
            datasets: [{
                label: "Subscribers",
                borderColor: gradientStroke2,
                pointBackgroundColor: gradientStroke2,
                pointRadius: 0,
                backgroundColor: gradientFill2,
                legendColor: '#f3545d',
                fill: true,
                borderWidth: 1,
                data: [154, 184, 175, 203, 210, 231, 240, 278, 252, 312, 320, 374]
            }, {
                label: "New Visitors",
                borderColor: gradientStroke3,
                pointBackgroundColor: gradientStroke3,
                pointRadius: 0,
                backgroundColor: gradientFill3,
                legendColor: '#fdaf4b',
                fill: true,
                borderWidth: 1,
                data: [256, 230, 245, 287, 240, 250, 230, 295, 331, 431, 456, 521]
            }, {
                label: "Active Users",
                borderColor: gradientStroke,
                pointBackgroundColor: gradientStroke,
                pointRadius: 0,
                backgroundColor: gradientFill,
                legendColor: '#177dff',
                fill: true,
                borderWidth: 1,
                data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                bodySpacing: 4,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            layout: {
                padding: {
                    left: 15,
                    right: 15,
                    top: 15,
                    bottom: 15
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "500",
                        beginAtZero: false,
                        maxTicksLimit: 5,
                        padding: 20
                    },
                    gridLines: {
                        drawTicks: false,
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "500"
                    }
                }]
            },
            legendCallback: function(chart) {
                var text = [];
                text.push('<ul class="' + chart.id + '-legend html-legend">');
                for (var i = 0; i < chart.data.datasets.length; i++) {
                    text.push('<li><span style="background-color:' + chart.data.datasets[i]
                        .legendColor +
                        '"></span>');
                    if (chart.data.datasets[i].label) {
                        text.push(chart.data.datasets[i].label);
                    }
                    text.push('</li>');
                }
                text.push('</ul>');
                return text.join('');
            }
        }
    });

    var myLegendContainer = document.getElementById("myChartLegend");

    // generate HTML legend
    myLegendContainer.innerHTML = myHtmlLegendsChart.generateLegend();

    // bind onClick event to all LI-tags of the legend
    var legendItems = myLegendContainer.getElementsByTagName('li');
    for (var i = 0; i < legendItems.length; i += 1) {
        legendItems[i].addEventListener("click", legendClickCallback, false);
    }
    </script>


</body>

</html>
@endsection