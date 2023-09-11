<style>
  *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;
}

body{
	height: 100vh;
	width: 100%;
}

.container12{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container12:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("image/contactbg.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box1{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left1{
	background: url("image/contactleft.png") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right1{
	padding: 25px 40px;
}

.contact{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

.contact:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2388c2;
}

.field1{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field1:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}

.btn1{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #1164d1;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn1:hover{
    background-color: #2388c2;
}

.field1:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}
</style>

<div class="container12" id="contact-us">
		<div class="contact-box1">
			<div class="left1"></div>
			<div class="right1">
				<h2 class="contact">Contact Us</h2>
				<input type="text" class="field1" placeholder="Your Name">
				<input type="text" class="field1" placeholder="Your Email">
				<input type="text" class="field1" placeholder="Phone">
				<textarea placeholder="Message" class="field1"></textarea>
				<button class="btn1">Send</button>
			</div>
			
		</div>
	</div>