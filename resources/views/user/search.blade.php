<main id="main" class="">

    <div id="content" class="blog-wrapper blog-archive page-wrapper">

        <div class="row row-large ">

            <div class="post-sidebar large-3 col">
                <div id="secondary" class="widget-area " role="complementary">
                    <aside id="text-3" class="widget widget_text">
                        <div class="textwidget">
                            <ul>
                                @foreach($post_categorys as $post_category)
                                <li>
                                    <a href="{{ url($post_category->name_slug).'/' }}" title="{{ $post_category->name }}">{{ $post_category->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div><!-- #secondary -->
            </div><!-- .post-sidebar -->

            <div class="large-9 col medium-col-first">
                <div id="" class="row large-columns-3 medium-columns- small-columns-1 row-masonry" data-packery-options="{&quot;itemSelector&quot;: &quot;.col&quot;, &quot;gutter&quot;: 0, &quot;presentageWidth&quot; : true}" style="position: relative; height: 699.641px;">
                    @foreach($post_search as $search)
                        <div class="col post-item">
                        <div class="col-inner">
                            <a href="{{ url($search->post_category->name_slug.'/'.str_slug($search->name).'-'.$search->id.'.html')  }}" class="plain">
                                <div class="box box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover" style="padding-top:56%;">
                                            <img width="300" height="213"
                                                 src="{{ url('images/'.$search->post_category->image) }}"
                                                 class="attachment-medium size-medium wp-post-image" alt=""
                                                 sizes="(max-width: 300px) 100vw, 300px">
                                        </div>
                                    </div><!-- .box-image -->
                                    <div class="box-text text-left">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large ">{{ $search->name }}</h5>
                                            <div class="is-divider"></div>
                                            <p class="from_the_blog_excerpt ">{{ mb_strimwidth(strip_tags($search->content),0,50,'...') }}</p>
                                        </div><!-- .box-text-inner -->
                                    </div><!-- .box-text -->
                                    <div class="badge absolute top post-date badge-square">
                                        <div class="badge-inner">
                                            <span class="post-date-day">{{ $search->created_at->format('d') }}</span><br>
                                            <span class="post-date-month is-xsmall">{{ $search->created_at->format('M') }}</span>
                                        </div>
                                    </div>
                                </div><!-- .box -->
                            </a><!-- .link -->
                        </div><!-- .col-inner -->
                    </div><!-- .col -->
                    @endforeach
                    {{ $post_search->links() }}
                </div>
            </div> <!-- .large-9 -->

        </div><!-- .row -->

    </div><!-- .page-wrapper .blog-wrapper -->
</main>