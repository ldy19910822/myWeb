<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
	
  </style>
  <script>
  
  </script>
 </head>
 <body>
	<form action='result.php' method='post'>
		<table>
			<tr>
				<td>第一个数</td>
				<td><input name='num1' /></td>
			</tr>
			<tr>
				<td>第二个数</td>
				<td><input name='num2' /></td>
			</tr>
			<tr>
				<td>运算符</td>
				<td>
					<select name='oper'>
						<option value='+'>+</option>
						<option value='-'>-</option>
						<option value='*'>*</option>
						<option value='/'>/</option>
					</select>

				</td>
			</tr>
			<tr>
				<td colspan='2'><input type='submit' value='计算结果' /></td>
			</tr>
		</table>
	</form>
 </body>
</html>