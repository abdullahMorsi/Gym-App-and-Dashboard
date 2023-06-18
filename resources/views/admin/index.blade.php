<x-admin-layout>
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Gym Dashboard</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gym Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Workout</h6>
                                                <h2 class="mb-0 number-font">{{$exercises->count()}}</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="saleschart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Total Books</h6>
                                                <h2 class="mb-0 number-font">{{$books->count()}}</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="leadschart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Nutrition Systems</h6>
                                                <h2 class="mb-0 number-font">{{$nutritions->count()}}</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="profitchart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Dietary Supplements</h6>
                                                <h2 class="mb-0 number-font">{{$dietary->count()}}</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="costchart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->

                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mb-0">Total amounts</h3>
                            </div>
                            <div class="card-body pt-4">
                                <div class="grid-margin">
                                    <div class="">
                                        <div class="panel panel-primary">
                                            <div class="tab-menu-heading border-0 p-0">
                                                <div class="tabs-menu1">

                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body border-0 pt-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab5">
                                                        <div class="table-responsive">
                                                            <table id="data-table"
                                                                   class="table table-bordered text-nowrap mb-0">
                                                                <thead class="border-top">
                                                                <tr>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">Product</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Name</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Description</th>


                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($nutritions as $nutrition)
                                                                    <tr class="border-bottom">
                                                                        <td class="text-center">
                                                                            <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Nutrition</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold">
                                                                                        {{$nutrition->name}}</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <div
                                                                                    class="mt-0 mt-sm-3 d-block">
                                                                                    <h6
                                                                                        class="mb-0 fs-14 fw-semibold text-wrap">
                                                                                        {{$nutrition->description}}</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tr>
                                                                @endforeach

                                                                @foreach($exercises as $exercise)
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #Exercise</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                                        <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    {{$exercise->name}}</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold text-wrap">
                                                                                    {{$exercise->description}}</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>


                                                                </tr>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-4 END -->
            </div>
            <!-- CONTAINER END -->
        </div>
    </div>
    <!--app-content close-->
</x-admin-layout>
