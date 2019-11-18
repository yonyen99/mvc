<div class="container">
<a href="index.php?action=add_form" class="btn btn-primary mb-5">Add New</a>
    <div class="row">
        <div class="col-12">
<table class ="table table-striped table-hover mt-2">
    <thead class ="table-dark">
        <tr>
            <th>Id</th>
            <th>FullName</th>
            <th>Mark</th>
            <th>Class</th>
            <th>Sex</th>

            <th>Action</th>
        </tr>
    </thead>
    <?php
        if(isset( $data['view'])){
            foreach( $data['view'] as $rows){
    ?>
    <tbody>
        <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['class'];?></td>
            <td><?php echo $rows['mark'];?></td>
            <td><?php echo $rows['sex'];?></td>
           
            <td>
                <a href="#"><i class="material-icons text-success">remove_red_eye</i></a>
                <a href="#"><i class="material-icons">edit</i></a></a>
                <a href="#"><i class="material-icons text-warning">delete_forever</i></a>
            </td>
           
           

        </tr>
    </tbody>
    <?php
        }
    }
    ?>
</table>
        </div>
    </div>
</div>
