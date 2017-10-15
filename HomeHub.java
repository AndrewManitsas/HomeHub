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

public class HomeHub 
{
    //@param args the command line arguments

    public static void main(String[] args) 
    {
        UniversalHandler reader = new UniversalHandler();
        
        try 
        {
            reader.readHumidity("sensors/humidity.txt");
        } 
        catch (IOException ex) 
        {
            JOptionPane.showMessageDialog(null, ex, "Error!", ERROR_MESSAGE);
        }
    }
}