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
                    <th width="30px">ISBN</th>
                    <th>Title</th>
                    <th>PageNum</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Image</th>
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
                        <td ><img src="{{$value->imagePath}}" alt="image" width="100px;" height="100px;"/></td>
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
                    <form enctype="multipart/form-data" class="form-horizontal" role="form">
                        <div class="form-group row add">
                            <label class="control-label col-sm-2">ISBN :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ibsnadd"  name="ISBN"
                                       placeholder="Enter Book Here" required>
                                <p class="errorISBN text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group row add">
                            <label class="control-label col-sm-2">Title :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  id="titleadd" name="title"
                                       placeholder="Enter Book Here" required>
                                <p class="errortitle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Books Page Number :</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="pagenumadd" name="pagenum"
                                       placeholder="Your book page number Here" required>
                                <p class="errorPage text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Author ID:</label>
                            <div class="col-sm-10">
                                <select name="author" id="authorselectadd" >
                                    <option value="">--Select Author--</option>
                                    @foreach($authors as $author)
                                        <option value="{{$author->Id}}">{{$author->Authorname}}</option>
                                    @endforeach
                                </select>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Category:</label>
                            <div class="col-sm-10">
                                <select name="category" id="categoryselectadd" >
                                    <option value="">--Select Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->Id}}">{{$category->Name}}</option>
                                    @endforeach
                                </select>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-2" >Price:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="priceadd" name="price"
                                       placeholder="Price Here" required>
                                <p class="errorPrice text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Upload Photo</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="imageadd">
                                <p class="errorPhoto text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <p class="successMsgEdit text-center alert alert-success hidden">Veprimi u krye me sukses</p>
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
                    <form enctype="multipart/form-data" class="form-horizontal" role="modal">
                        <div class="form-group">
                            <label class="control-label col-sm-2">ISBN</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="isbn" disabled>
                                <p class="errorISBNadd text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="BTitle">
                                <p class="errortitleadd text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Book Pages</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="pagenum"></input>
                                <p class="errorbooknradd text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">AuthorID</label>
                            <div class="col-sm-10">
                                <select name="author" id="authorselect" >
                                 <option value="">--Select Author--</option>
                                              @foreach($authors as $author)
                                                <option value="{{$author->Id}}">{{$author->Authorname}}</option>
                                           @endforeach
                                                               </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="price"></input>
                                <p class="errorpriceadd text-center alert alert-danger hidden"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Upload Photo</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image">
                                <p class="erroruploadadd text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <p class="successMsgEdit text-center alert alert-success hidden">Veprimi u krye me sukses</p>
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
            $('.modal-title').text('Add Books');
        });

        var authoridSelected=1;
                    $("#authorselect").change(function () {
                           authoridSelected = $(this).val();
                         //  alert(authoridSelected);
                          });

        var authoridSelectedadd=1;
        $("#authorselectadd").change(function () {
            authoridSelectedadd = $(this).val();
            //  alert(authoridSelected);
        });

        var categoryidselectedadd=1;
        $("#categoryselectadd").change(function () {
            categoryidselectedadd = $(this).val();
            //  alert(authoridSelected);
        });

        $("#add").click(function(e) {
            e.preventDefault();
            var _token = $('input[name=_token]').val();
            var ISBN = $("#ibsnadd").val();
            var Title = $('#titleadd').val();
            var PageNum = $('#pagenumadd').val();
            var AuthorId = authoridSelectedadd;
            var Price = $('#priceadd').val();
            var CategoryId=categoryidselectedadd;

            var vidFileLength = $("#imageadd")[0].files.length;
            var image = $('#imageadd')[0].files[0];
            form = new FormData();
            form.append('_token', _token);
            form.append('ISBN', ISBN);
            form.append('Title', Title);
            form.append('PageNum', PageNum);
            form.append('AuthorId', AuthorId);
            form.append('Price', Price);
            if(vidFileLength!=0)
            {
                form.append('imagePath', image);
            }
            else{
                form.append('imagePath', 0);
            }
            form.append('CategoryId',CategoryId)
            $.ajax({
                type: 'POST',
                url: 'addBook',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data){

                        $('#table').append("<tr class='bookpost" + data.ISBN + "'>"+
                            "<td>" + data.ISBN + "</td>"+
                            "<td>" + data.Title + "</td>"+
                            "<td>" + data.PageNum + "</td>"+
                            "<td>" + data.AuthorId + "</td>"+
                            "<td>" + data.Price + "</td>"+

                            "<td><button class='show-modal btn btn-info btn-sm' data-ISBN='" + data.ISBN +
                                    "' data-Title='" + data.Title +
                                    "' data-PageNum='" + data.PageNum +
                                    "' data-AuthorId= '"+ data.AuthorId +
                                    "' data-Price= '"+ data.Price +"'><span class='fa fa-eye'></span></button> " +
                            "<button class='edit-modal btn btn-warning btn-sm' data-ISBN='" + data.ISBN +
                            "' data-Title='" + data.Title +
                            "' data-PageNum='" + data.PageNum +
                            "' data-AuthorId= '"+ data.AuthorId +
                            "'data-Price= '"+ data.Price +
                            "'><span class='glyphicon glyphicon-pencil'></span></button> " +
                            "<button class='delete-modal btn btn-danger btn-sm' data-ISBN='" + data.ISBN +
                            "' data-Title='" + data.Title +
                            "' data-PageNum='" + data.PageNum +
                            "'data-AuthorId= '"+ data.AuthorId +
                            "'data-Price= '"+ data.Price +
                            "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                            "</tr>");
                        $('.errorISBNadd').addClass('hidden');
                        $('.errortitleadd').addClass('hidden');
                        $('.errorbooknradd').addClass('hidden');
                        $('.errorpriceadd').addClass('hidden');
                        $('.erroruploadadd').addClass('hidden');
                        $('.successMsgEdit').removeClass('hidden');

                        setTimeout(
                            function()
                            {
                                location.reload();
                            }, 1);

                    },

                    error: function (xhr) {
                        var myArr = JSON.parse(xhr.responseText);
                        if (myArr.hasOwnProperty('Title'))
                        {
                            if (myArr.Title != '')
                            {
                                $('.errortitle').removeClass('hidden');
                                $('.errortitle').text(myArr.Title[0]);
                            }

                        } else
                        {

                            $('.errortitle').addClass('hidden');
                        }

                        if (myArr.hasOwnProperty('PageNum')) {
                            if (myArr.PageNum != '') {
                                $('.errorPage').removeClass('hidden');
                                $('.errorPage').text(myArr.PageNum[0]);
                            }
                        } else {

                            $('.errorPage').addClass('hidden');
                        }

                        if (myArr.hasOwnProperty('Price')) {
                            if (myArr.Price != '') {
                                $('.errorPrice').removeClass('hidden');
                                $('.errorPrice').text(myArr.Price[0]);
                            }
                        } else {

                            $('.errorPrice').addClass('hidden');
                        }

                        if (myArr.hasOwnProperty('imagePath')) {
                            if (myArr.imagePath != '') {
                                $('.errorPhoto').removeClass('hidden');
                                $('.errorPhoto').text(myArr.imagePath[0]);
                            }
                        } else {

                            $('.errorPhoto').addClass('hidden');
                        }

                        if (myArr.hasOwnProperty('ISBN')) {
                            if (myArr.ISBN != '') {
                                $('.errorISBN').removeClass('hidden');
                                $('.errorISBN').text(myArr.ISBN[0]);
                            }
                        } else {

                            $('.errorISBN').addClass('hidden');
                        }


                    }
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
            $('#authorselect').val($(this).data('authorid'));
            $('#price').val($(this).data('price'));

            $('#myModal').modal('show');
        });

        $('.modal-footer').on('click', '.edit', function(e) {
            e.preventDefault();
            var _token = $('input[name=_token]').val();
            var ISBN = $("#isbn").val();
            var Title = $('#BTitle').val();
            var PageNum = $('#pagenum').val();
            var AuthorId = authoridSelected;
            var Price = $('#price').val();
           // var vidFileLength = $("#image")[0].files[0].length;
            var vidFileLength = $("#image")[0].files.length;
            var image = $('#image')[0].files[0];

            form = new FormData();
            form.append('_token', _token);
            form.append('ISBN', ISBN);
            form.append('Title', Title);
            form.append('PageNum', PageNum);
            form.append('AuthorId', AuthorId);
            form.append('Price', Price);

            if(vidFileLength!=0)
            {
            form.append('imagePath', image);
            }
            else{
                form.append('imagePath', 0);
            }
            $.ajax({
                type: 'POST',
                url: 'editBook',
                data: form,
                    cache: false,
                    contentType: false,
                    processData: false,
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


                    $('.errortitleadd').addClass('hidden');
                    $('.errorbooknradd').addClass('hidden');
                    $('.errorpriceadd').addClass('hidden');
                    $('.erroruploadadd').addClass('hidden');
                    $('.successMsgEdit').removeClass('hidden');


                    setTimeout(
                        function()
                        {
                            location.reload();
                        }, 3);
                },

                error: function (xhr) {
                    var myArr = JSON.parse(xhr.responseText);
                    if (myArr.hasOwnProperty('Title'))
                    {
                        if (myArr.Title != '')
                        {
                            $('.errortitleadd').removeClass('hidden');
                            $('.errortitleadd').text(myArr.Title[0]);
                        }

                    } else
                    {

                        $('.errortitleadd').addClass('hidden');
                    }

                    if (myArr.hasOwnProperty('PageNum')) {
                        if (myArr.PageNum != '') {
                            $('.errorbooknradd').removeClass('hidden');
                            $('.errorbooknradd').text(myArr.PageNum[0]);
                        }
                    } else {

                        $('.errorbooknradd').addClass('hidden');
                    }

                    if (myArr.hasOwnProperty('Price')) {
                        if (myArr.Price != '') {
                            $('.errorpriceadd').removeClass('hidden');
                            $('.errorpriceadd').text(myArr.Price[0]);
                        }
                    } else {

                        $('.errorpriceadd').addClass('hidden');
                    }

                    if (myArr.hasOwnProperty('imagePath')) {
                        if (myArr.imagePath != '') {
                            $('.erroruploadadd').removeClass('hidden');
                            $('.erroruploadadd').text(myArr.imagePath[0]);
                        }
                    } else {

                        $('.erroruploadadd').addClass('hidden');
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