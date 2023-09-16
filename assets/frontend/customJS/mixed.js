if ($('#fname').length) {
  document.getElementById("fname").value = getSavedValue("fname");
  document.getElementById("lname").value = getSavedValue("lname");
  document.getElementById("email").value = getSavedValue("email");
  document.getElementById("phonenumber").value = getSavedValue("phonenumber");
  document.getElementById("city").value = getSavedValue("city");
  document.getElementById("address").value = getSavedValue("address");
  document.getElementById("referalcode").value = getSavedValue("referalcode");
}
// if($('#shipping').length){
//   if (getSavedValue("shipping") != '') {
//   $('#shipping').html('₹'+getSavedValue("shipping"));
//   $('#subtotal').html('₹'+getSavedValue("subtotal"));
//   $('#pincode').val(getSavedValue("pincode"))
//   $('#courier_id').val(getSavedValue("courier_id"))
//   $('#zip').val(getSavedValue("pincode"))
// }
// }

// Store references that all functions can use.
var resultEl = document.querySelector(".resultSet"),
  plusMinusWidgets = document.querySelectorAll(".v-counter");

// Attach the handlers to each plus-minus thing
for (var i = 0; i < plusMinusWidgets.length; i++) {
  plusMinusWidgets[i].querySelector(".minusBtn").addEventListener("click", clickHandler);
  plusMinusWidgets[i].querySelector(".plusBtn").addEventListener("click", clickHandler);
  // plusMinusWidgets[i].querySelector(".count").addEventListener("change", changeHandler);
}

/*****
 * both plus and minus use the same function, but value is set by the class of the
 *  button
 *****/
function clickHandler(event) {
  // reference to the count input field
  var countEl = event.target.parentNode.querySelector(".count");
  if (event.target.className.match(/\bminusBtn\b/)) {
    if (Number(countEl.value) == 1) {
      return;
    }
    countEl.value = Number(countEl.value) - 1;
    var change = $(this).attr('change')
    if (change == 0) {
      $('#addtoCartButton').attr('quantity', Number(countEl.value))
    } else {
      $('#quantity' + change).attr("value", Number(countEl.value))
      updateCart(change)
    }
  } else if (event.target.className.match(/\bplusBtn\b/)) {
    countEl.value = Number(countEl.value) + 1;
    var change = $(this).attr('change')
    if (change == 0) {
      $('#addtoCartButton').attr('quantity', Number(countEl.value))
    } else {
      $('#quantity' + change).attr("value", Number(countEl.value))
      updateCart(change)
    }

  }
  // When we programmatically change the value, we need to manually trigger
  //  the change event.
  triggerEvent(countEl, "change");
};

/*****
 * changeHandler() processes whenever a plusMinusWidget's count el is changed.
 *  It iterates over all plusMinusWidgets, gets their count, and outputs that
 *  to the given resultEl input field.
 *****/
// function changeHandler(event) {
//   // remove all value from the result el.
//   resultEl.value = 0;
//   /******
//    * Here is the only functional change, per your comment. Rather
//    *  concatenating a string, you want to sum values of the 
//    *  plusMinusWidget. To do this, we need to cast the value of each
//    *  plusMinusWidget to a Number value, and add that to the Number
//    *  value of the resultEl.
//    *****/
//   for (var i = 0; i < plusMinusWidgets.length; i++) {
//     // Add the current plusMinusWidget value to the resultEl value.
//     resultEl.value = Number(resultEl.value) + Number(plusMinusWidgets[i].querySelector('.count').value);

//   }

// };

/*****
 * triggerEvent() -- function to trigger an HTMLEvent on a given element.
 *  similar to jquery's trigger(), simply a convenience function. Not the
 *  point of this exercise.
 *****/

function triggerEvent(el, type) {
  if ('createEvent' in document) {
    // modern browsers, IE9+
    var e = document.createEvent('HTMLEvents');
    e.initEvent(type, false, true);
    el.dispatchEvent(e);
  } else {
    // IE 8
    var e = document.createEventObject();
    e.eventType = type;
    el.fireEvent('on' + e.eventType, e);
  }
}

function getSavedValue(v) {
  if (!localStorage.getItem(v)) {
    return ""; // You can change this to your defualt value.
  }
  return localStorage.getItem(v);
}

function saveValue(e) {
  var id = e.id; // get the sender's id to save it .
  var val = e.value; // get the value.
  localStorage.setItem(id, val); // Every time user writing something, the localStorage's value will override .
  document.getElementById("fname").value = getSavedValue("fname");
  document.getElementById("lname").value = getSavedValue("lname");
  document.getElementById("email").value = getSavedValue("email");
  document.getElementById("phonenumber").value = getSavedValue("phonenumber");
  document.getElementById("city").value = getSavedValue("city");
  document.getElementById("address").value = getSavedValue("address");
}
//==================================================== CHANGE SIZE BY COLOR ===============================================
function SetSize(obj) {
  var color_id = $(obj).attr("color_id");
  var product_id = $(obj).attr("product_id");
  $.ajax({
    url: base_url + 'Home/GetSize',
    method: 'post',
    data: {
      color_id: color_id,
      product_id: product_id,
    },
    dataType: 'json',
    success: function (response) {
      var opton = '';
      if (response.status == true) {
        $('#size_div').html("");
        var data = response.data;
        $.each(data, function (i) {
          if (data[i]['stock'] == 0) {
            opton += '<a href="' + base_url + 'Home/product_detail/' + data[i]['product_url'] + '?type=' + btoa(data[i]['type_id']) + '" ><span class="spananim mr-1">' + data[i]['size_name'] + '</span></a>';
          } else {
            opton += '<a href="' + base_url + 'Home/product_detail/' + data[i]['product_url'] + '?type=' + btoa(data[i]['type_id']) + '" ><span class="mr-1">' + data[i]['size_name'] + '</span></a>';
          }
        });
        console.log(opton)
        $('#size_div').html(opton);


      } else if (response.status == false) {
        notifyError(response.message)

      }
    }
  });
}
