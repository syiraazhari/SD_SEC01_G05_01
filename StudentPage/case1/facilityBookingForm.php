<!DOCTYPE html>
<html>
<head>
    <title>Facility Booking System</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3docs {
            margin-left: 70px;
            font-weight: bold;
            text-align: left;
            font-family: sans-serif, bold, Arial, Helvetica;
            font-size: 14px;
        }
        .button {
		  background-color: #2F4F4F; /* Green */
		  border: none;
		  color: white;
		  padding: 10px 110px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  transition-duration: 0.4s;
		  cursor: pointer;
		}

		.button3 {
		  background-color: #2F4F4F; 
		  color: white; 
		  border: 2px solid #2F4F4F;
		}

		.button3:hover {
		  background-color: #A9DFBF;
		  color: black;
		  border: 2px solid #A9DFBF;
		}
		
        div input {
            margin-right: 10px;
        }
        form {
            margin: 0 auto;
            width: 600px;
        }
        form input {
            padding: 10px;
        }
        form select {
            background-color: #ffffff;
            padding: 5px;
        }
        form label {
            display: block;
            width: 100%;
            margin-bottom: 5px;
        }
    </style>
    <script>
        function ValidationForm() {
            var facilityId = document.forms["facilityBookingForm"]["facilityId"];
            var name = document.forms["facilityBookingForm"]["name"];
            var category = document.forms["facilityBookingForm"]["category"];
            var capacity = document.forms["facilityBookingForm"]["capacity"];
            var facilityDetail = document.forms["facilityBookingForm"]["facilityDetail"];
            var ratePerDay = document.forms["facilityBookingForm"]["ratePerDay"];
            var status = document.forms["facilityBookingForm"]["status"];

            if(facilityId.value == "") {
                alert("Please enter facility id.");
                facilityId.focus();
                return false;
            }
            if(name.value == "") {
                alert("Please enter a name.");
                name.focus();
                return false;
            }

            if(category.value == "") {
                alert("Please enter the category.");
                category.focus();
                return false;
            }
            if(capacity.value == "") {
                alert("Please enter the capacity");
                capacity.focus();
                return false;
            }
            if(facilityDetail.value == "") {
                alert("Please enter the facility details");
                facilityDetail.focus();
                return false;
            }
            if(ratePerDay.value == "") {
                alert("Please enter the rate per day");
                ratePerDay.focus();
                return false;
            }
            if(status.value == "") {
                alert("Please enter the status");
                status.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<?php
    include "..\menu\menuStaff.php";
?>
<br><h2 style="text-align: center"> Facility Booking Form </h2>
<form class="w3-container" name="facilityBookingForm" action="processFBS.php" onsubmit="return ValidationForm()" method="post" class="w3docs">
    <b><div>
        <label for="facilityId">Facility Id:</label>
        <input class="w3-input" type="text" id="facilityId" size="30" name="facilityId" required>
    </div>
    <div>
        <br><label for="name">Name:</label>
        <input class="w3-input" type="text" id="name" size="30" name="name">
    </div>
    <div>
        <br><label>Select Category</label>
        <select class="w3-select" type="text" value="" name="category">
            <option></option>
            <option>Basketball Court</option>
            <option>Computer Lab</option>
            <option>Field</option>
            <option>Futsal Court</option>
            <option>Lecture Hall</option>
            <option>Meeting Room</option>
            <option>Multipurpose Hall</option>
            <option>Science Lab</option>
            <option>Seminar Room</option>
            <option>Swimming Pool</option>
        </select>
    </div>

    <div>
        <br><label for="capacity">Capacity:</label>
        <input class="w3-input" type="number" id="capacity" size="4" name="capacity">
    </div>
    <div>
        <br><label for="facilityDetail">Facility Detail:</label>
        <input class="w3-input" type="text" id="facilityDetail" name="facilityDetail">
    </div>
    <div>
        <br><label for="ratePerDay">Price per day:</label>
        <input class="w3-input" type="number" id="ratePerDay" step="0.01" name="ratePerDay">
    </div>
    <div>
        <br><label>Status:</label>
        <select class="w3-select" type="text" value="" name="status">
            <option></option>
            <option>Available</option>
            <option>Not Available</option>
            <option>Under Maintenance</option>
        </select>
    </b></div>
    <br>
    <div style="text-align: center">
        <input class="button button3" type="submit" value="Confirm" name="addFacilityButton">
        <input class="button button3" type="reset" value="Reset" name="Reset">
    </div>
</form>

</body>
</html>