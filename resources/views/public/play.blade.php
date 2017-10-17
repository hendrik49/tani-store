@include('layouts.header-play')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-play">
                        <span class="card-play__icon-show"></span>
                        <a href="{{ url('/') }}" class="btn card-play__icon-exit mobile-visible">Exit Product</a>
                        <div class="body">
                            <div class="iframe-wrapper">
                                <iframe src="{{ $master_datum->url }}" name="bestproductever"  width="720" height="480" frameborder="1" scrolling="no" class="gs-play-iframe">   
                                <p>Your browser does not support iframes.</p>
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="visible-xs">
                        <div class="col-xs-12">
                            <div class="card card-play-user mobile-visible"> 
                                <div class="pull-left">{{ Auth::user()->name}}</div>
                                <div class="pull-right"><img src="http://nanoup.net/assets/img/icon-coin.png">&nbsp;{{ Auth::user()->coint}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <!-- Useless <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-8 hidden-xs">
                                    <div class="bs-example" data-example-id="media-alignment">
                                        <div class="media">
                                            <div class="media-left gs-media__img">
                                                <a href="javascript:void(0);">
                                                    <img class="media-object" src="{{ asset($master_datum->img) }}" width="200" height="200">
                                                </a>
                                            </div>
                                            <div class="media-body gs-media__desc">
                                                <h4 class="media-heading"> {{ $master_datum->name }}</h4>
                                                <div class="algin-left">Category : {{ $master_datum->category }}</div>
                                                <br />
                                                <p>
                                                   {{ $master_datum->desc }} 
                                                </p>
                                                <p>
                                                <img src="{{ URL::to('assets/images/icon-coin-sm.png') }}"> {{ $master_datum->coint }}
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
                                                   <a href="">
                                                        <img data-toggle="tooltip" title="Play" class="media-object" src="{{ asset('/img_game/play.png') }}" width="50" height="50">
                                                   </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header">
                                        <h2>
                                            User Reviews
                                        </h2>
                                    </div>
                                                                        @if(Auth::user()!=null)
                                    <div class="body">
                                        <form  role="form" method="POST" action="{{ url('/addreviewproduct') }}">
                                            {{ csrf_field() }}
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="rate">Product Rate</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <select id="rate-field" name="rate">                    
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>                       
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="comment">Comment</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea id="comment" rows="5" type="text" class="form-control" name="comment" placeholder="Input Your Comment"></textarea>
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
                                                    <div class="col-md-4 col-md-offset-2">
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
                                <div class="col-md-4 mobile-visible gs-top-products">
                                    <div class="list-group">
                                        <div class="list-group-item active">
                                            <h4> Top Players </h4>
                                        </div>
                                        @foreach($top_products as $top_products)
                                        <a href="{{ url('play', $top_products->id) }}" class="list-group-item top-products-list clearfix">
                                            <img class="img-circle pull-left" src="{{ asset($top_products->img) }}" width="50" height="50" >
                                            <h4 class="top-products-list__h4 pull-left">{{ $top_products->name }}</h4>
                                            <div class="top-products-list__btn"> ({{ $top_products->score }})</div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row hidden-xs">
                                <!-- Best User Section -->
                                @include('components.best-user')
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
    </section>
@include('layouts.footer') 