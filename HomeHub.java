package homehub;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.Reader;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import static javax.swing.JOptionPane.ERROR_MESSAGE;

/**
 *
 * @author Jay
 */
public class HomeHub 
{

    /**
     * Implements the main class of the project
     * 
     * @param args the command line arguments
     */
    public static void main(String[] args) 
    {
        UniversalHandler reader = new UniversalHandler();
        
        //temperature test
       /* try 
        {
            reader.readTemp("temperature.txt");
        } catch (IOException ex) 
        {
            JOptionPane.showMessageDialog(null, ex, "Error!", ERROR_MESSAGE);
        }*/
        
        
        //humidity test
        try 
        {
            reader.readHumidity("humidity.txt");
        } catch (IOException ex) 
        {
            JOptionPane.showMessageDialog(null, ex, "Error!", ERROR_MESSAGE);
        }
        
        
        /*
        //radiator test
        try 
        {
            reader.readRadiator("radiator.txt");
        } catch (IOException ex) 
        {
            JOptionPane.showMessageDialog(null, ex, "Error!", ERROR_MESSAGE);
        } */
    }
    
}
