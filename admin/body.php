 <!-- Navigation Bar -->
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="addteachers.php">ADD COURSE</a></li>
                <li><a href="addsubjects.php">ADD FACULTY</a></li>
                <li><a href="addclassrooms.php">ADD MODULE</a></li>
                <li><a href="addclassrooms.php">ADD Lecture ROOMS</a></li>
                <li><a href="addclassrooms.php">COURSE ALLOTMENT</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>



<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content" style="margin-top: -60px">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Add Lectures</h2>
        </div>
        <div class="modal-body" id="EnterTeacher">
            <!--Add Lecture form-->
            <div style="display:none" id="addTeacherForm">
            <form action="addteacherFormValidation.php" method="POST">
                    <div class="form-group">
                        <label for="teachername">Lecture's Name</label>
                        <input type="text" class="form-control" id="teachername" name="TN"
                               placeholder="Lecture's Name ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">Faculty No</label>
                        <input type="text" class="form-control" id="facultyno" name="TF" placeholder="Faculty No ...">
                    </div>
                    <div class="form-group">
                        <label for="TF">Alias</label>
                        <input type="text" class="form-control" id="alias_name" name="AL" placeholder="Alias..">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>

                        <select class="form-control" id="designation" name="TD">
                            <option selected disabled>Select</option>
                            <option value="Professor">Professor</option>
                            <option value="Assistant Professor">Assistant Professor</option>
                            <option value="Associate Professor">Associate Professor</option>
                            <option value="Lecture">Lecture</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="teachercontactnumber">Contact No.</label>
                        <input type="text" class="form-control" id="teachercontactnumber" name="TP"
                               placeholder="+27 ...">
                    </div>

                    <div class="form-group">
                        <label for="teacheremailid">Email-ID</label>
                        <input type="text" class="form-control" id="teacheremailid" name="TE"
                               placeholder="abc@gmail.com ...">
                    </div>
                    <div align="right">
                        <input type="submit" class="btn btn-default" name="ADD" value="ADD">
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var addteacherBtn = document.getElementById("teachermanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addTeacherForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    addteacherBtn.onclick = function () {
        modal.style.display = "block";
        //heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        //adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        //adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<div>
    <!--Table styling -->
    <br>
    <style>
    
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 30px;
            width: 90%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <script>
        //A function to delete the registered Lecture on the database
        function deleteHandlers() {
            var table = document.getElementById("teacherstable");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
                
                var createDeleteHandler =
                    function (row) {
                        return function () {
                            var cell = row.getElementsByTagName("td")[0];
                            var id = cell.innerHTML;
                            var x;
                            if (confirm("Are You Sure?") == true) {
                                window.location.href = "deleteteacher.php?name=" + id;

                            }

                        };
                    };
                currentRow.cells[6].onclick = createDeleteHandler(currentRow);
            }
        }
    </script>


<!--Table used to display all  The registered Lectures-->
    <table id=teacherstable style="margin-left: 80px">
        <caption><strong>Teacher's Information </strong></caption>
        <tr>
            <th width="130">Faculty No</th>
            <th width=290>Name</th>
            <th width=50>Alias</th>
            <th width="190">Designation</th>
            <th width="190">Contact No.</th>
            <th width="290">Email ID</th>
            <th width="40">Action</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        //SQL query  that fetch all Lectures that are registered 
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
            "SELECT * FROM teachers ORDER BY faculty_number ASC");


        //Diplay each returned row on its suitable Table Heading 
        while ($row = mysqli_fetch_assoc($q)) {
            echo "<tr><td>{$row['faculty_number']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['alias']}</td>
                    <td>{$row['designation']}</td>
                    <td>{$row['contact_number']}</td>
                    <td>{$row['emailid']}</td>
                   <td>
                    <button>Delete</button></td>
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
        </tbody>
    </table>

</div>
<!--HOME SECTION END-->



<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>