<?php
class Model_About extends Model
{
    public function get_data()
    {
        $data = array(
            array(
                'name' => 'Anna',
                'profession' => 'designer',
                'img' => 'images/Anna.jpg'
            ),
            array(
                'name' => 'Vadim',
                'profession' => 'boss',
                'img' => 'images/boss.jpg'
            ),
            array(
                'name' => 'Kolya',
                'profession' => 'fullstack programmer',
                'img' => 'images/Kolya.jpg'
            )
        );
        return $data;
    }
}
