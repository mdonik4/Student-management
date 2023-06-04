<?php include 'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=login-submit" method="post">
                            <div class="row">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="number" name="Password" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <input type="submit"  class="btn btn-outline-success rounded-0 float-end" value="Login">
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
