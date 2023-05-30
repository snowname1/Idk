<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body
{
 
    height: 100%;
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.card {
	 position: relative;
	 width: 300px;
	 height: 425px;
	 border: 10px solid #bde4f7;
	 margin: 60px auto 0 auto;
	 box-shadow: inset 10px 0px 15px 0px rgba(0, 0, 0, 0.1);
     background-image: linear-gradient(to bottom, rgba(255, 255, 255), rgba(255, 255, 255, 0.5)), url("https://scontent.xx.fbcdn.net/v/t1.15752-9/330263496_915561529707811_7343694870670881608_n.jpg?stp=dst-jpg_s206x206&_nc_cat=100&ccb=1-7&_nc_sid=aee45a&_nc_ohc=TE8ShXghOEwAX9AB51I&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTbxG_LPt8NCOCowd_tXzZJIiHWN35fvaa2S-Ru0GkqFQ&oe=649D4FC0");

	background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover;
	background-color: #e6f0e6;
}
 .card .text-container {
	 width: 80%;
	 height: 80%;
	 margin: auto;
}
 .strikethrough {
	 text-decoration: line-through;
}
 .card .text-container #head {
	 font-family: 'Nobile', sans-serif;
	 font-size: 1.5em;
	 margin: 60px auto 60px auto;
}
 .card p {
	 font-size: 1.1em;
	 line-height: 1.4;
	 font-family: 'Nobile';
	 color: #331717;
	 font-style: italic;
	 text-align: center;
	 margin: 30px auto 0px auto;
}
 .card .front {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 margin: -10px 0px 0px -10px;
	 border: 10px solid #bde4f7;
	 backface-visibility: hidden;
	 background-color: #ffffff;
	/* background-image: url($cover-image);
	 */
	 background-size: contain;
	 transform-style: preserve-3d;
	 transform-origin: 0% 50%;
	 transform: perspective(800px) rotateY(0deg);
	 transition: all 0.8s ease-in-out;
}
 .card:hover .front {
	 transform: perspective(800px) rotateY(-170deg);
	 background-color: #41718d;

}
 .card:hover .back {
	 transform: perspective(800px) rotateY(-170deg);
	 box-shadow: 7px 0px 5px 0px rgba(0, 0, 0, 0.3), inset 2px 0px 15px 0px rgba(0, 0, 0, 0.1);
	 
     background-image: linear-gradient(to bottom, rgba(255, 255, 255), rgba(255, 255, 255, 0.5)), url("");

	background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover;
	background-color: #e6f0e6;
}
 .card .back {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 border: 10px solid #bde4f7;
	 margin: -10px 0px 0px -10px;
	 backface-visibility: visible;
	 filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, .5));
	 transform-style: preserve-3d;
	 transform-origin: 0% 50%;
	 transform: perspective(800px) rotateY(0deg);
	 transition: all 0.8s ease-in-out;
	 background-color: #e6f0e6;
	 box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);
}

.imgset
{
  position: relative;
  z-index: 1;
  margin-bottom: -215px;
}
.imgset img
{
		
    box-shadow: 0px 6px 11px 7px rgba(0, 0, 0, 0.22);
    border-radius: 5px;
position: relative;
	 width: 300px;
	 height: 425px;
	 
	 
     background-image: linear-gradient(to bottom, rgba(255, 255, 255), rgba(255, 255, 255, 0.5)), url("https://scontent.fkdt3-1.fna.fbcdn.net/v/t1.15752-9/269980308_477629870444689_4752972281533136065_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_ohc=VI1YO2kgtIEAX_Xsibo&_nc_ht=scontent.fkdt3-1.fna&oh=03_AdRYCjh0aJM2AVD6xMsJjW5WLIYbEm73fNg5QPQNzOux8Q&oe=649D43D1");

	background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover;
	
}
	</style>
</head>
<body>

<body>
<div class="card">
  <div class="back"></div>
  <div class="front">
    <div class="imgset">
         <img width="100%" src="https://scontent.fkdt3-1.fna.fbcdn.net/v/t1.15752-9/269980308_477629870444689_4752972281533136065_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_ohc=VI1YO2kgtIEAX_Xsibo&_nc_ht=scontent.fkdt3-1.fna&oh=03_AdRYCjh0aJM2AVD6xMsJjW5WLIYbEm73fNg5QPQNzOux8Q&oe=649D43D1">
       </div>
  </div>
  <div class="text-container">
    <p id="head">Happy Birthday!</p>
    <h5>@Iloveblue</h5>
    <p>ขอให้มีความสุขมาก ๆ คิดไรก็ขอให้สมหวัง <3 <p>
    <p>Happy birthday. Thank you for always being older than me.</p>
  </div>
</div>

 
</body>
</body>
</html>