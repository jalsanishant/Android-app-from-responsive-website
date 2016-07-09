Software Used for App :- Android Visual Studio
Database used         :- mongolab (online database storage service)
Website used          :- same website that I made for bootstrapping

Explanation for Android app without having database :-
(UrL - https://www.youtube.com/watch?v=MDnRzsQXLo8&feature=youtu.be)

Location where changes made in visual studio & explained in video:-
1) MainActivity.java (This is where functioning of app is designed by writing code)
2) activity_main.xml (This is used to describe main activity of template which we choose at start- while creating a project. I selected blank activity.)
3) AndroidManifest.xml (This is where information from app is feed into android machine. We declare package name here & it acts as unique identifier for android machine to execute the app)
4) newly created java class MyAppWebViewClient.java



Work done :-
	I had edited my app logo . Then I put a flash screen image before opening of website after clicking on app icon. I placed my pictures for logo & flash screen with exact screen size of emulator
in my application under myandroidprojects folder & written code for extracting while running app.
written code 


Problems faced :-
1) I got a problem with Generate Signed APK under Build tab. I generated new one under release mode. The errors it showing are -
i)   error: method does not override or implement a method from a supertype
ii)  Error:Execution failed for task ':app:compileDebugJava'.
    > Compilation failed; see the compiler error output for details.
2)  Remaining errors shown in video is due to incompleted programming code files(Database operations, TableData, Json Parser) since I checked executing by removing these 3 files.
3) I had downloaded other API's but it showing only Nexus 5 in available AVD's

Also the same errors in Debug mode. I think this maybe the reason for not getting my app logo & flash screen

----------------------------------------------------------------------------------------------------------------------------------------------------------------------

Explanation of Android app with database :-

	The first problem I had is I don't have enough knowledge in mysql & I haven't taken any courses regarding it yet. Anyhow I learned few things & tried, but didn't worked out as I expected.

--> First I tried using online database storage provider called mongolab. I created few users with respective usernames & passwords so that they have access to database & can view the data in there. 
    Then I created login page in html. But didn't worked out that way.
--> Second I tried to attach databes with php script & Json script by using myphpadmin database. I'm not understanding the code when I'm in between code. So confusing.
--> Third I tried SQLite which we could use from android studio itself. I developed code & created tables, fields, enabled queries. But struck in between. 
    I could complete this by creating a login template in new project & selecting login activity template & then putting the same previous code in here. But this becomes an entirely different app 
    with only login page. Instead I created new java classes(Database operations, TableData, Json Parser), written code in it. But I can't able to understand & write complete code.
    So, I attached screenshots of code and sended.



                    ---------This is it----------

