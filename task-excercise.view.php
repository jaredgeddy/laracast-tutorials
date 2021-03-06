<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <style>

      header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
      }

    </style>
  </head>
  <body>
    <header>
      <h1>
        Task List
      </h1>
    </header>

    <?php foreach ($task_item as $heading => $value): ?>

        <li>
        <strong><?= ucwords($heading); ?></strong> <?= $value; ?>
        </li>

      <?php endforeach;?>

      <ul>
        <li>
          <strong>Task: </strong> <?= $task_item["title"]; ?>
        </li>
        <li>
          <strong>Assigned to: </strong> <?= $task_item["assigned_to"]; ?>
        </li>
        <li>
          <strong>Due: </strong> <?= $task_item["due"]; ?>
        </li>
        <li>
          <strong>Status: </strong> <?= $task_item["completed"] ? 'Completed' : 'Incomplete'; ?>
        </li>
      </ul>
  </body>
</html>
