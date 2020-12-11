# Airline_reservation_system


## Idea
A online airline reservation system with inerface to select source and destination cities alongwith a graphical interface to select suitable available seats .
It also sends booking details with seat No and class (economy,buisness) to user through email and sms.
It is modular website by creating  common pages (e.g.  headers,footers,javascript and css links)
and these common pages are included whereever required with PHP include statments.


### Sequence of files and there use

1. Frontend: css-> for bootstrap files</br>
             dist-> jquery validation files</br>
   connections: connections.php (all css and javascript files link)</br>
   Fight seating Plan (made with buttons using loops)::</br>
            ~indigo.php</br>
            ~spicejet.php</br>
            ~boing.php</br>
            
2. When the user starts **index.php** form where user can log in which runs  **userlogin.php** and creates a session and stores the user email in session.
later this session email is used to send confirmation mails.

3. When user makes a booking</br>

~ **virtual bill** is shown to user</br>
~ After that **sms** and **email** is sent to user on mobile seats and time of flight with other needed instructions. </br>

4. files used for mailing are **class.phpmailer.php** and **class.smtp.php**.</br>

5. Admin account is set from where acoount  can be activated or blocked and same will be notified to user through email.</br>
   Admin files: **admin_login.php**</br>
   Other files:</br>
    ~**changepassword.php**: utility function to change pasword.</br>
    ~**updateflight.php**: utility function to update flight related details.</br>
           
