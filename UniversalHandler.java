package homehub;


import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.PrintWriter;
import javax.swing.JOptionPane;


/**
 *Contains methods for reading and manipulating data
 * 
 * @author Jay
 */
public class UniversalHandler 
{
    private BufferedReader in;
    private String message;
    private PrintWriter writer;
    
    public UniversalHandler() {} ; //Empty constructor
    
   /**
    *Implements the temperature data reading and handling
    * 
    *@param filename The name of the txt to be read
    *@throws java.io.FileNotFoundException
    *@throws java.io.IOException 
    */
    public void readTemp(String filename) throws FileNotFoundException, IOException
    {
        in = new BufferedReader( new FileReader(filename) ); //Initialize buffer
        
        String line;
        
        line = in.readLine(); //read first line of file (our files will only contain one line)
        JOptionPane.showMessageDialog(null, line);
        
        in.close(); //close buffer
        
        int temperature = Integer.parseInt(line); //converts line (string) to Int
        
        //checking if temp is between bounds (comfort human bounds are 15-25 celcius)
        if(temperature<15)
        {
            message="cold";
        }
        else if(temperature>25)
        {
            message="hot";
        }
        else
        {
            message="ok";
        }
        
        //writing temperature variables to new file
        //O stands for Output
        writer = new PrintWriter("temperatureO.txt", "UTF-8");
        writer.println(temperature);
        //writer.println(message);
        writer.close();
        
        //writing key message to different file
        writer = new PrintWriter("tempMessage.txt" , "UTF-8");
        writer.println(message);
        writer.close();
    }
    
    //Implements the humidity data reading and handling
    public void readHumidity(String filename) throws FileNotFoundException, IOException
    {
        in = new BufferedReader( new FileReader(filename) ); //Initialize buffer
        
        String line;
        
        line = in.readLine(); //read first line of file (our files will only contain one line)
        JOptionPane.showMessageDialog(null, line);
        
        in.close(); //close buffer
        
        int humidity = Integer.parseInt(line); //converts line (string) to Int
        
        //checking if humidity is between bounds (comfort human bounds are 30% - 80%)
        if(humidity<30)
        {
            message="dry";
        }
        else if(humidity>80)
        {
            message="wet";
        }
        else
        {
            message="ok";
        }
        
        //writing humidity variables to new file
        writer = new PrintWriter("humidityO.txt", "UTF-8");
        writer.println(humidity);
        //writer.println(message);
        writer.close();
        
        //writing key message to different file
        writer = new PrintWriter("humidityMessage.txt" , "UTF-8");
        writer.println(message);
        writer.close();
    }
    
    //Implements radiator reading and handling.
    //All comparisons correspond to an ideal 16m^2
    public void readRadiator(String filename) throws FileNotFoundException, IOException
    {
        in = new BufferedReader( new FileReader(filename) ); //Initialize buffer
        
        String line;
        
        line = in.readLine(); //read first line of file (our files will only contain one line)
        JOptionPane.showMessageDialog(null, line);
        
        in.close(); //close buffer
        
        int radiator = Integer.parseInt(line); //converts line (string) to Int
        
        //checking if radiator emission is between bounds (ideal emission to 16m^2 is 1635W)
        if(radiator>3200)
        {
            message="efficiencybelow50";
        }
        else
        {
            message="badefficiency";
        }
        
        //writing radiator variable to new file
        writer = new PrintWriter("radiatorO.txt", "UTF-8");
        writer.println(radiator);
        //writer.println(message);
        writer.close();
        
        //writing key message to different file
        writer = new PrintWriter("radiatorMessage.txt" , "UTF-8");
        writer.println(message);
        writer.close();
    }
    
}
