//initialize variables
int aValue = 0;            
int bValue = 0;           
int led = 13;             //led pin selected
int receivedChar = 0;     
boolean newData = false;  


void setup() {
  Serial.begin(9600);
  pinMode(led,OUTPUT);
  //Serial.println("Arduino <READY>");
}

void loop() {
    recvOneChar();
    showNewData();
    readAnalogInput(); 
    delay(500);  
}



//Check if Serial has data
void recvOneChar() 
{
    if (Serial.available() > 0) 
    {
        receivedChar = Serial.read();
        newData = true;
    }
}

//If (recvOneChar == True) show new data
//Comments inside this function are for 
//serial input testing
void showNewData() {
    if (newData == true) 
    {
        //Serial.print("This just in ... ");
        //Serial.println(receivedChar);
        if(receivedChar == 49)
        {
            Serial.println("LED <ON>");
            digitalWrite(led,HIGH);
        }
        else if(receivedChar == 48)
        {
            Serial.println("LED <ON>");
            digitalWrite(led,LOW);
        }
        newData = false;
    }
}

//Post data from A0 and A5 
//analog inputs to serial
void readAnalogInput()
{ 
    //A0
    aValue = analogRead(A0);
    delay(10);
    aValue = analogRead(A0);
    delay(10);
    //Serial.print("A: ");                       
    Serial.print(aValue);
    Serial.print(",");
    
    //A5
    bValue = analogRead(A5);
    delay(10);
    bValue = analogRead(A5);
    delay(10); 
    //Serial.print("B: ");                       
    Serial.println(bValue);

    //the ADC multiplexer needs 
    //switching time and the voltage 
    //needs time to stabilize after switching
    //...(continue after developing)
}

