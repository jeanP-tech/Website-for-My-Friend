<!DOCTYPE html>
<html>
  <head>
    <title>Cat-Asteroid2</title>
    <link rel=stylesheet href='styles.css' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include"header.php";
    include"sidebar.php";
    ?>

<!--
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <form id="form1" name="form1" method="post" action="add.php">
        <td>
          <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
          <tr>
            <td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
          </tr>
          <tr>
            <td width="14%"><strong>Title</strong></td>
            <td width="2%">:</td>
            <td width="84%"><input name="title" type="text" id="topic" size="50" /></td>
          </tr>
          <tr>
            <td valign="top"><strong>Description</strong></td>
            <td valign="top">:</td>
            <td><textarea name="description" cols="50" rows="3" id="detail"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Post" /> </td>
          </tr>
          </table>
        </td>
        </form>
      </tr>
      </table>
-->

      <table class="table table-bordered">
    <thead>
        <caption> New Topic </caption>
    </thead>
    <tbody>
        <form action="add.php" method="post" encType="multiplart/form-data">
            <tr>
                <th>Title: </th>
                <td><input name="title" type="text" id="topic" class="form-control"></td>
            </tr>
            <tr>
                <th>Description: </th>
                <td><textarea cols="30"  name="description" id="detail" class="form-control"></textarea></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="Submit" value="Post" class="pull-right"/>
                </td>
            </tr>
        </form>
    </tbody>
</table>


  </body>
</html>
