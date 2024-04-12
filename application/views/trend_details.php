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

            <div class="col-lg-4 col-6">
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

            <div class="col-lg-4 col-6">
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

            <div class="col-lg-4 col-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">SWOT : <?=$data->swot?></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                        </div>

                        <div class="mt-3 row">

                            <div class="col-6">
                                <div class="square-box strengths"></div>
                                <?php
                                    if($data->swot == 'Strength') 
                                    { ?>
                                        <style>
                                            .strengths{
                                                width: 100%; 
                                                padding-top: 100%; 
                                                background-color: green;
                                                margin-bottom: 10px;
                                            }
                                            .weaknesses, .opportunities, .threats{
                                                width: 100%; 
                                                padding-top: 100%; 
                                                background-color: #ccc; 
                                                margin-bottom: 10px; 
                                            }
                                        </style>
                                <?php } ?>
                            </div>

                            <div class="col-6">
                                <div class="square-box weaknesses"></div>
                                <?php
                                    if($data->swot == 'Weakness') 
                                    { ?>
                                        <style>
                                            .weaknesses{
                                                width: 100%; 
                                                padding-top: 100%; 
                                                background-color: green;
                                                margin-bottom: 10px;
                                            }
                                            .strengths, .opportunities, .threats{
                                                width: 100%; 
                                                padding-top: 100%; 
                                                background-color: #ccc; 
                                                margin-bottom: 10px; 
                                            }
                                        </style>
                                <?php } ?>
                            </div>

                            <div class="col-6">
                                <div class="square-box opportunities"></div>
                                <?php
                                    if($data->swot == 'Opportunity') 
                                    { ?>
                                        <style>
                                            .opportunities{
                                                width: 100%; 
                                                padding-top: 100%; 
                                                background-color: green;
                                                margin-bottom: 10px;
                                            }
                                            .strengths, .weaknesses, .threats{
                                                width: 100%; 
                                                padding-top: 100%; 
                                                background-color: #ccc; 
                                                margin-bottom: 10px; 
                                            }
                                        </style>
                                <?php } ?>
                            </div>

                            <div class="col-6">
                                <div class="square-box threats"></div>
                                <?php
                                    if($data->swot == 'Threat') 
                                    { ?>
                                        <style>
                                            .threats{
                                                width: 100%; 
                                                padding-top: 100%; 
                                                background-color: green;
                                                margin-bottom: 10px;
                                            }
                                            .strengths, .weaknesses, .opportunities{
                                                width: 100%; 
                                                padding-top: 100%; 
                                                background-color: #ccc; 
                                                margin-bottom: 10px; 
                                            }
                                        </style>
                                <?php } ?>
                            </div>

                            <?php
                                if($data->swot == '')
                                    { ?>
                                    <style>
                                        .dashboard .square-box {
                                            width: 100%; 
                                            padding-top: 100%; 
                                            background-color: #ccc; 
                                            margin-bottom: 10px; 
                                        }
                                    </style>
                            <?php    } ?>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bar Chart</h5>

                <canvas id="barChart" style="max-height: 400px;"></canvas>

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

            </form>

        </div>
    </div>

</Main>

<script>
document.addEventListener("DOMContentLoaded", () => {
    new Chart(document.querySelector('#barChart'), {
        type: 'bar',
        data: {
            labels: ['Relevance', 'Likelihood', 'Intensity'],
            datasets: [{
                label: 'Bar Chart',
                data: [<?= 10*$data->relevance ?>, <?= 10*$data->likelihood ?>,
                    <?=$data->intensity?>, 100
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>