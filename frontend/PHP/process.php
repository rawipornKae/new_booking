    <?PHP
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        include_once("../Connect/conn.php");
        include_once("./SQL/variable.php");

        include_once("./SQL/List_booking.php");
    ?>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
            <div class="card-container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-top: 20px; margin-bottom: 10px;">Select Your Car (Available)</h5>
                        <div class="card-group" style="margin-top: 20px;">
                            <?php
                            while ($row_car = mysqli_fetch_array($query_car)) {
                                $cd_id = $row_car["cd_id"];
                                $cd_chauffeur = $row_car["cd_chauffeur"];
                                $cd_no = $row_car["cd_no"];
                                $cd_seat = $row_car["cd_seat"];
                                $cd_owner = $row_car["cd_owner"];
                                $cd_brand = $row_car["ct_brand"] . " " . $row_car["ct_model"];

                            ?>
                                <div class="card" style="margin: 0px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $cd_brand; ?></h5>
                                        <h5 class="card-title"><?= $cd_no; ?> <h6>(<?= $cd_seat; ?>)</h6>
                                        </h5>
                                        <p class="card-text">
                                        <p>Driver : <?= $cd_chauffeur; ?></p>
                                        <p>Owner : <?= $cd_owner; ?></p>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal<?= $cd_id; ?>">
                                            Booking
                                        </button>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $cd_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $cd_id ?>"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel<?= $cd_id ?>">Confirm Booking</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you want to reserve this car?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                <a href="./SQL/Insert_booking.php?cd_id=<?= $cd_id ?>&route=<?= $route ?>&type=<?= $type ?>&start=<?= $start ?>&end=<?= $end ?>&str_date=<?= $str_date ?>&end_date=<?= $end_date ?>&detail=<?= $detail ?>" class="btn btn-success" name="booking">Booking</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php
    }
    ?>