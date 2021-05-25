<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="user_css.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.js"></script>
  <script src="user_js.js" defer></script>

  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #f7d418;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: #a11e12;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-weight: bold;
    }

    li a:hover {
      background-color: white;
    }

    body {
      margin: 0;
      height: 100%;
      overflow: hidden
    }
  </style>

</head>

<body>
  <ul>
    <li><img src="https://student.umindanao.edu.ph/images/um-seal.png" alt="UM STUDENT PORTAL MAIN"
        style="height: 50px;"></a></li>
    <li>
      <h3> UM CALENDAR </h3></a>
    </li>
    <li style="float:right;"><a href="todo.php?logout='1'">LOGOUT</a></li>
  </ul>

  <div class="todo-calendar  todo-block">
    <div class="usercalendar" id='calendar'></div>
  </div>
  <div class="todo-grid-parent">

    <div>
      <span></span>
      <button id="addBtn"></button>
      <span></span>
      <button id="sortBtn"></button>

      <label id="shortlistBtn"></label>
    </div>
    <h1> LIST OF EVENTS</h1>
    <table id="todoTable" style="background-color:white" class=" todo-block">
      <tr>
        <td></td>
        <td>Date</td>
        <td>Time</td>
        <td>Event</td>
        <td>
          <select id="categoryFilter">
          </select>
        </td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>

  </div> <!-- class="todo-grid-parent" -->

  <div class="todo-overlay" id="todo-overlay">
    <div class="todo-modal" id="todo-modal">
      <div class="todo-input todo-block">
        <span>Event: </span>
        <input type="text" readonly="readonly" placeholder="Enter new to-do" id="todo-edit-todo">
        <span>Category: </span>
        <input readonly="readonly" type="text" placeholder="Enter category" list="categoryList" id="todo-edit-category">
        <datalist id="categoryList">
          <option value="Personal"></option>
          <option value="Work"></option>
        </datalist>
        <span>Date:</span>
        <input readonly="readonly" type="date" id="todo-edit-date">
        <span>Time:</span>
        <input readonly="readonly" type="time" id="todo-edit-time">
        <span></span>
        <button id="changeBtn">BACK</button>
      </div>
    </div>
    <div class="todo-modal-close-btn" id="todo-modal-close-btn">X</div>
  </div>

</body>

</html>
