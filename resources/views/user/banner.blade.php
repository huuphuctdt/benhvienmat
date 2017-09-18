<div class="banner has-hover has-parallax" id="banner-931260212">
    <div class="banner-inner fill">
        <div class="banner-bg fill" data-parallax="-2" data-parallax-container=".banner" data-parallax-background>
            <div class="bg fill bg-fill "></div>
            <div class="effect-sparkle bg-effect fill no-click"></div>
        </div><!-- bg-layers -->
        <div class="banner-layers container">
            <div class="fill banner-link"></div>
            <div class="img has-hover x0 md-x0 lg-x0 y20 md-y20 lg-y20" id="image_950548564">
                {{--<div data-animate="fadeInDown">    <div class="img-inner dark" >--}}
                        {{--<img width="937" height="238"--}}
                             {{--src="{{ url('images/'.$banner_child->image) }}"--}}
                             {{--class="attachment-large size-large" alt="" sizes="(max-width: 937px) 100vw, 937px" />--}}
                    {{--</div>--}}
                {{--</div>--}}
                <style scope="scope">
                    /*#image_950548564 {*/
                    /*width: 65%;*/
                    /*}*/
                    #image_950548564 {
                        width: 100%;
                    }
                </style>
            </div>

        </div><!-- .banner-layers -->
    </div><!-- .banner-inner -->
    <style scope="scope">
        #banner-931260212 {
            padding-top: 50%;
        }
        #banner-931260212 .bg.bg-loaded {
            background-image: url({{ url('images/',$banner->image) }});
        }
    </style>
</div>