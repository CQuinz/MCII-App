
	function runPossibility(){
		
		var possibilityValue = document.getElementById("goal_possibility").value;
		var possibilityMessage ="";
		
		function checkPossibility(){
			if(possibilityValue=="stronglyDisbelieve" || possibilityValue=="dontBelieve"){
//				
				possibilityMessage ="<p><strong>Uh oh!!</strong> If you believe you have very little chance of achieving this goal then you may be setting yourself up for failure! Consider possibly re-evaluating the goal and how you can set a goal you DO believe you can achieve.<p>";
				
				document.getElementById("possibilityMessage").innerHTML=possibilityMessage;
				
			}else{
				document.getElementById("possibilityMessage").innerHTML="";
			}
			

		
		function toggleDifficultyOptions(){
				
			
				if(possibilityValue=="stronglyDisbelieve"){

					document.getElementById("easy").hidden=true;
					document.getElementById("tooEasy").hidden=true;;
					
				}else if(possibilityValue=="dontBelieve"){

					document.getElementById("easy").hidden=true;
					document.getElementById("tooEasy").hidden=true;
					
				}else{
					document.getElementById("easy").hidden=false;
					document.getElementById("tooEasy").hidden=false;
				}
			}/*END OF toggleDifficultyOptions()*/
		
		checkPossibility();
		toggleDifficultyOptions();
	}




//	  		function toggleDifficultyOptions(){
//				var possibilityValue = document.getElementById("goal_possibility").value;
//			
//				if(possibilityValue=="stronglyDisbelieve"){
//
//					document.getElementById("easy").hidden=true;
//					document.getElementById("tooEasy").hidden=true;;
//					
//				}else if(possibilityValue=="dontBelieve"){
//
//					document.getElementById("easy").hidden=true;
//					document.getElementById("tooEasy").hidden=true;
//					
//				}else{
//					document.getElementById("easy").hidden=false;
//					document.getElementById("tooEasy").hidden=false;
//				}
//			}/*END OF toggleDifficultyOptions()*/
//	  

	  
			function checkDifficulty(){
				
				var showAlertDifficulty =false;
				var difficultyMessage ="";
				var difficultyValue = document.getElementById("goal_difficulty").value;
				var possibilityValue = document.getElementById("goal_possibility").value;
				
				if(possibilityValue =="stronglyBelieve" && difficultyValue == "tooEasy" 
				   || possibilityValue =="believe" && difficultyValue == "tooEasy"
				   || possibilityValue =="stronglyBelieve" && difficultyValue == "easy" 
				   || possibilityValue =="believe" && difficultyValue == "easy"){
					
					difficultyMessage ="<p><strong>Uh oh!!</strong> This is a recipe for disaster! Believing you can succeed and that it will be<strong><i> Easy </i></strong> makes you put in less effort and significantly effects your chances of success. Recommend you reconsider the <strong><i>Difficulty </i></strong>of this goal.<p>";
					
				}else if(possibilityValue =="stronglyBelieve" && difficultyValue == "challenging" 
						 || possibilityValue =="believe" && difficultyValue == "challenging" 
						 || possibilityValue =="stronglyBelieve" && difficultyValue == "veryChallenging" 
						 || possibilityValue =="believe" && difficultyValue == "veryChallenging"){
					
						difficultyMessage ="<p><strong>Brilliant!!</strong> This is the sweet spot!! Believing you can succeed and that it will be<strong><i> Challenging. </i></strong> Studies show this mindset is the best when it comes to goal pursuit.<p>"; 
				}
				
				else{
					switch(difficultyValue){
						case "veryChallenging":
						difficultyMessage = "<p><strong>Great!!</strong> This goal will push you. As it is <strong><i>Very Challenging </i></strong>do consider possibly breaking it down into smaller sub-goals.<p>";
						break;

						case "challenging":
						difficultyMessage = "<p><strong>Excellent!!</strong> A goal that is <strong><i>Challenging</i></strong> can more effectively mobilize your inner resources.<p>";
						break;

						case "moderate":
						difficultyMessage = "<p><strong>Good!</strong> There is nothing wrong with having a goal with a <strong><i>Moderate</i></strong> level of difficulty<p>";
						break;

						default:
						difficultyMessage ="";
					}
				
				}

				if(showAlertDifficulty =true){
						document.getElementById("difficultyMessage").style.display="inline";
						document.getElementById("difficultyMessage").innerHTML=difficultyMessage;
				}

				
			}/*END OF checkDifficulty()*/
				
	
	  
	  		function toggleDateVisibility(){
				var goalType =document.getElementById("goal_type").value;
				 
				if(goalType=="ongoing"){
			   document.getElementById("dateCard").style.display="none";
					
				}else{
					document.getElementById("dateCard").style.display="block";
				}
			}
	 