<?php
class Model_Main extends Model
{
    public function get_data()
    {
        $data = array(
            'img' => 'images/main.jpg',
            'header' => 'Главная страница',
            'description' => 'Мы рады Вас приветствовать на главной странице!'
        );
        return $data;
    }
}
