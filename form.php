<title>Book Your Ticket!</title>
<link href="style.css" rel="stylesheet">
<section class="contact" id="contact">
    
    <div class="wrapper1">
        <div class="title1">
          <h1>Ticket Booking Form</h1>
        </div>
        <div class="contact-form">
            <form method = "post" action = "formsql.php">
          <div class="input-fields">
            
            <input type="text" class="input" placeholder="Name" name="name">
            <input type="email" id="em" class="input" placeholder="Email Address" name="email" pattern=".+@gmail\.com">
            <input type="number" class="input" placeholder="Phone" name="phone">
            <input type="text" class="input" placeholder="Enter journey start date" name="startingdate">
            <br><br><br>
            
            Choose the package you want<br><br>
            <select name="pkgs">
    <option value="manali">Manali</option>
    <option value="goa">Goa</option>
    <option value="jaipur">Jaipur</option>
    <option value="kerela">Kerela</option>
    <option value="darjeeling">Darjeeling</option>
  </select><br>
            Choose the traveling class <br><br>
            <select name="tclass">
    <option value="general">General</option>
    <option value="sleeper">Sleeper (SL)</option>
  </select><br>
            Select your gender<br><br>
            <select name="gendr">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select><br><br>

        </div>
          <div class="msg">
                <button onclick="ValidateEmail()" name='send'>Send </button>
        </div>
            </form>
          </div>
        </div>
        </div> 
    </section>
    <body>
    <script src="script.js"></script>
    </body>