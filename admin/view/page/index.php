<form action="<?php echo ADMIN_URL; ?>page/delete" method="POST">
    <div class="pageCon">
        <div class="alert alert-info pageH">
            <h1>Pages</h1>
            <a class="btn btn-primary col-xs-offset-10" href="<?php echo ADMIN_URL; ?>page/create">Create</a>
            <input type="submit" value="Delete" class="btn btn-danger">
        </div>
        <table class="table table-hover">
            <tr>
                <th><input id="allCheckbox" type="checkbox" value=""></th>
                <th>ID</th>
                <th>Name</th>
                <th>Section</th>
                <th>Status</th>
                <th>Creator</th>
                <th>Date</th>
                <th><small>edit | delete</small></th>
                <th><small>details</small></th>
            </tr>
            <?php
            foreach ($this->getAll as $v) {
                ?>
                <tr>
                    <th><input class="singleCB" type="checkbox" name="id[]" value="<?php echo $v['id']; ?>"></th>
                    <td><?php echo $v['id']; ?></td>
                    <td><?php echo $v['name']; ?></td>
                    <td><?php echo $v['n']; ?></td>
                    <td><?php echo $v['status']; ?></td>
                    <td><?php echo $v['creator']; ?></td>
                    <td><?php echo $v['date']; ?></td>
                    <td>
                        <a href="<?php echo ADMIN_URL; ?>page/edit/<?php echo $v['id']; ?>"><i class="fas fa-edit fa-lg editIcon"></i></a>
                        <a href="<?php echo ADMIN_URL; ?>page/delete/<?php echo $v['id']; ?>"><i class="far fa-trash-alt fa-lg deleteIcon"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="<?php echo ADMIN_URL; ?>page/preview/<?php echo $v['id']; ?>">Preview</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function(){
        $('#allCheckbox').on('click', function(){
            $('.singleCB').click();
        });
    });
</script>
    