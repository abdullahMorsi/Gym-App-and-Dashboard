<x-admin-layout>
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Dietary</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dietary</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <a href="/admin/dietary/create">
                                    <button  id="table2-new-row-button" class="btn btn-primary mb-4"> Add New Dietary</button>

                                </a>

                                <div class="table-responsive">
                                    <table class="table table-bordered border mb-0" id="new-edit">
                                        <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Dietary Name</th>
                                            <th>price</th>

                                            <th colspan="2">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dietary as $item)
                                        <tr>
                                            <td>{{$item->category}}</td>
                                            <td >{{$item->name}}</td>
                                            <td >{{$item->price}}</td>

                                            <td >
                                                <a href="/admin/dietary/{{$item->id}}/edit" class="btn  btn-sm btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form method="post" action="/admin/dietary/{{$item->id}}">
                                                     @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn  btn-sm btn-danger">Delete</button>

                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


                <!-- ROW-4 END -->
            </div>
            <!-- CONTAINER END -->
        </div>
    </div>
    <!--app-content close-->
</x-admin-layout>
