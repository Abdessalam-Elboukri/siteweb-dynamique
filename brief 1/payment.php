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
    <section class="container-fluid">
        <div class="row">
        <!-- ============================= -->
        <?php include 'sidebar.php'; ?>
        <!-- ============================= -->

            <div class="col-10">
        <!-- ============================= -->
            <?php include 'navbar.php'; ?>
        <!-- ============================= -->
                <div class="row mt-5 flex-row">
                    <div class="title col-lg-4 col-md-6 col-sm-12">
                        <h2 style="font-size:19px; ">Payements Details</h2>
                    </div>
                    <div class="d-flex gap-2 align-items-center justify-content-end col-lg-8 col-md-6 col-sm-12">
                        <div style="font-size: 1.2rem;">
                            <i class="fa fa-sort text-primary" aria-hidden="true"></i>
                        </div>
                    </div>
                    <hr class="m-auto" style="width: 97%;">
                </div>
                <div class="row mt-2 px-5 table-responsive">
                    <table class="table">
                        <thead>
                            <tr class=" text-muted">
                                <th scope="col">Name</th>
                                <th scope="col">Payment Shedule</th>
                                <th scope="col">Bill Number</th>
                                <th scope="col">Amounts Paid</th>
                                <th scope="col">Balance Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="flex-column">

                    <?php
                        $stud_info = [
                            [
                                'Nom' =>'abdessalam',
                                'Pay_shed' =>'first',
                                'BillNum' => 0423456777,
                                'Amount_P' =>'DHS 1000,00',
                                'Balance_A' =>'DHS 5000,00',
                                'Date' =>'12,jan,2022',
                            ],

                            [
                                'Nom' =>'tayeb',
                                'Pay_shed' =>'first',
                                'BillNum' => 0643456532,
                                'Amount_P' =>'DHS 1400,00',
                                'Balance_A' =>'DHS 6000,00',
                                'Date' =>'13,jan,2022',
                            ],

                            [
                                'Nom' =>'lghabar',
                                'Pay_shed' =>'first',
                                'BillNum' => 0673456532,
                                'Amount_P' =>'DHS 1250,00',
                                'Balance_A' =>'DHS 6500,00',
                                'Date' =>'12,feb,2022',
                            ],

                            [
                                'Nom' =>'abdessamad',
                                'Pay_shed' =>'first',
                                'BillNum' => 242557485,
                                'Amount_P' =>'DHS 3000,00',
                                'Balance_A' =>'DHS 7000,00',
                                'Date' =>'12,mar,2022',
                            ],
                        
                        ];
                        
                        foreach ($stud_info as  $val) {
                                echo "<tr class=\"mt-1\">
                                        <td class=\"align-middle \">{$val['Nom']}</td>
                                        <td class=\"align-middle\">{$val['Pay_shed']}</td>
                                        <td class=\"align-middle\">{$val['BillNum']}</td>
                                        <td class=\"align-middle\">{$val['Amount_P']}</td>
                                        <td class=\"align-middle\">{$val['Balance_A']}</td>
                                        <td class=\"align-middle\">{$val['Date']}</td>
                                        <td class=\"text-primary align-middle\">
                                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                        </td>
                                       </tr> ";
                                }                      
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>