<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<style>
	* {box-sizing: border-box}
    #contaner
	{
	max-width:1000px;
    margin:auto;

    position: relative;
    margin: auto;
        
	}
        #f1,#f2,#f3{
            display: none;
        }
        
    .slide{display: none}
    
    .img {vertical-align: middle;}
    .numberT{
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 8px;
            }
        .button1,.button2{
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
        }
    .button2 {
  right: 20px;
  border-radius: 3px 0 0 3px;
}
.button1 {
  left: 0px;
  border-radius: 3px 0 0 3px;
}

.button1:hover, .button2:hover {
  background-color: rgba(0,0,0,0.8);
}
    
    
    
    </style>
	<title></title>
</head>
<body>
	<div id="contaner">
		<div id="f1">
			<div class="img"><img src="032.jpg" alt=""></div>
			<div class="numberT">1/3</div>
		</div>
		<div id="f2">
			<div class="img"><img src="034.jpg" alt=""></div>
			<div class="numberT">2/3</div>
		</div>
		<div id="f3">
			<div class="img"><img src="039.jpg" alt=""></div>
			<div class="numberT">3/3</div>
		</div>
        <div class="button1"><a onclick="nslide(-1)">&#10094;</a></div>
        <div class="button2"><a onclick="nslide(1)">&#10095;</a></div>
	</div>
</body>
<script src="main.js"></script>
	
</html>