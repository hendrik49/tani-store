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
                                            Edit Product
                                        </h4>
                                    </div>
                                    <div class="body">
                                        <form  role="form" method="POST" action="{{ url('/updatedataproduct') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                    <label for="name">Product Name</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="Input Your Product Name">
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
                                                            <textarea id="desc" type="text" class="form-control" name="desc">
                                                                {!! $product->desc !!}
                                                            </textarea>
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
                                                            <input id="url" type="text" class="form-control" name="url" value="{{ $product->url }}" placeholder="Input Your Product URL"></textarea>
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
                                                                <option @if($product->category=="Kesehatan") selected="selected" @endif value="Kesehatan">Kesehatan</option>
                                                                <option @if($product->category=="Kecantikan") selected="selected" @endif value="Kecantikan">Kecantikan</option>
                                                                <option @if($product->category=="Pertanian") selected="selected" @endif value="Pertanian">Pertanian</option>
                                                                <option @if($product->category=="Peternakan") selected="selected" @endif value="Peternakan">Peternakan</option>
                                                                <option @if($product->category=="Otomotif") selected="selected" @endif value="Otomotif">Otomotif</option>                                                                
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
                                                    <label for="price">Product Price</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input id="price" type="number" class="form-control" name="coint" value="{{ $product->coint }}" placeholder="650000">
                                                                @if ($errors->has('price'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('price') }}</strong>
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
                                                    <img src="{{ asset($product->img)}}" height="150" width="150" class="img img-responsive"/>
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
                                                    <img src="{{ asset($product->banner)}}" height="150" width="450" class="img img-responsive"/>
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