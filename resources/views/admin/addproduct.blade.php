@include('admin.layout.header')
    <section class="content">
        <div class="container-fluid">
            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">                        <!-- Horizontal Layout -->
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h4>
                                            Add Product
                                        </h4>
                                    </div>
                                    <div class="body">
                                        <form  role="form" method="POST" action="{{ url('/adddataProduct') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label for="name">Product Name</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input id="name" type="text" class="form-control" name="name" placeholder="Input Your Product Name">
                                                            @if ($errors->has('name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label for="desc">Product Description</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea id="desc" type="text" class="form-control" name="desc" placeholder="Input Your Product Description"></textarea>
                                                            @if ($errors->has('desc'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('desc') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label for="desc">URL Products</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea id="url" type="text" class="form-control" name="url" placeholder="Input Your Product URL"></textarea>
                                                            @if ($errors->has('url'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('url') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label for="category">Product Category</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                            <select class="form-control show-tick" name="category">
                                                                <option value="">-- Please select --</option>
                                                                <option value="Kesehatan">Kesehatan</option>
                                                                <option value="Kecantikan">Kecantikan</option>
                                                                <option value="Pertanian">Pertanian</option>
                                                                <option value="Peternakan">Peternakan</option>
                                                                <option value="Perikanan">Perikanan</option>
                                                                <option value="Otomotif">Otomotif</option>                                                                
                                                            </select>
                                                            </div>      
                                                            @if ($errors->has('category'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('category') }}</strong>
                                                                </span>
                                                            @endif
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label for="price">Product Point</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input id="coint" type="text" class="form-control" name="coint" placeholder="Input Your Product Point">
                                                                @if ($errors->has('coint'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('coint') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label for="price">Product Icon (512x512)</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div >
                                                            <input type="file" id="img" name="img" accept="image/x-png,image/gif,image/jpeg">
                                                            @if ($errors->has('img'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('img') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label for="price">Product Banner (1024x270)</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div >
                                                            <input type="file" id="banner" name="banner" accept="image/x-png,image/gif,image/jpeg">
                                                            @if ($errors->has('banner'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('banner') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-9 col-md-offset-3">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-btn fa-user"></i> Add Product
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Horizontal Layout -->
                    </div>
                </div>
            </div>
            <!-- #END# Custom Content -->
        </div>
    </section>
@include('layouts.footer') 