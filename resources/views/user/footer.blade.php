<footer id="footer" class="footer-wrapper">

    <section class="section" id="section_9480991">
        <div class="bg section-bg fill bg-fill  bg-loaded" ></div><!-- .section-bg -->
        <div class="section-content relative">
            <div class="row"  id="row-21173226">
                <div class="col medium-12 large-8">
                    <div class="col-inner" style="padding:0px 0px 0 0px;margin:0px 0px 0px 0;">
                        <h3><span style="font-size: 130%; color: #ffffff;">BẢN ĐỒ</span></h3>
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCnXkUTo6i61t0tQZ8TFPVNf5rq_ClT3Zo'></script>
                        <div id="parent_gmap_canvas" >
                            <div id='gmap_canvas'>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400.7778435484991!2d105.43215002629893!3d10.37476672812762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e210e64b194b5ae!2zQuG7h25oIFZp4buHbiBN4bqvdCBMb25nIFh1ecOqbg!5e0!3m2!1svi!2s!4v1505463796624"
                                        frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <a href='https://www.embedmap.net/'>Bệnh viện mắt Long Xuyên</a>
                        {{--<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=4329748e8238d0ed5ad369e33892ee00ecc4badd'></script>--}}
                        {{--<script type='text/javascript'>--}}
                            {{--function init_map() {--}}
                                {{--var myOptions = {--}}
                                    {{--zoom: 15,--}}
                                    {{--center: new google.maps.LatLng(10.3747667,105.43215,20),--}}
                                    {{--mapTypeId: google.maps.MapTypeId.ROADMAP--}}
                                {{--};--}}
                                {{--map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);--}}
                                {{--marker = new google.maps.Marker({--}}
                                    {{--map: map,--}}
                                    {{--position: new google.maps.LatLng(10.376471,105.431842)--}}
                                {{--});--}}
                                {{--infowindow = new google.maps.InfoWindow({content: '<strong>Bệnh viện mắt Long Xuyên</strong><br>17i1 Lý Thái Tổ (nối dài) - Ung Văn Khiêm , P. Đông Xuyên, Tp Long Xuyên<br>'});--}}
                                {{--google.maps.event.addListener(marker, 'click', function () {--}}
                                    {{--infowindow.open(map, marker);--}}
                                {{--});--}}
                                {{--infowindow.open(map, marker);--}}
                            {{--}--}}
                            {{--google.maps.event.addDomListener(window, 'load', init_map);--}}
                        {{--</script>--}}

                    </div>
                </div>
                <div class="col medium-12 large-4">
                    <div class="col-inner" style="padding:0px 0px 0 0px;margin:0px 0px 0px 0;">
                        <h3><span style="font-size: 130%; color: #ffffff;">LIÊN HỆ</span></h3>
                        <p class="po-contact"><i class="fa fa-map-marker"></i> {{ $footer->address }}</p>
                        <p class="po-contact"><i class="fa fa-phone"></i><a href="tel:02963522888"> {{ $footer->phone }}</a></p>
                        <p class="po-contact"><i class="fa fa-envelope"></i><a href="mailto:{{ $footer->gmail }}"> {{ $footer->gmail }}</a></p>
                    </div>
                    <div class="social-icons">
                        <a href="{{ $footer->facebook }}" target="_blank" class="fa fa-facebook" title="facebook"></a>
                        <a href="{{ $footer->twitter }}" target="_blank" class="fa fa-twitter" title="twitter"></a>
                        <a href="{{ $footer->linkedin }}" target="_blank" class="fa fa-linkedin" title="linkedin"></a>
                        <a href="{{ $footer->google_plus }}" target="_blank" class="fa fa-google-plus" title="google-plus"></a>
                        <a href="{{ $footer->instagram }}" target="_blank" class="fa fa-instagram" title="instagram"></a>
                        <a href="{{ $footer->chart }}" target="_blank" class="fa fa-area-chart" title="chart"></a>
                    </div>
                </div>
            </div>
            <div class="text-center"><div class="is-divider divider clearfix" style="margin-top:0px;margin-bottom:0px;max-width:100%;height:1px;background-color:rgb(255, 255, 255);"></div></div><!-- .divider -->
        </div><!-- .section-content -->
        <style scope="scope">

        </style>
    </section>
    <div class="absolute-footer dark medium-text-center small-text-center">
        <div class="container clearfix">
            <div class="footer-primary pull-left">
                <div class="copyright-footer">
                    <p style="text-align: center; color: white">{{ $footer->copy_right }}</p>
                </div>
            </div><!-- .left -->
        </div><!-- .container -->
    </div><!-- .absolute-footer -->
    <a href="#top" class="back-to-top button invert plain is-outline hide-for-medium icon circle fixed bottom z-1" id="top-link"><i class="icon-angle-up" ></i></a>

</footer><!-- .footer-wrapper -->