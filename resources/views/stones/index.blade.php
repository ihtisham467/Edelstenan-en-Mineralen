<x-header />
<x-side />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Stones</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Stones</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <x-alerts />
            <div class="row">
                <div class="col-12">
                    <div id="accordion">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        Add Stone
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <form action="{{ route('stones.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Select Mineral</label>
                                                    <select class="select2 form-control" name="mineral">
                                                        <option value="">-</option>
                                                        @foreach($minerals as $key => $value)
                                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Select Form</label>
                                                    <select class="select2 form-control" name="form">
                                                        <option value="">-</option>
                                                        @foreach($forms as $key => $value)
                                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Product Code</label>
                                                    <input type="text" name="prod_code" class="form-control" placeholder="Product Code" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Stone Image</label>
                                                    <input type="file" name="stone_image" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Stones List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Product Code</th>
                                        <th>Mineral</th>
                                        <th>Form</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($stones as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><a target="_blank" href="{{ asset('images/'.$value->stone_image) }}">View Image</a></td>
                                        <td>{{ $value->prod_code }}</td>
                                        <td>{{ $value->mineral->name }}</td>
                                        <td>{{ $value->form->name }}</td>
                                        <td>
                                            <a href="{{ route('stones.edit', $value->id) }}" title="Edit stone"><i class="fa fa-edit"></i></a> 
                                            <a href="{{ route('delete_stone', $value->id) }}" onclick="if (confirm('Are you sure?')) commentDelete(1); return false" title="Delete stone"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<x-footer />
