import com.opensymphony.xwork2.ActionSupport;
import java.sql.*; 
public class Demo  extends ActionSupport{
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	String idnumber,name,date,email;

	public String getIdnumber() {
		return idnumber;
	}

	public void setIdnumber(String idnumber) {
		this.idnumber = idnumber;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getDate() {
		return date;
	}

	public void setDate(String date) {
		this.date = date;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	@Override
	public String execute() throws Exception {
	   
	    //Login for insertion
	    try{  
	    Class.forName("com.mysql.jdbc.Driver");  
	    Connection con=DriverManager.getConnection(  
	    "jdbc:mysql://localhost:3306/mysql","root","S99709970");  
	    System.out.println("conn success");
	    Statement st=con.createStatement();
	    st.executeUpdate("insert into student values('"+idnumber+"','"+name+"','"+date+"','"+email+"')");
	    con.close();
		return "success";
	    }
	    catch(Exception e) {
	    	e.printStackTrace();
	    }
		return "error";
		
	}

}
