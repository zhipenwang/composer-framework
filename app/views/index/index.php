<!DOCTYPE html>
<html>
<head>
  <title><? echo $title; ?></title>
</head>
<style type="text/css">
  table, tr, th, td {
    border: 1px solid #000;
    border-collapse:collapse;
  }
</style>
<body>
  <table>
      <tr>
        <th>标题</th>
        <th>作者</th>
        <th>标签</th>
        <th>描述</th>
      </tr>
      <?php foreach($article as $key=>$value) { ?>
      <tr>
        <td><?php echo $value['title']; ?></td>
        <td><?php echo $value['hot']; ?></td>
        <td><?php echo $value['adddate']; ?></td>
        <td><?php echo html_entity_decode($value['content']); ?></td>
      </tr>
      <?php } ?>
  </table>
</body>
</html>