<h1>MFN Web Framework v1.0.0 public</h1>
<h3>A Procedural PHP Framework</h3>
<h4>What is MFN Web Framework?</h4>
<p>
    MFN Web Framework is A Procedural PHP Framework that is suits for small to medium project but it is also suits for big and large
    project and it is all depends on how you struct your functions and on your logic.<br>
    Procedural PHP is not bad at all. It is the native and the fastest programming paradigm of PHP.<br>
    Many people will argue about that but believe it or not, Procedural PHP is the fastest and the easiest approach.<br>
    Aside from that MFN Web Framework is a box for all of your out-of-the-box ideas using the native PHP Language not like other
    PHP Framework that feels like learning a new language and wasting all the courses, tutorials and guides you took and read.<br>
    This PHP Framework is not really literally a PHP Framework but it's like a PHP Template Framework, as soon as you get used to it
    you'll realize that it become more powerful and extense, you can do everything you want and you thought about without any limitation, skies the limit.
</p>
<h4>Before you start using this framework follow this few steps:</h4>
<ol>
    <li>Simply copy index.php and src folder inside the mwf folder to your project root folder.</li>
    <li>Change all the information needed for your project in config.php inside engine folder.</li>
    <li>Open your browser and go to the page domain or ip where your root project are running.</li>
    <li>If you see the welcome page then everything is working fine and ready for your very easy web development experience.</li>
</ol>
<h4>The Need to know first:</h4>
<ul>
    <li>You do not need to change or alter index.php at any cases unless your logic requires it.</li>
    <li>Aside from changing the WEBSERVER_LOCATION in engine.php there is no other reason to touch whats inside the engine.php unless you know what you are doing.</li>
    <li>You do not need to change or alter unset.php inside engine folder because it's only purpose is for very clean logout unless your logic requires it.</li>
    <li>library.php is compilation of functions you should not touch the initial script inside but you can add unless your logic requires it and you know what you are doing. </li>
    <li>All HTML or all design or all frontend related codes are stored or placed in view folder.</li>
    <li>All logic or functions or all backend related codes are stored or placed in control folder.</li>
    <li>master.php inside route folder is the one who's responsible on calling the needed frontend or backend file for an specific pages.</li>
    <li>All resource must be placed on the designated folder assigned inside resource folder.</li>
    <li>File folder is reserved for storing uploaded files of the users.</li>
    <li>This framework requires PHP7 and either Apache or Nginx web server.</li>
    <li>For web server configuration please refer to the next guide.</li>
</ul>
<h4>The pleasing url:</h4>
<ul>
    <li>This framework is equipped with pretty url hiding all the extensions and giving the users an illusion of what page they are viewing literally.</li>
</ul>
<h4>For Apache Web Server users:</h4>
<p>Just add this piece of code inside your .htaccess</p>
<p style="border: 1px solid black">
Options +FollowSymLinks<br>
RewriteEngine On<br>
<br>
RewriteCond %{REQUEST_FILENAME} !-d<br>
RewriteCond %{REQUEST_FILENAME} !-f<br>
RewriteRule ^ index.php [L]
</p>
<h4>For Nginx Web Server users:</h4>
<p>Just add this piece of code inside your nginx.conf</p>
<p style="border: 1px solid black">
location / {<br>
    try_files $uri $uri/ /index.php?$query_string;<br>
}
</p>
<h4>The Basic:</h4>
<ol>
    <li>Adding a New Page</li>
    <ul>
        <li>Open master.php inside route folder and add this piece of code:</li>
        <p style="border: 1px solid black">
            // PAGE TITLE<br>
            elseif($_SERVER['REQUEST_URI'] == '/newpage') {<br>
            &nbsp;&nbsp;require_once CONTROL."/newpage.php";<br>
            &nbsp;&nbsp;require_once VIEW."/newpage.php";<br>
            }
        </p>
        <li>Create new .php file with the name of your newpage inside control and view folder.</li>
        <li>Remember that control files are for backend purposes and view file is for frontend.</li>
        <li>Open your newpage.php in view folder and add this piece of codes then save</li>
        <p style="border: 1px solid black">
            &#60;title>Your New Page Title&#60;/title><br>
            &#60;body><br>
            &#60;!-- Your New Page Content --><br>
            &#60;/body>
        </p>
        <li>Leave newpage.php inside control folder is you do not have any data processing to do.</li>
        <li>Try your new page by accessing your IP or Domain then /newpage</li>
    </ul>
    <li>You can add your css code inside global.css inside resource/css folder if you do not want to include styling code on your html head.</li>
    <li>You can add your javascript code inside init.js inside resource/js folder if you do not want to include script code on your html head.</li>
    <li>Adding an Image</li>
    <ul>
        <li>Place the image you need inside resource/image folder.</li>
        <li>Call the image using this piece of codes then save</li>
        <p style="border: 1px solid black">
            &#60;img src="&#60;?=IMAGE; ?>/yourimage.png" />
        </p>
    </ul>
    <li>Display Array Content and Variables from Backend to Frontend</li>
    <ul>
        <li>Open newpage.php inside control folder and add this piece of codes then save</li>
        <p style="border: 1px solid black">
            &#60;?php<br>
            $color = "red";<br>
            $crayons = ["blue", "red", "green", "yellow"];
        </p>
        <li>Open newpage.php inside view folder and add this piece of codes inside content part then save</li>
        <p style="border: 1px solid black">
            Color &#60;?=$color; ?>&#60;br><br>
            Crayons:&#60;br><br>
            &#60;?php foreach($crayons as $temp) { ?><br>
                &nbsp;&nbsp;&#60;?=$temp; ?>&#60;br><br>
            &#60;?php } ?>
        </p>
    </ul>
    <li>href Attribute for Project page menu or navigation</li>
    <ul>
        <li>Just look at this simple code below on how to call an existing page on your project from other pages inside your project</li>
        <p style="border: 1px solid black">
        &#60;a href="&#60;?=PAGE['domain']; ?>/newpage">New Page&#60;/a>
        </p>
    </ul>
    <li>Display Page Information from config.php to Frontend</li>
    <ul>
        <li>Just look at this lines of codes below and replace the page information you want to display</li>
        <p style="border: 1px solid black">
        &#60;?=PAGE['copyright']; ?>
        </p>
    </ul>
