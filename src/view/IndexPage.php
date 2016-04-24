<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <title><?php echo $this->title; ?></title>
</head>
<body>
<header class="container">
    <h1><?php echo $this->title; ?></h1>
</header>

<div class="container">

    <?php if (!is_null($this->info)): ?>
        <small class="row"><?php echo $this->info; ?></small>
    <?php endif; ?>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($this->users as $result) {
            ?>
            <tr>
                <td><?php echo $result->id ?></td>
                <td><?php echo $result->login ?></td>
                <td><?php echo $result->password ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</div>
</body>
</html>