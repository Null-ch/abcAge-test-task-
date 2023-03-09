<?php
require $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

$progress = '';

if (isset($_POST['date'])) {
    $errors = dateCheck($_POST['date']);
    if (empty($errors)) {
        $currentDate = new DateTimeImmutable($_POST['date']);
        $currentDate = $currentDate->format('Y.m.d');
        $dateDiff = dateDiff($currentDate);
        $items = getItems($currentDate);
        $progress = true;
    } else {
        $error = $errors['Ошибка'];
        $progress = false;
    }
}

if ($progress) {
    $sockCount = getCount($items, 'Левый носок');
    $sockOrders = fib($dateDiff, $sockCount);
    $items = isAvailableItems($items, $sockOrders);
}

?>

<?php template('\header.php'); ?>

<body class="table-primary">
    <div>
        <div class="container">
            <div class="py-4 pb-8">
                <h1 class="text-black text-3xl font-bold mb-4 text-center">Расчет стоимости отправляемого товара</h1>
            </div>
            <?php if (!$progress) : ?>
            <?php template('messages\error_message.php', ['message' => $error]); ?>
            <?php endif; ?>
            <div class="border text-center">
                <div class="form-control text-center">
                    <form class="form-label" action="/" method="post">
                        <div class="mt-8">
                            <div>
                                <label for="fieldDate" class="form-label px-4 py-2">Укажите текущую дату (в формате ДЕНЬ.МЕСЯЦ.ГОД) :</label>
                                <input class="px-4 py-10 border-200  text-center" id="date" name="date" type="text" placeholder="01.01.2021">

                        </div>
                        <div>
                            <button type=" submit" name="submit" value="submit" class="btn btn-primary">
                                Применить
                                </button>
                            </div>
                        </div>
                    </form>
                    <?php if ($progress) : ?>
                        <div class="px-4 py-2">
                            <div class="text-center">
                                <p>Информация о товаре по состоянию на: <?php print_r($currentDate) ?></p>
                            </div>
                            <div style="text-align: center;">
                                <table style="display: inline-block">
                                    <thead>
                                        <tr>
                                            <th class="border px-4 py-2 text-center">Товар</th>
                                            <th class="border px-4 py-2 text-center">Остаток на складе</th>
                                            <th class="border px-4 py-2 text-center">Текущая цена товара</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($items as $key => $item) : ?>
                                        <tr>
                                            <td class="border px-4 py-2 text-center"><?php echo $key ?></td>
                                            <td class="border px-4 py-2 text-center"><?php echo $item['Количество'] < 0 ? "Товар закончился" : $item['Количество'] ?></td>
                                            <td class="border px-4 py-2 text-center"><?php echo $item['Цена'] < 0 ? "-" : $item['Цена'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                        </div>
                </div>
            </div>
        </div>
</body>