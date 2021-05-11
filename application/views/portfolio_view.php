<h1>Портфолио</h1>
    <?php
    foreach ($data as $project) {
        echo '<div class="row">'
            . '<div class="col-1">'. $project['year'] . '</div>'
            . '<div class="col-1">' . $project['name'] . '</div>'
            . '<div class="col-1">' . $project['description'] . '</div>'
            . '</div>';
    }
    ?>
