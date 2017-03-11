<!Doctype html>
<html>
	<head>
		<title>MyProject</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		
		<div class="container">
		<div class="conversation">
			<header>
				<h1>Human Conversation</h1>
			</header>
			<hr>
			
				<ul>
					<li class="HumanTalk"><span>10:00am</span>Afsha: Hey Good Morning!</li>
					<li class="HumanTalk"><span>10:10am</span>Raghava: Very Good Morning!</li>
					<li class="HumanTalk"><span>10:20am</span>Afsha: What are you doing now?</li>
					<li class="HumanTalk"><span>10:30am</span>Raghava: just now I wake up and how about you?</li>
					<li class="HumanTalk"><span>10:40am</span>Afsha: Just now finished my lunch!</li>
					<li class="HumanTalk"><span>10:50am</span>Afsha: Hey Good Morning!</li>
				</ul>
			
			<div class="StartConversation">
				<form method="post" action="process.php">
					<input type="text" placeholder="Enter a name">
					<input type="text" placeholder="Enter a message">
					<br><br>
					<button class="btn" type="submit">Send Conversation!</button>
				</form>
			</div>
			</div>
		</div>
	</body>
</html>