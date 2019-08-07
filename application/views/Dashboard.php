<!Doctype html>
<html>

<head>

    <link rel="stylesheet" href="<?php echo base_url("assets/css/Dashboard.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>


    <div>
        <nav class="navbar navbar-light bg-primary">
            <h1 class="heading1"> Registered Users </h1>
            <div>
                <!-- '<a href="' . base_url('Login_form/logout') . '">logout</a>' -->
                <a href="<?php echo base_url("Login_form/signout"); ?>" class="btn btn-info" role="button">Logout</a>

                <br>
                <a href="<?php echo base_url("Users_Controller/add_user"); ?>" class="btn btn-info" role="button">Add a
                    New
                    user</a>

            </div>
        </nav>

    </div>
    <div class="hovering">
        <nav>
            <h2 class="heading1"> Users List</h2>

        </nav>
        <p id="demo"></p>


        <table class="table  .table-bordered table-hover table-light">

            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>PhoneNumber</th>
                <th>Email</th>
                <th>Country</th>
                <th>Age</th>
                <th>Gender</th>
                <th>ParentName</th>
                <th>Address</th>
                <th>Date</th>
                <th>Update Record</th>
                <th>Deleat Record</th>




            </thead>

            <tbody>
                <?php foreach ($records as $rec) {?>
                <tr>
                    <td><?php echo $rec->Id; ?></td>
                    <td><?php echo $rec->Name; ?></td>
                    <td><?php echo $rec->PhoneNumber; ?></td>
                    <td><?php echo $rec->Email; ?></td>
                    <td><?php echo $rec->Country; ?></td>
                    <td><?php echo $rec->Age; ?></td>
                    <td><?php echo $rec->Gender; ?></td>
                    <td><?php echo $rec->ParentName; ?></td>
                    <td><?php echo $rec->Address; ?></td>
                    <td><?php echo $rec->Date; ?></td>
                    <td><a href="<?php echo base_url("Users_Controller/update") . '/' . $rec->Id; ?>"
                            class="btn btn-primary" role="button">update</a></td>
                    <td><a href="<?php echo base_url("Users_Controller/deleat") . '/' . $rec->Id; ?>"
                            onclick="myFunction()" class="btn btn-primary" role="button">deleat</a></td>

                </tr>
                <?php }?>


            </tbody>
        </table>
        <p><?php echo $links; ?></p>


        <!-- <?echo $pagination;?> -->

        <script>
        function myFunction() {
            var txt;
            if (confirm("This record has been deleated !")) {
                txt = "You pressed OK!";
            } else {
                txt = "You pressed Cancel!";
            }
            document.getElementById("demo").innerHTML = txt;
        }
        </script>


    </div>

</body>

</html>