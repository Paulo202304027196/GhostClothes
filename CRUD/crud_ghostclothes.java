import java.sql.*;
import java.util.*;

public class crud_ghost {

	public static void main(String[] args) {
		String JDBC_DRIVER = "com.mysql.cj.jdbc.Driver";
		String DB_URL = "jdbc:mysql://localhost:3306/ghostclothesdb";
		String USER = "root"; //usuário padrão XAMPP
		String PASS = ""; //senha padrão XAMPP
		
		try {
			Class.forName(JDBC_DRIVER);
			Connection conn = DriverManager.getConnection(DB_URL, USER, PASS);
			Statement stmt = conn.createStatement();
			
			
			String query = "CREATE TABLE IF NOT EXISTS products (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, price INT NOT NULL, PRIMARY KEY (id))";
			
			stmt.executeUpdate(query);
			
			Scanner scan = new Scanner(System.in);
			
			System.out.println("1. Add Product");
			System.out.println("2. Read Product");
			System.out.println("3. Update Product");
			System.out.println("4. Delete Product");
			
			System.out.print("Enter Choice:");
			String choice = scan.nextLine();
			
			switch(choice) {
			case "1":
				//Adicionar Produto
				System.out.print("Enter Product Name:");
				String name = scan.nextLine();
				
				System.out.print("Enter Product Description:");
				String description = scan.nextLine();
				
				System.out.print("Enter Product Price:");
				String price = scan.nextLine();
			
			
				query = "INSERT INTO products (name, description, price) VALUES ('"+name+"','"+description+"','"+price+"')";
				
				stmt.executeUpdate(query);
				break;
			case "2":
				//Ler Produto
				System.out.print("Enter Product id: ");
				int id = scan.nextInt();
				
				query = "SELECT * FROM products WHERE id = "+ id;
				
				ResultSet rs = stmt.executeQuery(query);
				
				if(rs.next()) {
					System.out.println("ID: "+rs.getInt("id"));
					System.out.println("Name: "+rs.getString("name"));
					System.out.println("Description: "+rs.getString("description"));
					System.out.println("Price: "+rs.getInt("price"));
				}else {
					System.out.println("Product Not Foud!");
				}
				break;
			case "3":
				System.out.print("Enter Product id: ");
				id = scan.nextInt();
				
				scan.nextLine();
				System.out.print("Enter New Product Name: ");
				name = scan.nextLine();
				
				System.out.print("Enter New Product Description: ");
				description = scan.nextLine();
				
				System.out.print("Enter New Product Price: ");
				price = scan.nextLine();
				
				query = "UPDATE products SET name = '"+name+"', description = '"+description+"', price = '"+price+"' WHERE id=" + id;
				
				int result = stmt.executeUpdate(query);
				
				if(result > 0) {
					System.out.println("Product Update Successfully!");
				}else {
					System.out.println("Product Not Found");
				}
				break;
			case "4":
				System.out.print("Enter Product id: ");
				id = scan.nextInt();
				
				query = "DELETE FROM products WHERE id ="+id;
				
				result = stmt.executeUpdate(query);
				
				if(result> 0) {
					System.out.println("Product Deleted Succesfully!");
				}else {
					System.out.println("Product Not Found");
				}
				break;
			}
			
			
			
			
			stmt.close();
			conn.close();
		}catch(Exception e) {
			System.out.print("ERROR:"+e.getMessage());
		}

	}

}
