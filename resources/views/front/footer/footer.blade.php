<footer class="footer">
    <div id="parallax-footer" class="parallax-levels in-footer">
        <div class="level1">
            <div class="parallax-item-1 h-3 parallax-item left"></div>
            <div class="parallax-item-4 h-5 parallax-item right"></div>
        </div>
        <div class="level2">
            <div class="parallax-item-3 h-4 parallax-item left"></div>
            <div class="parallax-item-7 h-6 parallax-item left"></div>
        </div>
        <div class="level3">
            <div class="parallax-item-5 h-4 parallax-item left"></div>
        </div>
    </div>
    <div class="container">
        <div data-elementor-type="wp-post" data-elementor-id="1673" class="elementor elementor-1673">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-512658e elementor-section-stretched pix-elementor-section-global-bg elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="512658e" data-element_type="section"
                data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-40 elementor-top-column elementor-element elementor-element-3b540c8"
                        data-id="3b540c8" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5ac0006 elementor-widget elementor-widget-image"
                                data-id="5ac0006" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.9.2 - 21-12-2022 */
                                        .elementor-widget-image {
                                            text-align: center
                                        }

                                        .elementor-widget-image a {
                                            display: inline-block
                                        }

                                        .elementor-widget-image a img[src$=".svg"] {
                                            width: 48px
                                        }

                                        .elementor-widget-image img {
                                            vertical-align: middle;
                                            display: inline-block
                                        }
                                    </style> <img width="163" height="46"
                                        src="{{url('admin/img/logo',$contact->logo)}}"
                                        class="attachment-full size-full wp-image-5687" alt="" loading="lazy"
                                        srcset="{{url('admin/img/logo',$contact->logo)}} 163w, {{url('admin/img/logo',$contact->logo)}} 160w"
                                        sizes="(max-width: 163px) 100vw, 163px" />
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7054782 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="7054782" data-element_type="widget"
                                data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <link rel="stylesheet"
                                        href="{{asset('widget-icon-listss.min.css')}}">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-text">{{$contact->address}}</span>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-40 elementor-top-column elementor-element elementor-element-061cad8"
                        data-id="061cad8" data-element_type="column"
                        data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1b47dab elementor-widget elementor-widget-wp-widget-text"
                                data-id="1b47dab" data-element_type="widget"
                                data-widget_type="wp-widget-text.default">
                                <div class="elementor-widget-container">
                                    <h5>Contacts</h5>
                                    <div class="textwidget"></div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9e445fa elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="9e445fa" data-element_type="widget"
                                data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        {{-- <li class="elementor-icon-list-item">
                                            <a href="tel:81023212000">

                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-mobile-alt"></i> </span>
                                                <span class="elementor-icon-list-text">8 102 321-2000</span>
                                            </a>
                                        </li> --}}
                                        <li class="elementor-icon-list-item">
                                            <a href="tel:{{$contact->mobile}}">

                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-mobile-alt"></i> </span>
                                                <span class="elementor-icon-list-text">{{$contact->mobile}}</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="mailto:{{$contact->email}}">

                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="far fa-envelope-open"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">{{$contact->email}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-40 elementor-top-column elementor-element elementor-element-a110612"
                        data-id="a110612" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-2bc0fd1 elementor-widget elementor-widget-wp-widget-text"
                                data-id="2bc0fd1" data-element_type="widget"
                                data-widget_type="wp-widget-text.default">
                                <div class="elementor-widget-container">
                                    <h5>Pages</h5>
                                    <div class="textwidget"></div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-097cbed elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="097cbed" data-element_type="widget"
                                data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <a href="{{route('index')}}">

                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Home</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="{{route('aboutUs')}}">

                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">About Us</span>
                                            </a>
                                        </li>
                                        {{-- <li class="elementor-icon-list-item">
                                            <a href="#">

                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Team</span>
                                            </a>
                                        </li> --}}
                                        {{-- <li class="elementor-icon-list-item">
                                            <a href="#">

                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Shop</span>
                                            </a>
                                        </li> --}}
                                        <li class="elementor-icon-list-item">
                                            <a href="{{route('blog')}}">

                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Blog</span>
                                            </a>
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            <a href="{{route('contact')}}">

                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                </span>
                                                <span class="elementor-icon-list-text">Contacts</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-40 elementor-top-column elementor-element elementor-element-9024a3c"
                        data-id="9024a3c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-97b5489 elementor-widget elementor-widget-wp-widget-text"
                                data-id="97b5489" data-element_type="widget"
                                data-widget_type="wp-widget-text.default">
                                <div class="elementor-widget-container">
                                    <h5>Services</h5>
                                    <div class="textwidget"></div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-de8acc9 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="de8acc9" data-element_type="widget"
                                data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        @foreach ($projects as $k=>$v)
                                            @if ($k<5)
                                            <li class="elementor-icon-list-item">
                                                <a href="{{route('serviceDetails',$v->id)}}">
    
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">{{$v->title}}</span>
                                                </a>
                                            </li>
                                            @endif 
                                        @endforeach
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-d2896f8"
                        data-id="d2896f8" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-3f92852 elementor-widget elementor-widget-wp-widget-text"
                                data-id="3f92852" data-element_type="widget"
                                data-widget_type="wp-widget-text.default">
                                <div class="elementor-widget-container">
                                    <h5>Instagram</h5>
                                    <div class="textwidget">
                                        <div id="sb_instagram"
                                            class="sbi sbi_mob_col_1 sbi_tab_col_2 sbi_col_3 sbi_width_resp"
                                            style="padding-bottom: 10px;" data-feedid="*1" data-res="auto"
                                            data-cols="3" data-colsmobile="1" data-colstablet="2" data-num="6"
                                            data-nummobile="6" data-shortcode-atts="{}" data-postid="76"
                                            data-locatornonce="0a529c1aff" data-sbi-flags="favorLocal">

                                            <div id="sbi_images" style="padding: 5px;">
                                                @foreach ($img as $k=>$v)
                                                <div class="sbi_item sbi_type_image sbi_new sbi_transition"
                                                id="sbi_17921099939583896" data-date="1661619541" >
                                                <div class="sbi_photo_wrap">
                                                    <a class="sbi_photo" 
                                                        href="https://www.instagram.com"
                                                        target="_blank" rel="noopener nofollow"
                                                        data-full-res="{{$v->image}}"
                                                        data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.29350-15\/301409947_106817685410325_363492492160936089_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=gEd0YQdtHcoAX-6rcyF&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AfCdzPkNZc_Q-RZSLduEdUpS85oMyo3Atv5DDgZKtq-8IQ&amp;oe=6450BF8A&quot;,&quot;150&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.29350-15\/301409947_106817685410325_363492492160936089_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=gEd0YQdtHcoAX-6rcyF&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AfCdzPkNZc_Q-RZSLduEdUpS85oMyo3Atv5DDgZKtq-8IQ&amp;oe=6450BF8A&quot;,&quot;320&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.29350-15\/301409947_106817685410325_363492492160936089_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=gEd0YQdtHcoAX-6rcyF&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AfCdzPkNZc_Q-RZSLduEdUpS85oMyo3Atv5DDgZKtq-8IQ&amp;oe=6450BF8A&quot;,&quot;640&quot;:&quot;https:\/\/scontent.cdninstagram.com\/v\/t51.29350-15\/301409947_106817685410325_363492492160936089_n.jpg?_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=gEd0YQdtHcoAX-6rcyF&amp;_nc_ht=scontent.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AfCdzPkNZc_Q-RZSLduEdUpS85oMyo3Atv5DDgZKtq-8IQ&amp;oe=6450BF8A&quot;}">
                                                        <span class="sbi-screenreader">Instagram post
                                                            17921099939583896</span>
                                                        <img src="https://nordis.true-emotions.studio/wp-content/plugins/instagram-feed/img/placeholder.png"
                                                            alt="Instagram post 17921099939583896">
                                                    </a>
                                                </div>
                                            </div>
                                                @endforeach
                                               
                                               
                                            </div>

                                            <div id="sbi_load">


                                                <span class="sbi_follow_btn sbi_custom">
                                                    <a href="https://www.instagram.com"
                                                        style="background: rgb(64,139,209);" target="_blank"
                                                        rel="nofollow noopener">
                                                        <svg class="svg-inline--fa fa-instagram fa-w-14"
                                                            aria-hidden="true" data-fa-processed=""
                                                            aria-label="Instagram" data-prefix="fab"
                                                            data-icon="instagram" role="img"
                                                            viewBox="0 0 448 512">
                                                            <path fill="currentColor"
                                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                            </path>
                                                        </svg> <span>Follow on Instagram</span>
                                                    </a>
                                                </span>

                                            </div>

                                            <span class="sbi_resized_image_data" data-feed-id="*1"
                                                data-resized="{&quot;17921099939583896&quot;:{&quot;id&quot;:&quot;301409947_106817685410325_363492492160936089_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17900942984645025&quot;:{&quot;id&quot;:&quot;301223992_5382473885184606_4565256985828955994_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;18153571888250216&quot;:{&quot;id&quot;:&quot;301056002_443081617755477_4510084849182238637_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17969664541677259&quot;:{&quot;id&quot;:&quot;300651129_1129498977912744_7079837899052194250_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17954118182063017&quot;:{&quot;id&quot;:&quot;300798137_386323777016237_4884040941326175143_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17988847624553970&quot;:{&quot;id&quot;:&quot;300643488_521324396572621_6482788663424422392_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}}}">
                                            </span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-79ade26 elementor-section-stretched pix-elementor-section-global-bg elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="79ade26" data-element_type="section"
                data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-decf940"
                        data-id="decf940" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ea57659 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="ea57659" data-element_type="widget"
                                data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="far fa-copyright"></i> </span>
                                            <span class="elementor-icon-list-text">2023 All right
                                                reserved</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c6cf2d6"
                        data-id="c6cf2d6" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b40cd47 elementor-widget elementor-widget-nordis-social-icons"
                                data-id="b40cd47" data-element_type="widget"
                                data-widget_type="nordis-social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="pix-social">
                                        <a class="pix-social-icon pix-social-icon-twitter elementor-repeater-item-19cb804"
                                            href="#" target="_blank" rel="nofollow"><span
                                                class="elementor-screen-only">Twitter</span><i
                                                class="fab fa-twitter"></i></a><a
                                            class="pix-social-icon pix-social-icon-linkedin-in elementor-repeater-item-0fdb796"
                                            href="#" target="_blank" rel="nofollow"><span
                                                class="elementor-screen-only">Linkedin-in</span><i
                                                class="fab fa-linkedin-in"></i></a><a
                                            class="pix-social-icon pix-social-icon-facebook-f elementor-repeater-item-543f1a8"
                                            href="#" target="_blank" rel="nofollow"><span
                                                class="elementor-screen-only">Facebook-f</span><i
                                                class="fab fa-facebook-f"></i></a><a
                                            class="pix-social-icon pix-social-icon-instagram elementor-repeater-item-a13221f"
                                            href="#" target="_blank" rel="nofollow"><span
                                                class="elementor-screen-only">Instagram</span><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</footer>