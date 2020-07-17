function addStudent() {
  let secondStudent = document.getElementById('secondStudent');
  if (secondStudent == null) {
      let form = document.getElementById('studentInfo');

      let student2 = document.createElement('div');

      let p = document.createElement('p');

      let fNameLabel = document.createElement('label');
      let fNameInput = document.createElement('input');

      let lNameLabel = document.createElement('label');
      let lNameInput = document.createElement('input');

      let idLabel = document.createElement('label');
      let idInput = document.createElement('input');

      student2.setAttribute("id", "secondStudent");

      p.setAttribute("id", "student_2");
      p.textContent = "Duet partner:";

      fNameLabel.setAttribute("class", "top");
      fNameLabel.setAttribute("for", "first_name_2");
      fNameLabel.textContent = "First Name";
      fNameInput.setAttribute("type", "text");
      fNameInput.setAttribute("name", "first_name_2");
      fNameInput.setAttribute("id", "first_name_2");

      lNameLabel.setAttribute("class", "top");
      lNameLabel.setAttribute("for", "last_name_2");
      lNameLabel.textContent = "Last Name";
      lNameInput.setAttribute("type", "text");
      lNameInput.setAttribute("name", "last_name_2");
      lNameInput.setAttribute("id", "last_name_2");

      idLabel.setAttribute("class", "top");
      idLabel.setAttribute("for", "student_id_2");
      idLabel.textContent = "Student ID";
      idInput.setAttribute("type", "number");
      idInput.setAttribute("name", "student_id_2");
      idInput.setAttribute("id", "student_id_2");

      student2.appendChild(p);
      student2.appendChild(fNameLabel);
      student2.appendChild(fNameInput);
      student2.appendChild(lNameLabel);
      student2.appendChild(lNameInput);
      student2.appendChild(idLabel);
      student2.appendChild(idInput);

      form.appendChild(student2);
  }
}

function removeStudent() {
  let student2 = document.getElementById('secondStudent');
  if (student2 != null) {
      student2.remove();
  }
}

function resetForm() {
  document.getElementById('message').innerHTML = "";
  document.getElementById('performance').focus();
}

function validateInput() {
  let message = document.getElementById('message');
  let performance = document.getElementsByName('performance');
  let first_name = document.getElementById('first_name');
  let last_name = document.getElementById('last_name');
  let student_id = document.getElementById('student_id');
  let first_name_2 = document.getElementById('first_name_2');
  let last_name_2 = document.getElementById('last_name_2');
  let student_id_2 = document.getElementById('student_id_2');
  let skill = document.getElementById('skill_select');
  let location = document.getElementById('location');
  let room = document.getElementById('room');
  let time_slot = document.getElementById('time_select');
  let instrument = document.getElementById('instrument_select');

  if (!performance[0].checked && !performance[1].checked && !performance[2].checked) {
      message.innerHTML = "Fill out all fields";
      event.preventDefault();
      return false;
  } else if (first_name.value == "") {
      message.innerHTML = "Fill out all fields";
      first_name.focus();
      event.preventDefault();
      return false;
  } else if (last_name.value == "") {
      message.innerHTML = "Fill out all fields";
      last_name.focus();
      event.preventDefault();
      return false;
  } else if (student_id.value == "") {
      message.innerHTML = "Fill out all fields";
      student_id.focus();
      event.preventDefault();
      return false;
  } else if (first_name_2 != null && first_name_2 == "") {
      message.innerHTML = "Fill out all fields";
      first_name_2.focus();
      event.preventDefault();
      return false;
  } else if (last_name_2 != null && last_name_2 == "") {
      message.innerHTML = "Fill out all fields";
      last_name_2.focus();
      event.preventDefault();
      return false;
  } else if (student_id_2 != null && student_id_2 == "") {
      message.innerHTML = "Fill out all fields";
      student_id_2.focus();
      event.preventDefault();
      return false;
  } else if (skill.selected) {
      message.innerHTML = "Fill out all fields";
      skill.focus();
      event.preventDefault();
      return false;
  } else if (instrument.selected) {
      message.innerHTML = "Fill out all fields";
      instrument.focus();
      event.preventDefault();
      return false;
  } else if (location == "") {
      message.innerHTML = "Fill out all fields";
      location.focus();
      event.preventDefault();
      return false;
  } else if (room == "") {
      message.innerHTML = "Fill out all fields";
      room.focus();
      event.preventDefault();
      return false;
  } else if (time_slot.selected) {
      message.innerHTML = "Fill out all fields";
      time_slot.focus();
      event.preventDefault();
      return false;
  } else {
      return true;
  }
}

