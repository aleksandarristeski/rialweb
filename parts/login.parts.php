<?php
if (auth_user()) {
  redirect('index.php');
}
?>
  <div id="content">
    <div id="login" class="row">
      <form action="<?= 'auth/login.php' ?>" method="post" id="loginform">
        <span class="inred">Anmeldung</span>
        <h2>Anmeldeformular</h2>
        <div class="meil">
            <label for="email">E-Mail</label>
            <input type="text" name="email" id="email" title="Email ist ein Plichtfeld">
        </div>

        <div class="pass">
            <label for="password_login">Passwort</label>
            <input type="password" name="password_login" id="password_login" title="Password ist ein Plichtfeld">
        </div>

        <button type="submit" class="logbtn">Anmelden</button>
      </form>
      <?= error_for('email', $errors) ?>
      <?= error_for('password_login', $errors) ?>
    </div><!--end login-->

    <div id="registrieren" class="row">
      <form method="post" id="registerform">
        <span class="inred">Registrieren</span>
        <h2>Registrierungsformular</h2>
        <p class="col-12">Anrede</p>
        <div id="rad"  class=" rad anrede col-12">
        
            <label><input type="radio" id="herr" name="anrede" value="herr" />Herr</label>
            
            <label><input type="radio" id="frau" name="anrede" value="frau" />Frau</label>
            
            <label><input type="radio" id="keine" name="anrede" value="keine" />Keine Aufgabe</label>
        
        </div>
        <div class="name">
            <label for="name_reg">Name</label>
            <input type="text" name="name" id="name_reg">
        </div>
        <div class="vorname">
            <label for="vorname_reg">Vorame</label>
            <input type="text" name="vorname" id="vorname_reg">
        </div>
        <div class="meil">
            <label for="email">E-Mail</label>
            <input type="text" name="email" id="email_reg">
        </div>
        <div id="sel_farbe">
        <label for="farbe">Lieblingsfarbe</label>
          <select name="farbe" id="farbe">
            <option value="">-farbe wählen-</option>
            <option value="schwarz">Schwarz</option>
            <option value="grau">Grau</option>
            <option value="silber">Silber</option>
            <option value="weiss">Weiß</option>
            <option value="gelb">Gelb</option>
            <option value="braun">Braun</option>
            <option value="blau">Blau</option>
            <option value="gruen">Grün</option>
          </select>
        </div>

        <p class="col-12">Ich will lernen</p>
        <div class="lern">
          <div class="check">
            <input type="checkbox" id="tema1" name="tema1" value="htmlcss">
            <label for="tema1"> HTML/CSS</label>
          </div>
          <div class="check">
            <input type="checkbox" id="tema2" name="tema2" value="js">
            <label for="tema2"> JavaScript</label>
          </div>
          <div class="check">
            <input type="checkbox" id="tema3" name="tema3" value="php">
            <label for="tema3"> PHP</label>
          </div>
          <div class="check">
            <input type="checkbox" id="tema4" name="tema4" value="sql">
            <label for="tema4"> SQL</label>
          </div>
          <div class="check">
            <input type="checkbox" id="tema5" name="tema5" value="typo">
            <label for="tema5"> TYPO3</label>
          </div>
          <div class="check">
            <input type="checkbox" id="tema6" name="tema6" value="wordpress">
            <label for="tema6"> Wordpress</label>
          </div>
        </div>

        <div class="pass">
            <label for="password">Passwort</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="repass">
            <label for="repassword">Passwort widerholen</label>
            <input type="password" name="repassword" id="repassword">
        </div>

        <div class="col-12">
            <input type="checkbox" id="akzept" name="akzept" value="akzept">
            <label for="akzept"> Ich habe die Datenschutzerklärung zur Kenntnis genommen und bin damit einverstanden.</label>
        </div>
        
        <div class="registerbtn">
          <button type="submit" class="regbtn col-5">Registrieren</button>
          <button type="reset" class="resbtn col-5">Reset</button>
        </div>
      </form>
    </div><!--end registrieren-->

  </div><!--end content-->
  




    
