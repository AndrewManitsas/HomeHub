import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.Reader;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import static javax.swing.JOptionPane.ERROR_MESSAGE;
import java.util.concurrent.TimeUnit;

public class HomeHub 
{
    //@param args the command line arguments

    public static void main(String[] args) 
    {
        while (true)
        {
            UniversalHandler reader = new UniversalHandler();
            
            System.out.println("Fetching new values from the sensors.");

            try 
            {
                reader.readHumidity("sensors/humidity.txt");
            } 
            catch (IOException ex) 
            {
                JOptionPane.showMessageDialog(null, ex, "Error!", ERROR_MESSAGE);
            }

            try 
            {
                reader.readTemp("sensors/temperature.txt");
            } 
            catch (IOException ex) 
            {
                JOptionPane.showMessageDialog(null, ex, "Error!", ERROR_MESSAGE);
            }

            try 
            {
                reader.readRadiator("sensors/temperature.txt", "sensors/heater_temperature.txt");
            } 
            catch (IOException ex) 
            {
                JOptionPane.showMessageDialog(null, ex, "Error!", ERROR_MESSAGE);
            }

            System.out.println("--------------------");
            
            try        
            {
                Thread.sleep(5000);
            } 
            catch(InterruptedException ex) 
            {
                Thread.currentThread().interrupt();
            }
        }
    }
}