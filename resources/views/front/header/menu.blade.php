

    <div class="menu pix-menu">
        <div class="container">
            <div class="menu__inner">
                <a class="logo mt-lg-0 mt-sm-n20" href="{{route('index')}}/" title="Nordis"
                    style="width:160px;">
                    <img src="{{url('admin/img/logo',$contact->logo)}}"
                        alt="Nordis" />
                </a>
                <nav>
                    <ul id="menu-main-menu" class="">
                        <li id="menu-item-3571"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-76 current_page_item menu-item-3571">
                            <a href="{{route('index')}}" aria-current="page">Home</a></li>
                        <li id="menu-item-2076"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2076"><a
                                href="{{route('aboutUs')}}">About us</a></li>
                        <li id="menu-item-5551"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5551">
                            <a href="{{route('services')}}">Services <span><i
                                        class="pix-icon-chevron2-bottom"></i></span></a>
                            <ul class="sub-menu">
                                @foreach ($menu as $v)
                                <li id="menu-item-7004"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7004">
                                <a
                                    href="{{route('serviceDetails',$v->id)}}">{{$v->title}}</a>
                            </li>
                                @endforeach
                                
                               
                            </ul>
                        </li>
                        <li id="menu-item-75"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a
                                href="{{route('blog')}}">Blog</a></li>
                        <li id="menu-item-308"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-308"><a
                                href="{{route('contact')}}">Contacts</a></li>
                    </ul> <a class="menu__burger" href="#" title="Menu"><i class="pix-icon-menu"></i></a>
                </nav>
                {{-- <ul class="menu__icons">
                    <li>
                        <a class="btn" target="_blank" href="#">
                            <span class="pix-button-ripple-title">
                                <span data-text="Booking">Booking</span>
                            </span>
                        </a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
