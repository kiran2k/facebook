<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<script language="javascript"  src="js/bootstrap.min.js"></script>
<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
<script language="javascript" src="" ></script>


<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<form action="" method="post">
 <div class="container-fluid">
<div class="row header">
<div class="logo col-md-offset-0 col-md-12 col-sm-offset-3 col-sm-2"><img src="img/fx.png" />
</div>
<div class="bd">
<div class="bx1 col hidden-sm hidden-xs">
email or phone<br /><input type="text" name="ename"/>
</div>
<div class="bx2 col hidden-xs hidden-sm">
password<br /><input type="text" name="pname"/><br />
<h6>forgotten password?</h6>
</div>
<div class="bx3 col hidden-xs  hidden-sm">
<input type="submit" value="Login" class="btn-primary" />
</div>
</div>
</div>
</form>

<div class="sm col  hidden-lg hidden-md visible-sm  visible-xs">
<form action="" method="post">
<table width="400" height="400" align="center" cellpadding="10" cellspacing="10">
<tr><td><input type="text" placeholder="Email" name="ename"/></td></tr>
<tr><td><input type="password" placeholder="password" name="pname"/></td></tr>
<tr><td>forgotten password?</td></tr>
<tr><td><input type="submit" value="Login" class="btn-primary" /></td></tr>
<tr><td>Sign Up?</td></tr>
<tr><td><input type="submit" value="Create Account" class="btn-success"/></td></tr>
</table>
</form>
</div>

<div class="pg  col-md-offset-0 col-md-12 col-lg-12 hidden-sm hidden-xs ">
<div class="p1">
<h1>Connect with friends</h1>
<h2>on facebook</h2>
<img src="img/fbgrp.png" width="500" height="350">
</div>
<h1>Create an account</h1>
<h2 >It's free and always will be</h2> 
<table>
<form action="phpval.php" method="post">
<tr><td ><input type="text" name="fname" size="30" placeholder="First Name" class="rect" id="fna"><label id="label1"><?php if(isset($_GET["namemsg"])){echo $_GET["namemsg"];}?></label></td><td><input type="txt" name="lname" size="30" placeholder="Last Name" class="rect"  id="lna"><label id="label2"><?php if(isset($_GET["lnamemsg"])){echo $_GET["lnamemsg"];}?></label></td></tr>
<tr><td colspan="2"><input type="text" name="mobile" placeholder="Mobile Number"  size="65" class="rect"  id="mob"><label id="label3"><?php if(isset($_GET["phonemsg"])){echo $_GET["phonemsg"];}?></label></td></tr>
<tr><td colspan="2"><input type="txt" name="email" placeholder="E-mail"  size="65" class="rect"  id="ema"><label id="label4"><?php if(isset($_GET["emailmsg"])){echo $_GET["emailmsg"];}?></label></td></tr>
<tr><td colspan="2"><input type="txt" name="password" placeholder="Password"  size="65" class="rect"  id="pas"><label id="label5"><?php if(isset($_GET["passwordmsg"])){echo $_GET["passwordmsg"];}?></label></td></tr>
<tr><td colspan="2"><br>Birthday</td></tr>
<tr><td>
<select name="day" id="day">
<option>Day</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>

<select name="month" id="mon">
<option value="">Month</option>
<option value="1">jan</option>
<option value="2">feb</option>
<option value="3">mar</option>
<option value="4">apr</option>
<option value="5">may</option>
<option value="6">jun</option>
<option value="7">jul</option>
<option value="8">aug</option>
<option value="9">sep</option>
<option value="10">oct</option>
<option value="11">nov</option>
<option value="12">dec</option>
</select>

<select name="year" id="yea"> <label id="5"></label>
<option>Year</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
</select><label id="label6"><?php if(isset($_GET["dobmsg"])){echo $_GET["dobmsg"];}?></label>
</td>
<td>
<sup><a href="">
<h4>why do i need to provide my<br>
                             date of birth?</h4></a></sup>
</td></tr>

<tr>
<td colspan="2">
<input type="radio" name="gender" value="male" id="gender" checked="checked">male
<input type="radio" name="gender" value="female" id="gender">female<label id="label7"></label>
<br>
<h6>By clicking create an account you agree to our <a href="">terms</a> and that <br>
you have read our<a href=""> Data policy</a>,including our cookie use.</h6>
<br>
</td></tr>
<tr><td>
<input type="submit"  width="200" height="50" class="btn-success" id="register" value="Create an Acoount">
</td></tr>
</form>
</table>   
</div>
</body>
</html>
