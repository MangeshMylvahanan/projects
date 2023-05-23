<html>
    <head>
        <title>Laravel Image Upload</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <style>
            form{
                padding: 10px;text-align: left;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>User Details</h2>
                </div>
                <div class="panel-body">
                    <form method="POST" enctype="multipart/form-data" action="/">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Mobile</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profile Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profile Video</label>
                                    <input type="file" name="video" class="form-control">
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        @if (count($errors)>0)
                            <div class="alert alert-danger">
                                <strong>Whoops! there are problems in uploading the image.</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{$message}}</strong>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
