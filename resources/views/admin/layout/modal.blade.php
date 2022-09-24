<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- select region modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="region">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title mb-4">Select Your Country</h5>
                <div class="nk-country-region">
                    <ul class="country-list text-center gy-2">
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/arg.png" alt="" class="country-flag">
                                <span class="country-name">Argentina</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/aus.png" alt="" class="country-flag">
                                <span class="country-name">Australia</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                <span class="country-name">Bangladesh</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/canada.png" alt="" class="country-flag">
                                <span class="country-name">Canada <small>(English)</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/china.png" alt="" class="country-flag">
                                <span class="country-name">Centrafricaine</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/china.png" alt="" class="country-flag">
                                <span class="country-name">China</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/french.png" alt="" class="country-flag">
                                <span class="country-name">France</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/germany.png" alt="" class="country-flag">
                                <span class="country-name">Germany</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/iran.png" alt="" class="country-flag">
                                <span class="country-name">Iran</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/italy.png" alt="" class="country-flag">
                                <span class="country-name">Italy</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                <span class="country-name">México</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                <span class="country-name">Philippines</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                <span class="country-name">Portugal</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                <span class="country-name">South Africa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                <span class="country-name">Spain</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                <span class="country-name">Switzerland</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/uk.png" alt="" class="country-flag">
                                <span class="country-name">United Kingdom</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="country-item">
                                <img src="./images/flags/english.png" alt="" class="country-flag">
                                <span class="country-name">United State</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->



<!-- products -->

<div class="modal fade" tabindex="-1" role="dialog" id="product">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title mb-4">Add Products</h5>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
                @endif
                <form id="addform">
                    {{ csrf_field() }}

                    <div class="modal-body row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Product Name">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Category</label>
                            <select name="category" class="form-control input-lg">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Description</label>
                            <input type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="Description">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                    </div>
                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div>


<!--  -->
<!-- edit products modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="editproduct">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title mb-4">Add Products</h5>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
                @endif
                <form id="editformID">

                    <!-- {{ method_field('put') }} -->

                    <input type="hidden" name="id" id="id" />

                    <div class="modal-body row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                        <div class="form-group col-md-6">
                            <label>Category</label>
                            <select name="category" value="{{$category->name}}" id="category" class="form-control input-lg">
                                @foreach ($categories as $category)
                                <option value="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Image</label>
                            <input type="file" name="image" id="image" value="" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Description</label>
                            <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Description">
                            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                        </div>
                    </div>
                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div>

<!-- delete product modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="deleteproduct">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title mb-4">Add Products</h5>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
                @endforeach
                @endif
                <form id="deleteformID">



                    <input type="hidden" name="id" id="delete_id" />

                    <div class="modal-body row">
                        <p>Are you sure !! You want to delete this data</p>
                    </div>
                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Delete Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- delete data -->

<script>
    $('.deletebtn').on('click', function() {
        $('#deleteproduct').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#delete_id').val(data[0]);
    });

    $('#deleteformID').on('submit', function(e) {

        e.preventDefault();

        var id = $('#delete_id').val();

        var formData = new FormData(document.getElementById("deleteformID"));
        $.ajax({
            type: "POST",
            url: "/product-delete/" + id,
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response)
                $('#deleteproduct').modal('hide')
                Swal.fire({
                    title: 'Success',
                    text: 'Product Deleted Successfully',
                    icon: 'success',
                    confirmButtonText: 'Okay'
                });
            },

            error: function(error) {
                console.log(error)
                Swal.fire({
                    title: 'Oops',
                    text: 'Something went Wrong',
                    icon: 'error',
                    confirmButtonText: 'Okay'
                });
            }
        });
    });
</script>

<!-- edit data -->

<script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {
            $('#editproduct').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            $('#id').val(data[0]);
            $('#name').val(data[1]);
            $('#image').val(data[2]);
            $('#category').val(data[3]);
            $('#description').val(data[4]);
        });

        $('#editformID').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            var id = $('#id').val();
            $.ajax({
                type: "POST",
                url: "/product-update/" + id,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                timeout: 10000,
                async: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response)
                    $('#editproduct').modal('hide')
                    // location.reload();
                    Swal.fire({
                        title: 'Success',
                        text: 'Product Updated Successfully',
                        icon: 'success',
                        confirmButtonText: 'Okay'
                    });

                },

                error: function(error) {
                    console.log(error)
                    Swal.fire({
                        title: 'Oops',
                        text: 'Something went Wrong',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                }
            });
        });
    });
</script>

<!-- insert data -->
<script>
    $(document).ready(function() {
        $('#addform').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "product-store",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response)
                    $('#product').modal('hide')

                    Swal.fire({
                        title: 'Success',
                        text: 'Product Created Successfully',
                        icon: 'success',
                        confirmButtonText: 'Okay'
                    });

                    // location.reload();

                },

                error: function(error) {
                    console.log(error)
                    Swal.fire({
                        title: 'Oops',
                        text: 'Something went Wrong',
                        icon: 'error',
                        confirmButtonText: 'Okay'
                    });
                }
            });
        });
    });
</script>