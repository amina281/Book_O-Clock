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
                    <th width="30px">IBSN</th>
                    <th>Title</th>
                    <th>PageNum</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Actions</th>
                    <th class="text-center" width="150px">
                        <a href="#" class="create-modal btn btn-success btn-sm">
                            <i class="glyphicon glyphicon-plus"></i>
                        </a>
                    </th>
                </tr>
                {{ csrf_field() }}

                @foreach ($books as $value)
                    <tr class="bookpost{{$value->ISBN}}">
                        <td>{{ $value->ISBN }}</td>
                        <td>{{ $value->Title }}</td>
                        <td>{{ $value->PageNum }}</td>
                        <td>{{ $value->AuthorId }}</td>
                        <td>{{ $value->Price }}</td>
                        <td>
                            <a href="#" class="show-modal btn btn-info btn-sm" data-ISBN="{{$value->ISBN}}"
                                                                        data-Title="{{$value->Title}}"
                                                                        data-PageNum="{{$value->PageNum}}"
                                                                        data-AuthorId="{{$value->AuthorId}}"
                                                                        data-Price="{{$value->Price}}">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="#" class="edit-modal btn btn-warning btn-sm" data-ISBN="{{$value->ISBN}}"
                               data-Title="{{$value->Title}}"
                               data-PageNum="{{$value->PageNum}}"
                               data-AuthorId="{{$value->AuthorId}}"
                               data-Price="{{$value->Price}}">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="#" class="delete-modal btn btn-danger btn-sm" data-ISBN="{{$value->ISBN}}"
                               data-Title="{{$value->Title}}"
                               data-PageNum="{{$value->PageNum}}"
                               data-AuthorId="{{$value->AuthorId}}"
                               data-Price="{{$value->Price}}">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{$books->links()}}
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
                            <label class="control-label col-sm-2">ISBN :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="ISBN"
                                       placeholder="Enter Book Here" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group row add">
                            <label class="control-label col-sm-2">Title :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="title"
                                       placeholder="Enter Book Here" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Books Page Number :</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="body" name="pagenum"
                                       placeholder="Your book page number Here" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Author ID:</label>
                            <div class="col-sm-10">
                                <select name="author" id="authorselect" >
                                    <option value="">--Select Author--</option>
                                    @foreach($authors as $author)
                                        <option value="{{$author->Id}}">{{$author->Authorname}}</option>
                                        @endforeach
                                </select>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Price:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="body" name="price"
                                       placeholder="Price Here" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit" id="add">
                        <span class="glyphicon glyphicon-plus"></span>Save Book
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
                        <label for="">ISBN :</label>
                        <b id="i"/>
                    </div>
                    <div class="form-group">
                        <label for="">Title :</label>
                        <b id="ne"/>
                    </div>
                    <div class="form-group">
                        <label for="">Page Number :</label>
                        <b id="em"/>
                    </div>

                    <div class="form-group">
                        <label for="">AuthorID :</label>
                        <b id="ai"/>
                    </div>

                    <div class="form-group">
                        <label for="">Price :</label>
                        <b id="p"/>
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
                            <label class="control-label col-sm-2">ISBN</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="isbn" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Title</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="BTitle">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Book Pages</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="pagenum"></input>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">AuthorID</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="authorid"></input>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Price</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="price"></input>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-4">Select Product Image : </label>
                            <div class="col-md-8">
                                <input type="file" name="image" id="image" />
                                <span id="store_image"></span>
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
            $('.modal-title').text('Add Books');
        });

        var authoridSelected;
            $("#authorselect").change(function () {
                authoridSelected = $(this).val();
              //  alert(authoridSelected);
            });


        $("#add").click(function() {


            $.ajax({
                type: 'POST',
                url: 'addBook',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'ISBN': $('input[name=ISBN]').val(),
                    'Title': $('input[name=title]').val(),
                    'PageNum': $('input[name=pagenum]').val(),
                    'AuthorId': authoridSelected,
                    'Price': $('input[name=price]').val(),
                },
                success: function (data) {
                    if ((data.errors)) {
                        $('.error').removeClass('hidden');//nuk ka gje ktu
                        $('.error').text(data.errors.Title);
                        $('.error').text(data.errors.PageNum);
                        $('.error').text(data.errors.AuthorId);
                    } else {
                        $('.error').remove();
                        $('#table').append("<tr class='bookpost" + data.ISBN + "'>" +
                            "<td>" + data.ISBN + "</td>" +
                            "<td>" + data.Title + "</td>" +
                            "<td>" + data.PageNum + "</td>" +
                            "<td>" + data.AuthorId + "</td>" +
                            "<td>" + data.Price + "</td>" +

                            "<td><button class='show-modal btn btn-info btn-sm' data-ISBN='" + data.ISBN +
                            "' data-Title='" + data.Title +
                            "' data-PageNum='" + data.PageNum +
                            "' data-AuthorId= '" + data.AuthorId +
                            "' data-Price= '" + data.Price + "'><span class='fa fa-eye'></span></button> " +
                            "<button class='edit-modal btn btn-warning btn-sm' data-ISBN='" + data.ISBN +
                            "' data-Title='" + data.Title +
                            "' data-PageNum='" + data.PageNum +
                            "' data-AuthorId= '" + data.AuthorId +
                            "'data-Price= '" + data.Price +
                            "'><span class='glyphicon glyphicon-pencil'></span></button> " +
                            "<button class='delete-modal btn btn-danger btn-sm' data-ISBN='" + data.ISBN +
                            "' data-Title='" + data.Title +
                            "' data-PageNum='" + data.PageNum +
                            "'data-AuthorId= '" + data.AuthorId +
                            "'data-Price= '" + data.Price +
                            "'><span class='glyphicon glyphicon-trash'></span></button></td>" +
                            "</tr>");
                    }
                },

            });

        });

        // function Edit POST
        $(document).on('click', '.edit-modal', function() {
            $('#footer_action_button').text(" Update Book");
            $('#footer_action_button').addClass('glyphicon-check');
            $('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.modal-title').text('Edit Books');
            $('.deleteContent').hide();
            $('.form-horizontal').show();
            $('#isbn').val($(this).data('isbn'));
            $('#BTitle').val($(this).data('title'));
            $('#pagenum').val($(this).data('pagenum'));
            $('#authorid').val($(this).data('authorid'));
            $('#price').val($(this).data('price'));

            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'POST',
                url: 'editBook',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'ISBN': $("#isbn").val(),
                    'Title': $('#BTitle').val(),
                    'PageNum': $('#pagenum').val(),
                    'AuthorId':$('#authorid').val(),
                    'Price':$('#price').val(),

                },
                success: function(data) {

                    $('.bookpost' + data.ISBN).replaceWith(" "+
                        "<tr class='bookpost" + data.ISBN + "'>"+
                        "<td>" + data.ISBN + "</td>"+
                        "<td>" + data.Title + "</td>"+
                        "<td>" + data.PageNum + "</td>"+
                        "<td>" + data.AuthorId + "</td>"+
                        "<td>" + data.Price + "</td>"+

                        "<td><button class='show-modal btn btn-info btn-sm' data-ISBN='" + data.ISBN +
                        "' data-Title='" + data.Title +
                        "' data-PageNum='" + data.PageNum +
                        "'data-AuthorId= '"+ data.AuthorId +
                        "'data-Price= '"+ data.Price +
                        "'><span class='fa fa-eye'></span></button> " +
                        "<button class='edit-modal btn btn-warning btn-sm' data-ISBN='" + data.ISBN +
                        "' data-Title='" + data.Title +
                        "' data-PageNum='" + data.PageNum +
                        "'data-AuthorId= '"+ data.AuthorId +
                        "'data-Price= '"+ data.Price +
                        "'><span class='glyphicon glyphicon-pencil'></span></button> " +
                        "<button class='delete-modal btn btn-danger btn-sm' data-ISBN='" + data.ISBN +
                        "' data-Title='" + data.Title +
                        "' data-PageNum='" + data.PageNum +
                        "'data-AuthorId= '"+ data.AuthorId +
                        "'data-Price= '"+ data.Price +
                        "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
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
            $('.modal-title').text('Delete Book');
            $('.id').text($(this).data('isbn'));
            $('.deleteContent').show();
            $('.form-horizontal').hide();
            $('.title').html($(this).data('title'));
            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.delete', function(){
            $.ajax({
                type: 'POST',
                url: 'deleteBook',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'ISBN': $('.id').text()
                },
                success: function(data){
                    $('.bookpost' + $('.id').text()).remove();
                }
            });
        });

        // Show function
        $(document).on('click', '.show-modal', function() {
            $('#show').modal('show');
            $('#i').text($(this).data('isbn'));
            $('#ne').text($(this).data('title'));
            $('#em').text($(this).data('pagenum'));
            $('#ai').text($(this).data('authorid'));
            $('#p').text($(this).data('price'));
            $('.modal-title').text('Show Book');
        });
    </script>



@endsection