import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.PrintWriter;
import javax.swing.JOptionPane;

public class UniversalHandler 
{
    private BufferedReader in;
    private String message;
    private PrintWriter writer;
    
    public UniversalHandler() {} ; //Empty constructor

    //@param filename The name of the txt to be read
    //@throws java.io.FileNotFoundException
    //@throws java.io.IOException 

    public void readTemp(String filename) throws FileNotFoundException, IOException
    {
        in = new BufferedReader( new FileReader(filename) ); //Initialize buffer
        
        String line;
        
        line = in.readLine(); //read first line of file (our files will only contain one line)
        //JOptionPane.showMessageDialog(null, line);
        
        in.close(); //close buffer
        
        int temperature = Integer.parseInt(line); //converts line (string) to Int
        
        //checking if temp is between bounds (comfort human bounds are 15-25 celcius)
        if (temperature < 15)
        {
            message = "Room is too cold, initiating heating system.";
        }
        else if (temperature > 25)
        {
            message = "Room temperature is too hot, initiating Air Conditioning.";
        }
        else
        {
            message = "Room temperature optimal. No action needed.";
        }

        //writing key message to different file
        writer = new PrintWriter("site_values/error_temperature.txt" , "UTF-8");
        writer.println(message);
        writer.close();        
    }
    
    //Implements the humidity data reading and handling
    public void readHumidity(String filename) throws FileNotFoundException, IOException
    {
        in = new BufferedReader( new FileReader(filename) ); //Initialize buffer
        
        String line;
        
        line = in.readLine(); //read first line of file (our files will only contain one line)
        //JOptionPane.showMessageDialog(null, line);
        
        in.close(); //close buffer
        
        int humidity = Integer.parseInt(line); //converts line (string) to Int
        
        //checking if humidity is between bounds (comfort human bounds are 30% - 80%)
        if (humidity < 30)
        {
            message = "Humidity < 30%. Humidifier activated.";
        }
        else if (humidity > 80)
        {
            message = "Humidity > 80%. Dehumidifier activated.";
        }
        else
        {
            message = "Humidity levels optimal.";
        }
        
        //writing humidity variables to new file
        writer = new PrintWriter("sensors/humidity.txt", "UTF-8");
        writer.println(humidity);
        //writer.println(message);
        writer.close();
        
        //writing key message to different file
        writer = new PrintWriter("site_values/error_humidity.txt" , "UTF-8");
        writer.println(message);
        writer.close();
    }
    
    //Implements radiator reading and handling.
    //All comparisons correspond to an ideal 16m^2
    public void readRadiator(String filename, String filename2) throws FileNotFoundException, IOException
    {
        in = new BufferedReader( new FileReader(filename) ); //Initialize buffer
        
        String line;
        
        line = in.readLine(); //read first line of file (our files will only contain one line)
        //JOptionPane.showMessageDialog(null, line);
        
        in.close(); //close buffer
        
        BufferedReader in2 = new BufferedReader( new FileReader(filename2) ); //Initialize buffer
        
        String line2;
        
        line2 = in2.readLine(); //read first line of file (our files will only contain one line)
        //JOptionPane.showMessageDialog(null, line);
        
        in2.close(); //close buffer

        int radiator = Integer.parseInt(line); //converts line (string) to Int
        int radiator2 = Integer.parseInt(line2);
        
        //checking if radiator emission is between bounds (ideal emission to 16m^2 is 1635W)
        //radiator = room temperature
        //radiator2 = heater temperature
        //Rate = k * A * (|t1 - t2|) / d
        int kkk = 55; //Cast Iron heater
        int Ar = 4; //m2 of windows
        int d = 1; //Thickness of iron in heater
        int radiator_energy = kkk * Ar * (radiator2 - radiator) / d;

        if (radiator_energy > 3200)
        {
            message = "Efficiency < 50%. Service heating system.";
        }
        else
        {
            message = "Heating Efficiency > 50%. No action needed.";
        }

        //writing key message to different file
        writer = new PrintWriter("site_values/error_heater.txt" , "UTF-8");
        writer.println(message);
        writer.close();
    }
}