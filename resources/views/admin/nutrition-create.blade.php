<x-admin-layout>
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Nutrition</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nutrition</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12 col-xl-10">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Item</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="/admin/nutrition" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="">
                                        <div class="form-group">
                                            <label class="form-label">Nutrition Name</label>
                                            <input name="name" type="text" class="form-control" placeholder="Enter Nutrition Name" autocomplete="name">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <input name="description" type="text" class="form-control" placeholder="Enter Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label mt-0">Nutrition Thumbnail</label>
                                            <input name="thumbnail" class="form-control" type="file">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4 mb-0">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Row -->
            </div>
            <!-- CONTAINER END -->
        </div>
    </div>
    <!--app-content close-->

    </div>
</x-admin-layout>
