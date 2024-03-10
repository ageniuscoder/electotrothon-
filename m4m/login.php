<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mess for me</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/m4m/about.php">𝓂𝟦𝓂</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/m4m/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/m4m/about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hostel
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/m4m/kailashbh.html">Kailash Boys Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/himadribh.html">Himadri Boys Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/himgiribh.html">Himgiri Boys Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/udaygiribh.html">Udaygiri Boys Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/neelkanthbh.html">NeelKanth Boys Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/dhauladharbh.html">Dhauladhar Boys Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/vidhyachalbh.html">Vidhyachal Boys Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/shivalikbh.html">Shivalik Boys Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/ambikagh.html">Ambika Girls Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/parvatigh.html">Paravti Girls Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/aravaligh.html">Aravali Girls Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/manimaheshgh.html">Manimahesh Girls Hostel</a></li>
              <li><a class="dropdown-item" href="/m4m/satpurafh.html">Satpura Faculty Hostel</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/m4m/support.html">FAQ</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/m4m/Contact.html">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>
  <div class="info-box">
    <div class="item">
      <div class="user-profile">
        <img class="profile-image" src="https://i.pinimg.com/236x/20/c0/0f/20c00f0f135c950096a54b7b465e45cc.jpg"
          alt="User Profile">
        
      </div>
    </div>
  </div>
  
  
  
  <div class="info">
    <div id="calendarContainer">
      <h2 id="currentMonth"></h2>
      <table id="calendar">
          <thead>
              <tr>
                  <th class="day-header">Sun</th>
                  <th class="day-header">Mon</th>
                  <th class="day-header">Tue</th>
                  <th class="day-header">Wed</th>
                  <th class="day-header">Thu</th>
                  <th class="day-header">Fri</th>
                  <th class="day-header">Sat</th>
              </tr>
          </thead>
          <tbody id="calendarBody"></tbody>
      </table>
    </div>
  </div>
  <div class="caloriegraph">
    <div class="item">
      <a href='https://postimages.org/' target='_blank'><img
          src='https://i.postimg.cc/3wCk1KQH/Screenshot-2024-03-10-004453.png' ,border='0'
          alt='Screenshot-2024-03-10-004453' /></a>
    </div>
  </div>
  <div class="bmigraph">
    <div class="item">
      <a href='https://postimages.org/' target='_blank'><img
          src='https://i.postimg.cc/NFHnWG8d/Screenshot-2024-03-10-005451.png' ,border='0'
          alt='Screenshot-2024-03-10-005451' /></a>
    </div>
  </div>
  <style>
 .bmigraph{
      color: blue;
      position: absolute;
      top: 28rem;
      right: 28rem;
      font-size: 1.5rem;
      width: 100px;
      display: flex;
      flex-direction: column;
      border: 3px solid #ccc;
    }
    .caloriegraph {
      color: blue;
      position: absolute;
      top: 28rem;
      right: 64rem;
      font-size: 1.5rem;
      width: 100px;
      display: flex;
      flex-direction: column;
      border: 3px solid #ccc;

    }
    #calendarContainer {
      background-color: #f5f5f5;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(9, 0, 0, 0.1);
      padding: 20px;
      max-width: 500px;
      width: 100%;
    }
    #currentMonth {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
      text-transform: uppercase;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      border-radius: 5px;
    }
    th, td {
      border: none;
      padding: 10px;
      text-align: center;
      transition: background-color 0.3s;
      font-size: 14px;
    }
    th {
      background-color: #f4f0f0;
      font-weight: bold;
      color: #666;
      text-transform: uppercase;
      letter-spacing: 1px;
      padding-top: 15px;
      padding-bottom: 15px;
    }
    td:hover {
      background-color: #66e48e;
      cursor: pointer;
    }
    .weekend {
      color: #999;
    }
    .selected {
      background-color: #66e48e;
      font-weight: bold;
    }

    .pop-up {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 20px;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      display: none;
  }
  
  .pop-up p {
      margin-top: 0;
  }
  
  .pop-up label {
      display: block;
      margin-bottom: 10px;
  }
  
  .pop-up button {
      display: block;
      margin-top: 10px;
  }
  

    .user-profile {
      position: relative;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      overflow: hidden;
    }

    .profile-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }

    .no-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #ddd;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 24px;
      font-weight: bold;
      color: #fff;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .user-profile:hover .no-image {
      opacity: 1;
    }

    .text {
      color: blue;
      text-decoration: underline;
      font-family: Arial, Helvetica, sans-serif;
      position: absolute;
      top: 3.5rem;
      right: 2rem;
      font-size: 2rem;
      font-weight: bold;
      width: 200px;
      display: flex;
      flex-direction: column;
      border: 3px solid #ccc;
      padding: 8px;
      padding-top: 8px;
    }

    .text-primary {
      position: absolute;
      top: 7rem;
      right: 78rem;
      font-size: 2.5rem;
      font-weight: bold;
    }

    .info-box {
      width: 400px;
      display: flex;
      flex-direction: column;
      border: 3px solid #ccc;
      padding: 30px;
      padding-top: 60px;
      /* add this line */
    }

    .item {
      margin-bottom: 2px;
    }

    .info {
      color: blue;
      position: absolute;
      top: 3.5rem;
      right: 20rem;
      font-size: 1.5rem;
      width: 400px;
      display: flex;
      flex-direction: column;
      border: 3px solid #ccc;
      padding: 1px;
      padding-top: 1px;
    }

    body {
      background-image: url(https://images.unsplash.com/photo-1604147706283-d7119b5b822c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGNvbG9yJTIwYmFja2dyb3VuZCUyMGZvciUyMGElMjBwcm9mZXNzaW9uYWwlMjB3ZWJzaXRlJTIwcHJvZmlsZSUyMHBhZ2V8ZW58MHx8MHx8fDA%3D);
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script>
    let selectedDates = new Set();
    let selectedOptions = new Set();

    function renderCalendar() {
        const now = new Date();
        const currentYear = now.getFullYear();
        const currentMonth = now.getMonth();
        const calendarEl = document.getElementById('calendarBody');
        const currentMonthEl = document.getElementById('currentMonth');

        currentMonthEl.textContent = new Intl.DateTimeFormat('en-US', { month :'long', year: 'numeric' }).format(now);

        // Clear the calendar body
        calendarEl.innerHTML = '';

        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();

        let row = document.createElement('tr');
        for (let i = 0; i < firstDayOfMonth ; i++) {
            row.appendChild(document.createElement('td'));
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const cell = document.createElement('td');
            const dateCircle = document.createElement('div');

            dateCircle.classList.add('date-circle');
            dateCircle.textContent = day;
            cell.appendChild(dateCircle);

            if ((firstDayOfMonth + day - 1) % 7 === 0 || (firstDayOfMonth + day - 1) % 7 === 6) {
                cell.classList.add('weekend');
            }

            cell.addEventListener('click', () => {
                const checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.name = 'date';
                checkbox.value = day;
                cell.appendChild(checkbox);

                if (selectedDates.has(day)) {
                    selectedDates.delete(day);
                } else {
                    selectedDates.add(day);
                }
            });

            row.appendChild(cell);

            if ((firstDayOfMonth + day) % 7 === 0 || day === daysInMonth) {
                calendarEl.appendChild(row);
                row = document.createElement('tr');
            }
        }

        const popUp = document.createElement('div');
        popUp.classList.add('pop-up');
        popUp.innerHTML = `
            <p>Select an option:</p>
            <form action="" method="post">
            <label for="option1">
                <input type="checkbox" id="option1" name="options" value="option1" name="bf"> Take Breakfast
            </label>
            <label for="option2">
                <input type="checkbox" id="option2" name="options" value="option2" name="l"> Take Lunch
            </label>
            <label for="option2">
              <input type="checkbox" id="option3" name="options" value="option3" name="d"> Take Dinner
          </label>
          <label for="option2">
            <input type="checkbox" id="option4" name="options" value="option4" name="lbf"> Leave Breakfast
        </label>
        <label for="option2">
          <input type="checkbox" id="option5" name="options" value="option5" name="ll"> Leave Lunch
      </label>
      <label for="option2">
        <input type="checkbox" id="option6" name="options" value="option6" name="ld"> Leave Dinner
    </label>
            <button id="okButton" name="ckbox">OK</button>
            <button id="cancelButton">Cancel</button>
            </form>
        `;
        document.body.appendChild(popUp);

        const okButton = popUp.querySelector('#okButton');
        okButton.addEventListener('click', () => {
            // Perform the desired action based on the selected dates and options
            console.log(`Dates selected: ${Array.from(selectedDates).join(', ')} with options: ${document.querySelectorAll('input[name="options"]:checked').length} checked.`);

            // Check which option is selected
            const optionSelected = document.querySelector('input[name="options"]:checked');

            // Redirect to a new page based on the selected option
            if (optionSelected && optionSelected.value === 'option1') {
                alert("Your Breakfast is booked");
            } else if (optionSelected && optionSelected.value === 'option2') {
              alert("Your Lunch is booked");
            }
            else if(optionSelected && optionSelected.value==='option3') {
            alert("Your Dinner is booked");
            }
            else if(optionSelected && optionSelected.value==='option4') {
              alert("Breakfast left");
              }
              else if(optionSelected && optionSelected.value==='option5') {
                alert("Lunch left");
                }
                else if(optionSelected && optionSelected.value==='option6') {
                  alert("Dinner left");
                  }
            // Hide the pop-up
            popUp.remove();
        });

        const cancelButton = popUp.querySelector('#cancelButton');
        cancelButton.addEventListener('click', () => {
            // Uncheck all date checkboxes and clear the selected dates set
            const dateCheckboxes = document.querySelectorAll('input[name="date"]');
            dateCheckboxes.forEach((checkbox) => {
                checkbox.checked = false;
                if (selectedDates.has(Number(checkbox.value))) {
                    selectedDates.delete(Number(checkbox.value));
                }
            });

            // Hide the pop-up
            popUp.remove();
        });
    }

    document.getElementById('calendarContainer').addEventListener('click', (event) => {
        if (event.target.tagName === 'INPUT' && event.target.type === 'checkbox') {
            // Show pop-up when a date checkbox is checked
            const dateCheckboxes = document.querySelectorAll('input[name="date"]:checked');
            const popUp = document.querySelector('.pop-up');
            if (dateCheckboxes.length > 0) {
                popUp.style.display = 'block';
            } else {
                popUp.style.display = 'none';
            }
        }
    });

    renderCalendar();
</script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


  <?php
    
    error_reporting(0);
    $name=$_POST["name"];
    $rno=$_POST["rno"];
    $hostel=$_POST["hostel"];
    $gender=$_POST["gender"];
    $year=$_POST["year"];
    $age=$_POST["age"];
    $wgt=$_POST["weight"];
    $height=$_POST["height"];
    $cno=$_POST["cno"];
  


    function readSerialNumber()
{
  $file = 'serial_number.txt';
  // Check if file exists
  if (file_exists($file)) {
      // Read serial number from file
      $serialNumber = file_get_contents($file);
      return $serialNumber;
  } else {
      // If file doesn't exist, return 0
      return 1;
  }
}

// Function to save serial number to text file
function saveSerialNumber($serialNumber)
{
  $file = 'serial_number.txt';
  // Save serial number to file
  file_put_contents($file, $serialNumber);
}

// Read current serial number
$currentSerialNumber = readSerialNumber();

// Increment serial number by 1
$newSerialNumber = $currentSerialNumber + 1;

// Save new serial number
saveSerialNumber($newSerialNumber);



    function saveData($data)
{
  $jsonFile = 'data.json';
  // Check if file exists
  if (!file_exists($jsonFile)) {
      // Create an empty JSON file if it doesn't exist
      file_put_contents($jsonFile, json_encode([]));
      
  }

  // Get existing data from JSON file
  $existingData = json_decode(file_get_contents($jsonFile), true);

  // Append new data to existing data
  $existingData[] = $data;

  // Save updated data to JSON file
  file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT));
    
 


}

