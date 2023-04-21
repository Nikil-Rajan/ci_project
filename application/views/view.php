<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
    <h2>View Data</h2><br>
    <table id="datatable">
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
    </table><br>
    <a href="<?php echo base_url('index');?>"><button>Back</button></a>

<script>
    $(document).ready(function(){
        $('#datatable').DataTable();
    });
</script>
</body>
</html>