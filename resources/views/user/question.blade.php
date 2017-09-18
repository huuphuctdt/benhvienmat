<section class="section faqs" id="section_71503372">
    <div class="bg section-bg fill bg-fill  bg-loaded" >
    </div><!-- .section-bg -->
    <div class="section-content relative">

        <div class="row"  id="row-1178254518">
            <div class="col medium-12 small-12 large-12"  ><div class="col-inner"  >
                    <h3><span style="font-size: 120%;">CÂU HỎI THƯỜNG GẶP</span></h3>
                    <div class="gap-element" style="display:block; height:auto; padding-top:30px" class="clearfix"></div>
                    <div class="accordion" rel="1">
                        @foreach($questions as $question)
                            @if($question->is_active == 1)
                                <div class="accordion-item">
                                    <a href="#" class="accordion-title plain">
                                        <button class="toggle"><i class="icon-wbc-plus"></i></button><span style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;display: block;width: 100%;">{{ $question->name }}</span>
                                    </a>
                                    <div class="accordion-inner">
                                        {!! nl2br($question->content) !!}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .section-content -->
    <style scope="scope">

        #section_71503372 {
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: rgb(255, 253, 253);
        }
    </style>
</section>