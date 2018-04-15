<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
    
  <%@ page import="java.sql.*" %>
<%@ page import="com.mysql.jdbc.Connection" %>
<%@ page import="com.mysql.jdbc.Statement" %>
<%@ page import="java.io.*" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<%
	PrintWriter print = response.getWriter();

	String sid, name, email, year, dob, operation;

	sid = request.getParameter("sid");
	name = request.getParameter("name");
	email = request.getParameter("email");
	year = request.getParameter("year");
	dob = request.getParameter("dob");
	operation = request.getParameter("option");
	
	
	
	try{
		Class.forName("com.mysql.jdbc.Driver");
		Connection connect =(Connection) DriverManager.getConnection("jdbc:mysql://localhost/student", "root", "tejas");
		
		Statement statement =(Statement) connect.createStatement();
		
		
		
		switch(operation)
		{
		case "insert":{
			String sql = "INSERT INTO student VALUES('" +sid+ "','" +name+ "','" +email+ "','" +year+ "','" +dob+ "');";
			int i = statement.executeUpdate(sql);
			
			if(i<0) {
				print.println("Failed to insert values");
			}else {
				print.println("Insert Successfull");
			}

			break;
		}
		case "update":{
			String sql = "UPDATE student SET name='" +name+ "',email='" +email+ "',year='" +year+ "',dob='" +dob+ "' WHERE sid='" +sid+ "';";
			int i = statement.executeUpdate(sql);

			if(i<0) {
				print.println("Failed to update values");
			}else {
				print.println("Update Successfull");
			}

			break;
		}
		case "delete":{
			String sql = "DELETE FROM student WHERE sid='" +sid+ "';";
			
			int i = statement.executeUpdate(sql);

			if(i<0) {
				print.println("Failed to update values");
			}else {
				print.println("Delete Successfull");
			}
			break;
		}
		case "select":{
			ResultSet result = null;
			
			String sql = "SELECT * FROM student ;";
			
			result = statement.executeQuery(sql);
			
			
			%>
			
			<centre>
				<h3>Student Details</h3>
				<br>
				<table>
					
					<tr>
						<td>Student Id</td>
						<td>Name</td>
						<td>Email</td>
						<td>Year</td>
						<td>Date Of Birth</td>
					</tr>
					
					
					<% while(result.next()){ %>
						<tr>
							<td><%=result.getString("sid")%></td>
							<td><%=result.getString("name")%></td>
							<td><%=result.getString("email")%></td>
							<td><%=result.getString("year")%></td>
							<td><%=result.getString("dob")%></td>
						</tr>
					<% } %>				
				
				</table>
			</centre>
			
			<%
			
			break;
		}
		}
		
		
	}catch(Exception e){
		e.printStackTrace();
	}
	
	
	

	
%>
	
</body>
</html>