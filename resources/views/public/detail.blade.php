@include('layouts.header-public')
            <div class="clearfix">
                <!-- <div class="col-xs-12"> -->
                    <div class="card">
                    @foreach($master_datas as $master_datum)
                        <div class="body">
                            <div class="row">
                                <div class="col-md-8">
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
                                                   <a href="{{ url('play', $master_datum->id) }}">
                                                        <img data-toggle="tooltip" title="Play" class="media-object" src="{{ asset('/img_game/play.png') }}" width="50" height="50">
                                                   </a>
                                                   
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @if (1==1) @break; @endif
                                    @endforeach
                                    <div class="header">
                                        <h2>
                                            User Reviews
                                        </h2>
                                    </div>
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
                                <div class="col-md-4 hidden-sm hidden-xs">
                                    <div class="list-group">
                                        <div class="list-group-item active">
                                            <h4> Top Products </h4>
                                        </div>
                                        @foreach($top_products as $top_products)
                                            <a href="{{ url('play', $top_products->id) }}" class="list-group-item top-products-list clearfix">
                                                <img class="img-circle pull-left" src="{{ asset($top_products->img) }}" width="50" height="50">
                                                <h4 class="top-products-list__h4 pull-left">{{ $top_products->name }}</h4>
                                                <button class="btn bg-green top-products-list__btn">Play</button>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Best User Section -->
                                @include('components.best-user')
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
    </section>
@include('layouts.footer') 