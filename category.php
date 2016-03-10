<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables Category</h1>
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
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT category_id, name FROM test_1_category";
                                        $rs = mysql_query($sql);
                                        $i = 1;
                                        while ($row = mysql_fetch_array($rs)) :
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?=$i++?></td>
                                            <td><?=$row['category_id']?></td>
                                            <td class="center"><?=$row['name']?></td>
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