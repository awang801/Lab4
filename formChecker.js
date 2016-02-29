function reset()
{
  document.getElementById('q1').value = 0;
  document.getElementById('q2').value = 0;
  document.getElementById('q3').value = 0;
  return false;
}

function shippingChecker()
{
  var ship = document.store.shipping;
  for(var i=0; i<ship.length; i++)
  {
    if(ship[i].checked == true)
    {
      return true;
    }
  }
  return false;
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validate()
{
  var q1 = document.getElementById('q1').value;
  var q2 = document.getElementById('q2').value;
  var q3 = document.getElementById('q3').value;
  if(q1 < 0 || q2 < 0 || q3 < 0)
  {
    alert('quantities cannot be less than 0');
    return false;
  }
  else if(q1 + q2 + q3 == 0)
  {
    alert('Please enter a purchase');
    return false;
  }
  else if(!shippingChecker())
  {
    alert('please select a shipping option');
    return false;
  }

  else if(!validateEmail(document.getElementById('userField').value))
  {
    alert('please enter a valid email');
    return false;
  }
  else if(document.getElementById('passField').value == "")
  {
    alert('please enter a password');
    return false;
  }

  return true;
} 
