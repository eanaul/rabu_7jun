<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = 'stylesheet' href = 'style.css'>
  <title>Form Input Nilai Siswa</title>
</head>
<body>
  <div class="nav">
    <ul>
      <li class="nav-links">
        <div class="menu">
        <a href ='#'>Home</a>
        <a href = 'show_data.php'>List Data</a>
        <a href = 'add_data.php'>Tambah Data</a>
      </li>
    </ul>
  </div>
</div>
<div class="c-heroImageGrid">
  
	<div class="container">
		<div class="column"></div>
		<div class="column">
			<div class="row"></div>
			<div class="row">
				<div>
					<div class="text">
						<h6>
							This grid works<br>
							in Internet Explorer
						</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetuer
							adipiscing elit, sed diam nonummy nibh
							euismod tincidunt ut laoreet dolore magna
							aliquam erat volutpat. Ut wisi enim ad
							minim veniam, quis nostrud exerci tation
							ullamcorper suscipit lobortis nisl ut aliquip
							ex ea commodo consequat. Duis autem
						</p>
            
					</div>
				</div>
				<div></div>
			</div>
			<div class="row">
        
      </div>
		</div>
	</div>
</div>


<style>
  .card {
  box-sizing: border-box;
  display: grid;
  place-items: center;
  min-height: 5vh;
  margin-top: 10px;
  --blur: 16px;
  --size: clamp(300px, 50vmin, 600px);
  width: var(--size);
  aspect-ratio: 4 / 3;
  position: relative;
  border-radius: 2rem;
  overflow: hidden;
  color: #000;
  transform: translateZ(0);
}

.card__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: scale(calc(1 + (var(--hover, 0) * 0.25))) rotate(calc(var(--hover, 0) * -5deg));
  transition: transform 0.2s;
}

.card__footer {
  padding: 0 1.5rem;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background: red;
  display: grid;
  grid-template-row: auto auto;
  gap: 0.5ch;
  background: hsl(0 0% 100% / 0.5);
  backdrop-filter: blur(var(--blur));
  height: 30%;
  align-content: center;
}

.card__action {
  position: absolute;
  aspect-ratio: 1;
  width: calc(var(--size) * 0.15);
  bottom: 30%;
  right: 1.5rem;
  transform: translateY(50%)
    translateY(
      calc(
        (var(--size) * 0.4)
      )
    )
    translateY(calc(var(--hover, 0) * (var(--size) * -0.4)));
  background: purple;
  display: grid;
  place-items: center;
  border-radius: 0.5rem;
  background: hsl(0 0% 100% / 0.5);
/*   backdrop-filter: blur(calc(var(--blur) * 0.5)); */
  transition: transform 0.2s;
}

.card__action svg {
  aspect-ratio: 1;
  width: 50%;
}

.card__footer span:nth-of-type(1) {
  font-size: calc(var(--size) * 0.065);
}

.card__footer span:nth-of-type(2) {
  font-size: calc(var(--size) * 0.035);
}

.card:is(:hover, :focus-visible) {
  --hover: 1;
}
h6, p {
  font-family: sans-serif;
}

.c-heroImageGrid {
	position: relative;
	overflow: hidden;
	height: 50vw;
	background: #fff;
	margin-bottom: 60px;
}

.c-heroImageGrid .container {
	display: flex;
	align-items: flex-end;
	position: absolute;
	top: -20vw;
	left: -8vw;
	transform: rotateZ(45deg);
	height: 100vw;
	width: 107vw;
}

.c-heroImageGrid .container .column {
	overflow: hidden;
	position: relative;
}

.c-heroImageGrid .container .column:nth-of-type(1) {
	border-right: 8px solid white;
	width: 25%;
	height: 66vw;
}

.c-heroImageGrid .container .column:nth-of-type(1):hover {
	opacity: 0.75;
	cursor: pointer;
}

.c-heroImageGrid .container .column:nth-of-type(1):before {
	position: absolute;
	top: 8.4vw;
	left: 8.1vw;
	background-repeat: no-repeat;
	background-size: cover;
	transform: rotateZ(-45deg);
	content: "";
	width: 37vw;
	height: 38vw;
	background-image: url(https://images.pexels.com/photos/132037/pexels-photo-132037.jpeg?cs=srgb&dl=beach-blur-boardwalk-132037.jpg&fm=jpg);
}


.c-heroImageGrid .container .column:nth-of-type(2) {
	display: flex;
	flex-direction: column-reverse;
	width: 75%;
	height: 109.1vw;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row {
	border-top: 8px solid #fff;
}


.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(1) {
	position: relative;
	overflow: hidden;
	height: 50vw;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(1):hover {
	opacity: 0.75;
	cursor: pointer;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(1):before {
	position: absolute;
	top: -10.1vw;
	left: -14.3vw;
	background-repeat: no-repeat;
	background-size: cover;
	transform: rotateZ(-45deg);
	content: "";
	width: 65vw;
	height: 39vw;
	background-image: url(https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?cs=srgb&dl=arch-bridge-clouds-814499.jpg&fm=jpg);
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) {
	display: flex;
	height: 40.5vw;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(3) {
	border-top: none;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) {
	overflow: hidden;
	width: 30%;
	background-color: #8B8B8A;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) .text {
	width: 100%;
	height: 100%;
	overflow: visible;
	transform: rotateZ(-45deg);
	position: relative;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) .text h6 {
	position: absolute;
	color: #fff;
	text-transform: uppercase;
	font-weight: bold;
	font-size: 1.35vw;
	width: 20vw;
	top: 16vw;
	left: 7vw;
	line-height: 1.55vw;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) .text p {
	text-align: right;
	position: absolute;
	color: #fff;
	font-size: 0.9vw;
	width: 18vw;
	top: 23.5vw;
	left: -3.5vw;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(2) {
	position: relative;
	width: 70%;
	border-left: 8px solid white;
	overflow: hidden;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(2):hover {
	opacity: 0.75;
	cursor: pointer;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(2):before {
	position: absolute;
	top: 0;
	left: -40vw;
	width: 110.1vw;
	height: 110vw;
	background-repeat: no-repeat;
	background-size: cover;
	transform: rotateZ(-45deg);
	content: "";
	background-image: url(https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?cs=srgb&dl=adventure-calm-clouds-414171.jpg&fm=jpg);
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(3) {
	position: relative;
	height: 18.6vw;
	overflow: hidden;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(3):hover {
	opacity: 0.75;
	cursor: pointer;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(3):before {
	position: absolute;
	top: 7.5vw;
	left: 25vw;
	width: 33vw;
	height: 27vw;
	background-repeat: no-repeat;
	background-size: cover;
	transform: rotateZ(-45deg);
	content: "";
	background-image: url(https://images.unsplash.com/photo-1518098268026-4e89f1a2cd8e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80);
}

</style>
</body>
</html>