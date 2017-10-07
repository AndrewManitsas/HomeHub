import serial

serial_port = "COM6"
baud_rate = 9600
file_path_1 = "sensors/a.txt"
file_path_2 = "sensors/b.txt"

sr = serial.Serial(serial_port, baud_rate)

while True:
    line = sr.readline()
    line = line.decode("utf-8")
    #print(line)
    s1, s2 = line.split(",")
    print("Sensor 1: " + s1)
    print("Sensor 2: " + s2)
    f1 = open(file_path_1, "w")
    f1.write(s1)
    f1.close()
    f2 = open(file_path_2, "w")
    f2.write(s2)
    f2.close()