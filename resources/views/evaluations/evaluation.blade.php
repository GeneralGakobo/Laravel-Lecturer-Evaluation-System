<!DOCTYPE html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Evaluation System | Home</title>
    <!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet"> -->
    <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- <link href="{{ url('/css/font-awesome.css') }}" rel="stylesheet"> -->
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="{{ url('/css/morris-0.4.3.min.css') }}" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
    <link href="{{ url('/css/custom-styles.css') }}" rel="stylesheet">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../assets/js/Lightweight-Chart/cssCharts.css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong><i class="icon fa fa-user"></i> Evaluation System</strong></a>

		<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i>
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side">
            <div class="sidebar-collapse">

                <ul class="nav" id="main-menu" style="height:auto">




                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('dashboard.regsession') }}">Register Sessions</a>
                            </li>

                            <li>
                                <a href="{{ route('dashboard.schools') }}">Schools</a>
                            </li>

                            <li>
                                <a href="{{ route('dashboard.departments') }}">Departments</a>
                            </li>

                            <li>
                                <a href="{{ route('dashboard.programs') }}">Programs</a>
                            </li>
                            <li>
                                <a href="{{ route('answer.answer') }}">Answer Types</a>
                            </li>
                            <li>
                                <a href="{{ route('questionnaires.add_questionnaire') }}">Questionnaire</a>
                            </li>
                            <li>
                                <a href="#">Roles</a>
                            </li>






                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Add Users</a>
                            </li>
                            <li>
                                <a href="#">View Users</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Students<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('student.add_student') }}">Add Student</a>
                            </li>
                            <li>
                                <a href="{{ route('student.view_student') }}">View Student</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Lecturer<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('lecturer.add_lecturer') }}">Add Lecturer</a>
                            </li>
                            <li>
                                <a href="{{ route('lecturer.view_lecturer') }}">View Lecturer</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Competencies<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('competency.add_competency') }}">Add Competencies</a>
                            </li>
                            <li>
                                <a href="{{ route('competency.view_competency') }}">View Competencies</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Courses<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('courses.add_course') }}">Add Courses</a>
                            </li>
                            <li>
                                <a href="{{ route('courses.view_course') }}">View Courses</a>
                            </li>
                            <li>

                        </ul>
                    </li>



                    <li>
                        <a href="{{ route('units.add_unit') }}"><i class="fa fa-sitemap"></i> Units<span class="fa arrow"></span></a>

                    </li>

                    <li>
                        <a href="{{ route('evaluations.add_evaluation') }}"><i class="fa fa-sitemap"></i> Evaluation Exercise<span class="fa arrow"></span></a>

                    </li>




                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Results<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">General Results</a>
                            </li>
                            <li>
                                <a href="#">School Results</a>
                            </li>
                            <li>
                                <a href="#">Departmental Results</a>
                            </li>
                            <li>
                                <a href="#">Lecturer Results</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                                <a href="#">Calendar</a>
                            </li>

                            <li>
                                <a href="#">Permissions</a>
                            </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            Dashboard <small>Welcome John Doe</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Evaluation</li>
					</ol>

		</div>




        <div id="page-inner">
            <div class="row">
            <div class="form-group">

            <div class="results">
                        @if(Session::has('fail'))
            <div class="alert alert-danger alert-dismissible " role="alert">


            {{ Session::get('fail') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
             </div>


            @endif
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible " role="alert">


            {{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
             </div>


            @endif

            <form action="{{route('evaluations.result')}}" method="post">
            @csrf
                                        <div id="container">





                @foreach($questionnaires as $question)

                                        <?php
                                            $iu=  $question->question_type_id;
                                               // echo "$iu";
                                            // $query = "SELECT * FROM courses where id=$iu ";
                                            // $do =mysqli_query($conn, $query);
                                            // while($row = mysqli_fetch_array($do)){
                                            //     echo '<td value="'.$row['id'].'">'.$row['course_name'].'</td>';
                                            // }

                                            ?>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                    <div class="card-title">
                                    <label for="">{{$question->question}}:</label>
                                        <?php
                                            // $mine = $question->unit_type;
                                            // if($mine=='All units'){

                                            $que= $question->question_type_id;
                                            if($que==1){
                                                echo "<textarea class='form-control' id='shortAnswer' name='answer' style='' required></textarea>";
                                            }
                                            elseif($que==2){
                                                echo"<textarea rows='6' name='answer' id='paragraph' class='form-control' required></textarea>";
                                            }elseif($que==3){


                                                $run = $question->value_id;
                                                $myArray = explode(',', $run);
                                                if (is_array($myArray) || is_object($myArray)){
                                                foreach ($myArray as $item)  {
                                                    echo "<br>";
                                                    echo "<input type='radio' name='answer' id='option' required> $item ";
                                                }
                                            }



                                        // elseif($mine=='Practical Units'){
                                        //     $que= $question->question_type_id;
                                        //     if($que==1){
                                        //         echo "<textarea class='form-control' id='shortAnswer' name='answer' style='' required></textarea>";
                                        //     }
                                        //     elseif($que==2){
                                        //         echo"<textarea rows='6' name='answer' id='paragraph' class='form-control' required></textarea>";
                                        //     }elseif($que==3){


                                        //         $run = $question->value_id;
                                        //         $myArray = explode(',', $run);
                                        //         if (is_array($myArray) || is_object($myArray)){
                                        //         foreach ($myArray as $item)  {
                                        //             echo "<br>";
                                        //             echo "<input type='radio' name='answer' id='option' required> $item ";
                                        //         }
                                        //     }
                                        // }

                                        // elseif($mine=='Online Units'){
                                        //     $que= $question->question_type_id;
                                        //     if($que==1){
                                        //         echo "<textarea class='form-control' id='shortAnswer' name='answer' style='' required></textarea>";
                                        //     }
                                        //     elseif($que==2){
                                        //         echo"<textarea rows='6' name='answer' id='paragraph' class='form-control' required></textarea>";
                                        //     }elseif($que==3){


                                        //         $run = $question->value_id;
                                        //         $myArray = explode(',', $run);
                                        //         if (is_array($myArray) || is_object($myArray)){
                                        //         foreach ($myArray as $item)  {
                                        //             echo "<br>";
                                        //             echo "<input type='radio' name='answer' id='option' required> $item ";
                                        //         }
                                        //     }
                                        // }
                                               //  echo "$run";
                                                //$str_arr = preg_split ("/\,/", $run);
                                               //  $str_arr = explode (",", $run);
                                                //$myArray = explode(',', $run);
                                              //  while($str_arr > 0){

                                            //    }
                                               // echo "$str_arr";
                                              // @foreach($str_arr as $item)
                                            // echo" <input type='radio' class='form-control'>  ";
                                              // @endforeach
                                            }
                                           // $r=$str_arr;

                                        ?>







                                    </div>

                             </div>
                             </div>

                        </div>
                         </div>
                        @endforeach

                     <input type="submit" class="btn btn-info" value="Submit">

                </div>

            </div>
            </form>
        </div>
    </div>
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Js -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>


    <!-- Chart Js -->
    <script type="text/javascript" src="../assets/js/Chart.min.js"></script>
    <script type="text/javascript" src="../assets/js/chartjs.js"></script>
    <script type="text/javascript">

             var names = '<?php echo $run; ?>';
             var nameArr = names.split(',');
             //console.log(nameArr);


             </script>



    </body>
</html>
