<div id="willkommen">
    {{ user.userdata.username }},
    <a href="logout.php">logout</a><br />
    <div>
			<a href="user/characters.php">MyChars</a><br />
			<a href="user/friends.php">MyFriends</a>
		</div>
    <!-- USER DATA -->
    <div id="userdata">
    	user-id:&nbsp; {{ user.userid }} <br />
      gm-level:&nbsp;<font color="#CC0000">{{ user.userdata.gmlevel }}</font><br />
    </div>
</div>