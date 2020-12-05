function correct()
{
 var StudentId = document.forms["square"]["StudentId"].Value;
var password = document.forms["square"]["password"].Value;
    
    if (StudentId=="admin" && password=="123")
        {
            alert("Welcome");
            return false;
        
        }
    else
        {
            alert("Incorrect ID or Password!!!");
        }
}