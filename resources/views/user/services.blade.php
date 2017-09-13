<section class="section" id="section_1354859532">
    <div class="bg section-bg fill bg-fill  " >
    </div><!-- .section-bg -->
    <div class="section-content relative">
        <div class="row"  id="row-494483372">
            <div class="col small-12 large-12">
                <div class="col-inner">
                    <p style="text-align: center;"><span
                                style="font-size: 200%;"><strong>DỊCH VỤ NỔI BẬT</strong></span><img
                                class="wp-image-144 aligncenter"
                                src="{{ url('images/SHARP.png')  }}"
                                alt="" width="181" height="46"/></p>
                </div>
            </div>
        </div>
        <div class="row row-small dich-vu-noi-bat"  id="row-968978881">
            @foreach($post_categorys as $post_category)
                @if($loop->iteration == 5) @break @endif
                <div class="col medium-6 small-6 large-6">
                    <div class="col-inner box-shadow-1 box-shadow-3-hover">
                        <div class="box has-hover has-hover box-text-bottom">
                            <a href="{{ url($post_category->name_slug).'/' }}" target="_blank">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:100%;">
                                        <img width="400" height="400"
                                             src="{{ url('images/'.$post_category->image) }}"
                                             class="attachment- size-" alt="Bệnh viện mắt Long Xuyên"
                                             sizes="(max-width: 400px) 100vw, 400px"/></div>
                                </div><!-- box-image -->
                            </a>
                            <div class="box-text text-center" style="background-color:rgb(255, 255, 255);">
                                <div class="box-text-inner">
                                    <h3 style="text-align: center;">
                                        <a href="{{ url($post_category->name_slug).'/' }}" target="_blank">{{ $post_category->name }}</a></h3>
                                </div><!-- box-text-inner -->
                            </div><!-- box-text -->
                        </div><!-- .box  -->
                    </div>
                </div>
            @endforeach
        </div>
    </div><!-- .section-content -->
</section>