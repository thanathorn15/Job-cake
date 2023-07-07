
<?php
if (!isset($_SESSION)) {
    session_start();
    $ID =  $_SESSION['ID'];
    $nameuser =  $_SESSION['name'];
    $email = $_SESSION['email'];
    $tel = $_SESSION['tel'];
    $status = $_SESSION['status'];


    if (!isset($_SESSION["ID"])) {
        header("Location: login.php");
        exit;
    }
}
?>


</div><!-- Edit -->
<div class="modal fade" id="edit1<?php echo $row['idcake']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <center>
                    <h4 class="modal-title" id="myModalLabel">หมายเหตุ</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" style="font-size: 16px;">
            
               
<?php  $querycomment = "SELECT * FROM comment ";
 $resultsquerycomment = $conn->query( $querycomment);
if ($resultsquerycomment->num_rows > 0) {
    while ($rowresultsquerycomment = $resultsquerycomment->fetch_array()) {
        $rowresultsquerycommentzz  = $rowresultsquerycomment['comment_name'];

    }}
    

?>
                                                                        
                                                                         <div class="container-fluid">
                                                                            <tr><td class='t-right' style='font-size: 19px'>หมายเหตุ :</td>
                                                                            <td><label class="sr-only" style='font-size: 19px'>หมายเหตุ</label>
                                                                                <textarea name="comment" type="varchar" id="comment"  placeholder="<?php echo $rowresultsquerycommentzz;?>"  value ="" class="form-control" style="width:335px;height:80px ; " ></textarea>
                                                                               <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                
                                                                </div>
                                                                </div> 
                                                                
                                                                 </form>
                                                                 <?php  if (isset($_POST['set'])) {
                                                                      error_reporting(0);
                                                                    $commentdd =$_POST['comment'];
                                                                    $querycommentee = "UPDATE `comment`  SET  `comment_name`='$commentdd'  WHERE `comment`.`id` = 1 ";
                                                                        $querycommentee = $conn->query( $querycommentee);

                                                                        echo "<meta http-equiv='refresh' content='0.25;URL=snack_order_user.php'>";
                                                            }
                                                             ?>
                                                             
                  


            <div class="modal-footer">
            

                <input type="submit"  name="set" class="btn btn-success "  value="บันทึก"><span class="glyphicon glyphicon-check"></span></input>
                <button type="button" class="btn btn-danger " data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>ยกเลิก</button>
            </div>
            </form>
        </div>
    </div>
</div>



<?php






