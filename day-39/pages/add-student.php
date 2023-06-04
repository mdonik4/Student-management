<?php include 'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="text-center fw-bolder">Student Form</h4>
                    </div>
                    <div class="card-body">
                        <span class="text-success"><?php echo isset($message) ? $message: ''?></span>
                        <form action="?page=create-student" method="post" enctype="multipart/form-data">
                            <div class="row mt-3">
                                <label for="name" class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required placeholder="Enter Your Name" name="name"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="email" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" required placeholder="Enter Your Email" name="email"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="mobile" class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" required placeholder="Enter Your Mobile" name="mobile"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="image" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image" required/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="">
                                    <input type="submit" class="btn btn-outline-success col-md-12 rounded-0" value="Save Student"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php' ?>
