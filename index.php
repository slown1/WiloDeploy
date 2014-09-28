<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
    <div class="presentationContainer">
        <div class="imageContainer">
            <img src="images/prezentare.png" alt="prezentare" width="270" />
        </div>
        <div class="textContainer">
            <h2>Prezentare firma</h2>
            <p>
                Infiintata in 1992, firma s-a impus pe piata prin seriozitate, competenta, adaptabilitate la solicitari, 
                beneficiind de experienta unui colectiv de specialisti in instalatii capabili sa faca fata oricarei solicitari.
            </p>
            <p>
                sc BINOM srl, distribuitor produse WILO, EMU si Reflex, a comercializat si oferit service la aceste echipamente inca inainte de a se infiinta WILO Romania, 
                facand import direct de la WILO Germania.
            </p>
        </div>
      </div>
    <hr />
    <div class="presentationContainer">
        <div class="imageContainer">
            <img src="images/consultanta.png" alt="prezentare" width="270" style="margin-top: -64px;" />
        </div>
        <div class="textContainer">
            <h2>Consultanta</h2>
            <p>
                Firma noastra asigura consultanta specializata in alegerea pompelor atat beneficiarilor cat si birourilor de proiectare instalatii si asiguram asistenta tehnica gratuita la 
                montarea echipamentelor de pompare produse de firma germana WILO
            </p>
            <p>
                Alegerea corecta a unei pompe inseamna o functionare corecta si o durata mai lunga de viata.
            </p>
        </div>
    </div>
    <hr />
    <div class="presentationContainer">
        <div class="imageContainer">
            <img src="images/service.png" alt="prezentare" width="270" />
        </div>
        <div class="textContainer">
            <h2>Departament service</h2>
            <p>
                Departamentul de service va sta la dispozitie pentru interventiile in garantie si post-garantie, precum si la punerile in functiune. 
            </p>
            <p>
                In urma unei solicitari ne luam angajamentul ca in maxim 48 de ore lucratoare sa intervenim sa sa va oferim o solutie optima de solutionare a problemei aparute.
            </p>
        </div>
    </div>
<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Wilo";
  //Apply the template
  include("masterPages/masterHeader.php");
  $pagefootercontent = ob_get_contents();
  ob_end_clean();
  //Apply the template
  include("masterpages/masterFooter.php");
?>