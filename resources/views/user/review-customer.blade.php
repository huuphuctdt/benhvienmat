<section class="section" id="section_6946882">
    <div class="bg section-bg fill bg-fill  " >
        <div class="section-bg-overlay absolute fill"></div>
    </div><!-- .section-bg -->

    <div class="section-content relative">

        <div class="row row-small"  id="row-451122038">
            <div class="col medium-5 small-12 large-5"  ><div class="col-inner"  >
                </div></div>
            <div class="col medium-12 small-12 large-12"  ><div class="col-inner" >
                    <p style="text-align: center;"><span style="font-size: 200%;">
                                        <strong>Ý kiến của khách hàng</strong></span>
                        <img class="wp-image-144 aligncenter" src="{{ url('images/SHARP.png') }}" alt="" width="181" height="46">
                    </p>
                    <div class="slider-wrapper relative " id="slider-852133987" >
                        <div class="slider slider-nav-simple slider-nav-normal slider-nav-dark slider-style-normal slider-show-nav"
                             data-flickity-options='{"cellAlign": "center","imagesLoaded": true,"lazyLoad": 1,"freeScroll": false,"wrapAround": true,"autoPlay": 3000,
            "pauseAutoPlayOnHover" : true,"prevNextButtons": true,"contain" : true,"adaptiveHeight" : true,"dragThreshold" : 5,"percentPosition": true,"pageDots": false,"rightToLeft": false,"draggable": true,
            "selectedAttraction": 0.1,"parallax" : 0,"friction": 0.6        }'
                        >
                            @foreach($reviews as $review)
                            <div class="row"  id="row-450584170">
                                <div class="col small-12 large-12"  >
                                    <div class="col-inner"  >
                                        <div class="icon-box featured-box icon-box-center text-center is-small"  >
                                            <div class="icon-box-img" style="width: 122px">
                                                <div class="icon">
                                                    <div class="icon-inner" >
                                                        <img width="300" height="300" src="{{ url('images/'.$review->image) }}"
                                                             class="attachment-medium size-medium img-circle" alt=""
                                                             sizes="(max-width: 300px) 100vw, 300px" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="icon-box-text last-reset">
                                                <h3 style="text-align: center;"><span style="font-size: 120%;">{{ $review->name }}</span></h3>
                                                <p style="text-align: center;">
                                                    <span style="font-size: 120%;">{!! nl2br($review->content) !!}</span>
                                                </p>
                                            </div>
                                        </div><!-- .icon-box -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="loading-spin dark large centered"></div>
                    </div><!-- .ux-slider-wrapper -->
                </div></div>
        </div>
    </div><!-- .section-content -->
    <style scope="scope">

        #section_6946882 {
            /*padding-top: 145px;*/
            /*padding-bottom: 145px;*/
        }
        #section_6946882 .section-bg-overlay {
            background-color: rgba(28, 234, 215, 0);
        }
        #section_6946882 .section-bg.bg-loaded {
            /*background-image: url(http://thammytiensynhan.com/wp-content/uploads/2017/07/bg.jpg);*/
            background-color: #06b4af;
        }
    </style>
</section>