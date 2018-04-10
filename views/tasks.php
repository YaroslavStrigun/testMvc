<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Задачи</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="/template/css/price-range.css" rel="stylesheet">
    <link href="/template/css/animate.css" rel="stylesheet">
    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<div class="page-wrapper">

    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">

                            <h5>
                                <a href="/admin"><i class="fa fa-edit"></i> Admin</a>
                            </h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">

            </div>
            <table class="table-bordered table-striped table">
    <tr>
        <th>ID</th>
        <th>Имя<select name="availability" onchange="location.href=this.value">
                <option value="">Выбрать</option>
                <option value="/main/nameasc/page-1" >В алфавитном порядке</option>
                <option value="/main/namedesc/page-1">Против</option>
            </select></th>
        <th>email<select name="availability" onchange="location.href=this.value">
                <option value="">Выбрать</option>
                <option value="/main/masc/page-1" >В алфавитном порядке</option>
                <option value="/main/mdesc/page-1">Против</option>
            </select></th>
        <th>Задача</th>
        <th>Изображение</th>
        <th>Статус<select name="availability" onchange="location.href=this.value">
                <option value="">Выбрать</option>
                <option value="/main/solved/page-1" >Сначало решенные</option>
                <option value="/main/unsolved/page-1">Сначало не решенные</option>
            </select></th>

    </tr>
    <?php foreach ($tasksall as $list): ?>
        <tr>
            <td><?php echo $list['id']; ?></td>
            <td><?php echo $list['name']; ?></td>
            <td><?php echo $list['email']; ?></td>
            <td><?php echo $list['content']; ?></td>
            <td><img src="<?php echo Tasks::getImage($list['id']); ?>" width="200" alt="" /></td>
            <td><?php echo Tasks::getStatusTasks($list['status']); ?></td>

        </tr>
    <?php endforeach; ?>
</table>
            <!-- Постраничная навигация -->
            <?php echo $pagination->get(); ?>
</div>
</div>
</section>

        <section>
            <div class="container">
                <div class="row">

                    <br/>
                    <h4>Добавить новую задачу</h4>

                    <br/>

                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="col-lg-4">
                        <div class="login-form add-comment-form">
                            <form action="#" method="post" enctype="multipart/form-data" >

                                <p>Ваше имя</p>
                                <input  type="text" name="name" placeholder="" value="">

                                <p>Ваш email</p>
                                <input type="email" name="email" placeholder="" value="" required>

                                <p>Изображение товара</p>
                                <input type="file" name="image" placeholder="" value="">

                                <p>Текст задачи</p>
                                <textarea name="content"></textarea>

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