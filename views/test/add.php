<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-center text-white">Student Information Form</h3>
                </div>
                <div class="card-body">
                    <form action="index.php?action=add_student" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" name="user" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="class">Class:</label>
                            <select class="form-control" name="class">
                                <option>WEP-2020A</option>
                                <option>WEP-2020B</option>
                                <option>SNA-2020</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="number">Mark:</label>
                            <input type="number" name="score" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="radio">Gender:</label><br>
                            <input type="radio" name="sex" value="Male">Male <br>
                            <input type="radio" name="sex" value="Female">Female
                        </div>
                        <a href="index.php?action=view" class="btn btn-success" id="back">Go Back</a>
                        <input type="submit" class="btn btn-primary float-right" value="Submit">
                </div>
                <div class="card-footer">
                </div>
                </form>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
