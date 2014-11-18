
<h1><?= $error;?></h1>


<table class="table table-bordered text-center">
    <tr>
        <th class="col-lg-1 text-center">№</th>
        <th class="col-lg-3 text-center">Имя</th>
        <th class="col-lg-3 text-center">Город</th>
        <th class="col-lg-3 text-center">Образование</th>
    </tr>
    <?php  foreach($data as $key =>$row) :?>

        <tr>
            <td><?= $key +1;?></td>
            <td><?= $row->name;?>
            </td>

            <td>
                <?foreach($row->town as $town):?>
                    <p><?= $town->title;?></p>
                <?php endforeach;?>
            </td>
            <td>
                <?php foreach($row->educ as $edu):?>
                    <p><?=$edu->title?></p>
                <?php endforeach;?>
            </td>
        </tr>
    <? endforeach;?>
</table>
