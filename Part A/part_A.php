<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback Form</title>
</head>

<body>
    <?php
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Reg_id=$_POST['Regid'];
            $AcademicYear = $_POST['AcademicYear'];
            $Semester = $_POST['Semester'];
            $Branch = $_POST['branch'];
            $DOF = $_POST['dof'];
            $DBMSC=$_POST['DBMS'];
            $CNC=$_POST['CN'];
            $TOCC=$_POST['TOC'];
            $TCC=$_POST['TC'];
            $ACAC=$_POST['ACA'];
            $Effectiveness_of_Teacher_Technical_content_dbms=$_POST['DBMS_1'];
            $Effectiveness_of_Teacher_Technical_content_cn=$_POST['CN_1'];
            $Effectiveness_of_Teacher_Technical_content_toc=$_POST['TOC_1'];
            $Effectiveness_of_Teacher_Technical_content_tc=$_POST['TC_1'];
            $Effectiveness_of_Teacher_Technical_content_aca=$_POST['ACA_1'];
            $Effectiveness_of_Teacher_Communication_skills_dbms=$_POST['DBMS_3'];
            $Effectiveness_of_Teacher_Communication_skills_cn=$_POST['CN_3'];
            $Effectiveness_of_Teacher_Communication_skills_toc=$_POST['TOC_3'];
            $Effectiveness_of_Teacher_Communication_skills_tc=$_POST['TC_3'];
            $Effectiveness_of_Teacher_Communication_skills_aca=$_POST['ACA_3'];
            $Effectiveness_of_Teacher_Availability_dbms=$_POST['DBMS_4'];
            $Effectiveness_of_Teacher_Availability_cn=$_POST['CN_4'];
            $Effectiveness_of_Teacher_Availability_toc=$_POST['TOC_4'];
            $Effectiveness_of_Teacher_Availability_tc=$_POST['TC_4'];
            $Effectiveness_of_Teacher_Availability_aca=$_POST['ACA_4'];
            $Effectiveness_of_Teacher_Pace_dbms=$_POST['DBMS_5'];
            $Effectiveness_of_Teacher_Pace_cn=$_POST['CN_5'];
            $Effectiveness_of_Teacher_Pace_toc=$_POST['TOC_5'];
            $Effectiveness_of_Teacher_Pace_tc=$_POST['TC_5'];
            $Effectiveness_of_Teacher_Pace_aca=$_POST['ACA_5'];
            $Effectiveness_of_Teacher_overall_dbms=$_POST['DBMS_6'];
            $Effectiveness_of_Teacher_overall_cn=$_POST['CN_6'];
            $Effectiveness_of_Teacher_overall_toc=$_POST['TOC_6'];
            $Effectiveness_of_Teacher_overall_tc=$_POST['TC_6'];
            $Effectiveness_of_Teacher_overall_aca=$_POST['ACA_6'];
            $Rate_the_contents_dbms=$_POST['DBMS_7'];
            $Rate_the_contents_cn=$_POST['CN_7'];
            $Rate_the_contents_toc=$_POST['TOC_7'];
            $Rate_the_contents_tc=$_POST['TC_7'];
            $Rate_the_contents_aca=$_POST['ACA_7'];
            $Rate_lab_exp_dbms=$_POST['DBMS_8'];
            $Rate_lab_exp_cn=$_POST['CN_8'];
            $Rate_lab_exp_toc=$_POST['TOC_8'];
            $Rate_lab_exp_tc=$_POST['TC_8'];
            $Rate_lab_exp_aca=$_POST['ACA_8'];
            $Remark=$_POST['remark'];
            $cgpa=$_POST['cgpa'];
            $attendance=$_POST['attendance'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "final";
            $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
            if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else{
            ////student table////
            $sql="INSERT INTO `student` (`reg_id`, `academic_yr`, `semester`, `date_of_feedback`, `branch`, `remarks`, `cgpa`, `attendance`)
            VALUES ('$Reg_id', '$AcademicYear', '$Semester', '$DOF', '$Branch', '$Remark ', '$cgpa', '$attendance');";
            $result=mysqli_query($conn,$sql);
           
            /////feedback dbms////
            $sql="INSERT INTO `feedback_dbms` (`id`, `course_id`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`) 
            VALUES ('$Reg_id', 'DBMS-101', '$DBMSC', '$Effectiveness_of_Teacher_Technical_content_dbms', '$Effectiveness_of_Teacher_Communication_skills_dbms',
            '$Effectiveness_of_Teacher_Availability_dbms', '$Effectiveness_of_Teacher_Pace_dbms', '$Effectiveness_of_Teacher_overall_dbms',
            '$Rate_the_contents_dbms','$Rate_lab_exp_dbms');";
            $result=mysqli_query($conn,$sql);
           
            $sql="INSERT INTO `feedback_cn` (`id`, `course_id`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`) 
            VALUES ('$Reg_id', 'CN-102', '$CNC', '$Effectiveness_of_Teacher_Technical_content_cn', '$Effectiveness_of_Teacher_Communication_skills_cn',
            '$Effectiveness_of_Teacher_Availability_cn', '$Effectiveness_of_Teacher_Pace_cn', '$Effectiveness_of_Teacher_overall_cn',
            '$Rate_the_contents_cn','$Rate_lab_exp_cn');";
            $result=mysqli_query($conn,$sql);
            
            $sql="INSERT INTO `feedback_toc` (`id`, `course_id`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`) 
            VALUES ('$Reg_id', 'TOC-123', '$TOCC', '$Effectiveness_of_Teacher_Technical_content_toc', '$Effectiveness_of_Teacher_Communication_skills_toc',
            '$Effectiveness_of_Teacher_Availability_toc', '$Effectiveness_of_Teacher_Pace_toc', '$Effectiveness_of_Teacher_overall_toc',
            '$Rate_the_contents_toc','$Rate_lab_exp_toc');";
            $result=mysqli_query($conn,$sql);
            
            $sql="INSERT INTO `feedback_tc` (`id`, `course_id`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`) 
            VALUES ('$Reg_id', 'TC-104', '$TCC', '$Effectiveness_of_Teacher_Technical_content_tc', '$Effectiveness_of_Teacher_Communication_skills_tc',
            '$Effectiveness_of_Teacher_Availability_tc', '$Effectiveness_of_Teacher_Pace_tc', '$Effectiveness_of_Teacher_overall_tc',
            '$Rate_the_contents_tc','$Rate_lab_exp_tc');";
            $result=mysqli_query($conn,$sql);
           
            $sql="INSERT INTO `feedback_aca` (`id`, `course_id`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`) 
            VALUES ('$Reg_id', 'ACA-101', '$ACAC', '$Effectiveness_of_Teacher_Technical_content_aca', '$Effectiveness_of_Teacher_Communication_skills_aca',
            '$Effectiveness_of_Teacher_Availability_aca', '$Effectiveness_of_Teacher_Pace_aca', '$Effectiveness_of_Teacher_overall_aca',
            '$Rate_the_contents_aca','$Rate_lab_exp_aca');";
            $result=mysqli_query($conn,$sql);
           

                if($result){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your entry has been submitted successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>';
                  }
                  else{
                      // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>';
                  }
            }





            

            



           }
    
    
    ?>
    <div style="padding-bottom: 18px;font-size : 32px;">Student Feedback Form</div>
    <form action="part_A.php" method="POST">
        <table>
            <tr>
                <td>
                    <div style=" margin-left: 0; margin-right: 1%; width: 89%;">Registration_id<span style="color: red;">
                            *</span><br />
                        <input type="text" id="Regid" name="Regid" style="max-width: 100%;" class="form-control" />
                    </div>
                </td>

            </tr>

            <tr>
                <td>
                    <div style=" margin-left: 0; margin-right: 1%; width: 89%;">Academic Year<span style="color: red;">
                            *</span><br />
                        <input type="text" id="AcademicYear" name="AcademicYear" style="max-width: 100%;" class="form-control" />
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <div style=" margin-left: 1%; margin-right: 0; width: 89%;">Semester<span style="color: red;">
                            *</span><br />
                        <input type="text" id="Semester" name="Semester" style="max-width: 100%;" class="form-control" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="padding-bottom: 18px;">Date of Feedback<span style="color: red;"> *</span><br />
                        <input type="text" id="dof" name="dof" style="max-width : 420px;"
                            class="form-control" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="display: flex; padding-bottom: 18px;max-width : 450px;">
                        <div style=" margin-left: 0; margin-right: 1%; width: 89%;">Branch<span style="color: red;">
                                *</span><br />
                            <input type="text" id="branch" name="branch" style="max-width: 100%;"
                                class="form-control" />
                        </div>
                </td>
            </tr>

        </table>

        <div>

            <h3>1. Has the Teacher covered entire
                Syllabus as prescribed by University? </h3>

        </div>

        <table>
            <thead>
                <th>
                    Subject name
                </th>
                <th>
                    Subject Code
                </th>
                <th>
                    Your response
                </th>
            </thead>
            <tr>
                <td>
                    DBMS
                </td>
                <td>
                    DBMS-101
                </td>
                <td>
                    <div style="display: flex; padding-bottom: 0px;max-width : 500px;"></div>
                    <select name="DBMS" id="DBMS">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select>

                </td>

            </tr>
            <tr>
                <td>
                    CN
                </td>
                <td>
                    CN-102
                </td>
                <td>
                    <select name="CN" id="CN">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select>

                </td>

            </tr>
            <tr>
                <td>
                    TOC
                </td>
                <td>
                    TOC-103
                </td>
                <td>
                    <select name="TOC" id="TOC">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select>

                </td>

            </tr>
            <tr>
                <td>
                    TC
                </td>
                <td>
                    TC-104
                </td>
                <td>
                    <select name="TC" id="TC">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select>

                </td>

            </tr>
            <tr>
                <td>
                    ACA
                </td>
                <td>
                    ACA-101
                </td>
                <td>
                    <select name="ACA" id="ACA">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select>

                </td>

            </tr>






        </table>
        <br>
        <div>
            <p>
            <h3> 2. Effectiveness of Teacher in terms of</h3>
            <h4>(Rating : 5-Excellent, 4-Very Good, 3- Good, 2- Average, 1- Below Average)</h4>
            </p>
        </div>
        <table >
            <tr>

                <td>
                    2.1 Technical content
                </td>
                <td>
                    DBMS
                </td>
                <td>
                    <select name="DBMS_1" id="DBMS_1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>


                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    CN
                </td>
                <td>
                    <select name="CN_1" id="CN_1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TOC
                </td>
                <td>
                    <select name="TOC_1" id="TOC_1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TC
                </td>
                <td>
                    <select name="TC_1" id="TC_1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>


                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    ACA
                </td>
                <td>
                    <select name="ACA_1" id="ACA_1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>

                <td>
                    2.2 Communication skills
                </td>
                <td>
                    DBMS
                </td>
                <td>
                    <select name="DBMS_3" id="DBMS_3">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    CN
                </td>
                <td>
                    <select name="CN_3" id="CN_3">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TOC
                </td>
                <td>
                    <select name="TOC_3" id="TOC_3">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TC
                </td>
                <td>
                    <select name="TC_3" id="TC_3">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>


                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    ACA
                </td>
                <td>
                    <select name="ACA_3" id="ACA_3">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>


                </td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
                <td>
                    2.3 Availability beyond normal classes
                    and co-operation to solve individual
                    problems
                </td>
                <td>
                    DBMS
                </td>
                <td>
                    <select name="DBMS_4" id="DBMS_4">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    CN
                </td>
                <td>
                    <select name="CN_4" id="CN_4">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TOC
                </td>
                <td>
                    <select name="TOC_4" id="TOC_4">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TC
                </td>
                <td>
                    <select name="TC_4" id="TC_4">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                   ACA
                </td>
                <td>
                    <select name="ACA_4" id="ACA_4">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>


                </td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
                <td>
                    2.4 Pace on which contents were covered
                </td>
                <td>
                    DBMS
                </td>
                <td>
                    <select name="DBMS_5" id="DBMS_5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    CN
                </td>
                <td>
                    <select name="CN_5" id="CN_5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>


                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TOC
                </td>
                <td>
                    <select name="TOC_5" id="TOC_5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TC
                </td>
                <td>
                    <select name="TC_5" id="TC_5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                   ACA
                </td>
                <td>
                    <select name="ACA_5" id="ACA_5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
                <td>
                    2.5 Overall effectiveness
                </td>
                <td>
                    DBMS
                </td>
                <td>
                    <select name="DBMS_6" id="DBMS_6">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    CN
                </td>
                <td>
                    <select name="CN_6" id="CN_6">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TOC
                </td>
                <td>
                    <select name="TOC_6" id="TOC_6">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    TC
                </td>
                <td>
                    <select name="TC_6" id="TC_6">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    ACA
                </td>
                <td>
                    <select name="ACA_6" id="ACA_6">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>

        </table>
        <div>
            <p>
            <h3>3.How do you rate the contents of the
                curricular ?
            </h3>
            <h4>(Rating : 5-Excellent, 4-Very Good, 3- Good, 2- Average, 1- Below Average)</h4>
            </p>
        </div>
        <table>
            <tr>
                <td>
                    DBMS
                </td>
                <td>
                    <select name="DBMS_7" id="DBMS_7">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>


                </td>
            </tr>
            <tr>

                <td>
                    CN
                </td>
                <td>
                    <select name="CN_7" id="CN_7">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>

                <td>
                    TOC
                </td>
                <td>
                    <select name="TOC_7" id="TOC_7">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>

                <td>
                    TC
                </td>
                <td>
                    <select name="TC_7" id="TC_7">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>


                </td>
            </tr>
            <tr>

                <td>
                   ACA
                </td>
                <td>
                    <select name="ACA_7" id="ACA_7">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>

        </table>
        <div>
            <p>
            <h3>4. How do you rate lab experiments, if
                applicable?

            </h3>
            <h4>(Rating : 5-Excellent, 4-Very Good, 3- Good, 2- Average, 1- Below Average)</h4>
            </p>
        </div>
        <table>
            <tr>
                <td>
                    DBMS
                </td>
                <td>
                    <select name="DBMS_8" id="DBMS_8">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>

                <td>
                    CN
                </td>
                <td>
                    <select name="CN_8" id="CN_8">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>

                <td>
                    TOC
                </td>
                <td>
                    <select name="TOC_8" id="TOC_8">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>

                <td>
                    TC
                </td>
                <td>
                    <select name="TC_8" id="TC_8">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>
            <tr>

                <td>
                    ACA
                </td>
                <td>
                    <select name="ACA_8" id="ACA_8">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>



                </td>
            </tr>

        </table>

        <table>
            <tr>
                
                <td>
                    <div style="padding-bottom: 18px;">Any Remarks<br/>
                        <textarea id="remark" false name="remark" style="max-width : 450px;" rows="6" class="form-control"></textarea>
                        </div>
                </td>
            </tr>
            <tr>
               
                <td>
                    <div style="padding-bottom: 18px;">CGPA<span style="color: red;"> *</span><br/>
                        <input type="number" id="cgpa" name="cgpa" style="max-width : 450px;" class="form-control"/>
                        </div>
                </td>
            </tr>
            <tr>
                
                <td>
                    <div style="padding-bottom: 18px;">Attendance<span style="color: red;"> *</span><br/>
                        <input type="number" id="attendance" name="attendance" style="max-width : 450px;" class="form-control"/>
                        </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value=submit name="">
                </td>
            </tr>


        </table>









    </form>
</body>

</html>