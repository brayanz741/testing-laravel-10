<main id="main" class="main">

    <div class="pagetitle">
        <h1>@yield('page-title')</h1>
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
                        @yield('table-filters')
                        @yield('table')
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
