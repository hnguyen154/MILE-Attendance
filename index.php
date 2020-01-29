<?php
  include("db.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MILE Make-Up Attendance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

        <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet"/>

        <script src="https://code.jquery.com/jquery.min.js"></script>
        <script src="dist/jquery.tabledit.js"></script>

        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


        <style>
          body{padding-left: 25px; padding-right: 25px}
          tr{transition:all .25s ease-in-out}
          #tableBody tr:hover{background-color:#FFA693;cursor: pointer}
          .dataTables_filter {
            display: none;
          }
      </style>
    </head>


    <body>
        <div class="header">
          <h2 style="text-align:center;"> URBAN LIFE MILE ATTENDANCE MAKE-UP FORM
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-question-sign"></span> Help
            </button>
          </h2>
          <!-- Help PopUp -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- PopUp content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Help Guru</h4>
                </div>

                <div class="modal-body">
                  <p><b>Notes:</b>
                    <ul>
                      <li>Students only allow to make-up on the <u>same week</u> that they missed.</li>
                      <li>Do not click <b>New Semester</b> without approval.</li>
                      <li>Do not use <b>apostrophe (')</b> in any name.</li>
                      <li>If you edit any entry, you <b>NEED to change</b> Assistant's name to your name!</li>
                      <li>Verify before submit.</li>
                    </ul>
                  </p> <br><br>

                  <p><b>How-To:</b>
                    <ul>
                      <li> ADD - Fill out the fill and click Add </li>
                      <li> CLEAR - Only clear out the input fields</li>
                      <li> EXPORT - Must show <b>ALL</b> entries before Save Excel File</li>
                      <li> NEW SEMESTER - Delete all entries</li>
                      <li> EDIT - Click the pen icon of selected row, change any field, and click Save.</li>
                    </ul>
                  </p> <br><br>

                  <p>If any problem arises, please contact Dr. Stroev at <a>mstroev1@gsu.edu</a></p>
                  <p>For technical problems, please contact Hao Nguyen at <a>hnguyen154@student.gsu.edu</a></p>

                </div>

                <div class="modal-footer">
                  <p>LAST UPDATED: January 27, 2020</p>
                  <p>Made with ❤ from Georgia, USA</p>
                </div>


            </div>
          </div>
        </div><br>

        <div class="container-fluid">
          <div id="body1">
            <form method="post">
              <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="Entry" class="col-md-5">No of Entry:</label>
                      <input type="text" class="col-md-7" name="entry" id="entry" placeholder="Skip me Plz!" disabled>
                    </div><br>
                      <div class="form-group">
                        <label for="Week" class="col-md-5">Week:</label>
                              <select name="Week" id="Week" class="col-md-7" required>
                                <option value="">----</option>
                                <option value="W 1">Week 1</option>
                                <option value="W 2">Week 2</option>
                                <option value="W 3">Week 3</option>
                                <option value="W 4">Week 4</option>
                                <option value="W 5">Week 5</option>
                                <option value="W 6">Week 6</option>
                                <option value="W 7">Week 7</option>
                                <option value="W 8">Week 8</option>
                                <option value="W 9">Week 9</option>
                                <option value="W 10">Week 10</option>
                                <option value="W 11">Week 11</option>
                                <option value="W 12">Week 12</option>
                                <option value="W 13">Week 13</option>
                                <option value="W 14">Week 14</option>
                                <option value="W 15">Week 15</option>
                                <option value="W 16">Week 16</option>
                                <option value="W 17">Week 17</option>
                                <option value="W 18">Week 18</option>
                                <option value="W 19">Week 19</option>
                                <option value="W 20">Week 20</option>
                              </select>
                      </div><br>
                      <div class="form-group">
                        <label for="StudentID" class="col-md-5">Student ID:</label>
                        <input type="text" class="col-md-7" name="StudentID" id="StudentID" placeholder="000-00-0000" required>
                      </div><br>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="fname" class="col-md-5">First Name:</label>
                        <input type="text" class="col-md-7" name="fname" id="fname" placeholder="Student's First Name" required>
                      </div><br>
                      <div class="form-group">
                        <label for="lname" class="col-md-5">Last Name :</label>
                        <input type="text" class="col-md-7" name="lname" id="lname" placeholder="Student's Last Name" required>
                      </div><br>
                      <div class="form-group">
                        <label for="MissedDate" class="col-md-5">Missed Date:</label>
                        <input type="date" class="col-md-7" name="MissedDate" id="MissedDate" min="2020-01-01" max="2099-12-31" required>
                      </div><br>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="MissedTime" class="col-md-5">Missed Time:</label>
                        <input type="time" class="col-md-7" name="MissedTime" id="MissedTime" min="08:00" max="20:00" required>
                      </div><br>
                      <div class="form-group">
                        <label for="MakeupDate" class="col-md-5">Make-Up Date:</label>
                        <input type="date" class="col-md-7" name="MakeupDate" id="MakeupDate" min="2020-01-01" max="2099-12-31" required>
                      </div><br>
                      <div class="form-group">
                        <label for="MakeupTime" class="col-md-5">Make-Up Time: </label>
                        <input type="time" class="col-md-7" name="MakeupTime" id="MakeupTime" min="08:00" max="20:00" required>
                      </div><br>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="class" class="col-md-5">Class:</label>
                          <select name="course" id="course" class="col-md-7" required>
                            <option value="">----</option>
                            <option value="0999">0999</option>
                            <option value="1111">1111</option>
                            <option value="1113">1113</option>
                          </select>
                        </div><br>
                        <div class="form-group">
                          <label for="Instructor" class="col-md-5">Instructor:</label>
                          <select name="Instructor" id="Instructor" class="col-md-7" required>
                            <option value="">-----------</option>
                            <option value="Mikhail Stroev">Mikhail Stroev</option>
                            <option value="Catrina May">Catrina May</option>
                            <option value="Nizamettin Tokar">Nizamettin Tokar</option>
                            <option value="Valerie Miller">Valerie Miller</option>
                            <option value="Rodrigo Castro">Rodrigo Castro</option>
                            <option value="Sutandra Sarkar">Sutandra Sarkar</option>
                            <option value="Barrett Brister">Barrett Brister</option>
                            <option value="Kangni Alemdjrodo">Kangni Alemdjrodo</option>
                            <option value="Irina Ilioaea">Irina Ilioaea</option>
                          </select>
                        </div><br>
                        <div class="form-group" role="group">
                          <label for="Assistant" class="col-md-5">Assistant's Name:</label>
                          <input type="text" name="Assistant" id="Assistant" class="col-md-7" placeholder="Your Full Name" required>
                        </div><br>
                    </div>
                </div>

                <div class="row" style="text-align:center">
                    <div class="btn-group">
                      <button type="submit" class="btn btn-success" name="adding">Add</button>
                      <button type="button" class="btn btn-default" onclick="Clear();">Clear</button>
                      <button type="button" class="btn btn-danger" onclick="Export('table');">Export</button>
                    </div> <br><br>
                </div>
                </form>

                <div class="row" style="text-align:center">
                  <form action="delete.php" method="post"  onSubmit="return confirm('Are you sure to delete?')">
                     <input type="password" name="pass" placeholder="Password"></input>
                     <button type="submit" class="btn btn-default" name="deleteAll">New Semester</button>
                  </form>
                </div>
              </div>
              <hr>
                <!-- ADD TO DATABASE -->
                <?php
                    date_default_timezone_set('America/New_York');
                    $date = date("Y-m-d H:i:s");

                    if(isset($_POST["adding"]))
                    {
                        $week = $_POST["Week"];
                        $id = $_POST["StudentID"];
                        $fname = $_POST["fname"];
                        $lname = $_POST["lname"];
                        $MissedDate = $_POST["MissedDate"];
                        $MissedTime = $_POST["MissedTime"];
                        $MakeupDate = $_POST["MakeupDate"];
                        $MakeupTime = $_POST["MakeupTime"];
                        $Class = $_POST["course"];
                        $Instructor = $_POST["Instructor"];
                        $Assistant = $_POST["Assistant"];

                        $sql= "INSERT INTO Attendance (Week, StudentID, fname, lname, MissedDate, MissedTime, MakeupDate, MakeupTime, course, Instructor, Assistant, created_at)
                            VALUES ('$week', '$id', '$fname', '$lname', '$MissedDate', '$MissedTime', '$MakeupDate', '$MakeupTime', '$Class', '$Instructor', '$Assistant', '$date')";


                        if ($conn -> query($sql) === TRUE){
                          echo "<meta http-equiv='refresh' content='0'>";
                        }

                    }


                    if(isset($_POST["remove"]))
                    {
                        $entry = $_POST["entry"];

                        $sql= "DELETE FROM Attendance WHERE
                            entry = '$entry'";



                        if ($conn -> query($sql) === TRUE){
                          echo "<meta http-equiv='refresh' content='0'>";
                        }
                    }

                ?>



            <div id="body2">
                <input class="form-control" type="text" id="SearchInput" placeholder="Search...">
                <br>
                <table id="table" class="table table-bordered">
                    <thead class="thead-light">
                      <tr>
                          <th scope="col">Entry</th>
                          <th scope="col">Week</th>
                          <th scope="col">Student ID</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Missed Date</th>
                          <th scope="col">Missed Time</th>
                          <th scope="col">Make-Up Date</th>
                          <th scope="col">Make-Up Time</th>
                          <th scope="col">Class</th>
                          <th scope="col">Instructor</th>
                          <th scope="col">Assistant</th>
                      </tr>
                    </thead>
                    <tbody id="tableBody">
                      <?php
                            $query = "SELECT * FROM Attendance ORDER BY entry ASC";
                            $result = mysqli_query($conn, $query);
                           while($row = mysqli_fetch_array($result))
                           {
                            echo '
                            <tr>
                              <td>'.$row["entry"].'</td>
                               <td>'.$row["Week"].'</td>
                               <td>'.$row["StudentID"].'</td>
                               <td>'.$row["fname"].'</td>
                               <td>'.$row["lname"].'</td>
                               <td>'.$row["MissedDate"].'</td>
                               <td>'.$row["MissedTime"].'</td>
                               <td>'.$row["MakeupDate"].'</td>
                               <td>'.$row["MakeupTime"].'</td>
                               <td>'.$row["course"].'</td>
                               <td>'.$row["Instructor"].'</td>
                               <td>'.$row["Assistant"].'</td>
                            </tr>
                            ';
                           }
                       ?>
                  </tbody>
                </table>
            </div>

        </div>

        <script>
            /* Warning before leaving the page (back button, or outgoinglink)
            window.onbeforeunload = function() {
                return "Data will be lost if you leave the page, are you sure?";
            };
            */
            function Clear(){
                // clear input text
                document.getElementById("entry").value = "";
                document.getElementById("Week").value = "";
                document.getElementById("StudentID").value = "";
                document.getElementById("fname").value = "";
                document.getElementById("lname").value = "";
                document.getElementById("MissedDate").value = "";
                document.getElementById("MissedTime").value = "";
                document.getElementById("MakeupDate").value = "";
                document.getElementById("MakeupTime").value = "";
                document.getElementById("course").value = "";
                document.getElementById("Instructor").value = "";
                document.getElementById("Assistant").value = "";
            }

            function Export(tableID, filename = ''){
                var downloadLink;
                var dataType = 'application/vnd.ms-excel';
                var tableSelect = document.getElementById(tableID);
                var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

                // Specify file name
                filename = filename?filename+'.xls':'excel_data.xls';

                // Create download link element
                downloadLink = document.createElement("a");

                document.body.appendChild(downloadLink);

                if(navigator.msSaveOrOpenBlob){
                    var blob = new Blob(['\ufeff', tableHTML], {
                        type: dataType
                    });
                    navigator.msSaveOrOpenBlob( blob, filename);
                }else{
                    // Create a link to the file
                    downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                    // Setting the file name
                    downloadLink.download = filename;

                    //triggering the function
                    downloadLink.click();
                }
            }

            //SEARCH FUNCTION
            $(document).ready(function(){
              $("#SearchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#tableBody tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });

            //EDITABLE TABLE
            $(document).ready(function(){

                  $('#table').Tabledit({
                      deleteButton: false,
                      editButton: true,
                      columns: {
                        identifier: [0, 'entry'],
                        editable: [[1, 'Week'], [2, 'StudentID'], [3, 'fname'], [4, 'lname'], [5, 'MissedDate'],[6, 'MissedTime'], [7, 'MakeupDate'],[8, 'MakeupTime'],[9, 'course'],[10, 'Instructor'],[11, 'Assistant']]
                      },
                      hideIdentifier: false,
                      url: 'save_edit.php'
                    });

                    $('#table').DataTable( {
                        lengthMenu: [[5, 10, 25, -1], [5, 10, 25, "All"]],
                        ordering: false,
                        dom: 'Blrtip',
                        buttons: [
                            'excel', 'pdf'
                        ]
                    });

              });


        </script>

    </body>
</html>
