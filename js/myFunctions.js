function checkPossibility(){
				var possibilityValue = "";
				var possibilityValue = document.forms["create_goal"]["goal_name"].value;
				if(possibilityValue == "Very challenging"){
					alert("Very challenging!!");
				}else if(possibilityValue == "Challenging"){
					alert("Challenging!!");
				}
				
			}else{
				alert("All good!");
			}
		
			
			function checkGoalName(){
				var goalNameValue = document.getElementById("goal_name").value;
				if(goalNameValue == "magic"){
					alert("Magic!!");
				}else if(possibilityValue == "stupid"){
					alert("Stupid!!");
				}
				
			}else{
				alert("All good!");
			}