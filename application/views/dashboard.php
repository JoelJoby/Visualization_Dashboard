<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Number of Sectors</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-briefcase-fill"></i>
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
                                <h5 class="card-title">Number of Topics</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-list-check"></i>
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
                                <h5 class="card-title">Number of Sources</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-link-45deg"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><span><?=count($data['diff_source']);?></span></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- End Left side columns -->

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recent Trends</h5>
                    <table id="dataAll" class="table">
                        <thead style="margin-top: 10em;">
                            <tr>
                                <th scope="col" data-colname="ID">#</th>
                                <th scope="col" data-colname="sector">sector</th>
                                <th scope="col" data-colname="topic">topic</th>
                                <th scope="col" data-colname="source">source</th>
                                <th scope="col" data-colname="insight">insight</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="card">
                <div id="container">

                </div>
            </div>

            <!--  Right side columns -->
            <div class="col-lg-4">

            </div>

        </div>
    </section>

</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<script>

    new DataTable('#dataAll', {
        ajax: '<?=base_url()?>get_data_list',
        columns: [{
                data: 'ID'
            },
            {
                data: 'sector'
            },
            {
                data: 'topic'
            },
            {
                data: 'source'
            },
            {
                data: 'insight',
                render: function(data, type, row, meta) {
                    // 'type' is used to check if it's 'display' to render on the UI
                    if (type === 'display') {
                        // Assuming 'id' is a unique identifier for each record
                        var link = '<a href="' + '<?=base_url()?>get_data_list/data_details/' + row.ID +
                            '" title="Click on to view Details">' + data + '</a>';
                        return link;
                    }
                    return data; // For other types (filter, sort, etc.), just return the data
                }
            }
        ]
    });

</script>

<script type="module">

    // Declare the chart dimensions and margins.
    const width = 640;
    const height = 400;
    const marginTop = 20;
    const marginRight = 20;
    const marginBottom = 30;
    const marginLeft = 40;

    // Declare the x (horizontal position) scale.
    const x = d3.scaleUtc()
        .domain([new Date("2023-01-01"), new Date("2024-01-01")])
        .range([marginLeft, width - marginRight]);

    // Declare the y (vertical position) scale.
    const y = d3.scaleLinear()
        .domain([0, 100])
        .range([height - marginBottom, marginTop]);

    // Create the SVG container.
    const svg = d3.create("svg")
        .attr("width", width)
        .attr("height", height);

    // Add the x-axis.
    svg.append("g")
        .attr("transform", `translate(0,${height - marginBottom})`)
        .call(d3.axisBottom(x));

    // Add the y-axis.
    svg.append("g")
        .attr("transform", `translate(${marginLeft},0)`)
        .call(d3.axisLeft(y));

    // Append the SVG element.
    container.append(svg.node());
    
</script>