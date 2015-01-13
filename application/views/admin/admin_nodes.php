<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 1/10/15
 * Time: 15:27
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            节点列表
            <small>Node List</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <p> <a class="btn btn-success btn-sm" href="node_add.php">添加</a> </p>
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>节点</th>
                                    <th>描述</th>
                                    <th>排序</th>
                                    <th>操作</th>
                                </tr>
                                <?php
                                $sql ="SELECT * FROM `ss_node`  ORDER BY node_order ";
                                $query =  $dbc->query($sql);
                                while ( $rs = $query->fetch_array()){ ?>
                                    <tr>
                                        <td>#<?php echo $node->id; ?></td>
                                        <td> <?php echo $node->node_name; ?></td>
                                        <td><?php echo $node->node_info; ?></td>
                                        <td><?php echo $node->node_order; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="node_edit.php?id=<?php echo $node->id; ?>">编辑</a>
                                            <a class="btn btn-danger btn-sm" href="node_del.php?id=<?php echo $node->id; ?>">删除</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
