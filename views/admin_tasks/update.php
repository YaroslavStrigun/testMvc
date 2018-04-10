<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/tasks">Управление товарами</a></li>
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>


            <h4>Редактировать #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Имя</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $mytask['name']; ?>">

                        <p>Email</p>
                        <input type="text" name="email" placeholder="" value="<?php echo $mytask['email']; ?>">



                        <p>Детальное описание</p>
                        <textarea name="content"><?php echo $mytask['content']; ?></textarea>
                        
                        <br/><br/>



                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($mytask['status'] == 1) echo ' selected="selected"'; ?>>Решена</option>
                            <option value="0" <?php if ($mytask['status'] == 0) echo ' selected="selected"'; ?>>Не решена</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

