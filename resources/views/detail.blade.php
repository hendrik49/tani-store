@include('layouts.header')

    <section class="content">
        <div class="container-fluid">
            <!-- Media Alignment -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    @foreach($master_datas as $master_datum)
                        <div class="header">
                            <h1>
                                {{ $master_datum->name }}
                            </h1>
                        </div>
                        <div class="body">
                            <div class="bs-example" data-example-id="media-alignment">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="javascript:void(0);">
                                            <img class="media-object" src="{{ asset($master_datum->img) }}" width="200" height="200">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Category : {{ $master_datum->category }}</h4>
                                        <p>
                                           {{ $master_datum->desc }} 
                                        </p>
                                        <?php if($master_datum->user_rate==0){ ?>
                                        <p> No Review </p>
                                        <?php }else{ ?>
                                        <p>
                                            <span class="rating" data-default-rating="{{ $master_datum->avg_rate }}" disabled></span> {{ $master_datum->avg_rate }}/5.00<br/>
                                            Based on {{ $master_datum->user_rate }} votes & user reviews.
                                        </p>
                                        <?php } ?>
                                        <p>
                                           <span class="col-red" >IDR{{ number_format($master_datum->price,0) }}</span><br/>
                                           <a href="{{ url('/play') }}">
                                                <img class="media-object" src="{{ asset('/img_game/play.png') }}" width="50" height="50">
                                           </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @if (1==1) @break; @endif
                    @endforeach
                    </div>
                </div>
            </div>
            <!-- #END# Media Alignment -->

            <!-- Custom Content -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                User Reviews
                            </h2>
                        </div>
                        @if(Auth::user()->role=='2')
                        <div class="body">
                            <form  role="form" method="POST" action="{{ url('/addreviewproduct') }}">
                                {{ csrf_field() }}
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="rate">Product Rate</label>
                                        </div>
                                        <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input id="rate" type="number" min="1" max="5" class="form-control" name="rate" size="15" onchange="setTwoNumberDecimal" step="0.25">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="comment">Comment</label>
                                        </div>
                                        <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea id="comment" type="text" class="form-control" name="comment" placeholder="Input Your Comment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id_user" value="{{ (Auth::user()->id) }}">
                                    <input type="hidden" name="user_name" value="{{ (Auth::user()->name) }}">
                                    <input type="hidden" name="email" value="{{ (Auth::user()->email) }}">
                                    @foreach($master_datas as $master_datum)
                                    <input type="hidden" name="id_product" value="{{ $master_datum->id }}">
                                    @endforeach
                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-btn fa-user"></i> Submit
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        @endif
                        <div class="body">
                            @foreach($master_datas as $master_datum)
                                    <?php if($master_datum->user_rate==0){ ?>
                                        <p> No Review </p>
                                    <?php }else{ ?>
                                    <span class="rating" data-default-rating="{{ $master_datum->rate }}" disabled></span><br/>
                                    by <i class="font-italic col-orange">{{ $master_datum->user_name }}</i> - {{ $master_datum->created_at }} <br/>
                                    {{ $master_datum->comment }} <br/>
                                    <hr>
                                    <?php } ?> 
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Custom Content -->
        </div>
    </section>
@include('layouts.footer') 