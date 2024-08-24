# Timbrature
<br>
<br>

![alt text](view/img/connection.png)

<br>
<br>

### comandi di compilazione:

     g++ -std=c++11 -o ./controller/test/main ./controller/MainController.cpp ./model/SystemState.cpp ./controller/ReadRoutine.cpp ./controller/MailTotaleOre.cpp  ./controller/WriteRoutine.cpp ./controller/Routine.cpp -lpthread -lwiringPi -lmysqlclient -lcurl -D TEST_MAIN_CONTROLLER

    esecuzione:
     ./controller/test/main

# RPI
<br>
<br>

     cd /var/www/html/share/timbrature/

<br>
<br>

   forzo pull:

     git pull -f
 

   connection ssh: 

    ssh grillgarden@grillgarden.local

<br>
<br>

# git 
<br>
<br>

    sudo apt-get install git 
<br>

    git clone https://github.com/AlessioTommasi-supsi/timbrature

<br>

    cd ./timbrature
<br>

    git config --global --add safe.directory /var/www/html/timbrature


### monitor tool: 
    sudo apt install python3-psutil

<br>
   sudo git clone https://github.com/aristocratos/bpytop
   cd bpytop
   sudo make install



### install apache mysql phpmyadmin FROM SCRATCH without docker:
https://randomnerdtutorials.com/raspberry-pi-apache-mysql-php-lamp-server/

    sudo apt install apache2 -y
<br>

sudo apt install php -y
<br>

    sudo apt install mariadb-server php-mysql -y
<br>

    sudo service apache2 restart
<br>

    sudo mysql_secure_installation
<br>

    sudo apt install phpmyadmin -y
<br>

    sudo phpenmod mysqli
<br>

    sudo service apache2 restart
<br>

    sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
<br>

    sudo chmod -R 770 /var/www/html/
<br>

    cd /var/www/html
<br>
<br>

# setup samba:
<br>
<br>

https://magpi.raspberrypi.com/articles/samba-file-server
<br><br><br>

    sudo apt-get install samba samba-common-bin
<br>

    sudo mkdir -m 1777 /share
<br>

    sudo nano /etc/samba/smb.conf

add the follwing line to file:
[share]
Comment = Pi shared folder
Path = /share
Browseable = yes
Writeable = Yes
only guest = no
create mask = 0777
directory mask = 0777
Public = yes
Guest ok = yes



## installazione librerie di sistema: 
 
 sudo apt install libmysql++-dev
 sudo apt-get install libcurl4-openssl-dev

 git clone https://github.com/WiringPi/WiringPi.git
 cd WiringPi
 ./build

 

## Rfid:
   sudo pip3 install mfrc522 --break-system-packages
   sudo pip3 install spidev --break-system-packages


## avvio automatico: 

     chmod +x /var/www/html/share/timbrature/controller/test/main

     sudo nano /etc/rc.local
     aggiungi la seguente riga: 
     # Avvia il programma timbrature
     cd /var/www/html/share/timbrature
     sudo ./controller/test/main &

     prima di:
     exit 0


## test:
     g++ -std=c++11 -o ./controller/test/mailTimbrature  .otaleOre.cpp -lpthread -lwiringPi -lmysqlclient -lcurl -D TEST_MAIL_TOTALE_ORE_H
     ./controller/test/mailTimbrature
    
     g++ -std=c++11 -o ./controller/test/readRutine ./controller/ReadRoutine.cpp ./controller/Routine.cpp -lpthread -lwiringPi -lmysqlclient -D TEST_READ_ROUTINE

     g++ -std=c++11 -o ./controller/test/secureDb ./controller/DatabaseSecureConnection. -lpthread -lwiringPi -lmysqlclient -D TEST_DB_SECURE


     g++ -std=c++11 ./controller/DatabaseSecureConnection.cpp -o ./controller/test/database -L /usr/local/opt/mysql -lmysqlclient -D TEST_DB_SECURE

     g++ -std=c++11 ./controller/DatabaseTimbrature.cpp -o ./controller/test/databaseTimpr  -lmysqlclient -D TEST_DB_TIMBRATURE
     ./controller/test/database
        
      g++ -std=c++11 ./controller/MailHandler.cpp -o ./controller/test/mailHandler -lcurl -D TEST_MAIL -lmysqlclient
     ./controller/test/mailHandler

    g++ -std=c++11 -I header  Button.cpp -o ./test/Button  -lwiringPi

    all inizio non trovava libreria mysql!
      -> comando da immettere: sudo apt-get install default-libmysqlclient-dev


    g++ -std=c++11  SystemState.cpp -o ./test/Sys

    g++ -std=c++11  Github.cpp -o ./test/Git -D TEST_GIT

    NOTA CHE NO SCOPERTO:
      NON SERVONO I .H BASTA INCLUDERE E UTILIZZARE FILE CPP!

    g++ -std=c++11  LedInternet.cpp -o ./test/LedProva -D TEST_LED_INTERNET   
      -> CON QUESTO ATTIVO MAIN IN TEST LED INTERNET!
    g++ -std=c++11  InternetConnection.cpp -o ./test/Internet  -lwiringPi -D TEST_INTERNET -D LIBRARY
      con TEST_INTERNET   attivo il main con LIBRARY attivo le librerie! cosi non devo importarle da tutte le parti ogni volta!

    COMANDO COMPILAZIONE POST REFACTOR:
    g++ -std=c++11  ./controller/InternetConnection.cpp -o ./controller/test/int -D TEST_INTERNET
    ./controller/test/int


     g++ -std=c++11  ./model/ButtonWrite.cpp -o ./controller/test/ButtonWrite  -lwiringPi
     ./model/ButtonWrite.cpp:8:7: error: redefinition of ‘class ButtonWrite’

###Nota: 
questo comando giustamente da errore!<br>

    per compilare la singola classe devo utilizzare:  

     g++ -std=c++11  ./model/ButtonWrite.cpp -o ./controller/test/ButtonWrite  -lwiringPi -D TEST_BUTTON_WRITE

 cosi posso avviare main!

<br>
<br>

# RICORDA:

x dev ho usato cartella cd /var/www/html/share/timbrature ma per produzione ho usato cd /var/www/html/timbrature!