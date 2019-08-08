//--NAVIGATION--

//Open on element click
function openNav() {
  document.getElementById("Nav").style.width = "100%";
}

//Close on click of closebtn
function closeNav() {
  document.getElementById("Nav").style.width = "0%";
}

//--RADIO--
function showBusiness() {
  var radio = document.getElementById("Commercial");
  var businessName = document.getElementById("businessname");

  if (radio.checked == true){
    businessName.style.display = "inline";
  } else {
    businessName.style.display = "none";
  }
}

// //--STATE-- FAILED
// function showState() {
//   // var this = document.getElementById("country");
//   var australia = document.getElementById("australia");
//   var state = document.getElementById("state");
//
//   if (this.options[this.selectedIndex] == australia){
//     state.style.display = "block";
//   } else {
//     state.style.display = "none";
//   }
// }


// //--STATE--METHOD 1 STACKOVERFLOW--
// function showState(el) {
//   var theValue = $(el).val();
//   var state = document.getElementById("state");
//
//   if(theValue === 'australia') {
//     state.style.display = "block";
//   } else {
//     state.style.display = "none";
//   }
// }

//--STATE--METHOD 2 STACKOVERFLOW--
function showState() {
  if ($("#country option:selected").val() === "australia") {
    $("#state").show()
  }
  else {
    $("#state").hide()
  }
}
$("#country").change(showState)
