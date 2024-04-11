<main id="main" class="main">

    <div class="pagetitle">
        <h1>Topic Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                <li class="breadcrumb-item active">Topic Details</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">

            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Data Added</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cloud-upload"></i>
                            </div>

                            <div class="ps-3">
                                <h6><span><?=$data->added?></span></h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Data Published</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-globe"></i>
                            </div>
                            <div class="ps-3">
                                <h6><span><?=$data->published?></span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">SWOT</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-bar-chart"></i>
                            </div>

                            <div class="ps-3">
                                <h6><span><?=$data->added?></span></h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?=$data->insight?></h5>

                    <form class="row g-3">

                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Title</label>
                            <input readonly type="text" class="form-control" id="#" value="<?=$data->title?>">
                        </div>

                        <div class="col-12">
                            <label for="inputAddress5" class="form-label">URL Address</label>
                            <input readonly type="text" class="form-control" id="#" value="<?=$data->url?>">
                        </div>

                        <div class="col-12">
                            <label for="inputAddress5" class="form-label">Source</label>
                            <input readonly type="text" class="form-control" id="#" value="<?=$data->source?>">
                        </div>

                        <div class="row" style="margin-top: 1em;">

                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Pestle</label>
                                <input readonly type="text" class="form-control" id="#" value="<?=$data->pestle?>">
                            </div>

                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Sector</label>
                                <input readonly type="text" class="form-control" id="#" value="<?=$data->sector?>">
                            </div>

                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Topic</label>
                                <input readonly type="text" class="form-control" id="#" value="<?=$data->topic?>">
                            </div>

                        </div>

                        <div class="row" style="margin-top: 1em;">

                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Region</label>
                                <input readonly type="text" class="form-control" id="#" value="<?=$data->region?>">
                            </div>

                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Country</label>
                                <input readonly type="text" class="form-control" id="#" value="<?=$data->country?>">
                            </div>

                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">City Latitude</label>
                                <input readonly type="text" class="form-control" id="#" value="<?=$data->city?>">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">City Longitude</label>
                            <input readonly type="text" class="form-control" id="#" value="<?=$data->citylng?>">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label">Citylat</label>
                            <input readonly type="text" class="form-control" id="#" value="<?=$data->citylat?>">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Added</label>
                            <input readonly class="form-control" id="#" value="<?=$data->added?>">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label">Published</label>
                            <input readonly type="text" class="form-control" id="#" value="<?=$data->published?>">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Start Year</label>
                            <input readonly type="text" class="form-control" id="#" value="<?=$data->start_year?>">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label">End Year</label>
                            <input readonly type="text" class="form-control" id="#" value="<?=$data->end_year?>">
                        </div>

                        <div class="row" style="margin-top: 1em;">

                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Relevance</label>
                                <input readonly type="text" class="form-control" id="#" value="<?=$data->relevance?>">
                            </div>

                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Likelihood</label>
                                <input readonly type="text" class="form-control" id="#" value="<?=$data->likelihood?>">
                            </div>

                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Intensity</label>
                                <input readonly type="text" class="form-control" id="#" value="<?=$data->intensity?>">
                            </div>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>