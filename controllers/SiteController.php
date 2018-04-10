<?php

/**
 * Контроллер CatalogController
 * Каталог товаров
 */
class SiteController
{
    public function actionNamedesc($page = 1)
    {

        $tasksall = Tasks::getTasksListNamedesc($page);

        $total = Tasks::getTotalTasks();

        $pagination = new Pagination($total, $page, Tasks::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид


        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['content'] = $_POST['content'];


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Tasks::createProduct($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

            }
        }

        require_once(ROOT . '/views/tasks.php');
        return true;
    }

    public function actionNameasc($page = 1)
    {

        $tasksall = Tasks::getTasksListNameasc($page);

        $total = Tasks::getTotalTasks();

        $pagination = new Pagination($total, $page, Tasks::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид


        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['content'] = $_POST['content'];


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Tasks::createProduct($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

            }
        }

        require_once(ROOT . '/views/tasks.php');
        return true;
    }

    public function actionEmaildesc($page = 1)
    {

        $tasksall = Tasks::getTasksListEmaildesc($page);

        $total = Tasks::getTotalTasks();

        $pagination = new Pagination($total, $page, Tasks::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид


        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['content'] = $_POST['content'];


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Tasks::createProduct($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

            }
        }

        require_once(ROOT . '/views/tasks.php');
        return true;
    }

    public function actionEmailasc($page = 1)
    {

        $tasksall = Tasks::getTasksListEmailasc($page);

        $total = Tasks::getTotalTasks();

        $pagination = new Pagination($total, $page, Tasks::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид


        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['content'] = $_POST['content'];


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Tasks::createProduct($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

            }
        }

        require_once(ROOT . '/views/tasks.php');
        return true;
    }

    public function actionStatusdesc($page = 1)
    {

        $tasksall = Tasks::getTasksListStatusdesc($page);

        $total = Tasks::getTotalTasks();

        $pagination = new Pagination($total, $page, Tasks::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид


        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['content'] = $_POST['content'];


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Tasks::createProduct($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

            }
        }

        require_once(ROOT . '/views/tasks.php');
        return true;
    }

    public function actionStatusasc($page = 1)
    {

        $tasksall = Tasks::getTasksListStatusasc($page);

        $total = Tasks::getTotalTasks();

        $pagination = new Pagination($total, $page, Tasks::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид


        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['content'] = $_POST['content'];


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Tasks::createProduct($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

            }
        }

        require_once(ROOT . '/views/tasks.php');
        return true;
    }

    public function actionTasks($page = 1)
    {

        $tasksall = Tasks::getTasksList($page);

        $total = Tasks::getTotalTasks();

        $pagination = new Pagination($total, $page, Tasks::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид


        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['content'] = $_POST['content'];


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Tasks::createProduct($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение

                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/tasks/{$id}.jpg");
                    }
                };

            }
        }

        require_once(ROOT . '/views/tasks.php');
        return true;
    }


}
