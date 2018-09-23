  <!DOCTYPE html>
   <html>
    <head>
	   <meta charset="utf-8">
	   <title>Care BnB</title>
      <style>
        
        body {
          margin: 0;
          padding: 0;
        }
       
        #navBar {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
          font-family: Lato, Arial, sans-serif;
          height: 15vh;
        }

        .navBarItems {
          float: left;
        }
        
        .navBarItems.navBarPage {
          float: right;
        }
        
        .navBarItems .navBarLink {
          display: block;
          color: white;
          text-align: center;
          vertical-align: middle;
          padding: 14px 16px;
          text-decoration: none;
          height: 15vh
        }

        .navBarItems .navBarLink:hover:not(.navBarLinkActive) {
          background-color: #111;
        }

        .navBarLinkActive {
          background-color: #4CAF50;
        }
        
        #navBarTitle {
          background-color: rgba(0,0,0,0);
          font-size: 7vh;
        }
      </style>
    </head>
    <body>
      <ul id="navBar">
        <li class="navBarItems"><a href="#home" class="navBarLink" id="navBarTitle">Care BnB</a></li>
        <li class="navBarItems navBarPage"><a href="#home" class="navBarLink navBarLinkActive">Home</a></li>
        <li class="navBarItems navBarPage"><a href="#news" class="navBarLink">Listings</a></li>
        <li class="navBarItems navBarPage"><a href="#contact" class="navBarLink">Register to </a></li>
        <li class="navBarItems navBarPage"><a href="#about" class="navBarLink">About</a></li>
    </ul>
      
      
