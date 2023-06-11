<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<link rel = 'stylesheet ' href = '#'>
<body>
  <div class="nav">
    <ul>
      <li class="nav-links">
        <div class="menu">
        <a href ='index.php'>Home</a>
        <a href = 'show_data.php'>List Data</a>
        <a href = '#'>Tambah Data</a>
      </li>
    </ul>
  </div>
</div>
<hr>
<div class="formclass">
<h3>Tambah Data Siswa</h3>
<form method="post" action="proses_barang.php?action=add">
<table>
	<tr>
		<td>Nis</td>
		<td>:</td>
		<td><input type="number" name="Nis" required/></td>
	</tr>
	<tr>
		<td>MTK</td>
		<td>:</td>
		<td><input type="number" name="MTK" required/></td>
	</tr>
	<tr>
		<td>Inggris</td>
		<td>:</td>
		<td><input type="number" name="Inggris" required/></td>
	</tr>
	<tr>
		<td>DPK</td>
		<td>:</td>
		<td><input type="text" name="DPK" required/></td>
	</tr>
	<tr>
		<td></td>
OOP/CRUD/index.php		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
  <tr>
    
  </tr>
</table>
</div>
</form>
<style>
.nav{
  padding: 20px;
  margin: 0px;
  background-color: #009879;
;
}
.nav ul li a{
  text-decoration: none;
}
.nav {
  display: flex;
  align-items: left;
  justify-content: space-between;
  padding: 20px;
  background-color: #009879;
  color: #fff;
}

.nav-links a {
  color: #fff;
}

/* LOGO */

/* NAVBAR MENU */
.menu {
  display: flex;
  gap: 1em;
  font-size: 18px;
}

.menu a:hover {
  background-color: #4c9e9e;
  border-radius: 5px;
  transition: 0.3s ease;
}

.menu a {
  padding: 5px 14px;
}
body {
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}

a {
  text-decoration: none;
  margin-left: 20px;
}

li {
  list-style: none;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.formclass{
	position: relative;
	
}


</style>
</body>
</html>