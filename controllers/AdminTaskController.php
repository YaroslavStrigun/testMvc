<?php

/**
 * Контроллер AdminProductController
 * Управление товарами в админпанели
 */
class AdminTaskController extends AdminBase
{

    /**
     * Action для страницы "Управление товарами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список товаров
        $taskList = Tasks::getList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_tasks/index.php');
        return true;
    }



    /**
     * Action для страницы "Редактировать товар"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();


        // Получаем данные о конкретном заказе
        $mytask = Tasks::getTaskById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['content'] = $_POST['content'];
            $options['status'] = $_POST['status'];

            // Сохраняем изменения
            if (Tasks::updateTaskById($id, $options)) {



            }

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/tasks");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_tasks/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить товар"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Product::deleteProductById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/product");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_product/delete.php');
        return true;
    }

}
