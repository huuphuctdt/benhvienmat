<main id="main" class="">

    <div id="content" class="blog-wrapper blog-single page-wrapper">

        <div class="row row-large ">

            <div class="post-sidebar large-3 col">
                <div id="secondary" class="widget-area " role="complementary">
                    <aside id="text-3" class="widget widget_text">
                        <div class="textwidget">
                            <ul>
                                @foreach($post->post as $p)
                                    @if($loop->index == 11) @break @endif
                                <li><a href="{{ url($p->post_category->name_slug.'/'.str_slug($p->name).'-'.$p->id.'.html')  }}" title="{{ $p->name }}">{{ $p->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </aside></div><!-- #secondary -->
            </div><!-- .post-sidebar -->
            @foreach($post->post as $p)
                @if($loop->index == 1) @break @endif
            <div class="large-9 col medium-col-first">
                <article id="post-1313" class="post-1313 post type-post status-publish format-standard hentry">
                    <div class="article-inner ">
                        <div class="entry-content single-page">
                            <h3 style="text-align: center;">{{ $p->name }}</h3>
                            {!! $p->content !!}
                        </div><!-- .entry-content2 -->
                    </div><!-- .article-inner -->
                </article><!-- #-1313 -->
            </div> <!-- .large-9 -->
            @endforeach
        </div><!-- .row -->

    </div><!-- #content .page-wrapper -->


</main>