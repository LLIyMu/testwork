<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">

    </script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <section class="content">
        @include('errors.errors')
        <!-- Default box -->
            <div class="box">

                <form class="myform" action="{{route('form.store')}}" method="post">
                    @csrf
                    <div class="box-header with-border">
                        <h3 class="box-title">Форма ввода</h3>
                    </div>

                    <div class="box-body">
                        <div class="col-md-6 pl-0">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name">
                            </div>
                        </div>
                        <div class="col-md-6 pl-0">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Широта</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="latitude">
                            </div>
                        </div>
                        <div class="col-md-6 pl-0">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Долгота</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="longitude">
                            </div>
                        </div>
                        <div class="col-md-6 pl-0">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Количество населения</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="population">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-right">Добавить</button>
                    </div>
                </form>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Таблица</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Долгота</th>
                            <th>Широта</th>
                            <th>Количество населения</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forms as $form)
                            <tr>
                                <td>{{$form->name}}</td>
                                <td>{{$form->latitude}}</td>
                                <td>{{$form->longitude}}</td>
                                <td>{{$form->population}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </section>
    </div>
</div>
<script src="{{asset('/js/script.js')}}"></script>
</body>
</html>
