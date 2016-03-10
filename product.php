<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Ctegory ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT category_id, id, title, price FROM test_1_product";
                                        $rs = mysql_query($sql);
                                        $i = 1;
                                        while ($row = mysql_fetch_array($rs)) :
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?=$i++?></td>
                                            <td class="center"><?=$row['id']?></td>
                                            <td class="center"><?=$row['title']?></td>
                                            <td class="center"><?=$row['price']?></td>
                                            <td><?=$row['category_id']?></td>
                                            
                                        </tr>
                                        <?php endwhile;?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>