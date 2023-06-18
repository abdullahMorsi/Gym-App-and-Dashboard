<x-admin-layout>
    <div class="main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Admin Login</h1>

    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class=" col-xl-3"></div>
        <div class="col-md-12 col-xl-6 ">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Login to Dashboard </h4>
            </div>
            <div class="card-body">
                <form method="post" action="/admin/login" class="form-horizontal">
                    @csrf
                    <div class=" row mb-4">
                        <label for="inputName" class="col-md-3 form-label">Admin </label>
                        <div class="col-md-9">
                            <input name="name" type="text" class="form-control" id="inputName" placeholder="Admin" autocomplete="username">
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                        <div class="col-md-9">
                            <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="new-password">
                        </div>
                    </div>

                    <div class="mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-admin-layout>
