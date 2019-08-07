<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">

</head>

<body>

    <style>
    </style>
    <div class="container">
        <div class="Hello">
            <form class="form-container" id="input_form" method="post">
                <div id="notification_panel">
                </div>
                <h1>Add New User</h1>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="Name" placeholder="Username" class="form-control">
                            <?php echo form_error('Name'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="PhoneNumber" placeholder="PhoneNumber" class="form-control">
                            <?php echo form_error('PhoneNumber'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="Email" placeholder="Email" class="form-control">
                            <?php echo form_error("Email"); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="Address" placeholder="Address" class="form-control">
                            <?php echo form_error("Address"); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                            <label>Country</label>
                            <select name="Country" required>
                                <option value="Pakistan">Pakistan</option>
                                <option value="India">India</option>
                                <option value="China">China</option>
                                <option value="Canada">Canada</option>
                            </select>
                            <?php echo form_error("Country"); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Age</label>
                            <select name="Age">
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select>
                            <?php echo form_error("Age"); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group cstm-error-fix">

                            <label>Gender</label>
                            <input type="radio" name="Gender" value="Man" /> Man
                            <input type="radio" name="Gender" value="Women" />Women
                            <?php echo form_error("Gender"); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ParentName</label>
                            <input type="text" name="ParentName" placeholder="ParentName" class="form-control">
                            <?php echo form_error("ParentName"); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>

                            <input type="date" name="Date" class="form-control">
                            <? echo form_error("Date"); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="pass" name="password" minlength="8" placeholder="Password"
                                class="form-control">
                            <? echo form_error("password"); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="submit">

                            <h3 id="success"></h3>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">


                         


                        </div>

                    </div>


                </div>



            </form>
        </div>
    </div>




</body>

</html>