function updateDisplay() {
  if (validateInput()) {
      let pType = document.getElementsByName('performance');
      for (i = 0; i < pType.length; i++) {
          if (pType[i].checked) {
              var performance = pType[i].value;
          }
      }
      let first_name = document.getElementById('first_name').value;
      let last_name = document.getElementById('last_name').value;
      let student_id = document.getElementById('student_id').value;
      let fn_2 = document.getElementById('first_name_2');
      if (fn_2 != null) {
          var first_name_2 = fn_2.value;
          var last_name_2 = document.getElementById('last_name_2').value;
          var student_id_2 = document.getElementById('student_id_2').value;
      }

      let skill = document.getElementById('skill');
      let opt = skill.options[skill.selectedIndex];
      skill = opt.value;

      let instrument = document.getElementById('instrument');
      let opt2 = instrument.options[instrument.selectedIndex];
      instrument = opt2.value;

      let location = document.getElementById('location').value;
      let room = document.getElementById('room').value;

      let time = document.getElementById('time_slot');
      let opt3 = time.options[time.selectedIndex];
      time = opt3.value;

      if (first_name_2 == null) {
          var vars = "performance=" + performance + "&first_name=" + first_name +
              "&last_name=" + last_name + "&student_id=" + student_id + "&skill=" + skill +
              "&instrument=" + instrument + "&location=" + location + "&room=" + room +
              "&time_slot=" + time;
      } else {
          var vars = "performance=" + performance + "&first_name=" + first_name +
              "&last_name=" + last_name + "&student_id=" + student_id + "&first_name_2=" + first_name_2 +
              "&last_name_2=" + last_name_2 + "&student_id_2=" + student_id_2 + "&skill=" + skill +
              "&instrument=" + instrument + "&location=" + location + "&room=" + room +
              "&time_slot=" + time;
      }

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
          console.log(xhttp);
          if (this.readyState == 4 && this.status == 200) {
              let response = this.responseText.split("\n");
              for (let i = 0; i < response.length-1; i++) {
                  let cells = response[i].split(",");
                  var row = document.createElement('tr');
                  var tdName = document.createElement('td');
                  var tdLocation = document.createElement('td');
                  var tdTime = document.createElement('td');
                  var tdPerformance = document.createElement('td');

                  tdName.textContent = cells[0];
                  tdLocation.innerHTML = cells[1];
                  tdTime.textContent = cells[2];
                  tdPerformance.textContent = cells[3];
                  
                  row.appendChild(tdName);
                  row.appendChild(tdLocation);
                  row.appendChild(tdTime);
                  row.appendChild(tdPerformance);

                  document.getElementById('registered').appendChild(row);
              }
          }
      };
      xhttp.open("POST", "assign13.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(vars);
  }
}

function loadDisplay() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
          let response = this.responseText.split("\n");
          for (let i = 0; i < response.length-1; i++) {
              let cells = response[i].split(",");
              var row = document.createElement('tr');
              var tdName = document.createElement('td');
              var tdLocation = document.createElement('td');
              var tdTime = document.createElement('td');
              var tdPerformance = document.createElement('td');

              tdName.textContent = cells[0];
              tdLocation.innerHTML = cells[1];
              tdTime.textContent = cells[2];
              tdPerformance.textContent = cells[3];
              
              row.appendChild(tdName);
              row.appendChild(tdLocation);
              row.appendChild(tdTime);
              row.appendChild(tdPerformance);

              document.getElementById('registered').appendChild(row);
          }
      }
      else if (this.status == 404) {
          exit;
      }
  };
  xhttp.open("POST", "data/students.txt", true);
  xhttp.send();
}