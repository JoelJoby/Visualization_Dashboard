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

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?=$data->insight?></h5>

                    <form class="row g-3">

                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">Title</label>
                            <input readonly type="text" class="form-control" id="inputName5" value="<?=$data->title?>">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail5">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword5">
                        </div>

                        <div class="col-12">
                            <label for="inputAddress5" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St">
                        </div>

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>

                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>

                        <div class="col-12">
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>

        </div>
    </section>