@include('admin.layout.header')
    <section class="content">
        <div class="container-fluid">
                    <div class="card">
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
                                        <a href="#kesehatan" data-toggle="tab">
                                            Kesehatan
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#kecantikan" data-toggle="tab">
                                            Kecantikan
                                        </a>
                                    </li>
                                    <li role="presentation">
                                    <a href="#pertanian" data-toggle="tab">
                                            Pertanian
                                    </a>
                                </li>
                                <li role="presentation">
                                        <a href="#peternakan" data-toggle="tab">
                                            Peternakan
                                        </a>
                                    </li>
                                <li role="presentation">
                                        <a href="#perikanan" data-toggle="tab">
                                            Perikanan
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
                                                        <th>Action</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($master_datas as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                        <td width="20%" align="center">
                                                            <a class="btn btn-xs btn-warning" href="{{ url('/editproduct', $master_datas->id)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                                            <form action="{{ url('/deleteproduct', $master_datas->id)}}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete product id {{$master_datas->id}} ? Are you sure?')) { return true } else {return false };">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                                                            </form>
                                                        </td>
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($action as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                        <td width="20%" align="center">
                                                            <a class="btn btn-xs btn-warning" href="{{ url('/editproduct', $master_datas->id)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                                            <form action="{{ url('/deleteproduct', $master_datas->id)}}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete product id {{$master_datas->id}} ? Are you sure?')) { return true } else {return false };">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>  
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="kecantikan">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Rate</th>
                                                        <th>Played</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($puzzle as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                        <td width="20%" align="center">
                                                        <a class="btn btn-xs btn-warning" href="{{ url('/editproduct', $master_datas->id)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                                        <form action="{{ url('/deleteproduct', $master_datas->id)}}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete product id {{$master_datas->id}} ? Are you sure?')) { return true } else {return false };">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                                                        </form>
                                                    </td>
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($adventure as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                        <td width="20%" align="center">
                                                        <a class="btn btn-xs btn-warning" href="{{ url('/editproduct', $master_datas->id)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                                        <form action="{{ url('/deleteproduct', $master_datas->id)}}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete product id {{$master_datas->id}} ? Are you sure?')) { return true } else {return false };">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                                                        </form>
                                                    </td>
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($casino as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                        <td width="20%" align="center">
                                                        <a class="btn btn-xs btn-warning" href="{{ url('/editproduct', $master_datas->id)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                                        <form action="{{ url('/deleteproduct', $master_datas->id)}}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete product id {{$master_datas->id}} ? Are you sure?')) { return true } else {return false };">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                                                        </form>
                                                    </td>
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($arcade as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                        <td width="20%" align="center">
                                                        <a class="btn btn-xs btn-warning" href="{{ url('/editproduct', $master_datas->id)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                                        <form action="{{ url('/deleteproduct', $master_datas->id)}}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete product id {{$master_datas->id}} ? Are you sure?')) { return true } else {return false };">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                                                        </form>
                                                    </td>
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sports as $master_datas)
                                                    <tr>
                                                        <td>{{ $master_datas->name }}</td>
                                                        <td>{{ $master_datas->category }}</td>
                                                        <td><span class="rating" data-default-rating="{{ $master_datas->avg_rate }}" disabled></span></td>
                                                        <td>{{ $master_datas->count_play }}</td>
                                                        <td width="20%" align="center">
                                                        <a class="btn btn-xs btn-warning" href="{{ url('/editproduct', $master_datas->id)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                                        <form action="{{ url('/deleteproduct', $master_datas->id)}}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete product id {{$master_datas->id}} ? Are you sure?')) { return true } else {return false };">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                                                        </form>
                                                    </td>
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