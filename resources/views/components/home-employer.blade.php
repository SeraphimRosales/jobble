
<!DOCTYPE html>
<html>
<head>
	<style>


body {
    margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
	background-color: #f1f1f1;
	color: #333;
}

header {
	background-color: #333;
	padding: 20px;
}

nav {
	display: flex;
	justify-content: space-between;
	align-items: center;
}

nav ul {
	display: flex;
	list-style: none;
}

nav ul li {
	margin-right: 20px;
}

nav ul li a {
	color: #fff;
	text-decoration: none;
	font-weight: bold;
	font-size: 16px;
}

.hero {
	background-color: #666;
	padding: 100px;
	text-align: center;
	color: #fff;
}

.custom-shape-divider-bottom-1682418256 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1682418256 svg {
    position: relative;
    display: block;
    width: calc(110% + 1.3px);
    height: 241px;
}

.custom-shape-divider-bottom-1682418256 .shape-fill {
    fill: #FFFFFF;
}

.hero h1 {
	font-size: 48px;
	margin-bottom: 20px;
}

.hero h2 {
	font-size: 36px;
}

.employers {
	text-align: center;
	padding: 50px;
}

.employers h3 {
	font-size: 24px;
	margin-bottom: 20px;
}

.employers img {
	margin: 20px;
	max-width: 400px;
}

.btn-postajob {
	background-color: #333;
	color: #fff;
	padding: 10px 20px;
	border-radius: 5px;
	font-size: 16px;
	text-decoration: none;
	margin-right: 20px;
}

.btn-postajob:hover {
	background-color: #666;
}

	</style>
</head>

<body>

	
	<section class="hero">

		<h1>HAVING A HARD TIME FINDING A RIGHT CANDIDATE FOR YOUR COMPANY?</h1>
		<h2>Be an employer in JOBBLE.</h2>
        <br>
        <a href="{{ route('register') }}" class="btn-postajob text-center">Post A Job</a>
	</section>


	<section class="employers">
		<h3>Let us help you find the perfect fit for your team!</h3>
		<img src="img/employers img (2).png">
		<img src="img/employers img.png">
		<img src="img/employers img (3).png">
	</section>
    
</body>