<!DOCTYPE html>
<html lang="en">

<head>
    <title>CGPA Calculator</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    
</head>

<body>

     <?php
       include '../view/header.php';
?>
    <div class="container">
        <div class="card" style="margin: 50px;">
            <div class="card-body">
                <div align="center" style="padding: 10px;">
                 
                    <h4>CGPA Calculator</h4>
                </div>

                <div id="result" class="row">
                    <div class="col-sm-12">
                        <div align="center">
                            <button class="btn btn-danger btn-block">Result</button>
                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="est_gpa">Estimated GPA:</label>
                            <input type="text" class="form-control" id="est_gpa">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="est_cgpa">Estimated CGPA:</label>
                            <input type="text" class="form-control" id="est_cgpa">
                        </div>
                    </div>
                </div>

                <div id="previous_semester" class="row">
                    <div class="col-sm-12">
                        
                        <hr>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="credit_completed">Credit Completed:</label>
                            <input type="text" class="form-control" id="credit_completed">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="current_cgpa">Current CGPA:</label>
                            <input type="text" class="form-control" id="current_cgpa">
                        </div>
                    </div>
                </div>

                <div id="current_semester" class="row">
                    <div class="col-sm-12">
                        <div align="center">
                            <button class="btn btn-success btn-block">Current Semester Information</button>
                        </div>
                        <hr>
                    </div>
                </div>

                <div id="course_selector" class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="current_sem_course">Course Taken in Current Semester:</label>
                            <select class="form-control" id="current_sem_course">
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="course_1" class="row">
                    <div class="col-sm-12">
                        <h5>Course 1</h5>
                        <hr>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="credit_completed">Credit:</label>
                            <input type="text" class="form-control" id="credit_completed_1">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="current_cgpa">GPA:</label>
                            <input type="text" class="form-control" id="current_cgpa_1">
                        </div>
                    </div>
                </div>

                <div id="course_2" class="row">
                    <div class="col-sm-12">
                        <h5>Course 2</h5>
                        <hr>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="credit_completed">Credit:</label>
                            <input type="text" class="form-control" id="credit_completed_2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="current_cgpa">GPA:</label>
                            <input type="text" class="form-control" id="current_cgpa_2">
                        </div>
                    </div>
                </div>

                <div id="course_3" class="row">
                    <div class="col-sm-12">
                        <h5>Course 3</h5>
                        <hr>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="credit_completed">Credit:</label>
                            <input type="text" class="form-control" id="credit_completed_3">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="current_cgpa">GPA:</label>
                            <input type="text" class="form-control" id="current_cgpa_3">
                        </div>
                    </div>
                </div>

                <div id="course_4" class="row">
                    <div class="col-sm-12">
                        <h5>Course 4</h5>
                        <hr>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="credit_completed">Credit:</label>
                            <input type="text" class="form-control" id="credit_completed_4">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="current_cgpa">GPA:</label>
                            <input type="text" class="form-control" id="current_cgpa_4">
                        </div>
                    </div>
                </div>

                <div id="course_5" class="row">
                    <div class="col-sm-12">
                        <h5>Course 5</h5>
                        <hr>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="credit_completed">Credit:</label>
                            <input type="text" class="form-control" id="credit_completed_5">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="current_cgpa">GPA:</label>
                            <input type="text" class="form-control" id="current_cgpa_5">
                        </div>
                    </div>
                </div>

                <div id="course_6" class="row">
                    <div class="col-sm-12">
                        <h5>Course 6</h5>
                        <hr>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="credit_completed">Credit:</label>
                            <input type="text" class="form-control" id="credit_completed_6">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="current_cgpa">GPA:</label>
                            <input type="text" class="form-control" id="current_cgpa_6">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div align="center">
                            <button type="button" id="next_btn" class="btn btn-outline-success btn-block">Next</button>
                            <button type="button" id="calculate_btn" class="btn btn-outline-danger btn-block">Calculate
                                CGPA</button>
                            <button type="button" id="again_btn" class="btn btn-outline-warning btn-block">Calculate
                                Again</button>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <p align="center">
                        <sub></sub></br>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="calculate.js"></script>
</body>

<br><br><br><br><br><br>
<?php
       include '../view/footer.php';
       ?>


</html>