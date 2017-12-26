<h2>1. σεταρω την PHP</h2>
sudo apt-get update <br/>
sudo apt-get install apache2<br/>
sudo apt-get install mysql-server (* οπου θέλει κωδικό απλα πατάμε enter)<br/>
sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql<br/>

<h2>2. κατεβάζω το project απο το bitbucket</h2>
cd ~/Documents && git clone https://spavl@bitbucket.org/spavl/ika.git <br/>

<h2>3. server settings</h2>
sudo nano /etc/apache2/sites-enabled/000-default.conf <br/>
ΠΡΙΝ ΤΟ &lt;/virtualHost&gt; (κατω κατω) προσθέτω τά <br/>
<pre>
	&lt;Directory /&gt;
	    Options FollowSymLinks
	    AllowOverride None
	 &lt;/Directory&gt;
	&lt;Directory /home/<strong>[TO USER NAME POY EXO STA UBUNTU]</strong>/Documents/ika/&gt;
	    Options Indexes FollowSymLinks MultiViews
	    AllowOverride None
	    Require all granted
	&lt;/Directory&gt;
</pre>
ΚΑΙ την τιμή του DocumentRoot σε <br/>
/home/<strong>[TO USER NAME POY EXO STA UBUNTU]</strong>/Documents/ika <br/>
Τέλος κάνω <strong>chmod -R 755 ~</strong>


<h2>Αν ανοίξω το <a href="http://localhost">http://localhost</a> θα πρέπει να δώ την αρχική</h2>


<br/><br/>

<h2>Git help</h2>

<h4>Πώς "κατεβάζω" αλλαγές</h4>
ειμαι μέσα στο directory του project και τρέχω <strong>git pull origin master</strong>

<h4>Πώς "ανεβάζω" αλλαγές</h4>
ειμαι μέσα στο directory του project και τρέχω<br>
<pre>
	git add .
	git commit -m "EDO GRAFO TI EKANA"
	git push origin master
</pre>