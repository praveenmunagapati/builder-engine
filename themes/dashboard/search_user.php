<?php
/***********************************************************
* BuilderEngine v2.0.12
* ---------------------------------
* BuilderEngine CMS Platform - Radian Enterprise Systems Limited
* Copyright Radian Enterprise Systems Limited 2012-2014. All Rights Reserved.
*
* http://www.builderengine.com
* Email: info@builderengine.com
* Time: 2014-23-04 | File version: 2.0.12
*
***********************************************************/
 echo get_header();?>

    <script src="<?php echo get_theme_path()?>/js/plugins/forms/uniform/jquery.uniform.min.js"></script>
    <script src="<?php echo get_theme_path()?>/js/plugins/forms/validation/jquery.validate.js"></script>
    <script src="<?php echo get_theme_path()?>/js/plugins/forms/select2/select2.js"></script> 
    <script src="<?php echo get_theme_path()?>js/plugins/tables/datatables/jquery.dataTables.min.js"></script><!-- Init plugins only for page -->
    <link href="<?php echo get_theme_path()?>/js/plugins/forms/select2/select2.css" rel="stylesheet" />
    <link href="<?php echo get_theme_path()?>/js/plugins/tables/datatables/jquery.dataTables.css" rel="stylesheet" />
    <script src="<?php echo get_theme_path()?>/js/pages/data-tables.js"></script><!-- Init plugins only for page -->
    
    
                <div class="container-fluid">
                    <div id="heading" class="page-header">
                        <h1><i class="icon20 i-dashboard"></i> Search User</h1>
                    </div>

                    <div class="row-fluid">
                        
                        <div class="span12">
                            
                            <div class="widget">
                                <div class="widget-title">
                                    <div class="icon"><i class="icon20 i-table"></i></div> 
                                    <h4>Search Results</h4>
                                    <a href="#" class="minimize"></a>
                                </div><!-- End .widget-title -->
                            
                                <div class="widget-content">
                                    <form method="post" action="">
                                        <table><tr><td><input type="text" name="search"></td><td><input class="btn-primary" type="submit" style="margin-top: -10px; margin-left: 5px; height: 36px; width: 66px" value="Search"></td></tr></table>
                                    </form>
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Date Registered</th>
                                                <th>User Level</th>
                                                <th>Actions</th
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($search_results as $result): ?>
                                            <tr class="gradeX">
                                                <td>
                                                <?php echo $result->username?>
                                                </td>
                                                <td>
                                                    <?php echo $result->name?>
                                                    </td>
                                                <td><?php echo $result->email?></td>
                                                <td class="center"><?php echo date("G:i:s d-m-Y", $result->date_registered)?></td>
                                                <td>
                                                <?php echo $result->level?>
                                                </td>
                                                <td class="center"><a href="/index.php/admin/user/edit/<?php echo $result->id?>"><span class="i-quill-2"></span></a> <a href="/index.php/admin/user/delete/<?php echo $result->id?>" onclick="return confirm('Are you sure you want to permanently delete this user?')"><span class="i-remove-4"></span></a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Username</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Date Registered</th>
                                                <th>User Level</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- End .widget-content -->
                            </div><!-- End .widget -->
                                                
                        </div><!-- End .span12  -->                     
                                            
                    </div><!-- End .row-fluid  -->

                </div> <!-- End .container-fluid  -->
            </div> <!-- End .wrapper  -->
        </section>
    </div><!-- End .main  -->
  </body>
</html>