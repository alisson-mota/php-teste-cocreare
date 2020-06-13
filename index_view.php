
<html>

<head>

</head>

<body>

<button type = submit onClick="window.history.go(0);"> SORTEAR UMA NOVA SEQUÊNCIA </button>

    <h2>

        Sequência Final Ordenada: 

        <?php foreach($array as $val): ?>
            <tr><td><?php echo $val; ?></td></tr>
        <?php endforeach; ?>
    </h2>

    <br><br>



</body>
</html>