

  <?php
  function m_view()
  {
    include "connection.php";
    $query = "SELECT*FROM student";
    $result = mysqli_query($connection, $query);
    if ($result && mysqli_num_rows($result) > 0) {
      foreach ($result as $recoud) {
        $rows[] = $recoud;
      }
    }
    return $rows;
  }

  function m_add($data)
  {
    $name = $_POST['user'];
    $class = $_POST['class'];
    $score = $_POST['score'];
    $sex = $_POST['sex'];
    include "connection.php";
    $query = "INSERT INTO student(name,class,mark,sex)VALUES('$name','$class','$score','$sex')";
    $result = mysqli_query($connection, $query);
    return $result;
  }

  ?>