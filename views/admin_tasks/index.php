<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление задачами</li>
                </ol>
            </div>


            
            <h4>Список товаров</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>email</th>
                    <th>Контент</th>
                    <th>Статус</th>
                    <th></th>

                </tr>
                <?php foreach ($taskList as $list): ?>
        <tr>
            <td><?php echo $list['id']; ?></td>
            <td><?php echo $list['name']; ?></td>
            <td><?php echo $list['email']; ?></td>
            <td><?php echo $list['content']; ?></td>
            <td><?php echo Tasks::getStatusTasks($list['status']); ?></td>

                        <td><a href="/admin/tasks/update/<?php echo $list['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>

<?php endforeach; ?>
            </table>
        </tr>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

