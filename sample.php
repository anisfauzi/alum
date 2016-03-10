<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables Sample</h1>
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
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT title, price, name
                                                FROM test_1_product a, test_1_category b
                                                WHERE a.category_id = b.category_id";
                                        $rs = mysql_query($sql);
                                        $i = 1;
                                        while ($row = mysql_fetch_array($rs)) :
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?=$i++?></td>
                                            <td><?=$row['title']?></td>
                                            <td class="center"><?=$row['name']?></td>
                                            <td class="center"><?=$row['price']?></td>
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