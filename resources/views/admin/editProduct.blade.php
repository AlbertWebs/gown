@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<style>
    .modal a.close-modal{
        top:0px !important;
        right:0px !important;
    }
</style>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.sidebar')

        <!--== BODY INNER CONTAINER ==-->

        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Edit {{$Product->name}}</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/products"><i class="fa fa-backward" aria-hidden="true"></i> All Products</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit {{$Product->name}}</h4>
                        <center>
                            @if(Session::has('message'))
                                          <div class="alert alert-success">{{ Session::get('message') }}</div>
                           @endif

                           @if(Session::has('messageError'))
                                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                           @endif
                        </center>
                    </div>
                    <div class="bor">
                        <form method="POST" action="{{url('/')}}/admin/edit_Product/{{$Product->id}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="title" id="list-title" value="{{$Product->title}}" type="text" class="validate" required>
                                    <label for="list-title">Product Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="price" id="list-title" value="{{$Product->price}}" type="number" class="validate" required>
                                    <label for="list-title">Product Price</label>
                                </div>

                                <div class="input-field col s12">
                                    <input autocomplete="off" name="price_hire" id="list-title" value="{{$Product->price_hire}}"  type="number" class="validate">
                                    <label for="list-title">Hire Price Per Day</label>
                                </div>



                            </div>
                            <div class="row">

                                {{--  --}}
                                <div class="input-field col s12">
                                    <select required name="category" class="icons" id="mydiv">
                                        <?php $CategorySelected = DB::table('categories')->where('id',$Product->category)->get() ?>
                                        @foreach ($CategorySelected as $CatSel)
                                        <option value="{{$CatSel->id}}" selected>{{$CatSel->title}}</option>
                                        @endforeach
                                        @foreach ($Category as $Categories)
                                        <option value="{{$Categories->id}}" data-icon="{{$Categories->image}}" class="circle">{{$Categories->title}}</option>
                                        @endforeach
                                    </select>
                                    <label>Choose Category</label>
                                </div>

                                <div class="section-space col s12"></div>
                            </div>

                            {{--  --}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <select required name="subcategory" class="icons" id="mydiv">
                                        <?php $CategorySelected = DB::table('sub_categories')->where('id',$Product->sub_category_id)->get() ?>
                                        @foreach ($CategorySelected as $CatSel)
                                        <option value="{{$CatSel->id}}" selected>{{$CatSel->title}}</option>
                                        @endforeach
                                        @foreach ($SubCategory as $Categories)
                                           <option value="{{$Categories->id}}" data-icon="{{$Categories->image}}" class="circle">{{$Categories->title}}</option>
                                        @endforeach
                                    </select>
                                    <label>Choose Sub Category</label>
                                </div>
                            </div>
                            {{--  --}}

                            <div class="row">

                                {{--  --}}
                                <div class="input-field col s12">
                                    <select required name="gown_class" class="icons" id="mydiv">
                                        <?php
                                            $GwonClass = DB::table('gown_classes')->where('id',$Product->slung)->get();
                                            $GClass = DB::table('gown_classes')->get();
                                         ?>
                                        @foreach ($GwonClass as $gownclass)
                                        <option value="{{$gownclass->slung}}" selected>{{$gownclass->title}}</option>
                                        @endforeach

                                        @foreach ($GClass as $gclass)
                                        <option value="{{$gclass->slung}}" data-icon="{{$gclass->image}}" class="circle">{{$gclass->title}}</option>
                                        @endforeach
                                        <option value=""class="circle">Legal Attire</option>
                                        <option value=""class="circle">Church Attire</option>
                                    </select>
                                    <label>Choose Gown Class</label>
                                </div>

                                <div class="section-space col s12"></div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea required id="article-ckeditor" name="content" class="materialilze-textarea" placeholder="content">{{$Product->content}}</textarea>
                                </div>
                            </div><br><br>




                            <script src="https://amanivehiclesounds.co.ke/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                            <script>
                                CKEDITOR.replace( 'article_ckeditor' );
                            </script>


                           {{-- Images --}}
                            <style>
                                .btn-file {
                                    position: relative;
                                    overflow: hidden;
                                }
                                .btn-file input[type=file] {
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    min-width: 33.33%;
                                    min-height: 100%;
                                    font-size: 100px;
                                    text-align: right;
                                    filter: alpha(opacity=0);
                                    opacity: 0;
                                    outline: none;
                                    background: white;
                                    cursor: inherit;
                                    display: block;
                                }

                                #img-upload{
                                    width: 33.33%;
                                }
                                .image-preview{
                                    max-height:100%;
                                    height:100% !important;
                                }
                            </style>
                            {{-- Style --}}
                            <div class="row">
                                <div class="">
                                    <div class="input-field col s3 col-lg-6">
                                        <div class="form-group">
                                            <label>Image One</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                       <small> One: Size 277 by 377  Browse… </small><input name="image_one" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:100%" src="{{$Product->image}}"/>
                                        </div>
                                    </div>




                                </div>
                            </div>

                            <input type="hidden" name="image_one_cheat" value="{{$Product->image}}">
                            <input type="hidden" name="image_two_cheat" value="{{$Product->image_two}}">
                            <input type="hidden" name="image_three_cheat" value="{{$Product->image_three}}">
                            <input type="hidden" name="image_four_cheat" value="{{$Product->image_four}}">

                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>

@endsection
