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
                <tr>
                    <th width="30px">Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Books Number</th>
                    <th>Image</th>
                    <th>Actions</th>
                    <th class="text-center" width="150px">
                        <a href="#" class="create-modal btn btn-success btn-sm">
                            <i class="glyphicon glyphicon-plus"></i>
                        </a>
                    </th>
                </tr>
                {{ csrf_field() }}

                @foreach ($authors as $value)
                    <tr class="authorpost{{$value->Id}}">
                        <td>{{ $value->Id }}</td>
                        <td>{{ $value->Authorname }}</td>
                        <td>{{ $value->Address }}</td>
                        <td>{{ $value->BookNumber }}</td>
                        <td ><img src="{{$value->imagePath}}" alt="image" width="100px;" height="100px;"/></td>

                        <td>

                            <a href="#" class="edit-modal btn btn-warning btn-sm" data-Id="{{$value->Id}}"
                               data-Authorname="{{$value->Authorname}}"
                               data-Address="{{$value->Address}}"
                               data-BookNumber="{{$value->BookNumber}}"

                            >
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="#" class="delete-modal btn btn-danger btn-sm" data-Id="{{$value->Id}}"
                               data-Authorname="{{$value->Authorname}}"
                               data-Address="{{$value->Address}}"
                               data-BookNumber="{{$value->BookNumber}}"
                            >
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{$authors->links()}}
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
                            <label class="control-label col-sm-2">Author Name :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  id="nameadd" name="name"
                                       placeholder="Enter author Name Here" required>
                                <p class="errorname text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="descadd" name="desc"
                                       placeholder="Your address Here" required>
                                <p class="errordesc text-center alert alert-danger hidden"></p>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-2">Upload Photo</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="imageadd">
                                <p class="errorimg text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit" id="add">
                        <span class="glyphicon glyphicon-plus"></span>Save Author
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
                                <input type="number" class="form-control" id="idauth" disabled>
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
                            <label class="control-label col-sm-2">Address</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="descedit" required></input>
                                <p class="errordescadd text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Books Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="booknredit" name="booknredit"
                                       placeholder=""  >
                                <p class="errorbooknradd text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Upload Photo</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image">
                                <p class="errorimgadd text-center alert alert-danger hidden"></p>
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
                    <button type="button" class="btn actionBtn"  >
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
            $('.modal-title').text('Add Author');
        });

        $("#add").click(function(e) {
            e.preventDefault();

            var _token = $('input[name=_token]').val();
            var Authorname = $("#nameadd").val();
            var Address = $('#descadd').val();
            var vidFileLength = $("#imageadd")[0].files.length;

            var image = $('#imageadd')[0].files[0];


            form = new FormData();
            form.append('_token', _token);
            form.append('Authorname', Authorname);
            form.append('Address', Address);
            if(vidFileLength!=0)
            {
                form.append('imagePath', image);
            }
            else{
                form.append('imagePath', 0);
            }


            $.ajax({
                type: 'POST',
                url: 'addAuthor',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data){

                        $('#table').append("<tr class='authorpost" + data.Id + "'>"+
                            "<td>" + data.Authorname + "</td>"+
                            "<td>" + data.Address + "</td>"+


                            "<button class='edit-modal btn btn-warning btn-sm' data-Id='" + data.Id +
                            "' data-Authorname='" + data.Authorname +
                            "' data-Address='" + data.Address +

                            "'><span class='glyphicon glyphicon-pencil'></span></button> " +
                            "<button class='delete-modal btn btn-danger btn-sm' data-Id='" + data.Id +
                            "' data-Authorname='" + data.Authorname +
                            "' data-Address='" + data.Address +

                            "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                            "</tr>");
                        setTimeout(
                            function()
                            {
                                location.reload();
                            }, 1);

                },

                error: function (xhr) {
                var myArr = JSON.parse(xhr.responseText);
                    if (myArr.hasOwnProperty('Authorname')) {
                        if( myArr.Authorname != '')
                        {
                            $('.errorname').removeClass('hidden');
                            $('.errorname').text(myArr.Authorname[0]);
                        }


                    }else{
                        alert('jam ktuu');
                        $('.errorname').addClass('hidden');
                    }

                    if (myArr.hasOwnProperty('Address')) {
                        if (myArr.Address != '') {
                            $('.errordesc').removeClass('hidden');
                            $('.errordesc').text(myArr.Address[0]);
                        }
                    }
                    if (myArr.hasOwnProperty('imagePath'))
                    {
                       if(myArr.imagePath !=''){
                           $('.errorimg').removeClass('hidden');
                           $('.errorimg').text(myArr.imagePath[0]);
                       }
                    }

            }
            });

        });



        // function Edit POST
        $(document).on('click', '.edit-modal', function() {
            $('#footer_action_button').text(" Update Author");
            $('#footer_action_button').addClass('glyphicon-check');
            $('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.modal-title').text('Edit Author');
            $('.deleteContent').hide();
            $('.form-horizontal').show();
            $('#idauth').val($(this).data('id'));
            $('#nameedit').val($(this).data('authorname'));
            $('#descedit').val($(this).data('address'));
            $('#booknredit').val($(this).data('booknumber'));



            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.edit', function(e) {
            e.preventDefault();
            var _token = $('input[name=_token]').val();
            var Id = $("#idauth").val();
            var Authorname = $("#nameedit").val();
            var Address = $('#descedit').val();
            var NrFaqe = $('#booknredit').val();
            var vidFileLength = $("#image")[0].files.length;
            var image = $('#image')[0].files[0];

            form = new FormData();
            form.append('_token', _token);
            form.append('Id', Id);
            form.append('Authorname', Authorname);
            form.append('Address', Address);
            form.append('BookNr', NrFaqe);

            if(vidFileLength!=0)
            {
                form.append('imagePath', image);
            }
            else{
                form.append('imagePath', 0);
            }

            $.ajax({
                type: 'POST',
                url: 'editAuthor',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {


                    $('.authorpost' + data.Id).replaceWith(" "+
                        "<tr class='authorpost" + data.Id + "'>"+
                        "<td>" + data.Id + "</td>"+
                        "<td>" + data.Authorname + "</td>"+
                        "<td>" + data.Address + "</td>"+
                        "<td>" + data.BookNr + "</td>"+



                        "<button class='edit-modal btn btn-warning btn-sm' data-Id='" + data.Id +
                        "' data-Authorname='" + data.Authorname +
                        "' data-Address='" + data.Address +

                        "'><span class='glyphicon glyphicon-pencil'></span></button> " +
                        "<button class='delete-modal btn btn-danger btn-sm' data-Id='" + data.Id +
                        "' data-Authorname='" + data.Authorname +
                        "' data-Address='" + data.Address +

                        "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                        "</tr>");
                    setTimeout(
                        function()
                        {
                            location.reload();
                        }, 1);
                },
                error: function (xhr) {
                    var myArr = JSON.parse(xhr.responseText);
                    if (myArr.hasOwnProperty('Authorname')) {
                        if( myArr.Authorname != '')
                        {
                            $('.errornameadd').removeClass('hidden');
                            $('.errornameadd').text(myArr.Authorname[0]);
                        }
                    }

                    if (myArr.hasOwnProperty('Address')) {
                        if (myArr.Address != '') {
                            $('.errordescadd').removeClass('hidden');
                            $('.errordescadd').text(myArr.Address[0]);
                        }
                    }
                    if (myArr.hasOwnProperty('imagePath'))
                    {
                        if(myArr.imagePath !=''){
                            $('.errorimgadd').removeClass('hidden');
                            $('.errorimgadd').text(myArr.imagePath[0]);
                        }
                    }

                    if (myArr.hasOwnProperty('BookNr'))
                    {
                        if(myArr.BookNr !=''){
                            $('.errorbooknradd').removeClass('hidden');
                            $('.errorbooknradd').text(myArr.BookNr[0]);
                        }
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
            $('.modal-title').text('Delete Author');
            $('.id').text($(this).data('id'));
            $('.deleteContent').show();
            $('.form-horizontal').hide();
            $('.title').html($(this).data('authorname'));
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function(){
            $.ajax({
                type: 'POST',
                url: 'deleteAuthor',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'Id': $('.id').text()
                },
                success: function(data){
                    $('.authorpost' + $('.id').text()).remove();
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