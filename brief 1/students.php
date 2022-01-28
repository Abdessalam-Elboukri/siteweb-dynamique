<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-class | Students</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
    <section class="container-fluid">
        <div class="row flex-nowrap">

            <!-- _____________________________ -->
            <?php include 'sidebar.php'; ?>

            <!-- _______________________________ -->

            <div class="col-10">
                <?php include 'navbar.php'; ?>

                <!-- ============================= -->
                <div class="row mt-3 flex-row">
                    <div class="col-10  d-flex flex-nowrap justify-content-between w-100">
                        <h2 style ="font-size: 1.3rem">Students List</h2>
                        <div style="font-size: 1    rem;">
                            <i class="fa fa-sort text-primary" aria-hidden="true"></i>
                            <a href="#" class="btn btn-primary text-uppercase">add new student</a>
                        </div>
                    </div>
                    <hr class="m-auto" style="width: 100%;">
                </div>
                <div class=" table-responsive height mt-3" >
                    <table class="table ">
                        <thead>
                        <tr class=" text-muted">
                        <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Enroll number</th>
                                <th scope="col">Date of admission</th>
                                <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="flex-column">

                        <?php
                            $stud_info = [
                                [
                                    'Nom' =>'abdessalam',
                                    'Email' =>'abdessalam@gmail.com',
                                    'Phone' => '0423456777',
                                    'Enroll' =>'38474876343',
                                    'Date_A' =>'12,jan,2022'
                                ],

                                [
                                    'Nom' =>'jamal',
                                    'Email' =>'jamal@gmail.com',
                                    'Phone' => '061274567',
                                    'Enroll' =>'35474876343',
                                    'Date_A' =>'12,jui,2022'
                                ],

                                [
                                    'Nom' =>'youssef',
                                    'Email' =>'youssef@gmail.com',
                                    'Phone' => '061234567',
                                    'Enroll' =>'3547936343',
                                    'Date_A' =>'12,feb,2020'
                                ],

                                [
                                    'Nom' =>'hamza',
                                    'Email' =>'hamza@gmail.com',
                                    'Phone' => '061234567',
                                    'Enroll' =>'35474876343',
                                    'Date_A' =>'12,mar,2022'
                                ],

                                [
                                    'Nom' =>'jalil',
                                    'Email' =>'jalil@gmail.com',
                                    'Phone' => '061234567',
                                    'Enroll' =>'35474876343',
                                    'Date_A' =>'12,mar,2022'
                                ],

                                [
                                    'Nom' =>'tayeb',
                                    'Email' =>'tayeb@gmail.com',
                                    'Phone' => '0423456777',
                                    'Enroll' =>'38474876343',
                                    'Date_A' =>'12,jan,2022'
                                ],

                                [
                                    'Nom' =>'jamal',
                                    'Email' =>'jamal@gmail.com',
                                    'Phone' => '061274567',
                                    'Enroll' =>'35474876343',
                                    'Date_A' =>'12,jui,2022'
                                ],

                                [
                                    'Nom' =>'youssef',
                                    'Email' =>'youssef@gmail.com',
                                    'Phone' => '061234567',
                                    'Enroll' =>'3547936343',
                                    'Date_A' =>'12,feb,2020'
                                    
                                ],

                                                    
                            ];

                        
                            foreach ($stud_info as  $val) {
                                echo "<tr class=\"mt-1 \">
                                        <td scope=\"row\">
                                            <img src=\"./images/students.jpg\"  width=\"50\" height=\"50\">
                                        </td>
                                        <td class=\"align-middle \">{$val['Nom']}</td>
                                        <td class=\"align-middle\">{$val['Email']}</td>
                                        <td class=\"align-middle\">{$val['Phone']}</td>
                                        <td class=\"align-middle\">{$val['Enroll']}</td>
                                        <td class=\"align-middle\">{$val['Date_A']}</td>
                                        <td class=\"text-primary align-middle \">
                                            <div class=\"d-flex flex-nowrap gap-3\">
                                                <i class=\"fa fa-pencil \" aria-hidden=\"true\"></i>
                                                <i class=\"fa fa-trash-o ms-2 d-inline\" aria-hidden=\"true\"></i>
                                            </div>
                                        </td>
                                       </tr> ";
                                }
                            
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    </main>
</body>

</html>