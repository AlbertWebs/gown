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
                    <li class="active-bre"><a href="#"> Add New Product</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/products"><i class="fa fa-backward" aria-hidden="true"></i> All Products</a>
                    </li>
                </ul>

            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add Product</h4>
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
                        <form method="POST" action="{{url('/')}}/admin/add_Product" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="title" id="list-title" type="text" class="validate" required>
                                    <label for="list-title">Product Title</label>
                                </div>

                                <div class="input-field col s12">
                                    <input autocomplete="off" name="price" id="list-title"  type="number" class="validate" required>
                                    <label for="list-title">Product Price</label>
                                </div>

                                <div class="input-field col s12">
                                    <input autocomplete="off" name="price_hire" id="list-title"  type="number" class="validate">
                                    <label for="list-title">Hire Price Per Day</label>
                                </div>


                                {{--  --}}
                                <div class="input-field col s12">
                                    <select required name="category" class="icons" id="mydiv">
                                        <option value="" disabled selected>Choose your Category</option>
                                        @foreach ($Category as $Categories)
                                        <option value="{{$Categories->id}}" data-icon="{{$Categories->image}}" class="circle">{{$Categories->title}}</option>
                                        @endforeach
                                    </select>
                                    <label>Choose Category</label>
                                </div>




                                {{--  --}}
                                <div class="input-field col s12">
                                    <select required name="subcategory" class="icons" id="mydiv">
                                        <option value="" disabled selected>Choose your Sub Category</option>
                                        @foreach ($SubCategory as $Categories)
                                        <option value="{{$Categories->id}}" data-icon="{{$Categories->image}}" class="circle">{{$Categories->title}}</option>
                                        @endforeach
                                    </select>
                                    <label>Choose Sub Category</label>
                                </div>
                                {{--  --}}
                                <div class="input-field col s12" id="Menu2Container">
                                    <select required name="gown_class" class="icons">
                                        <?php

                                            $GClass = DB::table('gown_classes')->get();
                                            ?>


                                        @foreach ($GClass as $gclass)
                                        <option value="{{$gclass->slung}}" data-icon="{{$gclass->image}}" class="circle">{{$gclass->title}}</option>
                                        @endforeach
                                        <option value=""class="circle">Legal Attire</option>
                                        <option value=""class="circle">Church Attire</option>
                                    </select>
                                    <label>Choose Gown Class</label>
                                </div>




                                <div class="input-field col s12">
                                    <div class="file-field">
                                        <div class="btn">
                                            <span>File(272px by 377px)</span>
                                            <input required name="image_one" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input  class="file-path validate" type="text" placeholder="Upload Product Main Image, Size 390 by 480">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea required id="article-ckeditor" name="content" class="materialilze-textarea" placeholder="content"></textarea>
                                    {{-- <label for="textarea1">Blog Descriptions:</label> --}}
                                </div>
                            </div><br><br>




                                <script src="https://amanivehiclesounds.co.ke/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                                <script>
                                    CKEDITOR.replace( 'article_ckeditor' );
                                </script>



                            <div class="row">
                                <div class="input-field col s12">
                                    <input required autocomplete="off" value="{{Auth::user()->name }}" id="post-auth" name="author" type="text" class="validate">
                                    <label for="post-auth">Author Name</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Submit">
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

{{--  --}}
<div id="ex1" class="modal">
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add New Category</h4>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" id="categoryAddForm">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input autocomplete="off" name="title" id="CategoryTitle" type="text" class="validate">
                                    <label for="CategoryName">Category Name</label>
                                </div>
                            </div>
                            <div class="row" id="submitButton">
                                <div class="input-field col s12">
                                    <input  type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>

                            <div class="tab-inn" id="loading-bar">
                                <div class="progress">
                                    <div class="indeterminate"></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
{{-- <a href="#" rel="modal:close">Close</a> --}}
<script type="text/javascript">
        // A $( document ).ready() block.
    $( document ).ready(function() {
        $('#loading-bar').hide();
    });

    $('#categoryAddForm').on('submit',function(event){
        event.preventDefault();
        $('#loading-bar').show();


        let title = $('#CategoryTitle').val();


        $.ajax({
          url: "{{url('/')}}/admin/addCategoryAjaxRequest",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            title:title,
          },
          success:function(response){
            $('#loading-bar').hide();
            $('#submitButton').html('<center><span class="alert-success text-center">Category Added Successfully! Refreshing page...........</span></center>').delay(3000);
            $('#categoryAddForm')[0].reset();
            setTimeout(function() {
                location.reload();
            }, 5000);
          },
         });
        });
      </script>
</div>
{{--  --}}
@endsection