</ol>
<h4>The Database Manipulation:</h4>
<p>
    This guide requires mysql or mariadb and phpMyAdmin installed on your system<br>
    Create new database called my_db<br>
    Create new table named my_table<br>
    Create 2 columns named my_name and my_email<br>
    Don't forget to change your database credentials on config.php inside engine folder<br>
</p>
<ol>
    <li>Insert Data</li>
    <ul>
        <li>Open backend file for example newpage.php inside control folder and add this lines of codes and save</li>
        <p style="border: 1px solid black">
            $insert_script = "INSERT INTO my_table (my_name, my_email) VALUES ('Keith', 'keith@email.com')";<br>
        </p>
        <li>Open frontend file for example newpage.php inside view folder and add this lines of codes then save and try</li>
        <p style="border: 1px solid black">
            &#60;?php if(mysqli_query(connect(), $insert_script)) { ?><br>
                &nbsp;&nbsp;&#60;b>Data Inserted&#60;/b><br>
            &#60;?php else { ?><br>
                &nbsp;&nbsp;&#60;b>Data Insert Error&#60;/b><br>
            &#60;?php } mysqli_close(connect()); ?>
        </p>
    </ul>
    <li>Update Data</li>
    <ul>
        <li>Open backend file for example newpage.php inside control folder and add this lines of codes and save</li>
        <p style="border: 1px solid black">
            $update_script = "UPDATE my_table SET my_email='keith14@email.com' WHERE my_name='Keith'";<br>
        </p>
        <li>Open frontend file for example newpage.php inside view folder and add this lines of codes then save and try</li>
        <p style="border: 1px solid black">
            &#60;?php if(mysqli_query(connect(), $update_script)) { ?><br>
                &nbsp;&nbsp;&#60;b>Data Updated&#60;/b><br>
            &#60;?php else { ?><br>
                &nbsp;&nbsp;&#60;b>Data Update Error&#60;/b><br>
            &#60;?php } mysqli_close(connect()); ?>
        </p>
    </ul>
    <li>Select Data</li>
    <ul>
        <li>Open backend file for example newpage.php inside control folder and add this lines of codes and save</li>
        <p style="border: 1px solid black">
            $select_script = "SELECT my_name, my_email FROM my_table";<br>
            $result = mysqli_query(connect(), $select_script);<br>
        </p>
        <li>Open frontend file for example newpage.php inside view folder and add this lines of codes then save and try</li>
        <p style="border: 1px solid black">
        &#60;?php if($result) { while($temp = mysqli_fetch_assoc($result)) { ?><br>
            &nbsp;&nbsp;&#60;b>Name:&#60;/b> &#60;?=$temp['my_name']; ?> &#60;b>Email:&#60;/b> &#60;?=$temp['my_email']; ?>&#60;br><br>
         &#60;?php } }  else { ?><br>
            &nbsp;&nbsp;&#60;b>Data Select Error&#60;/b><br>
        &#60;?php } mysqli_close(connect()); ?>
        </p>
    </ul>
    <li>NOTE</li>
    <p>Database Manipulation is very easy just use the procedural way and instead of creating new connection everytime just add connect() functions on the syntax and add mysqli_close(connect()); in the end</p>
</ol>
<p>
You can use MFN Portable Web Server for hassle free web development.<br>
MFN Web Server packed with latest Nginx, PHP7, MariaDB and phpMyAdmin version<br>
visit https://webserver.mfns.solutions to download for free
</p>
