<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>九九表</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <h1>九九表</h1>
  <p>偶数にのみ背景色をつけている</p>
  <table>
    <!-- 1行目（列の見出し） -->
    <tr>
      <th></th>
      <?php for ($i = 1; $i <= 9; $i++): ?>
        <th><?php echo $i ?></th>
      <?php endfor ?>
    </tr>

    <!-- 2行目以降 -->
    <?php for ($i = 1; $i <= 9; $i++): ?>
      <tr>

        <!-- 行の見出し -->
        <th><?php echo $i ?></th>

        <?php for ($j = 1; $j <= 9; $j++): ?>
          <!-- もし偶数だったら背景色を設定したclassを適用する -->
          <?php if ($i * $j % 2 == 0): ?>
            <td class="even"><?php echo $i * $j ?></td>
          <?php else: ?>
            <td><?php echo $i * $j ?></td>
          <?php endif ?>
        <?php endfor ?>

      </tr>
    <?php endfor ?>
  </table>
</body>
</html>