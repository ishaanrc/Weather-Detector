<table>
    <thead>
        <tr>
            <th>1</th>
            <th>Date Start</th>
            <th>Date End</th>
            <th>Total Budget</th>
            <th>Daily Budget</th>
            <th>Model Price</th>
            <th>Unit Rate</th>
            <th>Target Info</th>
            <th>Product</th>
            <th>Status</th>
            <th>Total Units</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row) : ?>

        <td><?php echo $weatherArray['weather'][0]['description'] ?></td>
        <td><?php echo $row->sMonth . "/" . $row->sDay . "/" . $row->sYear; ?></td>
        <td><?php echo $row->eMonth . "/" . $eDay . "/" . $eYear;  ?></td>
        <td><?php echo $row->tBudget; ?></td>
        <td><?php echo $row->dBudget; ?></td>
        <td><?php echo $row->model; ?></td>
        <td><?php echo $row->targeting; ?></td>
        <td><?php echo $row->product; ?></td>
        <td><?php echo $row->status; ?></td>
        <td><?php echo $row->tUnits; ?></td>

        <?php endforeach; ?>
    </tbody>
</table>
