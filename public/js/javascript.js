$(document).ready(function() {
    function validation()
    {
        var a = document.form.name.value;
        if(a=="")
        {
            alert("Bitte geben Sie einen Namen ein.");
            document.form.name.focus();
            return false;
        }
        if(!isNaN(a))
        {
            alert("Bitte geben Sie keine Sonderzeichen ein.");
            document.form.name.select();
            return false;
        }
        if ((a.length < 5) || (a.length > 50))
        {
            alert("Your Character must be 5 to 15 Character");
            document.form.name.select();
            return false;
        }
    }
});

/*public function test_input($email)
{
    var a = document.form.name.value;
    if(a=="")
    {
        alert("Bitte geben Sie einen Namen ein.");
        document.form.name.focus();
        return false;
    }
    if(!isNaN(a))
    {
        alert("Bitte geben Sie keine Sonderzeichen ein.");
        document.form.name.select();
        return false;
    }
    if ((a.length < 5) || (a.length > 50))
    {
        alert("Your Character must be 5 to 15 Character");
        document.form.name.select();
        return false;
    }
}*/