<h1>О нас</h1>
<?php
foreach ($data as $project) {
    echo '<div class="row">'
        . '<div class="col-1 worker_img"><img src="' . $project['img'] . '" ></div>'
        . '<div class="col-1">' . $project['name'] . '</div>'
        . '<div class="col-1">' . $project['profession'] . '</div>'
        . '</div>';
}
?>