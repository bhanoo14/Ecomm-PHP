function signin(){
  var email = $('#email').val();
  var password = $("#password").val();

  $.ajax({
    url: "./controllers/signin_ajax.php", 
    method: 'post',
    data:{'email':email,'password':password},
    success: function(result){
      // alert(result)
      var res = JSON.parse(result);
      if(res.success == 200) {
        alert("User LoggedIn Successfully");
        // $('#emailErr').text(""); 
      } else if(res.success == 404){
        $('#emailErr').text(res.message); 
      }else{
        $('#passwordErr').text(res.message)
      }
    }
  });
}

// User Registrations
function userRegister(){

  var email = $('#email').val();
  var password = $("#password").val();
  var name = $("#name").val();
  var phone = $("#phone").val();
  var address = $("#address").val(); 
  
  if($.trim(name) && $.trim(email) && $.trim(password) && $.trim(phone) && $.trim(address)){
    $.ajax({
      url: "./controllers/register_ajax.php", 
      method: 'post',
      data: {
        'email': email,
        'password': password,
        'name': name,
        'phone': phone,
        'address': address
      },
      success: function(result){
          try {
            var res = result;
            if(res.success == 201) {
              alert("User Registered Successfully"); 
            } else if(res.success == 409){
              $('#emailErr').text(res.message); 
              alert("Email Already Exist");
  
            } else if(res.success == 500){
  
             alert("Data base Connection failed");
            }else if(res.success == 400){
             
              alert("Invalid Request Method");
            }else if(res.success == 409){
             
              alert("Email Already Exist");
            }else{
              alert("Something went wrong");
            }
          } catch (e) {
            console.error("Invalid JSON response:", result);
            alert("Unexpected error occurred. Please try again later.");
          }
      },
    });
  } else {
    alert('All fields are required');
  }
}

function productListing(){
  const name = $('#name').val();
  const price = $('#price').val();
  const description = $('#description').val();
  const category = $('#category').val();
  const productImage = $('#image').val();


  var urlParams = new URLSearchParams(window.location.search);
  const createdBy = parseInt(urlParams.id)
  const userId = urlParams.get('id');


  if($.trim(name) && parseInt($.trim(price)) && $.trim(description) && $.trim(category)){
      $.ajax({
        url: "./controllers/productListing_ajax.php", 
        method: 'post',
        data: {
          'price': price,
          'description': description,
          'name': name,
          'category':category,
          'createdBy':createdBy

        },
        succes: function(){

        }
      })
    }
}

