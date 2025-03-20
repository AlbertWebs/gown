 <div class="inner-nav desktop-nav">
                    <ul class="clearlist local-scroll">
                        <li><a href="{{url('/')}}" class="@if($Page_title=="home") active @endif">Home</a></li>
                        <li>
                            <a href="{{route('gown-for-hire')}}" class="mn-has-subs @if($Page_title=="gown-for-hire") active @endif" role="button" aria-expanded="false" aria-haspopup="true">Graduation Attire <i class="mi-chevron-down"></i></a>

                            <!-- Sub -->
                            <ul class="mn-sub" style="display: none;">
                                <?php
                                    $Gowns = DB::table('gowns')->where('category_id','1')->where('home','1')->get();
                                ?>

                                @foreach ($Gowns as $Gown)
                                <li>
                                    <a href="{{route('gown-for-hire-single', $Gown->gown_class)}}" role="button" aria-expanded="false" aria-haspopup="true">{{$Gown->title}} </a>
                                </li>
                                @endforeach

                            </ul>
                            <!-- End Sub -->

                        </li>





                        <li><a class="@if($Page_title=="legal-attire") active @endif" href="{{route('legal-attire')}}">Legal Attire</a></li>
                        <li><a  class="@if($Page_title=="church-wear") active @endif" href="{{route('church-wear')}}">Church Wear</a></li>
                        <li><a class="@if($Page_title=="about-us") active @endif" href="{{route('about-us')}}">About Us</a></li>

                        <?php
                           $Cats = \App\Models\Category::all();
                        ?>
                        {{-- <li>
                            <a href="#" class="mn-has-sub @if($Page_title=="shop") active @endif" role="button" aria-expanded="false" aria-haspopup="true"> Shop Attire <i class="mi-chevron-down"></i></a>

                            <!-- Sub -->
                            <ul class="mn-sub" style="display: none;">


                                @foreach ($Cats as $cats)
                                <li>
                                    <a href="{{route('shop-attire', $cats->slung)}}" role="button" aria-expanded="false" aria-haspopup="true">{{$cats->title}} </a>
                                </li>
                                @endforeach




                            </ul>
                            <!-- End Sub -->

                        </li> --}}



                        <!-- Item With Sub -->
                        <li>
                            <a href="#" class="mn-has-sub @if($Page_title=="shop") active @endif"><i class="mi-shopping-cart"></i> Shop Attire <i class="mi-chevron-down"></i></a>

                            <!-- Sub -->
                            <ul class="mn-sub">
                                @foreach ($Cats as $cats)

                                <?php
                                    $SubCategory = DB::table('sub_categories')->where('category_id', $cats->id)->get();
                                ?>
                                <li>


                                    @if($SubCategory->isEmpty())
                                      <a class="mn-has-subs" href="{{route('shop-attire', $cats->slung)}}" >{{$cats->title}}</a>
                                    @else
                                      <a class="mn-has-sub" href="{{route('shop-attire', $cats->slung)}}" >{{$cats->title}} <i class="mi-chevron-right right"></i></a>
                                    @endif


                                    <!-- Sub Sub -->
                                    <ul class="mn-sub">

                                        @foreach ($SubCategory as $subcategory)
                                        <?php
                                           $SpecialGown = DB::table('gowns')->where('category_id',$cats->id)->where('sub_category_id', $subcategory->id)->limit(10)->get();
                                        ?>

                                        <li>

                                            @if($SpecialGown->isEmpty())
                                               <a class="mn-has-subs" href="{{route('shop-attire-collection', ['category_id' => $cats->slung, 'subcategory_id'=>$subcategory->slung])}}"  >{{$subcategory->title}} <i class="mi-chevron-right right"></i></a>
                                            @else
                                               <a class="mn-has-sub" href="{{route('shop-attire-collection', ['category_id' => $cats->slung, 'subcategory_id'=>$subcategory->slung])}}"  >{{$subcategory->title}} <i class="mi-chevron-right right"></i></a>
                                            @endif
                                            <ul class="mn-sub">
                                                @foreach ($SpecialGown as $specialgown)
                                                <li>
                                                    <a href="{{route('our-products',$specialgown->slung)}}" target="_blank">{{$specialgown->title}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach



                                    </ul>
                                    <!-- End Sub Sub -->


                                </li>
                                @endforeach

                            </ul>
                            <!-- End Sub -->

                        </li>
                        <!-- End Item With Sub -->


                        <li><a class="@if($Page_title=="blog") active @endif" href="{{route('blog')}}" href="#">Blog</a></li>
                        <li><a class="@if($Page_title=="blog") active @endif" href="{{route('bulk-inquiry')}}" href="#">Bulk Hire</a></li>
                        <li><a class="@if($Page_title=="contact-us") active @endif" href="{{route('contact-us')}}">Contact Us</a></li>
                    </ul>



                    <ul class="items-end clearlist local-scroll">
                        <li>
                            <a href="{{route('contact-us')}}" class="opacity-1 no-hover">
                                <span class="btn btn-mod btn-small btn-border-w btn-circle" data-btn-animate="y">
                                    Let’s talk
                                    <i class="icon-arrow-right1 size-16"></i>
                                </span>
                            </a>
                        </li>
                    </ul>

                </div>
