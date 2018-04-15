<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form action="operation.jsp" method="POST">
		
		<table>
			<tr>
				<td>Student ID:</td>
				<td><input type=text name="sid"></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type=text name="name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type=text name="email"></td>
			</tr>
			<tr>
				<td>Year: </td>
				<td><input type=text name="year"></td>
			</tr>
			<tr>
				<td>Date of birth:</td>
				<td><input type=text name="dob"></td>
			</tr>
		</table>
		
		<button name="option" value="insert">INSERT</button>
		<button name="option" value="update">UPDATE</button>
		<button name="option" value="delete">DELETE</button>
		<button name="option" value="select">SELECT</button>
	</form>
</body>
</html>