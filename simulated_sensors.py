import random
import time

file_electricity = "sensors/electricity.txt"
file_heater_temp = "sensors/heater_temperature.txt"
file_humidity = "sensors/humidity.txt"
file_temperature = "sensors/temperature.txt"

while True:
    #Random generated values for the simulated sensors each second
    rand_electricity = random.randrange(0, 10000) #Instant PC in Watts
    rand_heater_temp = random.randrange(25, 120) #Nominal Range 40-90
    rand_humidity = random.randrange(0, 100) #Nominal Range 30-80
    rand_temperature = random.randrange(8, 40) #Nominal Range 17-26

    print("Instant Electrical Power Consumption: " + str(rand_electricity) + " Watt")
    f1 = open(file_electricity, "w")
    f1.write(str(rand_electricity))
    f1.close()

    print("Room Temperature: " + str(rand_temperature) + " C")
    f2 = open(file_temperature, "w")
    f2.write(str(rand_temperature))
    f2.close()

    print("Atmospheric Humidity: " + str(rand_humidity) + " %")
    f3 = open(file_humidity, "w")
    f3.write(str(rand_humidity))
    f3.close()

    print("Heater Element Temperature: " + str(rand_heater_temp) + " C")
    f4 = open(file_heater_temp, "w")
    f4.write(str(rand_heater_temp))
    f4.close()

    print("--------------------")

    time.sleep(1)