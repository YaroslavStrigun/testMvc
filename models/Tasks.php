<?php

class Tasks
{

    const SHOW_BY_DEFAULT = 3;
    public static function createProduct($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO tasks '
            . '(name, email, content)'
            . 'VALUES '
            . '(:name, :email, :content)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_STR);

        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }


    public static function getTasksList($page=1)
    {
        $limit = Tasks::SHOW_BY_DEFAULT;

        $offset = ($page - 1) * Tasks::SHOW_BY_DEFAULT;
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql=('SELECT id, name, email, content, image, status FROM tasks LIMIT :limit OFFSET :offset ');
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        $i = 0;
        $tasksList = array();
        while ($row = $result->fetch()) {
            $tasksList[$i]['id'] = $row['id'];
            $tasksList[$i]['name'] = $row['name'];
            $tasksList[$i]['email'] = $row['email'];
            $tasksList[$i]['content'] = $row['content'];
            $tasksList[$i]['image'] = $row['image'];
            $tasksList[$i]['status'] = $row['status'];
            $i++;
        }
        return $tasksList;
    }

    public static function getStatusTasks($status)
    {
        switch ($status) {
            case '1':
                return 'Решена';
                break;
            case '0':
                return 'Не решена';
                break;
        }
    }

    public static function getTasksListNamedesc($page=1)
    {
        $limit = Tasks::SHOW_BY_DEFAULT;

        $offset = ($page - 1) * Tasks::SHOW_BY_DEFAULT;
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql=('SELECT id, name, email, content, image, status FROM tasks ORDER BY name DESC LIMIT :limit OFFSET :offset ');
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        $i = 0;
        $tasksList = array();
        while ($row = $result->fetch()) {
            $tasksList[$i]['id'] = $row['id'];
            $tasksList[$i]['name'] = $row['name'];
            $tasksList[$i]['email'] = $row['email'];
            $tasksList[$i]['content'] = $row['content'];
            $tasksList[$i]['image'] = $row['image'];
            $tasksList[$i]['status'] = $row['status'];
            $i++;
        }
        return $tasksList;
    }

    public static function getTasksListNameasc($page=1)
    {
        $limit = Tasks::SHOW_BY_DEFAULT;

        $offset = ($page - 1) * Tasks::SHOW_BY_DEFAULT;
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql=('SELECT id, name, email, content, image, status FROM tasks ORDER BY name ASC LIMIT :limit OFFSET :offset ');
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        $i = 0;
        $tasksList = array();
        while ($row = $result->fetch()) {
            $tasksList[$i]['id'] = $row['id'];
            $tasksList[$i]['name'] = $row['name'];
            $tasksList[$i]['email'] = $row['email'];
            $tasksList[$i]['content'] = $row['content'];
            $tasksList[$i]['image'] = $row['image'];
            $tasksList[$i]['status'] = $row['status'];
            $i++;
        }
        return $tasksList;
    }

    public static function getTasksListEmaildesc($page=1)
    {
        $limit = Tasks::SHOW_BY_DEFAULT;

        $offset = ($page - 1) * Tasks::SHOW_BY_DEFAULT;
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql=('SELECT id, name, email, content, image, status FROM tasks ORDER BY email DESC LIMIT :limit OFFSET :offset ');
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        $i = 0;
        $tasksList = array();
        while ($row = $result->fetch()) {
            $tasksList[$i]['id'] = $row['id'];
            $tasksList[$i]['name'] = $row['name'];
            $tasksList[$i]['email'] = $row['email'];
            $tasksList[$i]['content'] = $row['content'];
            $tasksList[$i]['image'] = $row['image'];
            $tasksList[$i]['status'] = $row['status'];
            $i++;
        }
        return $tasksList;
    }

    public static function getTasksListEmailasc($page=1)
    {
        $limit = Tasks::SHOW_BY_DEFAULT;

        $offset = ($page - 1) * Tasks::SHOW_BY_DEFAULT;
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql=('SELECT id, name, email, content, image, status FROM tasks ORDER BY email ASC LIMIT :limit OFFSET :offset ');
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        $i = 0;
        $tasksList = array();
        while ($row = $result->fetch()) {
            $tasksList[$i]['id'] = $row['id'];
            $tasksList[$i]['name'] = $row['name'];
            $tasksList[$i]['email'] = $row['email'];
            $tasksList[$i]['content'] = $row['content'];
            $tasksList[$i]['image'] = $row['image'];
            $tasksList[$i]['status'] = $row['status'];
            $i++;
        }
        return $tasksList;
    }

    public static function getTasksListStatusdesc($page=1)
    {
        $limit = Tasks::SHOW_BY_DEFAULT;

        $offset = ($page - 1) * Tasks::SHOW_BY_DEFAULT;
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
            $sql=('SELECT id, name, email, content, image, status FROM tasks ORDER BY status ASC LIMIT :limit OFFSET :offset ');
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        $i = 0;
        $tasksList = array();
        while ($row = $result->fetch()) {
            $tasksList[$i]['id'] = $row['id'];
            $tasksList[$i]['name'] = $row['name'];
            $tasksList[$i]['email'] = $row['email'];
            $tasksList[$i]['content'] = $row['content'];
            $tasksList[$i]['image'] = $row['image'];
            $tasksList[$i]['status'] = $row['status'];
            $i++;
        }
        return $tasksList;
    }

    public static function getTasksListStatusasc($page=1)
    {
        $limit = Tasks::SHOW_BY_DEFAULT;

        $offset = ($page - 1) * Tasks::SHOW_BY_DEFAULT;
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql=('SELECT id, name, email, content, image, status FROM tasks  ORDER BY status DESC LIMIT :limit OFFSET :offset ');
        $result = $db->prepare($sql);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        $i = 0;
        $tasksList = array();
        while ($row = $result->fetch()) {
            $tasksList[$i]['id'] = $row['id'];
            $tasksList[$i]['name'] = $row['name'];
            $tasksList[$i]['email'] = $row['email'];
            $tasksList[$i]['content'] = $row['content'];
            $tasksList[$i]['image'] = $row['image'];
            $tasksList[$i]['status'] = $row['status'];
            $i++;
        }
        return $tasksList;
    }


    public static function getTotalTasks()
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT count(id) AS count FROM tasks ';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);


        // Выполнение коменды
        $result->execute();

        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
    }

    public static function getList()
    {

        $db = Db::getConnection();

        // Запрос к БД
        $sql=('SELECT id, name, email, content, image, status FROM tasks  ');
        $result = $db->prepare($sql);


        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        $i = 0;
        $tasksList = array();
        while ($row = $result->fetch()) {
            $tasksList[$i]['id'] = $row['id'];
            $tasksList[$i]['name'] = $row['name'];
            $tasksList[$i]['email'] = $row['email'];
            $tasksList[$i]['content'] = $row['content'];
            $tasksList[$i]['image'] = $row['image'];
            $tasksList[$i]['status'] = $row['status'];
            $i++;
        }
        return $tasksList;
    }
    public static function getTaskById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM tasks WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }
    public static function updateTaskById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE tasks
            SET 
                name = :name, 
                email = :email, 
                content = :content,
                status = :status
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':content', $options['content'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с товарами
        $path = '/upload/images/tasks/';

        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
}
