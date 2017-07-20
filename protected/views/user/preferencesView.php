<h3>Profile informations</h3>
<?php

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'username',
        'password',
        'email',
        'create_time',
        'last_visit',
        'status_id',
    ),
));
?>
