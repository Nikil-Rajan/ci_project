<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>View Data</h2><a href="<?php echo base_url('index');?>"><button>Back</button></a>
    <table>
        <thead>
            <tr><td>S.No</td>
            <td>Name</td>
            <td>E-mail</td>
            <td>Phone</td></tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact) {?>
            <tr>
                <td><?php echo $contact->id;?></td>
                <td><?php echo $contact->name;?></td>
                <td><?php echo $contact->email;?></td>
                <td><?php echo $contact->phone;?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</body>
</html>