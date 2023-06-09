<main id="main" class="main">

    <div class="pagetitle">

        @yield('floating-form-title')
        <nav>
            <ol class="breadcrumb">
                @yield('breadcrumbs')
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        @yield('floating-form-content')
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
