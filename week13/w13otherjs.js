function checkPerformanceType(options) {
    var performanceStuff = document.getElementsByClassName("duet");
    if (options.selectedIndex === 1) 
        for (var i = 0; i < performanceStuff.length; i++)
            performanceStuff[i].setAttribute("style", "display: inline");
    else 
        for (var i = 0; i < performanceStuff.length; i++)
            performanceStuff[i].setAttribute("style", "display: none");
}

function update(firstTime) {

    var errorFree = true;
    var myForm = document.getElementById("myForm");
    var type = document.getElementById("performance");
    var duets = document.getElementsByClassName("duet-input");
    if (type.selectedIndex === 1) {
        for (var i = 0; i < duets.length; i++) {
              duets[i].required = true;
        } 
    }
    
    if (firstTime || myForm.reportValidity()) {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var result = JSON.parse(this.responseText);
            var data = "";
            for (person of result) {
                data += "<div class='registrars'>";
                data += "<p><strong>Name:</strong> " + person.firstName + " " + person.lastName + "</p>";
                data += "<p><strong>Student ID:</strong> " + person.id + "</p>";
                if (person.type == 'DUET') {
                  data += "<p><strong>Partner's Name:</strong> " + person.fName_2 + " " + person.lName_2 + 
                  "</p><p><strong>Partner's ID: </strong>" + person.id_2 + "</p>";
                }
                data += "<p><strong>Skill Level:</strong> " + person.skill + "</p>";
                data += "<p><strong>Performance Type:</strong> " + person.type + "</p><p><strong>Instrument(s): </strong>";
                var index = 0;
                for (instrument of person.instrument) {
                    data += (index == 0 ? instrument : ", " + instrument);
                    index++;
                }
                data += "</p><p><strong>Building:</strong> " + person.location + "    " + person.room + "</p>";
                data += "<p><strong>Time:</strong> " + person.time + "</p></div>";
            }
            document.getElementById("current-students").innerHTML = data;
        }
    };

    if (firstTime){ 
      xhr.open("POST", "assign13_load.php"); 
      xhr.send();
    } else { 
      xhr.open("POST", "assign13.php"); 
      xhr.send(new FormData(myForm)); 
    }

   
    if (!firstTime) {
      launch_toast();
      myForm.reset();
    }
    
    var duets = document.getElementsByClassName("duet-input");
    for (var i = 0; i < duets.length; i++) {
              duets[i].required = false;
    } 
    
    var duet = document.getElementsByClassName("duet");
    for (var i = 0; i < duet.length; i++)
        duet[i].style.display = "none"; 
   } 
}

function launch_toast() {
    var x = document.getElementById("toast")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}
