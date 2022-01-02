<?php
require_once('./Target/IJsonSerializer.php');
require_once('./Adaptee/Custom1Serializer.php');
require_once('./Adaptee/Custom2Serializer.php');
require_once('./SerializeOperation.php');
require_once('./Adapters/Custom1SerializerAdapter.php');
require_once('./Adapters/Custom2SerializerAdapter.php');

if (isset($_POST['runButton'])) {
    $serializeOperation1 = new SerializeOperation(new Custom1SerializerAdapter());
    $result = $serializeOperation1->SerializeObject();
    echo $result. '<br>';

    $serializeOperation2 = new SerializeOperation(new Custom2SerializerAdapter());
    $result = $serializeOperation2->SerializeObject();
    echo $result. '<br>';
}
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADAPTER DESIGN PATTERN</title>
</head>
<body>
<div>
    <form method="post">
        <input type="submit" name="runButton" value="RUN">
    </form>
</div>
</body>
</html>