// Example usage
$data = array(
  'serial_no' => $currentSerialNumber,
  'name' => $name,
  'rollno' => $rno,
  'hostel' => $hostel,
  'gender' => $gender,
  'year' => $year,
  'age' => $age,
  'weight' => $wgt,
  'height' => $height,
  'contactnumber' => $cno
);

saveData($data);

function calculateBMI($weight_kg, $height_m) {
  if ($weight_kg <= 0 || $height_m <= 0) {
      return "Invalid input. Weight and height must be greater than zero.";
  }

  // Calculate BMI
  $bmi = $weight_kg / ($height_m * $height_m);

  return $bmi;
}

// Example usage
$weight_kg = $wgt; // Weight in kilograms
$height_m = $height/100; // Height in meters

$bmi = round(calculateBMI($weight_kg, $height_m),2);
if($bmi>=18.5&&$bmi<=24.9){
  $st="Healthy Weight Range";
}
elseif($bmi>=25.0&&$bmi<=29.9){
  $st="OverWeight range";
}
elseif($bmi<=18.5){
  $st="Underweight Range";
}
else{
  $st="Obese Range";
}


echo'<div class="no-image">
<span class="initials">'.$name.'</span>
</div>
<p class="text">CREDITS:50</p>
<p class="text-primary">Hi,'.$name.'</p>
<div class="info-box">
  <div class="item">
    <h4>Roll No: '.$rno.'</h4>
  </div>
  <div class="item">
    <h4>Hostel: '.$hostel.'</h4>
  </div>
  <div class="item">
    <h4>Age: '.$age.'yrs</h4>
  </div>
  <div class="item">
    <h4>Height: '.$height.'cm</h4>
  </div>
  <div class="item">
    <h4>Weight: '.$wgt.' kg</h4>
  </div>
  <div class="item">
    <h4>Contact: +91 '.$cno.'</h4>

  </div>
  </div>
  <div class="info-box">
    <div class="item">
      <h4>YOUR BMI='.$bmi.' kg/m3</h4>
      <h4>('.$st.')</h4>
    </div>
  </div>
  ';

  if(isset($_POST["ckbox"])){
    $tbf=$_POST["bf"];
    $lbf=$_POST["lbf"];
    
    $l=$_POST["l"];
    $ll=$_POST["ll"];
    $d=$_POST["d"];
    $ld=$_POST["ld"];
    $credit=20;

    if($tbf){
      $credit=$credit+10;

    }
    elseif($lbf){
      $credit=$credit-5;
    }
    elseif($l){
      $credit=$credit+10;
    }
    elseif($ll){
      $credit=$credit-5;
    }
    elseif($d){
      $credit=$credit+10;
    }
    elseif($ld){
      $credit=$credit-5;
    }



    echo"CREDIT:$credit";

  }
  

 
    ?>
</body>

</html>