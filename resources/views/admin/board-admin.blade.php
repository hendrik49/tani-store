@include('admin.layout.header')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">person</i>
                        </div>
                        <div class="content">
                            <div class="text">Customer</div>
                            @foreach($player_count as $player_count)
                            <div class="number count-to" data-from="0" data-to="{{ $player_count->player }}" data-speed="1000" data-fresh-interval="20">{{ $player_count->player }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-red">videoproduct_asset</i>
                        </div>
                        <div class="content">
                            <div class="text">Product Total</div>
                            @foreach($dashboard_count as $dashboard_count)
                            <div class="number count-to" data-from="0" data-to="{{ $dashboard_count->products }}" data-speed="1000" data-fresh-interval="20">{{ $dashboard_count->products }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-purple">play_arrow</i>
                        </div>
                        <div class="content">
                            <div class="text">Product Selling</div>
                            <div class="number count-to" data-from="0" data-to="{{ $dashboard_count->played }}" data-speed="1000" data-fresh-interval="20">{{ $dashboard_count->played }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Selling By Month</h2>
                        </div>
                        <div class="body">
                            <canvas id="line_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
                <!-- Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Selling By Product</h2>
                        </div>
                        <div class="body">
                            <canvas id="bar_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->
                                <!-- Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Average Rates </h2>
                        </div>
                        <div class="body">
                            <canvas id="radar_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->

                <!-- Bar Chart -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Checkout vs Paid</h2>
                        </div>
                        <div class="body">
                            <canvas id="pie_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- #END# Bar Chart -->

            </div>
            <!-- #END# Counter Examples -->
            <div class="card" style="display:none;">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12col-xs-12">
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#all-category" data-toggle="tab">
                                            All Category
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#perikanan" data-toggle="tab">
                                            Perikanan
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#kesehatan" data-toggle="tab">
                                            Kesehatan
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#pertanian" data-toggle="tab">
                                            Pertanian
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#Peternakan" data-toggle="tab">
                                            Peternakan
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#otomotif" data-toggle="tab">
                                            Otomotif
                                        </a>
                                    </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="all-category">
                                            <table class="table table-bordered table-striped table-hover js-basic-example">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Rate</th>
                                                        <th>Played</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($master_datas as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>                                        
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="perikanan">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Rate</th>
                                                        <th>Played</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($perikanan as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>  
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="peternakan">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Rate</th>
                                                        <th>Played</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($peternakan as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>  
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="pertanian">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Rate</th>
                                                        <th>Played</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($pertanian as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>  
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="kesehatan">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Rate</th>
                                                        <th>Played</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($kesehatan as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>  
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="otomotif">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Rate</th>
                                                        <th>Played</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($otomotif as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
@include('layouts.footer') 
<script type="text/javascript">
$(function () {
        var config = null;
    $.ajax({
    url: "{{ url('/dashboard') }}",
    method: "GET",
    success: function(data) {
    console.log(data)
        var months_line = [];
        var values_line = [];      
        for(var i in data.chart_line) {
            months_line.push(data.chart_line[i].month);
            values_line.push(data.chart_line[i].count);
        }
        
        new Chart(document.getElementById("line_chart").getContext("2d"), getChartLine(months_line,values_line));
      
        var barx = [];
        var bary = [];      
        for(var i in data.chart_bar) {
            barx.push(data.chart_bar[i].products);
            bary.push(data.chart_bar[i].count);
        }
            new Chart(document.getElementById("bar_chart").getContext("2d"), getChartBar(barx,bary));

        var piex = [];
        var piey = [];      
        for(var i in data.chart_pie) {
            piex.push(data.chart_pie[i].products);
            piey.push(data.chart_pie[i].rate);
        }
            new Chart(document.getElementById("pie_chart").getContext("2d"), getChartPie(piex,piey));

        var radx = [];
        var rady = [];      
        for(var i in data.chart_radar) {
            radx.push(data.chart_radar[i].id_product);
            rady.push(data.chart_radar[i].avg_rate);
        }
            new Chart(document.getElementById("radar_chart").getContext("2d"), getChartRadar(radx,rady));


    }});
});

function getChartLine(x,y) {

        config = {
            type: 'line',
            data: {
                labels: x,
                datasets: [{
                    label: "Playing",
                    data: y,
                    borderColor: 'rgba(0, 188, 212, 0.75)',
                    backgroundColor: 'rgba(0, 188, 212, 0.3)',
                    pointBorderColor: 'rgba(0, 188, 212, 0)',
                    pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                    pointBorderWidth: 1
                }
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        }

    return config;
}

function getChartBar(x,y) {

        config = {
            type: 'bar',
            data: {
                labels: x,
                datasets: [{
                    label: "Played",
                    data: y,
                    backgroundColor: 'rgba(0, 188, 212, 0.8)'
                }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }    
    return config;
}

function getChartPie(x,y) {

        config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: y,
                    backgroundColor: [
                        "rgb(233, 30, 99)",
                        "rgb(255, 193, 7)",
                        "rgb(0, 188, 212)",
                        "rgb(139, 195, 74)"
                    ],
                }],
                labels: x
            },
            options: {
                responsive: true,
                legend: false
            }
        }    
    return config;
}

function getChartRadar(x,y) {

        config = {
            type: 'radar',
            data: {
                datasets: [{
                    data: y,
                    backgroundColor: [
                        "rgb(233, 30, 99)",
                        "rgb(255, 193, 7)",
                        "rgb(0, 188, 212)",
                        "rgb(139, 195, 74)"
                    ],
                }],
                labels: y
            },
            options: {
                responsive: true,
                legend: false
            }
        }    
    return config;
}


</script>