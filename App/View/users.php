<html>
<head>
</head>

<body>
    <h1>Üye Listesi</h1>

    <ul>
        <?php foreach($params['users'] as $user):?>
            <li><?php echo $user->email;?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>