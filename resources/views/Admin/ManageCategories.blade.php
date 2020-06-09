@extends('layouts.admin')

@section('styles')
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td, #table th {
            border: 1px solid #ddd!important;
            padding: 8px;
        }

        #table tr:nth-child(even){background-color: #f2f2f2 !important; }

        #table tr:hover {background-color: #ddd !important;}

        #table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50 !important;
            color: white;
        }
    </style>
@endsection

@section('content')

    <br>
    <div class="row">
        <div class="table table-responsive">
            <table class="table table-bordered" id="table">
                <tr >
                    <th width="30px">Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                    <th class="text-center" width="150px">
                        <a href="#" class="create-modal btn btn-success btn-sm">
                            <i class="glyphicon glyphicon-plus"></i>
                        </a>
                    </th>
                </tr>
                {{ csrf_field() }}

                @foreach ($categories as $value)
                    <tr class="categorypost{{$value->Id}}">
                        <td>{{ $value->Id }}</td>
                        <td>{{ $value->Name }}</td>
                        <td>{{ $value->Description }}</td>

                        <td>

                            <a href="#" class="edit-modal btn btn-warning btn-sm" data-Id="{{$value->Id}}"
                               data-Name="{{$value->Name}}"
                               data-Description="{{$value->Description}}"
                               >
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="#" class="delete-modal btn btn-danger btn-sm" data-Id="{{$value->Id}}"
                               data-Name="{{$value->Name}}"
                               data-Description="{{$value->Description}}"
                             >
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{$categories->links()}}
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
                    <form enctype="multipart/form-data" class="form-horizontal" role="form">


                        <div class="form-group row add">
                            <label class="control-label col-sm-2">Name :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  id="nameadd" name="name"
                                       placeholder="Enter Category Name Here" required>
                                <p class="errorname text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Category Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="descadd" name="desc"
                                       placeholder="Your category description Here" required>
                                <p class="errorcategory text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <p class="successMsgEdit text-center alert alert-success hidden">Successfully Changed</p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit" id="add">
                        <span class="glyphicon glyphicon-plus"></span>Save Category
                    </button>
                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remobe"></span>Close
                    </button>
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
                    <form enctype="multipart/form-data" class="form-horizontal" role="modal">
                        <div class="form-group">
                            <label class="control-label col-sm-2">ID</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="idcat" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nameedit">
                                <p class="errornameadd text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="descedit"></input>
                                <p class="errornameDes text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <p class="successMsgEdit text-center alert alert-success hidden">Successfully Changed</p>
                    </form>
                    {{-- Form Delete Post --}}
                    <div class="deleteContent">
                        Are You sure want to delete <span class="title"></span>?
                        <span class="hidden id"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn actionBtn" >
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
            $('.modal-title').text('Add Category');
        });

        $("#add").click(function(e) {
            e.preventDefault();
            var _token = $('input[name=_token]').val();
            var Name = $("#nameadd").val();
            var Description = $('#descadd').val();


            form = new FormData();
            form.append('_token', _token);
            form.append('Name', Name);
            form.append('Description', Description);

            $.ajax({
                type: 'POST',
                url: 'addCategory',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data){


                        $('#table').append("<tr class='categorypost" + data.Id + "'>"+
                            "<td>" + data.Name + "</td>"+
                            "<td>" + data.Description + "</td>"+


                            "<button class='edit-modal btn btn-warning btn-sm' data-Id='" + data.Id +
                            "' data-Name='" + data.Name +
                            "' data-Description='" + data.Description +

                            "'><span class='glyphicon glyphicon-pencil'></span></button> " +
                            "<button class='delete-modal btn btn-danger btn-sm' data-Id='" + data.Id +
                            "' data-Name='" + data.Name +
                            "' data-Description='" + data.Description +

                            "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                            "</tr>");

                        $('.errorname').addClass('hidden');
                        $('.errorcategory').addClass('hidden');
                        $('.successMsgEdit').removeClass('hidden');

                        setTimeout(
                            function()
                            {
                                location.reload();
                            }, 1);
                    },
                error: function (xhr) {
                    var myArr = JSON.parse(xhr.responseText);
                    if (myArr.hasOwnProperty('Name')) {
                        if( myArr.Name != '')
                        {
                            $('.errorname').removeClass('hidden');
                            $('.errorname').text(myArr.Name[0]);
                        }


                    }else{

                        $('.errorname').addClass('hidden');
                    }

                    if (myArr.hasOwnProperty('Description')) {
                        if (myArr.Description != '') {
                            $('.errorcategory').removeClass('hidden');
                            $('.errorcategory').text(myArr.Description[0]);
                        }
                    }
                    else{

                        $('.errorcategory').addClass('hidden');
                    }

                }

            });

        });



        // function Edit POST
        $(document).on('click', '.edit-modal', function() {
            $('#footer_action_button').text(" Update Category");
            $('#footer_action_button').addClass('glyphicon-check');
            $('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.modal-title').text('Edit Category');
            $('.deleteContent').hide();
            $('.form-horizontal').show();
            $('#idcat').val($(this).data('id'));
            $('#nameedit').val($(this).data('name'));
            $('#descedit').val($(this).data('description'));


            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.edit', function(e) {
            e.preventDefault();
            var _token = $('input[name=_token]').val();
            var Id = $("#idcat").val();
            var Name = $("#nameedit").val();
            var Description = $('#descedit').val();


            form = new FormData();
            form.append('_token', _token);
            form.append('Id', Id);
            form.append('Name', Name);
            form.append('Description', Description);


            $.ajax({
                type: 'POST',
                url: 'editCategory',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {

                    $('.categorypost' + data.Id).replaceWith(" "+
                        "<tr class='categorypost" + data.Id + "'>"+
                        "<td>" + data.Id + "</td>"+
                        "<td>" + data.Name + "</td>"+
                        "<td>" + data.Description + "</td>"+



                        "<button class='edit-modal btn btn-warning btn-sm' data-Id='" + data.Id +
                        "' data-Name='" + data.Name +
                        "' data-Description='" + data.Description +

                        "'><span class='glyphicon glyphicon-pencil'></span></button> " +
                        "<button class='delete-modal btn btn-danger btn-sm' data-Id='" + data.Id +
                        "' data-Name='" + data.Name +
                        "' data-Description='" + data.Description +

                        "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                        "</tr>");


                    $('.errornameadd').addClass('hidden');
                    $('.errornameDes').addClass('hidden');

                    setTimeout(
                        function()
                        {
                            location.reload();
                        }, 1);
                },
                error: function (xhr) {
                    var myArr = JSON.parse(xhr.responseText);
                    if (myArr.hasOwnProperty('Name')) {
                        if (myArr.Name != '') {
                            $('.errornameadd').removeClass('hidden');
                            $('.errornameadd').text(myArr.Name[0]);
                        }
                    } else {

                        $('.errornameadd').addClass('hidden');
                    }

                    if (myArr.hasOwnProperty('Description')) {
                        if (myArr.Description != '') {
                            $('.errornameDes').removeClass('hidden');
                            $('.errornameDes').text(myArr.Description[0]);
                        }
                    } else {
                        $('.errornameDes').addClass('hidden');
                    }

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
            $('.modal-title').text('Delete Category');
            $('.id').text($(this).data('id'));
            $('.deleteContent').show();
            $('.form-horizontal').hide();
            $('.title').html($(this).data('name'));
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function(){
            $.ajax({
                type: 'POST',
                url: 'deleteCategory',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'Id': $('.id').text()
                },
                success: function(data){
                    $('.categorypost' + $('.id').text()).remove();
                    setTimeout(
                        function()
                        {
                            location.reload();
                        }, 1);
                }
            });
        });

    </script>



@endsection