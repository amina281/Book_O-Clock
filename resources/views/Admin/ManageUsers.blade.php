@extends('layouts.admin')

@section('styles')
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


@endsection

@section('content')

    <br>
    <div class="row">
        <div class="table table-responsive">
            <table class="table table-bordered" id="table">
                <tr style="background-color: #7da8c3">
                    <th width="30px">No</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Verified</th>
                    <th>Actions</th>
                    <th class="text-center" width="150px">
                        <a href="#" class="create-modal btn btn-success btn-sm">
                            <i class="glyphicon glyphicon-plus"></i>
                        </a>
                    </th>
                </tr>
                {{ csrf_field() }}

                @foreach ($user as $value)
                    <tr class="post{{$value->id}}">
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>********</td>
                        <td><input type="checkbox"  name="verified" class="switch-input" onclick="return false;" value="1" {{  $value->verified ==1 ? 'checked="checked"' : '' }}/></td>
                        <td>
                            <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-name="{{$value->name}}" data-email="{{$value->email}}" data-password="{{$value->password}}">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-name="{{$value->name}}" data-email="{{$value->email}}" data-password="{{$value->password}}">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-name="{{$value->name}}" data-email="{{$value->email}}" data-password="{{$value->password}}">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{$post->links()}}
    </div>
    {{-- Modal Form Create Post --}}
    <div id="create" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group row add">
                            <label class="control-label col-sm-2">Name :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="name"
                                       placeholder="Your Name Here" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Email :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="body" name="email"
                                       placeholder="Your Email Here" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Password:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="body" name="password"
                                       placeholder="Your Password Here" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit" id="add">
                        <span class="glyphicon glyphicon-plus"></span>Save Post
                    </button>
                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remobe"></span>Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Form Show POST --}}
    <div id="show" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">ID :</label>
                        <b id="i"/>
                    </div>
                    <div class="form-group">
                        <label for="">Name :</label>
                        <b id="ne"/>
                    </div>
                    <div class="form-group">
                        <label for="">Email :</label>
                        <b id="em"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Form Edit and Delete Post --}}
    <div id="myModal"class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="modal">
                        <div class="form-group">
                            <label class="control-label col-sm-2"for="id">ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fid" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="n">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="e"></input>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="p"></input>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Verified</label>
                            <div class="col-sm-10">
                                <input type="checkbox"  name="verified" class="switch-input" id="v"  value="1"/>
                            </div>
                        </div>

                    </form>
                    {{-- Form Delete Post --}}
                    <div class="deleteContent">
                        Are You sure want to delete <span class="title"></span>?
                        <span class="hidden id"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn actionBtn" data-dismiss="modal">
                        <span id="footer_action_button" class="glyphicon"></span>
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class="glyphicon glyphicon"></span>close
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection

                @section('javascripts')
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

                    <script type="text/javascript">
                        {{-- ajax Form Add Post--}}
                        $(document).on('click','.create-modal', function() {
                            $('#create').modal('show');
                            $('.form-horizontal').show();
                            $('.modal-title').text('Add User');
                        });
                        $("#add").click(function() {
                            $.ajax({
                                type: 'POST',
                                url: 'addUser',
                                data: {
                                    '_token': $('input[name=_token]').val(),
                                    'name': $('input[name=name]').val(),
                                    'email': $('input[name=email]').val(),
                                    'password': $('input[name=password]').val()
                                },
                                success: function(data){
                                    if ((data.errors)) {
                                        $('.error').removeClass('hidden');
                                        $('.error').text(data.errors.name);
                                        $('.error').text(data.errors.email);
                                        $('.error').text(data.errors.password);
                                    } else {
                                        $('.error').remove();
                                        $('#table').append("<tr class='post" + data.id + "'>"+
                                            "<td>" + data.id + "</td>"+
                                            "<td>" + data.name + "</td>"+
                                            "<td>" + data.email + "</td>"+
                                            "<td>" + data.password + "</td>"+

                                            "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-name='" + data.name + "' data-email='" + data.email + "' data-password= '"+ data.password +"'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-name='" + data.name + "' data-email='" + data.email + "' data-password= '"+ data.password +"'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-name='" + data.name + "' data-email='" + data.email + "'data-password= '"+ data.password +"'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                                            "</tr>");
                                    }
                                },
                            });

                        });

                        // function Edit POST
                        $(document).on('click', '.edit-modal', function() {
                            $('#footer_action_button').text(" Update User");
                            $('#footer_action_button').addClass('glyphicon-check');
                            $('#footer_action_button').removeClass('glyphicon-trash');
                            $('.actionBtn').addClass('btn-success');
                            $('.actionBtn').removeClass('btn-danger');
                            $('.actionBtn').addClass('edit');
                            $('.modal-title').text('Edit User');
                            $('.deleteContent').hide();
                            $('.form-horizontal').show();
                            $('#fid').val($(this).data('id'));
                            $('#n').val($(this).data('name'));
                            $('#e').val($(this).data('email'));
                            $('#p').val($(this).data('password'));

                            $('#myModal').modal('show');
                        });

                        $('.modal-footer').on('click', '.edit', function() {
                            $.ajax({
                                type: 'POST',
                                url: 'editUser',
                                data: {
                                    '_token': $('input[name=_token]').val(),
                                    'id': $("#fid").val(),
                                    'name': $('#n').val(),
                                    'email': $('#e').val(),
                                    'password':$('#p').val()

                                },
                                success: function(data) {
                                    $('.post' + data.id).replaceWith(" "+
                                        "<tr class='post" + data.id + "'>"+
                                        "<td>" + data.id + "</td>"+
                                        "<td>" + data.name + "</td>"+
                                        "<td>" + data.email + "</td>"+
                                        "<td>" + data.password + "</td>"+

                                        "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-name='" + data.name + "' data-email='" + data.email + "'data-password= '"+ data.password +"'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-name='" + data.name + "' data-email='" + data.email + "'data-password= '"+ data.password +"'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-name='" + data.name + "' data-email='" + data.email + "'data-password= '"+ data.password +"'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                                        "</tr>");
                                }
                            });
                        });

                        // form Delete function
                        $(document).on('click', '.delete-modal', function() {
                            $('#footer_action_button').text(" Delete");
                            $('#footer_action_button').removeClass('glyphicon-check');
                            $('#footer_action_button').addClass('glyphicon-trash');
                            $('.actionBtn').removeClass('btn-success');
                            $('.actionBtn').addClass('btn-danger');
                            $('.actionBtn').addClass('delete');
                            $('.modal-title').text('Delete User');
                            $('.id').text($(this).data('id'));
                            $('.deleteContent').show();
                            $('.form-horizontal').hide();
                            $('.title').html($(this).data('title'));
                            $('#myModal').modal('show');
                        });

                        $('.modal-footer').on('click', '.delete', function(){
                            $.ajax({
                                type: 'POST',
                                url: 'deleteUser',
                                data: {
                                    '_token': $('input[name=_token]').val(),
                                    'id': $('.id').text()
                                },
                                success: function(data){
                                    $('.post' + $('.id').text()).remove();
                                }
                            });
                        });

                        // Show function
                        $(document).on('click', '.show-modal', function() {
                            $('#show').modal('show');
                            $('#i').text($(this).data('id'));
                            $('#ne').text($(this).data('name'));
                            $('#em').text($(this).data('email'));
                            $('.modal-title').text('Show User');
                        });
                    </script>



                @endsection