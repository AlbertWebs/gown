<!DOCTYPE html>

<html>

<head>

    <title>Drop Zone for {{$Product->title}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

</head>

<body>



<div class="container">

    <div class="row">

        <div class="col-md-12">

            <h1>Drop Zone for {{$Product->title}}</h1>



            <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">

                <input type="hidden" name="product_id" value="{{$Product->id}}">
                @csrf

                <div>

                    <h4>Upload Other  {{$Product->title}}  Click On Box</h4>

                </div>

            </form>

        </div>

    </div>

</div>



<script type="text/javascript">



        Dropzone.autoDiscover = false;



        var dropzone = new Dropzone('#image-upload', {

              thumbnailWidth: 200,

              maxFilesize: 1,

              acceptedFiles: ".jpeg,.jpg,.png,.gif"

            });



</script>



</body>

</html>
