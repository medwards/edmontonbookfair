var friendLinkArray = new Array();
friendLinkArray[0] = new Array("http://www.thoughtcrimeink.com/", "thoughtcrime ink", "non-profit activist apparel collective");
friendLinkArray[1] = new Array("http://edmonton.iww.ca/", "Edmonton IWW", "Local Industrial Workers of the World");
friendLinkArray[2] = new Array("http://www.joeyonly.com/", "Joey Only", "Outlaw Folk Singer");
friendLinkArray[3] = new Array("http://profile.myspace.com/index.cfm?fuseaction=user.viewprofile&friendid=147800378", "Resistance on CJSR", "DIY Anarchist Punk and Music");
friendLinkArray[4] = new Array("http://www.oxygensmith.com/o2.php", "Oxygen Smith", "web design for advocates");
friendLinkArray[5] = new Array("http://www.facebook.com/apps/application.php?id=23259961499", "Anarchist Gifts", "Facebook gifts for revolutionaries");
friendLinkArray[6] = new Array("http://turning.ca", "Turning the Tide", "alternative bookstore and movie rentals");
friendLinkArray[7] = new Array("http://akpress.org", "AK Press", "Anarchist and radical book publishers and distributors.");
friendLinkArray[8] = new Array("http://pmpress.org", "PM Press", "Independent publishing producing and distributing short as well as large run projects, timely texts, and out of print classics.");
friendLinkArray[9] = new Array("http://apirg.org", "AP!RG", "Alberta Public Interest Research Group");
friendLinkArray[10] = new Array("http://blackcatpress.ca", "Black Cat Press", "Quality, affordable printing for non-profit organizations, small businesses and individuals.");
friendLinkArray[11] = new Array("http://junto.a-zone.org", "Junto Local 91 Radical Library", "The Junto is a library in Winnipeg specializing in rare, radical, and relevant books");
friendLinkArray[12] = new Array("http://spartacusbooks.org", "Spartacus Books", "Spartacus Books is a non-profit, volunteer & collectively run bookstore & resource center.");

function changeFriendLink() {
	randomnumber=Math.floor(Math.random()* friendLinkArray.length);
	friendLinkDOM = document.getElementById("friendLink");
	friendLinkDOM.href=friendLinkArray[randomnumber][0];
	friendLinkDOM.innerHTML=friendLinkArray[randomnumber][1];
	friendLinkDOM.title=friendLinkArray[randomnumber][2];
}
