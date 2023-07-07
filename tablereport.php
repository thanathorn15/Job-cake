


                                 <div class="container-fluid">


<body>
    <div class="container-fluid">

        <!-- Page Heading -->


        <div class="row">

            <div class="col-lg-12">

                <!-- Circle Buttons -->

               
        

        <div style="height:5px;"></div>
        <table class="table table-striped " class="well" style="margin:auto; padding:auto; width:94%;  ;font-size: 16px;background-color: #FFFFFF ;">
            <tr style="background-color: #0c5999  ;color: #FFFFFF;font-size: 16px; ">


            <th>วัน/เวลา</th>
                                                <th>เลขที่ใบเสร็จ</th>
                                                <th>รหัสรายการ</th>
                                                <th>ชื่อรายการ</th>
                                                <th>ชนิด</th>
                                                <th>พนักงาน</th>
                                                <th>จำนวน</th>
                                                <th>ราคา</th>
                                                <th>วัน</th>
                                                <th>เดือน</th>
                                                <th>ปี</th>



                </thead>
                <tbody>
                    <?php
                    include "connectcakeDB/connectcakeDB.php";


                    $query = mysqli_query($conn, "select * from report");
                    while ($row = mysqli_fetch_array($query)) {

                    ?>

                        <tr style='background-color: #ffffff  ;color: #080404 ;'>
                            <td><?php echo $row['datetime']; ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['idproduct']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['unit']; ?></td>
                            <td><?php echo $row['employee']; ?></td>
                            <td><?php echo $row['amount']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['day']; ?></td>
                            <td><?php echo $row['month']; ?></td>
                            <td><?php echo $row['year']; ?></td>


                          
                        </tr>
                    <?php


                    }

                    ?>
