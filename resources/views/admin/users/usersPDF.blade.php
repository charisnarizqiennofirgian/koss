<!DOCTYPE html>
<html>

<head>
    <title>Table Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Table Management Users</h4>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Modal -->
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    @foreach($title as $tt)
                                    <th>{{$tt}}</th>
                                    @endforeach
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach($users as $us)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$us['name']}}</td>
                                    <td>{{$us['email']}}</td>
                                    <td>{{$us['role']}}</td>
                                    <td>{{$us['pekerjaan']}}</td>
                                    <td>{{$us['created_at']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>