<?php
                                    include "connectcakeDB/connectcakeDB.php";
                                    $unit = 'รายการเค้ก';
                                    if (isset($_POST['1pond'])) {
                                        $query = "SELECT * FROM `cake` WHERE `unit` LIKE '1ปอนด์'";

                                        $result = $conn->query($query);
                                        $unit = '1ปอนด์';
                                        //echo  $unit;
                                    } else if (isset($_POST['2pond'])) {
                                        $query = "SELECT * FROM `cake` WHERE `unit` LIKE '2ปอนด์'";

                                        $result = $conn->query($query);
                                        $unit = '2ปอนด์';
                                        //echo  $unit;
                                    } else if (isset($_POST['3pond'])) {
                                        $query = "SELECT * FROM `cake` WHERE `unit` LIKE '3ปอนด์'";

                                        $result = $conn->query($query);
                                        $unit = '3ปอนด์';
                                        // echo  $unit;
                                    } else if (isset($_POST['cin'])) {
                                        $query = "SELECT * FROM `cake` WHERE `unit` LIKE 'ชิ้น'";

                                        $result = $conn->query($query);
                                        $unit = 'ชิ้น';
                                        //echo  $unit;
                                    } else {
                                        $query = "SELECT * FROM `cake` ";

                                        $result = $conn->query($query);

                                        // echo  $unit;
                                    } ?>
