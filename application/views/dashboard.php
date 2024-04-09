<?php 
    
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title"> Num of Sectors</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>

                                    <div class="ps-3">
                                        <h6><span><?=count($data['diff_sector']);?></span></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title"> Num of Topics</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>

                                    <div class="ps-3">
                                        <h6><span><?=count($data['diff_topics']);?></span></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Num of Source's</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><span><?=count($data['diff_source']);?></span></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Trends</h5>

                            <table id="dataAll" data-role ="ui-datatable" class="table table-borderless" data-src ="<?=base_url()?>get_data_list">

                                <thead>
                                    <tr>
                                        <th data_colname="ID">ID</th>
                                        <th data_colname="sector">sector</th>
                                        <th data_colname="topic">topic</th>
                                        <th data_colname="source">source</th>
                                        <th data_colname="insight">insight</th>
                                    </tr>
                                </thead>

                            </table>

                        </div>
                    </div> -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <!-- /.card-header -->

                                        <div class="card-body">
                                           
                                            <table id="example1" data-role="ui-datatable"
                                                data-src="<?=base_url()?>DashboardController/get_trent_list"
                                                class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="pt-0" data-colname="ID">#</th>
                                                        <th class="pt-0" data-colname="sector">sector
                                                        </th>
                                                        <th class="pt-0" data-colname="topic">topic </th>
                                                        <th class="pt-0" data-colname="source">source
                                                        </th>
                                                        <th class="pt-0" data-colname="insight">insight</th>
                                                      


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>

                    </div>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                            
                    </section>

                </div>
            </div>
            <!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"> -->

<!-- <script>
    $('#dataAll').DataTable({
        serverSide: true,
        processing: true,
        searching: true,
        paging: true,
        ajax: {
            url: '<?=base_url()?>get_data_list',
            type: 'POST',
            dataSrc: function(response) {
            console.log(response); // Log the response data
            return response.data; // Assuming the data array is nested under a 'data' key
        }
        },
        columns: [
            { data: 'ID' },
            { data: 'sector' },
            { data: 'topic' },
            { data: 'source' },
            { data: 'insight' }
        ]
    });
</script> -->